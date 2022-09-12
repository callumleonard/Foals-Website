<?php
if (isset($_POST["action"]) && $_POST["action"] == "update") {
  //linking to db handler 
  //linking to the erorr handler (form validation) 
  require_once "dbh.inc.php";
  require_once 'functions.inc.php';

  //sanitizing user input to prevent XSS
  $usersId = sanitizeInput($_POST["usersId"]);
  $firstname = sanitizeInput($_POST["firstname"]);
  $lastname = sanitizeInput($_POST["lastname"]);
  $email = sanitizeInput($_POST["email"]);
  $username = sanitizeInput($_POST["uid"]);
 
  //function to validate email
  function validatedashEmail($email) {
    $result;
    //inbuilt FILTER_VALIDATE_EMAIL, it validates the email against RFC 822 with a few exceptions
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $result = true;
    }
    else {
      $result = false;
    }
    return $result;
  }

  //
  function uiddashExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
  
    //prepared statements to prevent possibility of SQL injection
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
       echo "Statement failed";
      exit();
    }
  
    //attaching/binding the prepared statement as a parameter 
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
  
    //getting the result from the prepared stmt, storing the content in resultData
    $returnedData = mysqli_stmt_get_result($stmt);
  
    //associative array recordset/row search
    if ($rs = mysqli_fetch_assoc($returnedData)) {
      return $rs;
    }
    else {
      $result = false;
      return $result;
    }
  
    mysqli_stmt_close($stmt);
  }

  //function to validate firstname register input
function firstvValidate($firstname){
	$result;
	//built in function, returns true if non char is detected
	if(ctype_alpha($firstname)){
		$result = true;
	}else{ 
		$result = false;
	}
	return $result;
}

//function to validate lastname register input
function lastvValidate($lastname){
	$result;
	//built in function, returns true if non char is detected
	if(ctype_alpha($lastname)){
		$result = true;
	}else{ 
		$result = false;
	}
	return $result;
}

  //echo "<pre>"; print_r(ctype_alnum($username)); echo "</pre>"; die(__FILE__ ." on this line ". __LINE__);
  //validation to ensure that updating user information can't cause any DB issues. (uid conflict, email conflict etc.)
  $_SESSION['error'] = [];
  if (!ctype_alnum($username)){
    $_SESSION['error']['invalidusername'] = "Only letters and numbers permitted in username.";
  }
  if (checkEmpty($firstname)){
    $_SESSION['error']['first_name'] = "No first name provided.";
  }
  if (firstvValidate($firstname) !==true) {
    $_SESSION['error']['first_name'] = "Only letters allowed in firstname.";
  }
  if (lastvValidate($lastname) !==true) {
    $_SESSION['error']['last_name'] = "Only letters allowed in lastname.";
  }
  if (checkEmpty($lastname)){
    $_SESSION['error']['last_name'] = "No last name provided.";
  }
  if (validatedashEmail($email) !== false){
    $_SESSION['error']['email'] = "Invalid email.";
  }
  if (uiddashExists($conn, $username, $email) !== false) {
    $_SESSION['error']['email'] = "Username or email already exists.";
  }
  if (checkEmpty($email)){
    $_SESSION['error']['email'] = "No email provided.";
  }
  if (checkEmpty($username)){
    $_SESSION['error']['username'] = "No username provided.";
  }

  if(count($_SESSION['error']) === 0){
    //if no error is returned perform the execution of UPDATE below
    $sql = "UPDATE users SET usersFirstname=?, usersLastname=?, usersEmail=?, usersUid=? WHERE usersId=?";
    
    //prepared statements to prevent possibility of SQL injection
    $stmt = mysqli_stmt_init($conn);
    
    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
       header("location: ../dashboard.php?error=stmtfailed");
      exit();
    }
    
    //attaching/binding the prepared statement as a parameter 
    mysqli_stmt_bind_param($stmt, "ssssd", $firstname, $lastname, $email, $username,   $usersId);
    if(mysqli_stmt_execute($stmt)){
      mysqli_stmt_close($stmt);
      header("location: ../coursework/dashboard.php?success=Data Updated Successfully");
      exit();
    }
  }

}
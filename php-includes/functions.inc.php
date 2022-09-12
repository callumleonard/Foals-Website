<?php

//simple function to check whether the field of the forms is empty or not
function validateField($firstname, $lastname, $email, $username, $password, $passwordrepeat) {
	$result;
	//built-in function "empty" to check whether a var is empty
	if (empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password) || empty($passwordrepeat)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

//simple function for outputting the error codes based on 1 or 0 for the updating (dashboard.php)
function checkEmpty($value){
	return  empty($value)? true : false;
}

function validateUid($username) {
	$result;
	//built-in string search "preg_match" to search for characters in var
	if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

//function to validate email addresses
function validateEmail($email) {
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

//simple var comparison to check if contents are the same
function passwordValidate($password, $passwordrepeat) {
	$result;
	if ($password !== $passwordrepeat) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

//checking the password complexity to ensure it is stronger than char 0
function passwordComplexity($password) {
	$result;
	$number = preg_match('@[0-9]@', $password);
	$uppercase = preg_match('@[A-Z]@', $password);
	$lowercase = preg_match('@[a-z]@', $password);

	if(strlen($password) < 8 || $number == false || $uppercase == false || $lowercase == false){
		$result = true; //it is less than 8 return true
	}
	else {
		$result = false; //it isnt less than 8 it is greater, return false
	}
	return $result;
}

//sanitize input preventing XSS
function sanitizeInput($data){
	$data = stripslashes($data);
	$data = trim($data);
	$data =	htmlspecialchars($data);
	return $data;
}

//function to validate firstname register input
function firstValidate($firstname){
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
function lastValidate($lastname){
	$result;
	//built in function, returns true if non char is detected
	if(ctype_alpha($lastname)){
		$result = true;
	}else{ 
		$result = false;
	}
	return $result;
}

//function to validate username register input
function uservValidate($username){
	$result;
	//built in function, returns true if symbols are detected i.e. ("@/: etc)
	if(ctype_alnum($username)){
		$result = true;
	}else{ 
		$result = false;
	}
	return $result;
}

// Checking if the username or email is in db, if it is then return the data
function uidExists($conn, $username, $email) {
  $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";

	//prepared statements to prevent possibility of SQL injection
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../register.php?error=stmtfailed");
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

function createUser($conn, $firstname, $lastname, $email, $username, $password) {
   //inserting data from form into the db in the correct order
  //(values)using placeholders as using/running prepared statements
  $sql = "INSERT INTO users (usersFirstname, usersLastname, usersEmail, usersUid, usersPassword) VALUES (?, ?, ?, ?, ?);";

	//prepared statements to prevent possibility of SQL injection
	$stmt = mysqli_stmt_init($conn);
	if (!mysqli_stmt_prepare($stmt, $sql)) {
	 	header("location: ../register.php?error=stmtfailed");
		exit();
	}

	//hashing and salting the password by using the built in password_hash function
	$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

	//attaching/binding the prepared statement as a parameter 
	mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $email, $username, $hashedPassword);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
	//if no errors display so and take user to login.php to login
	header("location: ../login.php?error=none");
	exit();
}

//validate/check whether either of the login fields have been left empty
function validateloginField($username, $password) {
	$result;
	if (empty($username) || empty($password)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}
	
//log the user into the website and redirect to appropriate page 
function loginUser($conn, $username, $password) {
	$uidExists = uidExists($conn, $username, $email);

	if ($uidExists === false) {
		header("location: ../login.php?error=incorrectcredentials");
		exit();
	}

	$passwordHashed = $uidExists["usersPassword"];
	//verfying that the password hash in the db matches the password entered by the user
	$checkPassword = password_verify($password, $passwordHashed);

	if ($checkPassword === false) {
		header("location: ../login.php?error=incorrectcredentials");
		exit();
	}
	//users credentials match, start a session maintain it & redirect to dashboard.php until user logs out
	elseif ($checkPassword === true) {
		session_start();
		$_SESSION["userid"] = $uidExists["usersId"];
		$_SESSION["useruid"] = $uidExists["usersUid"];
		header("location: ../dashboard.php");
		exit();
	}
}


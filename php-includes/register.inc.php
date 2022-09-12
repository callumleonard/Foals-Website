<?php

if (isset($_POST["submit"])) {

  //getting the relevant data that has been entered by the user
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $username = $_POST["uid"];
  $password = $_POST["password"];
  $passwordrepeat = $_POST["passwordrepeat"];

  //linking to db handler 
  //linking to the erorr handler (form validation) 
  require_once "dbh.inc.php";
  require_once 'functions.inc.php';

  //different form validation methods to ensure user has met necessary form requirements before being able to submit the db request
  if (validateField($firstname, $lastname, $email, $username, $password, $passwordrepeat) !== false) {
    header("location: ../register.php?error=inputempty");
		exit();
  }

  if (firstValidate($firstname) !== true) {
    header("location: ../register.php?error=invalidcharacter");
	 	exit();
  }
  if (lastValidate($lastname) !== true) {
    header("location: ../register.php?error=invalidcharacter");
	 	exit();
  }

  if (validateEmail($email) !== false) {
    header("location: ../register.php?error=invalidemail");
		exit();
  }
  
  if (uservValidate($username) !== true) {
    header("location: ../register.php?error=invalidsymbol");
	 	exit();
  }

  if (validateUid($uid) !== false) {
    header("location: ../register.php?error=invaliduid");
		exit();
  }

  if (passwordComplexity($password) !== false) { //IF THE PASSWORD ISNT EQUAL FALSE (is true it is less than 8) do below.
    header("location: ../register.php?error=passwordnotsecure");
		exit();
  }

  if (passwordValidate($password, $passwordrepeat) !== false) {
    header("location: ../register.php?error=passwordmismatch");
		exit();
  }

  if (uidExists($conn, $username, $email) !== false) {
    header("location: ../register.php?error=usernameORemailtaken");
		exit();
  }

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    //extra layer of security | user input sanitation, preventing XSS
    $firstname = sanitizeInput($_POST["firstname"]);
    $lastname = sanitizeInput($_POST["lastname"]);
    $email = sanitizeInput($_POST["email"]);
    $username = sanitizeInput($_POST['uid']);
  }

  //if all above is successful create and insert the user into db
  createUser($conn, $firstname, $lastname, $email, $username, $password);
}  
//validation not met return user to registration page
else {
	header("location: ../register.php");
  exit();
}

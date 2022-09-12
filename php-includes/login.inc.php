<?php
if (isset($_POST["submit"])) {

  //linking to db handler 
  //linking to the erorr handler (form validation) 
  require_once "dbh.inc.php";
  require_once 'functions.inc.php';

  //get the form data from the user, sanitizing the login to prevent XSS
  $username = sanitizeInput($_POST["username"]);
  $password = sanitizeInput($_POST["password"]);
  
  //validate the form fields to check if empty
  if (validateloginField($username, $password) === true) {
    header("location: ../login.php?error=inputempty");
		exit();
  }
  
  //insert the user into the db
  loginUser($conn, $username, $password);
}
//validation not met return user to login.php 
else {
	header("location: ../login.php");
    exit();
}

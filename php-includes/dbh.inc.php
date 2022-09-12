<?php

//connecting to the db
$servername = "lochnagar.abertay.ac.uk";
$dBUsername = "HIDDEN";
$dBPassword = "HIDDEN";
$dBName = "HIDDEN";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());
}

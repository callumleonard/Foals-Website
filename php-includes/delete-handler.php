<?php
//starting session, taking arguments comparing them to "deleteuser", connecting to the database handler, deleting the relevant user from the database, returning true or false to the response in .js
session_start();
if (isset($_POST["action"]) && $_POST["action"] === "deleteuser") {
    require_once "dbh.inc.php";
    $usersId = $_SESSION['userid'];
    $sql = "DELETE FROM  users WHERE usersId=$usersId";
    if($conn->query($sql) == TRUE){
        echo 1;
    }else{
        echo 0;
    }
    exit();
}

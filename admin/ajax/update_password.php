<?php 
session_start();
session_regenerate_id();
include("../../db.php");

    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }

    $token = filter_var($_GET["token"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$pass = filter_var($_GET["pass"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    
	$q = "update users set password=md5('$pass') WHERE forget_password_token = '$token'";
	$result = mysqli_query($db,$q);
	echo 1;

mysqli_close($db);
?>
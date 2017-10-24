<?php 
session_start();
session_regenerate_id();
include("../../db.php");

    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }

    
    $email_id = filter_var($_GET["user_email"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    
	$q = "SELECT * FROM users WHERE email = '$email_id'";
	$result = mysqli_query($db,$q);
	if (mysqli_num_rows($result)>0) {
	
		echo 1;
			
	}else{
		echo 0;
	}

mysqli_close($db);
?>
<?php 
session_start();
session_regenerate_id();
include("../../db.php");

    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }

    
    $email_id = filter_var($_GET["email_id"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    
	$q = "SELECT * FROM users WHERE email = '$email_id'";
	$result = mysqli_query($db,$q);
	if (mysqli_num_rows($result)>0) {
		$user_email=$email_id;
		$new_pass= mt_rand();
		$query=mysqli_query($db,"update users set password=md5('$new_pass') where email = '$email_id'");
		
		$row=mysqli_fetch_assoc($result);
		$fname=$row['fname'];
		
		$subject="Forget Password Request";
		$message="New Password: ".$new_pass."<br><br>";
		$message.="Click below to login<br>";
		
		$email_text = file_get_contents('../email_notification.html');
		$email_text=str_replace("[[SITETITLE]]","International Library of Cannabinoids",$email_text);
		$email_text=str_replace("[[sitetitle]]","International Library of Cannabinoids",$email_text);
		$email_text=str_replace("[[siteroot]]",SITEROOT,$email_text);
		$email_text=str_replace("[[subject]]",$subject,$email_text);
		$email_text=str_replace("[[message]]",$message,$email_text);
		
		$email_text=str_replace("[[imagelink]]",'',$email_text);
		

		$email_text=str_replace("[[firstname]]",$fname,$email_text);

		$activate_link=SITEROOT.'/login.php';
		$email_text=str_replace("[[link]]",$activate_link,$email_text);
		
	  
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		$headers .= 'From: International Library of Cannabinoids Staff<admin@ilc.com>' . "\r\n";
		$sentEmail = mail($user_email, $subject, $email_text, $headers);
		echo 1;
			
	}else{
		echo 0;
	}

mysqli_close($db);
?>
<?php 
session_start();
include("../db.php");

    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }

    $uid = md5(uniqid(time()));
    $fname = filter_var(addslashes($_GET["fname"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    $lname = filter_var(addslashes($_GET["lname"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	$user_type = filter_var(addslashes($_GET["user_type"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$user_email = filter_var(addslashes($_GET["user_email"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	$password = filter_var(addslashes($_GET["password"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$dob = filter_var(addslashes($_GET["dob"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	$security_question = filter_var(addslashes($_GET["security_question"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$security_answer = filter_var(addslashes($_GET["security_answer"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	if($user_type==2){
		$doctor_id = filter_var(addslashes($_GET["doctor_id"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    }else{
		$doctor_id=0;
	}
	
	$query=mysqli_query($db,"select id from users where email='$user_email'");
	if(mysqli_num_rows($query)>0){
		echo 2;
		return false;
	}
	$ip_address=$_SERVER['REMOTE_ADDR'];
	$q = "insert into users(doctor_id,fname,lname,email,user_type,password,security_question,security_answer,dob,status,added_date,ip_address,activate_token)
	values('$doctor_id','$fname','$lname','$user_email','$user_type',md5('$password'),'$security_question','$security_answer','$dob','0',now(),'$ip_address','$uid')";

	if (mysqli_query($db,$q)) {
		echo 1;
			
	}else{
		echo 0;
	}
	
	$user_id=mysqli_insert_id($db);
	$ilc_id=0;
	if($user_type==2){
		$ilc_id='P'.$user_id;
	}
	
	if($user_type==3){
		$ilc_id='D'.$user_id;
	}
	
	if($user_type==4){
		$ilc_id='R'.$user_id;
	}
	
	$query=mysqli_query($db,"update users set ilc_id='$ilc_id' where user_id='$user_id'");
	
		$subject="Activate your account";
		$message="To activate your account, Please click on below link";
		
		$email_text = file_get_contents('email_notification.html');
		$email_text=str_replace("[[SITETITLE]]","International Library of Cannabinoids",$email_text);
		$email_text=str_replace("[[sitetitle]]","International Library of Cannabinoids",$email_text);
		$email_text=str_replace("[[siteroot]]",SITEROOT,$email_text);
		$email_text=str_replace("[[subject]]",$subject,$email_text);
		$email_text=str_replace("[[message]]",$message,$email_text);
		

		$email_text=str_replace("[[firstname]]",$fname,$email_text);

		$activate_link=SITEROOT.'/admin/activate_account.php?token='.$uid;
		$email_text=str_replace("[[link]]",$activate_link,$email_text);
		
	  
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		$headers .= 'From: International Library of Cannabinoids Staff<admin@ilc.com>' . "\r\n";
		$sentEmail = mail($user_email, $subject, $email_text, $headers);

mysqli_close($db);
?>
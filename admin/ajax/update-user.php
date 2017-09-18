<?php  	session_start();
include("../../db.php");

    $user_id=$_SESSION['admin_user_id'];
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }
		$error_msg='';
		$errors= array();
		if($_FILES['profile_pic']['name']!=''){
					$file_name = $_FILES['profile_pic']['name'];
					$file_size =$_FILES['profile_pic']['size'];
					$file_tmp =$_FILES['profile_pic']['tmp_name'];
					$file_type=$_FILES['profile_pic']['type'];
					$file_ext=strtolower(end(explode('.',$_FILES['profile_pic']['name'])));
				  
					$extensions= array("jpeg","jpg","png","pdf","gif");
					$file_ext=strtolower($file_ext);
					  if(in_array($file_ext,$extensions)=== false){
						 $errors[]="extension not allowed, please choose a JPEG or PNG,GIF and PDF file.";
					  }
					  
					  if($file_size > 2097152){
						 $errors[]='File size must be excately 2 MB';
					  }
					
					if(empty($errors)==true){
					 move_uploaded_file($file_tmp,"../upload/profiles/".$file_name);
						$query="update users set photo='$file_name' where user_id='$user_id'";
						$run_q=mysqli_query($db,$query);
					 $flag=1;
				  }else{
					  foreach($errors as $val){
						  $error_msg=$val;
					  }
					  $arr = array('error' => "1",'msg'=>$error_msg,"success"=>'0');
					  echo json_encode($arr);
					 return false;
				  }	
		}

    $uid = md5(uniqid(time()));
    $fname = filter_var(addslashes($_POST["first_name"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    $lname = filter_var(addslashes($_POST["last_name"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	$user_type = filter_var(addslashes($_POST["user_type"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$user_email = filter_var(addslashes($_POST["user_email"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	$password = filter_var(addslashes($_POST["password"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$dob = filter_var(addslashes($_POST["dob"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	$security_question = filter_var(addslashes($_POST["security_question"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$security_answer = filter_var(addslashes($_POST["security_answer"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	$query="update users set fname='$fname',lname='$lname',email='$user_email ',user_type='$user_type',security_question='$security_question',security_answer='$security_answer',dob='$dob' where user_id='$user_id'";
	$run_q=mysqli_query($db,$query);
	
	if($password!=''){
		mysqli_query($db,"update users set password=md5('$password') where user_id='$user_id'");
		
		$query=mysqli_query($db,"select email,fname from users where user_id='$user_id'");
		$user=mysqli_fetch_assoc($query);
		$user_email	=$user['email'];
		$fname		=$user['fname'];
		
		$subject="Your password successfully updated";
		$message="Your password is updated, You can login using new password<br><br>Click on below link for login";
		
		$email_text = file_get_contents('../email_notification.html');
		$email_text=str_replace("[[SITETITLE]]","International Library of Cannabinoids",$email_text);
		$email_text=str_replace("[[sitetitle]]","International Library of Cannabinoids",$email_text);
		$email_text=str_replace("[[siteroot]]",SITEROOT,$email_text);
		$email_text=str_replace("[[subject]]",$subject,$email_text);
		$email_text=str_replace("[[message]]",$message,$email_text);
		

		$email_text=str_replace("[[firstname]]",$fname,$email_text);

		$login_link=SITEROOT.'/login.php';
		$email_text=str_replace("[[link]]",$login_link,$email_text);
		
	  
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		$headers .= 'From: International Library of Cannabinoids Staff<admin@ilc.com>' . "\r\n";
		$sentEmail = mail($user_email, $subject, $email_text, $headers);
	}
	
	$phone1 = filter_var(addslashes($_POST["phone1"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$phone2 = filter_var(addslashes($_POST["phone2"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$height = filter_var(addslashes($_POST["height"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$weight = filter_var(addslashes($_POST["weight"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$ethnicity = filter_var(addslashes($_POST["ethnicity"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$emergency_contact_name = filter_var(addslashes($_POST["emergency_contact_name"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$emergency_contact_number = filter_var(addslashes($_POST["emergency_contact_number"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$address_line_1 = filter_var(addslashes($_POST["address_line_1"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	$address_line_2 = filter_var(addslashes($_POST["address_line_2"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$suburb = filter_var(addslashes($_POST["suburb"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$state = filter_var(addslashes($_POST["state"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	$country = filter_var(addslashes($_POST["country"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	$ilc_id='P'.$user_id;
	
	$query=mysqli_query($db,"select id from patient where ilc_id='$ilc_id'");
	$total_row=mysqli_num_rows($query);
	if($total_row>0){
		 $query="update patient set phone_1='$phone1',phone_2='$phone2',ethnicity='$ethnicity',height='$height',weight='$weight',emergency_contact_name='$emergency_contact_name',emergency_contact_number='$emergency_contact_number',address_line_1='$address_line_1',address_line_2='$address_line_2',suburb='$suburb',state='$state',country='$country' where ilc_id='$ilc_id'";
		$exe_query=mysqli_query($db,$query);
	}else{
		$query="insert into patient(ilc_id,phone_1,phone_2,ethnicity,height,weight,emergency_contact_name,emergency_contact_number,address_line_1,address_line_2,suburb,state,country,added_date)values('$ilc_id','$phone1','$phone2','$ethnicity','$height','$weight','$emergency_contact_name','$emergency_contact_number','$address_line_1','$address_line_2','$suburb','$state','$country',now())";
		$exe_query=mysqli_query($db,$query);
	}
	
	mysqli_close($db);
   $arr = array('error' => "0",'msg'=>'success',"success"=>'1');
	echo json_encode($arr);return true;

?>
  

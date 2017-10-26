<?php 	/* Start session */
		session_start();  
		/*Connect to database */
		require("../../db.php");
		require("../lib/functions.php");


$doctor_id=NULL;
$researcher_id=NULL;
$patient_id		=addslashes($_POST['patient_id']);

if(checkPermissions($_SESSION['admin_user_id'],array(3))){
	$doctor_id=$_SESSION['admin_user_id'];
}

if(checkPermissions($_SESSION['admin_user_id'],array(4))){
	$researcher_id=$_SESSION['admin_user_id'];
	
	$first_name		=addslashes($_POST['first_name']);
	$last_name		=addslashes($_POST['last_name']);
	
	$gender		=addslashes($_POST['gender']);
	
	$dob		=addslashes($_POST['dob']);
	$height		=addslashes($_POST['height']);
	$weight		=addslashes($_POST['weight']);
	$ethnicity		=addslashes($_POST['ethnicity']);
	
	$query=mysqli_query($db,"insert into users(fname,lname,dob,added_date)values('$first_name','$last_name','$dob',now())");
	$last_user_id=mysqli_insert_id($db);
	$patient_id=$last_user_id;
	$ilc_id='P'.$last_user_id;
	
	$query=mysqli_query($db,"update users set ilc_id='$ilc_id' where user_id='$last_user_id'");
	
	$query=mysqli_query($db,"insert into patient(gender,ilc_id,ethnicity,height,weight)values('$gender','$ilc_id','$ethnicity','$height','$weight')");
	
}


/*Get all form fields*/

$comments											=addslashes($_POST['comments']);


	/* Query for insert patient data in database */
   $query="insert into patient_history(researcher_id,doctorid,patientid,comment,added_date)
  values('$researcher_id','$doctor_id','$patient_id','$comments',now())";

  $exe_q=mysqli_query($db,$query);
  $history_id=mysqli_insert_id($db);
  /*Close database connection*/
  mysqli_close($db);

  /*Return with success message*/
  $arr = array('error' => "0",'msg'=>'success',"success"=>'1',"history_id"=>$history_id,'patient_id'=>$patient_id);
  echo json_encode($arr);return true;

?>
  

<?php 	session_start();  	require("../../db.php");
require("../lib/functions.php");

$doctor_id=NULL;
$researcher_id=NULL;
if(checkPermissions($_SESSION['admin_user_id'],array(3))){
	$doctor_id=$_SESSION['admin_user_id'];
}

if(checkPermissions($_SESSION['admin_user_id'],array(4))){
	$researcher_id=$_SESSION['admin_user_id'];
}	

$treatment_id=addslashes($_POST['treatment_id']);
$frequency=addslashes($_POST['frequency']);
$efficacyInpercent=addslashes($_POST['efficacyInpercent']);
$sideEffect=addslashes($_POST['sideEffect']);
$improvementInSecondaryCondition=addslashes($_POST['improvementInSecondaryCondition']);

$cancer_type=addslashes($_POST['cancer_type']);
$other_infections=addslashes($_POST['other_infections']);

   $query="insert into followups(researcher_id,doctor_id,treatmentNo,frequency,efficacyInpercent,sideEffect,improvementInSecondaryCondition,	cancer_type,other_infections,added_date)
  values('$researcher_id','$doctor_id','$treatment_id','$frequency','$efficacyInpercent','$sideEffect','$improvementInSecondaryCondition','$cancer_type','$other_infections',now())";

  $exe_q=mysqli_query($db,$query);
  mysqli_close($db);

   $arr = array('error' => "0",'msg'=>'success',"success"=>'1');
  echo json_encode($arr);return true;

?>
  

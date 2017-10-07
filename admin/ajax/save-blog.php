<?php 	session_start();  	require("../../db.php");


	$user_id=$_SESSION['admin_user_id'];


$cannabinoidRatio=addslashes($_POST['cannabinoidRatio']);
$doseAmount=addslashes($_POST['doseAmount']);
$minimumDaily=addslashes($_POST['minimumDaily']);
$maximumDaily=addslashes($_POST['maximumDaily']);
$timesOfTargetDoseIntake=addslashes($_POST['timesOfTargetDoseIntake']);
$frequency=addslashes($_POST['frequency']);
$conditionsOfBeingTreated=addslashes($_POST['conditionsOfBeingTreated']);
$description=addslashes($_POST['description']);


  $query="insert into patienttreatment(patientId,cannabinoidRatio,doseAmount,minimumDaily,maximumDaily,timesOfTargetDoseIntake,frequency,conditionsOfBeingTreated,description,added_date)
  values('$user_id','$cannabinoidRatio','$doseAmount','$minimumDaily','$maximumDaily','$timesOfTargetDoseIntake','$frequency','$conditionsOfBeingTreated','$description',now())";

  $exe_q=mysqli_query($db,$query);
  mysqli_close($db);

   $arr = array('error' => "0",'msg'=>'success',"success"=>'1');
  echo json_encode($arr);return true;

?>
  

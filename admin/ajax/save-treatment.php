<?php 	session_start();  	require("../../db.php");


$patient_id=addslashes($_POST['patient_id']);
$doctor_id=$_SESSION['admin_user_id'];

$cannabinoidRatio=addslashes($_POST['cannabinoidRatio']);
$doseAmount=addslashes($_POST['doseAmount']);
$minimumDaily=addslashes($_POST['minimumDaily']);
$maximumDaily=addslashes($_POST['maximumDaily']);
$method_of_administration=addslashes($_POST['method_of_administration']);
$frequency=addslashes($_POST['frequency']);
$dosage_type=addslashes($_POST['dosage_type']);
$conditionsOfBeingTreated=addslashes($_POST['conditionsOfBeingTreated']);
$description=addslashes($_POST['description']);
$cancer_type=addslashes($_POST['cancer_type']);
$patient_history_id=addslashes($_POST['patient_history_id']);
$other_infections=addslashes($_POST['other_infections']);

   $query="insert into patienttreatment(other_infections,patient_history_id,cancer_type,dosage_type,doctorId,patientId,cannabinoidRatio,doseAmount,minimumDaily,maximumDaily,method_of_administration,frequency,conditionsOfBeingTreated,description,added_date)
  values('$other_infections','$patient_history_id','$cancer_type','$dosage_type','$doctor_id','$patient_id','$cannabinoidRatio','$doseAmount','$minimumDaily','$maximumDaily','$method_of_administration','$frequency','$conditionsOfBeingTreated','$description',now())";

  $exe_q=mysqli_query($db,$query);
  mysqli_close($db);

   $arr = array('error' => "0",'msg'=>'success',"success"=>'1');
  echo json_encode($arr);return true;

?>
  

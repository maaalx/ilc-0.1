<?php 	session_start();  	require("../../db.php");



$admin_id=$_SESSION['admin_user_id'];
$treatment_id=addslashes($_POST['treatment_id']);

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

$other_infections=addslashes($_POST['other_infections']);

$query="update patienttreatment set other_infections='$other_infections',cancer_type='$cancer_type',dosage_type='$dosage_type',cannabinoidRatio='$cannabinoidRatio',doseAmount='$doseAmount',minimumDaily='$minimumDaily',maximumDaily='$maximumDaily',method_of_administration='$method_of_administration',frequency='$frequency',conditionsOfBeingTreated='$conditionsOfBeingTreated',description='$description' where idpatientTreatment='$treatment_id'";
   
  $exe_q=mysqli_query($db,$query);
  mysqli_close($db);

   $arr = array('error' => "0",'msg'=>'success',"success"=>'1');
  echo json_encode($arr);return true;

?>
  

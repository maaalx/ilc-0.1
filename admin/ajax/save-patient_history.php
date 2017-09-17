<?php 	/* Start session */
		session_start();  
		/*Connect to database */
		require("../../db.php");



$doctor_id=$_SESSION['admin_user_id'];

/*Get all form fields*/
$other_admission_type							=addslashes($_POST['other_admission_type']);
$patient_id										=addslashes($_POST['patient_id']);
$admission_type									=addslashes($_POST['admission_type']);
$qualification_status							=addslashes($_POST['qualification_status']);
$criterion_for_admission						=addslashes($_POST['criterion_for_admission']);
$intended_duration								=addslashes($_POST['intended_duration']);
$admission_weight								=addslashes($_POST['admission_weight']);

$fim_score_on_admission							=addslashes($_POST['fim_score_on_admission']);
$admission_read_mission_to_rehabilitation		=addslashes($_POST['admission_read_mission_to_rehabilitation']);
$rug_adl_on_admission							=addslashes($_POST['rug_adl_on_admission']);


$other_source_of_referral_to_palliative_care		=addslashes($_POST['other_source_of_referral_to_palliative_care']);
$source_of_referral_to_palliative_care				=addslashes($_POST['source_of_referral_to_palliative_care']);
$patient_type										=addslashes($_POST['patient_type']);
$accommodation_type_during_admission				=addslashes($_POST['accommodation_type_during_admission']);
$admission_source									=addslashes($_POST['admission_source']);
$hospital_campus_code								=addslashes($_POST['hospital_campus_code']);
$interpreter_required								=addslashes($_POST['interpreter_required']);
$comments											=addslashes($_POST['comments']);


	/* Query for insert patient data in database */
   $query="insert into patient_history(other_source_of_referral_to_palliative_care,other_admission_type,doctorid,patientid,admission_type,qualification_status,criterion_for_admission,intended_duration_of_stay,admission_weight,FIM_Score_on_Admission,Admission_readmission_to_rehabilitation,RUG_ADL_on_admission,Source_of_referral_to_palliative_care,Patient_type,Accommodation_type_during_admission,Admission_Source,hospital_campus_code,Interpreter_Required,comment,added_date)
  values('$other_source_of_referral_to_palliative_care','$other_admission_type','$doctor_id','$patient_id','$admission_type','$qualification_status','$criterion_for_admission','$intended_duration','$admission_weight','$fim_score_on_admission','$admission_read_mission_to_rehabilitation','$rug_adl_on_admission','$source_of_referral_to_palliative_care','$accommodation_type_during_admission','$patient_type','$admission_source','$hospital_campus_code','$interpreter_required','$comments',now())";

  $exe_q=mysqli_query($db,$query);
  $history_id=mysqli_insert_id($db);
  /*Close database connection*/
  mysqli_close($db);

  /*Return with success message*/
  $arr = array('error' => "0",'msg'=>'success',"success"=>'1',"history_id"=>$history_id);
  echo json_encode($arr);return true;

?>
  

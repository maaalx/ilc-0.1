<?php 	session_start();  	require("../../db.php");

require("../lib/functions.php");

if(checkPermissions($_SESSION['admin_user_id'],array(4))){
	$researcher_id=$_SESSION['admin_user_id'];
}




$animal_name					=addslashes($_POST['animal_name']);
$animal_model_name				=addslashes($_POST['animal_model_name']);
$gender_of_animals				=addslashes($_POST['gender_of_animals']);
$male_female_ratio				=addslashes($_POST['male_female_ratio']);
$condition_being_investigated	=addslashes($_POST['condition_being_investigated']);
$cancer_type					=addslashes($_POST['cancer_type']);
$other_infections				=addslashes($_POST['other_infections']);
$description_of_ailment			=addslashes($_POST['description_of_ailment']);
$age_at_treatment				=addslashes($_POST['age_at_treatment']);
$cannabinoid_ratio_used			=addslashes($_POST['cannabinoid_ratio_used']);
$cannabinoid_ratio_used_other	=addslashes($_POST['cannabinoid_ratio_used_other']);
$average_dose_amount			=addslashes($_POST['average_dose_amount']);


$minimum_daily					=addslashes($_POST['minimum_daily']);
$maximum_daily					=addslashes($_POST['maximum_daily']);
$positive_control				=addslashes($_POST['positive_control']);
$positive_control_dose			=addslashes($_POST['positive_control_dose']);
$vehicle_control				=addslashes($_POST['vehicle_control']);

$vehicle_control_dose			=addslashes($_POST['vehicle_control_dose']);
$negative_control				=addslashes($_POST['negative_control']);
$negative_control_dose			=addslashes($_POST['negative_control_dose']);
$number_of_replicates_treatment		=addslashes($_POST['number_of_replicates_treatment']);
$method_of_administration		=addslashes($_POST['method_of_administration']);



$frequency										=addslashes($_POST['frequency']);
$dosage_type									=addslashes($_POST['dosage_type']);
$follow_up_frequency							=addslashes($_POST['follow_up_frequency']);
$perent_efficacy_of_cannabis_treatment			=addslashes($_POST['perent_efficacy_of_cannabis_treatment']);
$percent_efficacy_of_positive_control			=addslashes($_POST['percent_efficacy_of_positive_control']);
$percent_efficacy_of_vehicle_control			=addslashes($_POST['percent_efficacy_of_vehicle_control']);
$percent_efficacy_of_negative_control			=addslashes($_POST['percent_efficacy_of_negative_control']);
if(isset($_POST['side_effects_of_cannabis_treatment']) && count($_POST['side_effects_of_cannabis_treatment'])>0){
	$side_effects_of_cannabis_treatment				=implode(",",$_POST['side_effects_of_cannabis_treatment']);
}else{
	$side_effects_of_cannabis_treatment				='';
}



$full_reference_of_the_study_including_dio				=addslashes($_POST['full_reference_of_the_study_including_dio']);

   $query="insert into vivo_experiment(researcher_id,animal_name,animal_model_name,gender_of_animals,male_female_ratio,condition_being_investigated,cancer_type,other_infections,description_of_ailment,age_at_treatment,cannabinoid_ratio_used,cannabinoid_ratio_used_other,average_dose_amount,minimum_daily,maximum_daily,positive_control,positive_control_dose,vehicle_control,vehicle_control_dose,negative_control,negative_control_dose,number_of_replicates_treatment,method_of_administration,frequency,dosage_type,follow_up_frequency,perent_efficacy_of_cannabis_treatment,percent_efficacy_of_positive_control,percent_efficacy_of_vehicle_control,percent_efficacy_of_negative_control,side_effects_of_cannabis_treatment,full_reference_of_the_study_including_dio,added_date)
  values('$researcher_id','$animal_name','$animal_model_name','$gender_of_animals','$male_female_ratio','$condition_being_investigated','$cancer_type','$other_infections','$description_of_ailment','$age_at_treatment','$cannabinoid_ratio_used','$cannabinoid_ratio_used_other','$average_dose_amount','$minimum_daily','$maximum_daily','$positive_control','$positive_control_dose','$vehicle_control','$vehicle_control_dose','$negative_control','$negative_control_dose','$number_of_replicates_treatment','$method_of_administration','$frequency','$dosage_type','$follow_up_frequency','$perent_efficacy_of_cannabis_treatment','$percent_efficacy_of_positive_control','$percent_efficacy_of_vehicle_control','$percent_efficacy_of_negative_control','$side_effects_of_cannabis_treatment','$full_reference_of_the_study_including_dio',now())";

  $exe_q=mysqli_query($db,$query);
  $vivo_id=mysqli_insert_id($db);
  mysqli_close($db);

   $arr = array('error' => "0",'msg'=>'success',"success"=>'1',"vivo_id"=>$vivo_id);
  echo json_encode($arr);return true;

?>
  

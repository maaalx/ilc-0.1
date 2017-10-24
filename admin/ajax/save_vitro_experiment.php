<?php 	session_start();  	require("../../db.php");

require("../lib/functions.php");

if(checkPermissions($_SESSION['admin_user_id'],array(4))){
	$researcher_id=$_SESSION['admin_user_id'];
}


$condition_being_investigated	=addslashes($_POST['condition_being_investigated']);
$cancer_type					=addslashes($_POST['cancer_type']);
$other_infections					=addslashes($_POST['other_infections']);
if(isset($_POST['cell_line']) && count($_POST['cell_line'])>0){
	$cell_line						=implode(",",$_POST['cell_line']);
}else{
	$cell_line='';
}

$cell_density_per_treatment			=addslashes($_POST['cell_density_per_treatment']);
$cell_culture_medium				=addslashes($_POST['cell_culture_medium']);
$cell_culture_method				=addslashes($_POST['cell_culture_method']);

$cell_culture_method_other		=addslashes($_POST['cell_culture_method_other']);
$cell_culture_conditions			=addslashes($_POST['cell_culture_conditions']);


$cytotoxicity_results					=addslashes($_POST['cytotoxicity_results']);
$cannabis_treatment_1_name				=addslashes($_POST['cannabis_treatment_1_name']);
$cannabis_treatment_1_dose				=addslashes($_POST['cannabis_treatment_1_dose']);
$cannabis_treatment_2_name				=addslashes($_POST['cannabis_treatment_2_name']);
$cannabis_treatment_2_dose				=addslashes($_POST['cannabis_treatment_2_dose']);

$cannabis_treatment_3_name				=addslashes($_POST['cannabis_treatment_3_name']);
$cannabis_treatment_3_dose				=addslashes($_POST['cannabis_treatment_3_dose']);
$cannabis_treatment_4_name				=addslashes($_POST['cannabis_treatment_4_name']);
$cannabis_treatment_4_dose				=addslashes($_POST['cannabis_treatment_4_dose']);


$positive_control_name					=addslashes($_POST['positive_control_name']);
$positive_control_dose					=addslashes($_POST['positive_control_dose']);
$vehicle_control_name					=addslashes($_POST['vehicle_control_name']);
$vehicle_control_dose					=addslashes($_POST['vehicle_control_dose']);
$negative_control_name					=addslashes($_POST['negative_control_name']);
$neative_control_dose					=addslashes($_POST['neative_control_dose']);
$number_of_replicates_treatment					=addslashes($_POST['number_of_replicates_treatment']);

$percent_efficacy_in_cannabis_treatment_1			=addslashes($_POST['percent_efficacy_in_cannabis_treatment_1']);
$percent_efficacy_in_cannabis_treatment_2			=addslashes($_POST['percent_efficacy_in_cannabis_treatment_2']);
$percent_efficacy_in_cannabis_treatment_3			=addslashes($_POST['percent_efficacy_in_cannabis_treatment_3']);
$percent_efficacy_in_cannabis_treatment_4			=addslashes($_POST['percent_efficacy_in_cannabis_treatment_4']);
$percent_efficacy_in_positive_control			=addslashes($_POST['percent_efficacy_in_positive_control']);
$percent_efficacy_in_vehicle_control			=addslashes($_POST['percent_efficacy_in_vehicle_control']);
$percent_efficacy_in_negative_control			=addslashes($_POST['percent_efficacy_in_negative_control']);

$full_reference_of_the_study_including_doi		=addslashes($_POST['full_reference_of_the_study_including_doi']);

   $query="insert into vitro_experiment(researcher_id,condition_being_investigated,cancer_type,other_infections,cell_line,cell_density_per_treatment,cell_culture_medium,cell_culture_method,cell_culture_method_other,cell_culture_conditions,cytotoxicity_results,cannabis_treatment_1_name,cannabis_treatment_1_dose,cannabis_treatment_2_name,cannabis_treatment_2_dose,cannabis_treatment_3_name,cannabis_treatment_3_dose,cannabis_treatment_4_name,cannabis_treatment_4_dose,positive_control_name,positive_control_dose,vehicle_control_name,vehicle_control_dose,negative_control_name,neative_control_dose,number_of_replicates_treatment,percent_efficacy_in_cannabis_treatment_1,percent_efficacy_in_cannabis_treatment_2,percent_efficacy_in_cannabis_treatment_3,percent_efficacy_in_cannabis_treatment_4,percent_efficacy_in_positive_control,percent_efficacy_in_vehicle_control,percent_efficacy_in_negative_control,full_reference_of_the_study_including_doi,adde_date)
  values('$researcher_id','$condition_being_investigated','$cancer_type','$other_infections','$cell_line','$cell_density_per_treatment','$cell_culture_medium','$cell_culture_method','$cell_culture_method_other','$cell_culture_conditions','$cytotoxicity_results','$cannabis_treatment_1_name','$cannabis_treatment_1_dose','$cannabis_treatment_2_name','$cannabis_treatment_2_dose','$cannabis_treatment_3_name','$cannabis_treatment_3_dose','$cannabis_treatment_4_name','$cannabis_treatment_4_dose','$positive_control_name','$positive_control_dose','$vehicle_control_name','$vehicle_control_dose','$negative_control_name','$neative_control_dose','$number_of_replicates_treatment','$percent_efficacy_in_cannabis_treatment_1','$percent_efficacy_in_cannabis_treatment_2','$percent_efficacy_in_cannabis_treatment_3','$percent_efficacy_in_cannabis_treatment_4','$percent_efficacy_in_positive_control','$percent_efficacy_in_vehicle_control','$percent_efficacy_in_negative_control','$full_reference_of_the_study_including_doi',now())";

  $exe_q=mysqli_query($db,$query);
  $vitro_id=mysqli_insert_id($db);
  mysqli_close($db);

   $arr = array('error' => "0",'msg'=>'success',"success"=>'1',"vitro_id"=>$vitro_id);
  echo json_encode($arr);return true;

?>
  

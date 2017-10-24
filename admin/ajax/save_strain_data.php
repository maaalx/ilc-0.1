<?php 	/* Start session */
		session_start();  
		/*Connect to database */
		require("../../db.php");
		require("../lib/functions.php");


$doctor_id=NULL;
$researcher_id=NULL;
$flag_doctor_reseacher='';
if(checkPermissions($_SESSION['admin_user_id'],array(3))){
	$doctor_id=$_SESSION['admin_user_id'];
	$flag_doctor_reseacher='doctor';
}

if(checkPermissions($_SESSION['admin_user_id'],array(4))){
	$researcher_id=$_SESSION['admin_user_id'];
	$flag_doctor_reseacher='researcher';
}


/*Get all form fields*/
$patient_history_id													=addslashes($_POST['patient_history_id']);
$common_name													=addslashes($_POST['common_name']);
$any_other_descriptors_1										=addslashes($_POST['any_other_descriptors_1']);
$any_other_descriptors_2										=addslashes($_POST['any_other_descriptors_2']);
$any_other_descriptors_3										=addslashes($_POST['any_other_descriptors_3']);
$any_other_descriptors_4										=addslashes($_POST['any_other_descriptors_4']);
$any_other_descriptors_5										=addslashes($_POST['any_other_descriptors_5']);
$country_of_origin												=addslashes($_POST['country_of_origin']);

$pedigree														=addslashes($_POST['pedigree']);
$pedigree_enter_the_parentage									=addslashes($_POST['pedigree_enter_the_parentage']);
$breeder_name_if_known											=addslashes($_POST['breeder_name_if_known']);


$growers													=addslashes($_POST['growers']);
$manufacturer_name											=addslashes($_POST['manufacturer_name']);
$manufacturer_address										=addslashes($_POST['manufacturer_address']);
$available_regions											=addslashes($_POST['available_regions']);
$available_region_country									=addslashes($_POST['available_region_country']);

if($_POST['accession_date']!=''){
$temp_accession_date						=explode("/",$_POST['accession_date']);
$accession_date								=$temp_accession_date['2'].'-'.$temp_accession_date['1'].'-'.$temp_accession_date['0'];
}else{
	$accession_date='';
}

$gender														=addslashes($_POST['gender']);
$percent_heterozygosity										=addslashes($_POST['percent_heterozygosity']);


$location													=addslashes($_POST['location']);
$grow_method												=addslashes($_POST['grow_method']);
$soil_mix													=addslashes($_POST['soil_mix']);
$are_you_using_living_soil									=addslashes($_POST['are_you_using_living_soil']);
$day_light_during_vegetative_stage							=addslashes($_POST['day_light_during_vegetative_stage']);
$night_light_during_vegetative_stage						=addslashes($_POST['night_light_during_vegetative_stage']);
$day_light_during_reproductive_stage						=addslashes($_POST['day_light_during_reproductive_stage']);
$night_light_during_reproductive_stage						=addslashes($_POST['night_light_during_reproductive_stage']);
$temperature_during_vegetative_stage						=addslashes($_POST['temperature_during_vegetative_stage']);
$temperature_during_reproductive_stage						=addslashes($_POST['temperature_during_reproductive_stage']);
$relative_humidity_during_vegetative_stage					=addslashes($_POST['relative_humidity_during_vegetative_stage']);
$relative_humidity_during_reproductive_stage				=addslashes($_POST['relative_humidity_during_reproductive_stage']);
$co2_supplementation										=addslashes($_POST['co2_supplementation']);


$co2_supplementation_ppm									=addslashes($_POST['co2_supplementation_ppm']);
$light_spectrum_during_vegetative_stage						=addslashes($_POST['light_spectrum_during_vegetative_stage']);
$light_spectrum_during_reproductive_stage					=addslashes($_POST['light_spectrum_during_reproductive_stage']);
$lamp_type_vegetative_stage									=addslashes($_POST['lamp_type_vegetative_stage']);
$lamp_type_reproductive_stage								=addslashes($_POST['lamp_type_reproductive_stage']);
$watering_during_vegetative_stage							=addslashes($_POST['watering_during_vegetative_stage']);
$watering_during_reproductive_stage							=addslashes($_POST['watering_during_reproductive_stage']);
$fertilisers_during_vegetative_stage						=addslashes($_POST['fertilisers_during_vegetative_stage']);
$fertilisers_during_reproductive_stage						=addslashes($_POST['fertilisers_during_reproductive_stage']);
$fertilisers_vegetative_stage								=addslashes($_POST['fertilisers_vegetative_stage']);
$fertilisers_reproductive_stage								=addslashes($_POST['fertilisers_reproductive_stage']);
$time_from_seed_cutting_to_transplantation					=addslashes($_POST['time_from_seed_cutting_to_transplantation']);
$time_from_transplantation_to_flower_induction				=addslashes($_POST['time_from_transplantation_to_flower_induction']);
$time_from_flower_induction_to_harvest						=addslashes($_POST['time_from_flower_induction_to_harvest']);
$time_of_harvest											=addslashes($_POST['time_of_harvest']);


$trichome_maturity											=addslashes($_POST['trichome_maturity']);
$average_yield												=addslashes($_POST['average_yield']);

if($_POST['outdoor_sowing_date']!=''){
$temp_outdoor_sowing_date									=explode("/",$_POST['outdoor_sowing_date']);
$outdoor_sowing_date										=$temp_outdoor_sowing_date['2'].'-'.$temp_outdoor_sowing_date['1'].'-'.$temp_outdoor_sowing_date['0'];
}else{
	$outdoor_sowing_date='';
}

if($_POST['outdoor_harvest_date']!=''){
$temp_outdoor_harvest_date									=explode("/",$_POST['outdoor_harvest_date']);
$outdoor_harvest_date										=$temp_outdoor_harvest_date['2'].'-'.$temp_outdoor_harvest_date['1'].'-'.$temp_outdoor_harvest_date['0'];
}else{
	$outdoor_harvest_date='';
}


$average_height												=addslashes($_POST['average_height']);
$cultivation_tips											=addslashes($_POST['cultivation_tips']);
$drying_temperature											=addslashes($_POST['drying_temperature']);
$drying_humidity											=addslashes($_POST['drying_humidity']);
$drying_time												=addslashes($_POST['drying_time']);
$type_of_packaging											=addslashes($_POST['type_of_packaging']);
$storage_temperature										=addslashes($_POST['storage_temperature']);
$storage_time												=addslashes($_POST['storage_time']);
$extraction_method											=addslashes($_POST['extraction_method']);
$flavour_scent												=addslashes($_POST['flavour_scent']);
$cannabinoid_ingredient_thc_thca							=addslashes($_POST['cannabinoid_ingredient_thc_thca']);


$cannabinoid_ingredient_cbd_cbda							=addslashes($_POST['cannabinoid_ingredient_cbd_cbda']);
$cannabinoid_ingredient_thcv_thcva							=addslashes($_POST['cannabinoid_ingredient_thcv_thcva']);
$cannabinoid_ingredient_cbc_cbca							=addslashes($_POST['cannabinoid_ingredient_cbc_cbca']);
$cannabinoid_ingredient_cbg_cbga							=addslashes($_POST['cannabinoid_ingredient_cbg_cbga']);
$cannabinoid_ingredient_cbn_cbna							=addslashes($_POST['cannabinoid_ingredient_cbn_cbna']);
$terpenoids_bisabolol										=addslashes($_POST['terpenoids_bisabolol']);
$terpenoids_borneol											=addslashes($_POST['terpenoids_borneol']);
$terpenoids_camphene										=addslashes($_POST['terpenoids_camphene']);
$terpenoids_carene											=addslashes($_POST['terpenoids_carene']);
$terpenoids_caryophyllene_oxide								=addslashes($_POST['terpenoids_caryophyllene_oxide']);
$terpenoids_carophyllene									=addslashes($_POST['terpenoids_carophyllene']);
$terpenoids_fenchol											=addslashes($_POST['terpenoids_fenchol']);
$terpenoids_geraniol										=addslashes($_POST['terpenoids_geraniol']);
$terpenoids_humulene										=addslashes($_POST['terpenoids_humulene']);
$terpenoids_limonene										=addslashes($_POST['terpenoids_limonene']);


$terpenoids_linalool										=addslashes($_POST['terpenoids_linalool']);
$terpenoids_myrcene											=addslashes($_POST['terpenoids_myrcene']);
$terpenoids_phellandrene									=addslashes($_POST['terpenoids_phellandrene']);
$terpenoids_terpinolene										=addslashes($_POST['terpenoids_terpinolene']);
$terpenoids_terpineol										=addslashes($_POST['terpenoids_terpineol']);
$terpenoids_terpinene										=addslashes($_POST['terpenoids_terpinene']);
$terpenoids_y_terpinene										=addslashes($_POST['terpenoids_y_terpinene']);
$total_nerolidol											=addslashes($_POST['total_nerolidol']);
$total_ocimene												=addslashes($_POST['total_ocimene']);
$terpenoids_pinene										=addslashes($_POST['terpenoids_pinene']);
$terpenoids_b_pinene										=addslashes($_POST['terpenoids_b_pinene']);


	/* Query for insert patient data in database */
	 $query="insert into strain_data(researcher_id,doctorId,patient_history_id,common_name,any_other_descriptors_1,any_other_descriptors_2,any_other_descriptors_3,any_other_descriptors_4,any_other_descriptors_5,country_of_origin,pedigree,pedigree_enter_the_parentage,breeder_name_if_known,growers,manufacturer_name,manufacturer_address,available_regions,available_region_country,accession_date,gender,percent_heterozygosity,location,grow_method,soil_mix,are_you_using_living_soil,day_light_during_vegetative_stage,night_light_during_vegetative_stage,day_light_during_reproductive_stage,night_light_during_reproductive_stage,temperature_during_vegetative_stage,temperature_during_reproductive_stage,relative_humidity_during_vegetative_stage,relative_humidity_during_reproductive_stage,co2_supplementation,co2_supplementation_ppm,light_spectrum_during_vegetative_stage,light_spectrum_during_reproductive_stage,lamp_type_vegetative_stage,lamp_type_reproductive_stage,watering_during_vegetative_stage,watering_during_reproductive_stage,fertilisers_during_vegetative_stage,fertilisers_during_reproductive_stage,fertilisers_vegetative_stage,fertilisers_reproductive_stage,time_from_seed_cutting_to_transplantation,time_from_transplantation_to_flower_induction,time_from_flower_induction_to_harvest,time_of_harvest,trichome_maturity,average_yield,outdoor_sowing_date,outdoor_harvest_date,average_height,cultivation_tips,drying_temperature,drying_humidity,drying_time,type_of_packaging,storage_temperature,storage_time,extraction_method,flavour_scent,cannabinoid_ingredient_thc_thca,cannabinoid_ingredient_cbd_cbda,cannabinoid_ingredient_thcv_thcva,cannabinoid_ingredient_cbc_cbca,cannabinoid_ingredient_cbg_cbga,cannabinoid_ingredient_cbn_cbna,terpenoids_bisabolol,terpenoids_borneol,terpenoids_camphene,terpenoids_carene,terpenoids_caryophyllene_oxide,terpenoids_carophyllene,terpenoids_fenchol,terpenoids_geraniol,terpenoids_humulene,terpenoids_limonene,terpenoids_linalool,terpenoids_myrcene,terpenoids_phellandrene,terpenoids_terpinolene,terpenoids_terpineol,terpenoids_terpinene,terpenoids_y_terpinene,total_nerolidol,total_ocimene,terpenoids_pinene,terpenoids_b_pinene,added_date)
  values('$researcher_id','$doctor_id','$patient_history_id','$common_name','$any_other_descriptors_1','$any_other_descriptors_2','$any_other_descriptors_3','$any_other_descriptors_4','$any_other_descriptors_5','$country_of_origin','$pedigree','$pedigree_enter_the_parentage','$breeder_name_if_known','$growers','$manufacturer_name','$manufacturer_address','$available_regions','$available_region_country','$accession_date','$gender','$percent_heterozygosity','$location','$grow_method','$soil_mix','$are_you_using_living_soil','$day_light_during_vegetative_stage','$night_light_during_vegetative_stage','$day_light_during_reproductive_stage','$night_light_during_reproductive_stage','$temperature_during_vegetative_stage','$temperature_during_reproductive_stage','$relative_humidity_during_vegetative_stage','$relative_humidity_during_reproductive_stage','$co2_supplementation','$co2_supplementation_ppm','$light_spectrum_during_vegetative_stage','$light_spectrum_during_reproductive_stage','$lamp_type_vegetative_stage','$lamp_type_reproductive_stage','$watering_during_vegetative_stage','$watering_during_reproductive_stage','$fertilisers_during_vegetative_stage','$fertilisers_during_reproductive_stage','$fertilisers_vegetative_stage','$fertilisers_reproductive_stage','$time_from_seed_cutting_to_transplantation','$time_from_transplantation_to_flower_induction','$time_from_flower_induction_to_harvest','$time_of_harvest','$trichome_maturity','$average_yield','$outdoor_sowing_date','$outdoor_harvest_date','$average_height','$cultivation_tips','$drying_temperature','$drying_humidity','$drying_time','$type_of_packaging','$storage_temperature','$storage_time','$extraction_method','$flavour_scent','$cannabinoid_ingredient_thc_thca','$cannabinoid_ingredient_cbd_cbda','$cannabinoid_ingredient_thcv_thcva','$cannabinoid_ingredient_cbc_cbca','$cannabinoid_ingredient_cbg_cbga','$cannabinoid_ingredient_cbn_cbna','$terpenoids_bisabolol','$terpenoids_borneol','$terpenoids_camphene','$terpenoids_carene','$terpenoids_caryophyllene_oxide','$terpenoids_carophyllene','$terpenoids_fenchol','$terpenoids_geraniol','$terpenoids_humulene','$terpenoids_limonene','$terpenoids_linalool','$terpenoids_myrcene','$terpenoids_phellandrene','$terpenoids_terpinolene','$terpenoids_terpineol','$terpenoids_terpinene','$terpenoids_y_terpinene','$total_nerolidol','$total_ocimene','$terpenoids_pinene','$terpenoids_b_pinene',now())";

  if (!mysqli_query($db,$query))
  {
	echo("Error description: " . mysqli_error($db));
  }
  
  //$exe_q=mysqli_query($db,$query);
  $strain_id=mysqli_insert_id($db);	

	if($_FILES['vcf_file_of_sequence']['name']!=''){
					$file_name = $_FILES['vcf_file_of_sequence']['name'];
					$file_size =$_FILES['vcf_file_of_sequence']['size'];
					$file_tmp =$_FILES['vcf_file_of_sequence']['tmp_name'];
					$file_type=$_FILES['vcf_file_of_sequence']['type'];
					$file_ext=strtolower(end(explode('.',$_FILES['vcf_file_of_sequence']['name'])));
				  
					$extensions= array("jpeg","jpg","png","pdf","gif","doc");
					$file_ext=strtolower($file_ext);
					  if(in_array($file_ext,$extensions)=== false){
						 $errors[]="extension not allowed, please choose a JPEG or PNG,GIF and PDF file.";
					  }
					  
					  if($file_size > 2097152){
						 $errors[]='File size must be excately 2 MB';
					  }
					
					if(empty($errors)==true){
					 move_uploaded_file($file_tmp,"../upload/strain/".$file_name);
						$query="update strain_data set 	vcf_file_of_sequence='$file_name' where id='$strain_id'";
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
		
		if($_FILES['fastq_files_of_sequence']['name']!=''){
					$file_name = $_FILES['fastq_files_of_sequence']['name'];
					$file_size =$_FILES['fastq_files_of_sequence']['size'];
					$file_tmp =$_FILES['fastq_files_of_sequence']['tmp_name'];
					$file_type=$_FILES['fastq_files_of_sequence']['type'];
					$file_ext=strtolower(end(explode('.',$_FILES['fastq_files_of_sequences']['name'])));
				  
					$extensions= array("jpeg","jpg","png","pdf","gif","doc");
					$file_ext=strtolower($file_ext);
					  if(in_array($file_ext,$extensions)=== false){
						 $errors[]="extension not allowed, please choose a JPEG or PNG,GIF and PDF file.";
					  }
					  
					  if($file_size > 2097152){
						 $errors[]='File size must be excately 2 MB';
					  }
					
					if(empty($errors)==true){
					 move_uploaded_file($file_tmp,"../upload/strain/".$file_name);
						$query="update strain_data set 	fastq_files_of_sequence='$file_name' where id='$strain_id'";
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
  
  
  /*Close database connection*/
  mysqli_close($db);

  /*Return with success message*/
  $arr = array('error' => "0",'msg'=>'success',"success"=>'1','flag_doctor_reseacher'=>$flag_doctor_reseacher);
  echo json_encode($arr);return true;

?>
  

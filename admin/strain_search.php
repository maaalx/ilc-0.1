<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
	require_once("includes/left.php");
	if(!checkPermissions($_SESSION['admin_user_id'],array(4))){ 
		header("location:index.php");
	}

?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
			Strain Search
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  
                </div><!-- /.box-header -->
                <div class="box-body">
				
				<div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li ><a href="search.php" >Disease Search</a></li>
                  <li class="active"><a href="strain_search.php" >Strain Search</a></li>
                  
                </ul>
                <div class="tab-content">
                  <div class=" tab-pane" id="activity">
                                 

                 
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane active" id="timeline">
						<form role="form" name="search" id="search" action="strain_search.php" method="post">  
				
				
				
				<div class="box-body">
                    

                    <div class="form-group">
                      <label>Strain name</label>
                      <input value="<?php if(isset($_POST['strain_name']))echo $_POST['strain_name']; ?>" class="form-control" type="text" name="strain_name" id="strain_name" placeholder="Strain name">
                    </div>
                   
                  </div>

                 


                  <div class="box-footer">
                    <div class="error" style="color:red"></div>
                    <button onclick="return validation()"  type="submit" class="btn btn-primary">Search</button>
					<img style="display:none" class="loading" src="img/loading.gif">
                  </div>
                </form>
                  </div><!-- /.tab-pane -->


                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
                <!-- form start -->
                
				
				<?php 
				
					if(isset($_POST['strain_name'])){
						$strain_name=$_POST['strain_name'];
						$search_query="select st.researcher_id,st.common_name,st.id,pt.	idpatientTreatment,st.vivo_id,st.vitro_id,st.patient_history_id,st.common_name,any_other_descriptors_1,st.any_other_descriptors_2,st.any_other_descriptors_3,st.any_other_descriptors_4,st.any_other_descriptors_5 from strain_data as st left join patienttreatment pt on st.patient_history_id=pt.patient_history_id where (st.ilc_id IS NOT NULL OR st.ilc_id!='') and (st.common_name like '%$strain_name%' OR st.any_other_descriptors_1 like '%$strain_name%' OR st.any_other_descriptors_2 like '%$strain_name%' OR st.any_other_descriptors_3 like '%$strain_name%' OR st.any_other_descriptors_4 like '%$strain_name%' OR st.any_other_descriptors_5 like '%$strain_name%')";
					
				?>
				
				<table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
					    <th>Strain Name</th>
                        <th>Disease Name</th>
                        <th>Efficacy Percent</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     
          <?php

$exe_query=mysqli_query($db,$search_query);		  
while($row=mysqli_fetch_assoc($exe_query)){
	$efficacyInpercent='';
	$diseaseName='';
	
	if($row['patient_history_id']!=NULL && $row['patient_history_id']!=''){
		$treatment_id=$row['idpatientTreatment'];
		$q=mysqli_query($db,"select efficacyInpercent from followups where treatmentNo='$treatment_id'");
		$followup=mysqli_fetch_assoc($q);
		$efficacyInpercent=$followup['efficacyInpercent'];
		
		$q=mysqli_query($db,"select ct.name from patienttreatment pt inner join conditionsofbeingtreated ct on ct.id=pt.conditionsOfBeingTreated where pt.idpatientTreatment='$treatment_id'");
		$temp_row=mysqli_fetch_assoc($q);
		$diseaseName=$temp_row['name'];
	}
	
	if($row['vivo_id']!=NULL && $row['vivo_id']!=''){
		$vivo_id=$row['vivo_id'];
		$q=mysqli_query($db,"select perent_efficacy_of_cannabis_treatment from vivo_experiment where id='$vivo_id'");
		$temp_row=mysqli_fetch_assoc($q);
		$efficacyInpercent=$temp_row['perent_efficacy_of_cannabis_treatment'];
		
		$q=mysqli_query($db,"select ct.name from vivo_experiment ve inner join conditionsofbeingtreated ct on ct.id=ve.condition_being_investigated where ve.id='$vivo_id'");
		$temp_row=mysqli_fetch_assoc($q);
		$diseaseName=$temp_row['name'];
	}
	
	if($row['vitro_id']!=NULL && $row['vitro_id']!=''){
		$vitro_id=$row['vitro_id'];
		
		$q=mysqli_query($db,"select percent_efficacy_in_cannabis_treatment_1,percent_efficacy_in_cannabis_treatment_2,percent_efficacy_in_cannabis_treatment_3,percent_efficacy_in_cannabis_treatment_4 from vitro_experiment where id='$vitro_id'");
		$temp_row=mysqli_fetch_assoc($q);
		if($temp_row['percent_efficacy_in_cannabis_treatment_1']!='0.00'){
			$efficacyInpercent=$temp_row['percent_efficacy_in_cannabis_treatment_1'];
		}elseif($temp_row['percent_efficacy_in_cannabis_treatment_2']!='0.00'){
			$efficacyInpercent=$temp_row['percent_efficacy_in_cannabis_treatment_2'];
		}elseif($temp_row['percent_efficacy_in_cannabis_treatment_3']!='0.00'){
			$efficacyInpercent=$temp_row['percent_efficacy_in_cannabis_treatment_3'];
		}else{
			$efficacyInpercent=$temp_row['percent_efficacy_in_cannabis_treatment_4'];
		}
		
		
		$q=mysqli_query($db,"select ct.name from vitro_experiment ve inner join conditionsofbeingtreated ct on ct.id=ve.condition_being_investigated where ve.id='$vitro_id'");
		$temp_row=mysqli_fetch_assoc($q);
		$diseaseName=$temp_row['name'];
		
	}	
 
?>

<tr>

<td><?php echo $row['common_name'];  ?></td>
<td><?php echo $diseaseName;  ?></td>
<td><?php echo $efficacyInpercent;  ?></td>



<td>
<a href="view_strain_data.php?id=<?php echo $row['id']; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View Strain Data</button></a>
<?php
$treatment_id=$row['idpatientTreatment'];
$temp_q=mysqli_query($db,"select researcher_id,patientId,doctorId from patienttreatment where idpatientTreatment='$treatment_id'");
$temp_row=mysqli_fetch_assoc($temp_q);

$researcher_id=$row['researcher_id'];
 if($_SESSION['admin_user_id']==$researcher_id && $row['patient_history_id']!='' && $row['patient_history_id']!=NULL){ ?>
<a href="view_patient_history.php?id=<?php echo $row['patient_history_id']; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View Patient History</button></a>

<a href="view_treatment.php?treatment_id=<?php echo $treatment_id; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View Treatment Details</button></a>
<?php } ?>

<?php 
if($row['patient_history_id']!=NULL && $row['patient_history_id']!=''){ ?>
				<?php if($temp_row['patientId']!=0 && $temp_row['patientId']!='' && $temp_row['patientId']!=NULL){ ?>
<a href="patient_details.php?id=<?php echo $temp_row['patientId']; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View Patient Details</button></a>
				<?php } ?>
	<?php if($temp_row['doctorId']!=0 && $temp_row['doctorId']!='' && $temp_row['doctorId']!=NULL){ ?>
<a href="doctor_details.php.php?id=<?php echo $temp_row['doctorId']; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View Doctor Details</button></a>
		<?php } ?>
<?php }  ?>

<?php if($row['vivo_id']!=NULL && $row['vivo_id']!=''){ ?>
<a href="view_vivo_experiment.php?id=<?php echo $vivo_id; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View Vivo Details</button></a>
<?php } ?>

<?php if($row['vitro_id']!=NULL && $row['vitro_id']!=''){ ?>
<a href="view_vitro_experiment.php?id=<?php echo $vitro_id; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View Vitro Details</button></a>
<?php } ?>
</td>
</tr>
<?php } ?>
</table>
<?php } ?>
              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      
<?php require_once("includes/footer.php"); ?>

<script type="text/javascript">
function validation(){
	if($("#strain_name").val()==''){
		alert('Please Enter Strain Name');return false;
	}
}

</script>
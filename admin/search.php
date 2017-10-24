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
				Disease Search
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
                  <li class="active"><a href="search.php" >Disease Search</a></li>
                  <li><a href="strain_search.php" >Strain Search</a></li>
                  
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <form role="form" name="search" id="search" action="search.php" method="post">  
				
				
				
				<div class="box-body">
                    

                    <div class="form-group">
                      <label>Disease name</label>
                      <input value="<?php if(isset($_POST['desease_name']))echo $_POST['desease_name']; ?>" class="form-control" type="text" name="desease_name" id="desease_name" placeholder="Disease name">
                    </div>
                   
                  </div>

                 


                  <div class="box-footer">
                    <div class="error" style="color:red"></div>
                    <button onclick="return validation()"  type="submit" class="btn btn-primary">Search</button>
					<img style="display:none" class="loading" src="img/loading.gif">
                  </div>
                </form>

                    

                 
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                   
                  </div><!-- /.tab-pane -->


                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
                <!-- form start -->
                
				
				<?php 
				
					if(isset($_POST['desease_name'])){
						$desease_name=$_POST['desease_name'];
						$search_query="select * from((select pt.patient_history_id,pt.patientId,pt.idpatientTreatment,fu.efficacyInpercent,'patienttreatment' as data_src,fu.efficacyInpercent as efficiency from patienttreatment  as pt
						right join conditionsofbeingtreated ci on ci.id=pt.conditionsOfBeingTreated
						left join followups fu on fu.treatmentNo=pt.idpatientTreatment
						where (ci.name like '%$desease_name%' OR pt.other_infections like '%$desease_name%'))
						UNION
						(select pt.patient_history_id,pt.patientId,pt.idpatientTreatment,fu.efficacyInpercent,'patienttreatment_in_cencer_type' as data_src,fu.efficacyInpercent as efficiency from patienttreatment  as pt
						right join cancer_types ct on ct.id=pt.cancer_type
						left join followups fu on fu.treatmentNo=pt.idpatientTreatment
						where (ct.name like '%$desease_name%'))
						UNION
						(select vr.id as vitro_id,vr.id as vitro_id,vr.id as vitro_id,vr.	percent_efficacy_in_cannabis_treatment_1,'vitro' as data_src,vr.	percent_efficacy_in_cannabis_treatment_1 as efficiency from vitro_experiment vr 
						right join conditionsofbeingtreated ci on ci.id=vr.condition_being_investigated
						where (ci.name like '%$desease_name%' OR vr.other_infections like '%$desease_name%'))
						UNION
						(select vr.id as vitro_id,vr.id as vitro_id,vr.id as vitro_id,vr.	percent_efficacy_in_cannabis_treatment_1,'vitro_cancer_type' as data_src,vr.	percent_efficacy_in_cannabis_treatment_1 as efficiency from vitro_experiment vr 
						right join cancer_types ct on ct.id=vr.cancer_type
						where (ct.name like '%$desease_name%'))
						UNION
						(select vv.id as vivo_id,vv.id as vivo_id,vv.id as vivo_id,vv.perent_efficacy_of_cannabis_treatment,'vivo' as data_src,vv.	perent_efficacy_of_cannabis_treatment as efficiency from vivo_experiment vv 
						right join conditionsofbeingtreated ci on ci.id=vv.condition_being_investigated
						where (ci.name like '%$desease_name%' OR vv.other_infections like '%$desease_name%'))
						UNION
						(select vv.id as vivo_id,vv.id as vivo_id,vv.id as vivo_id,vv.perent_efficacy_of_cannabis_treatment,'vivo_cancer_type' as data_src,vv.	perent_efficacy_of_cannabis_treatment as efficiency from vivo_experiment vv 
						right join cancer_types ct on ct.id=vv.condition_being_investigated
						where (ct.name like '%$desease_name%'))
						) collectone where (patient_history_id IS NOT NULL OR patientId IS NOT NULL
						 OR idpatientTreatment IS NOT NULL OR efficacyInpercent IS NOT NULL) order by efficiency desc
						";
						
						$exe_query=mysqli_query($db,$search_query);
						$total_rec=mysqli_num_rows($exe_query);
						
					if($total_rec<1){
						echo "<span style='color:red'>No result was found</span>";
					}
					if($total_rec>0){
				?>
				
				<table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
					    <th>Efficiency(%)</th>
                        <th>Strain ILC ID</th>
                        
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     
          <?php

		  
while($row=mysqli_fetch_assoc($exe_query)){
	if($row['data_src']=='patienttreatment'){
		$patient_history_id=$row['patient_history_id'];
		$query=mysqli_query($db,"select ilc_id,id from strain_data where patient_history_id='$patient_history_id' and (ilc_id IS NOT NULL OR ilc_id!='')");
		if(mysqli_num_rows($query)<1)continue;
		$strain_data=mysqli_fetch_assoc($query);
	}
	
	if($row['data_src']=='patienttreatment_in_cencer_type'){
		$patient_history_id=$row['patient_history_id'];
		$query=mysqli_query($db,"select ilc_id,id from strain_data where patient_history_id='$patient_history_id' and (ilc_id IS NOT NULL OR ilc_id!='')");
		if(mysqli_num_rows($query)<1)continue;
		$strain_data=mysqli_fetch_assoc($query);
	}
	
	if($row['data_src']=='vitro'){
		$vitro_id=$row['patient_history_id'];
		$query=mysqli_query($db,"select ilc_id,id from strain_data where vitro_id='$vitro_id' and (ilc_id IS NOT NULL OR ilc_id!='')");
		if(mysqli_num_rows($query)<1)continue;
		$strain_data=mysqli_fetch_assoc($query);
	}
	
	if($row['data_src']=='vitro_cancer_type'){
		$vitro_id=$row['patient_history_id'];
		$query=mysqli_query($db,"select ilc_id,id from strain_data where vitro_id='$vitro_id' and (ilc_id IS NOT NULL OR ilc_id!='')");
		if(mysqli_num_rows($query)<1)continue;
		$strain_data=mysqli_fetch_assoc($query);
	}
	
	if($row['data_src']=='vivo'){
		$vivo_id=$row['patient_history_id'];
		$query=mysqli_query($db,"select ilc_id,id from strain_data where vivo_id='$vivo_id' and (ilc_id IS NOT NULL OR ilc_id!='')");
		if(mysqli_num_rows($query)<1)continue;
		$strain_data=mysqli_fetch_assoc($query);
	}
	
	if($row['data_src']=='vivo_cancer_type'){
		$vivo_id=$row['patient_history_id'];
		$query=mysqli_query($db,"select ilc_id,id from strain_data where vivo_id='$vivo_id' and (ilc_id IS NOT NULL OR ilc_id!='')");
		if(mysqli_num_rows($query)<1)continue;
		$strain_data=mysqli_fetch_assoc($query);
	}
 
?>

<tr>

<td><?php echo $row['efficiency'];  ?></td>
<td><?php echo $strain_data['ilc_id'];  ?></td>



<td>
<a href="view_strain_data.php?id=<?php echo $strain_data['id']; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View Strain Data</button></a>
<?php
$treatment_id=$row['idpatientTreatment'];
$temp_q=mysqli_query($db,"select researcher_id,patientId,doctorId from patienttreatment where idpatientTreatment='$treatment_id'");
$temp_row=mysqli_fetch_assoc($temp_q);
$researcher_id=$temp_row['researcher_id'];
 if(($row['data_src']=='patienttreatment' || $row['data_src']=='patienttreatment_in_cencer_type') and ($_SESSION['admin_user_id']==$researcher_id)){ ?>
<a href="view_patient_history.php?id=<?php echo $row['patient_history_id']; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View Patient History</button></a>

<a href="view_treatment.php?treatment_id=<?php echo $treatment_id; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View Treatment Details</button></a>
<?php } ?>

<?php 
if(($row['data_src']=='patienttreatment' || $row['data_src']=='patienttreatment_in_cencer_type') and ($_SESSION['admin_user_id']!=$researcher_id)){ ?>
				<?php if($temp_row['patientId']!=0 && $temp_row['patientId']!='' && $temp_row['patientId']!=NULL){ ?>
<a href="patient_details.php?id=<?php echo $temp_row['patientId']; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View Patient Details</button></a>
				<?php } ?>
	<?php if($temp_row['doctorId']!=0 && $temp_row['doctorId']!='' && $temp_row['doctorId']!=NULL){ ?>
<a href="doctor_details.php.php?id=<?php echo $temp_row['doctorId']; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View Doctor Details</button></a>
		<?php } ?>
<?php }  ?>

<?php if($row['data_src']=='vivo' || $row['data_src']=='vivo_cancer_type'){ ?>
<a href="view_vivo_experiment.php?id=<?php echo $vivo_id; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View Vivo Details</button></a>
<?php } ?>

<?php if($row['data_src']=='vitro' || $row['data_src']=='vitro_cancer_type'){ ?>
<a href="view_vitro_experiment.php?id=<?php echo $vitro_id; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View Vitro Details</button></a>
<?php } ?>
</td>
</tr>
<?php } ?>
</table>
					<?php } } ?>
              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      
<?php require_once("includes/footer.php"); ?>

<script type="text/javascript">
function validation(){
	if($("#desease_name").val()==''){
		alert('Please Enter Disease Name');return false;
	}
}

</script>
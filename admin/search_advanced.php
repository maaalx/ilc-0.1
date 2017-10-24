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
				Advance Disease Search
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
                  <li class="active"><a href="search_advanced.php" >Advanced Disease Search</a></li>
                  <li><a href="strain_search_advanced.php" >Advanced Strain Search</a></li>
                  
                </ul>
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <form role="form" name="search" id="search" action="search_advanced.php" method="post">  
				
				
				
				<div class="box-body">
                    
					<div class="col-xs-6">
						<div class="form-group">
						  <label>Disease name</label>
						  <select onchange="return checkdisease()" class="form-control" name="desease_name" id="desease_name">
						  <option value="">Select</option>
						  <?php $q=mysqli_query($db,"select * from conditionsofbeingtreated order by name asc");
							while($row=mysqli_fetch_assoc($q)){?>
								<option <?php if(isset($_POST['desease_name']) && $_POST['desease_name']==$row['id'])echo "selected"; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
							<?php } ?>
						  </select>
						</div>
					</div>
					
					<div style="display:none" class="col-xs-6 cancer-types">
						<div class="form-group">
						  <label>Cancer Type</label>
						  <select class="form-control" name="cancer_type" id="cancer_type">
						  <option value="">Select</option>
						  <?php $q=mysqli_query($db,"select * from cancer_types order by name asc");
							while($row=mysqli_fetch_assoc($q)){?>
								<option <?php if(isset($_POST['cancer_type']) && $_POST['cancer_type']==$row['id'])echo "selected"; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
							<?php } ?>
						  </select>
						</div>
					</div>
					
					<div  class="col-xs-6 ">
						<div class="form-group">
						  <label>Patient Age</label>
						  <input class="form-control" type="number" name="p_age" id="p_age" value="<?php if(isset($_POST['p_age']))echo $_POST['p_age']; ?>">
						  
						</div>
					</div>
					
					<div class="col-xs-6 ">
						<div class="form-group">
						  <label>Gender</label>
						  <select class="form-control" name="gender" id="gender">
						  <option value="">Select</option>
						  <option <?php if(isset($_POST['gender']) && $_POST['gender']=='male')echo "selected"; ?> value="male">Male</option>
						  <option <?php if(isset($_POST['gender']) && $_POST['gender']=='female')echo "selected"; ?> value="female">Female</option>
						  </select>
						</div>
					</div>
					
					<div  class="col-xs-6 ">
						<div class="form-group">
						  <label>Height</label>
						  <input class="form-control" type="number" name="height" id="height" value="<?php if(isset($_POST['height']))echo $_POST['height']; ?>">
						  
						</div>
					</div>
					
					<div  class="col-xs-6 ">
						<div class="form-group">
						  <label>Weight</label>
						  <input class="form-control" type="number" name="weight" id="weight" value="<?php if(isset($_POST['weight']))echo $_POST['weight']; ?>">
						  
						</div>
					</div>
					
					<div  class="col-xs-6 ">
						<div class="form-group">
						  <label>Efficiency</label>
						  <input class="form-control" type="number" name="efficiency" id="efficiency" value="<?php if(isset($_POST['efficiency']))echo $_POST['efficiency']; ?>">
						  
						</div>
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
						$desease_name=addslashes($_POST['desease_name']);
						$p_age=addslashes($_POST['p_age']);
						$where= ' ';
						if($p_age!=''){
							$from_age=$p_age-5;
							$to_age=$p_age+5;
							$where.= " and TIMESTAMPDIFF(YEAR, u.dob, CURDATE()) >= '$from_age'
								AND TIMESTAMPDIFF(YEAR, u.dob, CURDATE()) <= '$to_age'";
						}
						$height=addslashes($_POST['height']);
						if($height!=''){
							$from_h=$height-5;
							$to_h=$height+5;
							$where.=" and p.height between $from_h and $to_h";
						}
						$weight=addslashes($_POST['weight']);
						if($weight!=''){
							$from_w=$weight-5;
							$to_w=$weight+5;
							$where.=" and p.weight between $from_w and $to_w";
						}
						$efficiency=addslashes($_POST['efficiency']);
						if($efficiency!=''){
							$from_e=$efficiency-5;
							$to_e=$efficiency+5;
							$where.=" and fu.efficacyInpercent between $from_e and $to_e";
						}
						
						$gender=addslashes($_POST['gender']);
						if($gender!=''){
							
							$where.=" and p.gender='$gender'";
						}
						$search_query="select * from((select pt.patient_history_id,pt.patientId,pt.idpatientTreatment,fu.efficacyInpercent,'patienttreatment' as data_src,fu.efficacyInpercent as efficiency from patienttreatment  as pt
						right join conditionsofbeingtreated ci on ci.id=pt.conditionsOfBeingTreated
						left join followups fu on fu.treatmentNo=pt.idpatientTreatment
						left join users as u on u.user_id= pt.patientId
						left join patient p on REPLACE(p.ilc_id,'P','')= pt.patientId
						where (ci.id = '$desease_name') $where)
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
function checkdisease(){
	if($("#desease_name").val()==15){
		$(".cancer-types").show();
	}else{
		$(".cancer-types").hide();
	}
}
function validation(){
	if($("#desease_name").val()==''){
		/*alert('Please Enter Disease Name');return false;*/
	}
}

</script>
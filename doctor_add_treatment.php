<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
	require_once("includes/left.php");
	if(!checkPermissions($_SESSION['admin_user_id'],array(3,4))){ 
		header("location:index.php");
	}
	 
	if(isset($_GET['user_id']) && $_GET['user_id']!=''){ 
		$patient_id=addslashes($_GET['user_id']); 
	}else{
		$patient_id=0;
	}
	$doctor_id=$_SESSION['admin_user_id'];
	
	if(checkPermissions($_SESSION['admin_user_id'],array(3))){ 
		if(!checkPatientBelongsToDoctor($patient_id,$doctor_id)){
			header("location:index.php");exit;
		}
	}
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Step 2: Add Treatment
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
                <!-- form start -->
                <form role="form" name="add_treatment" id="add_treatment" action="" method="post">  
				<input type="hidden" name="patient_history_id" id="patient_history_id" value="<?php echo addslashes($_GET['history_id']); ?>">
				
				<?php if(checkPermissions($_SESSION['admin_user_id'],array(3))){  ?>
				<div class="form-group ">
					<div class="form-group">
                      <label>Patient</label>
                      <select name="patient_id" id="patient_id" class="form-control">
						<option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from users where doctor_id='$doctor_id' order by fname, lname ");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option <?php if($row['user_id']==$patient_id)echo "selected"; ?> value="<?php echo $row['user_id']; ?>"><?php echo $row['fname'].' '.$row['lname']; ?></option>
						<?php 	
						}
					   ?>
						
                        
                      </select>
                    </div>  
				</div>
				<?php }else{
					?>
					<input type="hidden" name="patient_id" id="patient_id" value="<?php echo addslashes($patient_id); ?>">
				<?php 	
				} ?>
				<div class="form-group ">
					<div class="form-group">
                      <label>Cannabinoid Ratio</label>
                      <select name="cannabinoidRatio" id="cannabinoidRatio" class="form-control">
						
                        <option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from treatment_cannabinoid_ratio");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option  value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
						
                        
                      </select>
                    </div>
            
			</div>
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Dose Amount</label>
                      <select name="doseAmount" id="doseAmount" class="form-control">
						<option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from treatment_dose_amount");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option  value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
						
                        
                      </select>
                    </div>
            
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Minimum Daily</label>
                      <select name="minimumDaily" id="minimumDaily" class="form-control">
						<option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from treatment_target_dose_min");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option  value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
						
                        
                      </select>
                    </div>
            
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Maximum Daily</label>
                      <select name="maximumDaily" id="maximumDaily" class="form-control">
						<option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from treatment_target_dose_max");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option  value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
						
                        
                      </select>
                    </div>
            
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Method of Administration</label>
                      <select name="method_of_administration" id="method_of_administration" class="form-control">
						<option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from treatment_method_of_administration");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option  value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
						
                        
                      </select>
                    </div>
            
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Frequency</label>
                      <select name="frequency" id="frequency" class="form-control">
						<option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from treatment_frequency");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option  value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
						
                        
                      </select>
                    </div>
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Dosage type</label>
                      <select name="dosage_type" id="dosage_type" class="form-control">
						<option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from  treatment_dosage_type");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option  value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
						
                        
                      </select>
                    </div>
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Conditions Of Being Treated</label>
                      <select onchange="check_condition_treated(this.value)" name="conditionsOfBeingTreated" id="conditionsOfBeingTreated" class="form-control">
						<option value="">Select</option>
						<?php
							$query=mysqli_query($db,"select * from conditionsOfBeingTreated order by name");
							while($row=mysqli_fetch_assoc($query)){
								?>
								<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
								<?php
							}
						?>
                         <option value="oi">Other infections</option>					
                        
                      </select>
                    </div>
			</div>
			<div style="display:none" class="form-group cancer-type">
					<div class="form-group">
                      <label>Please select cancer type</label>
                      <select name="cancer_type" id="cancer_type" class="form-control">
						<option value="">Select</option>
						<?php
							$query=mysqli_query($db,"select * from cancer_types order by name");
							while($row=mysqli_fetch_assoc($query)){
								?>
								<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
								<?php
							}
						?>
                       					
                        
                      </select>
                    </div>
			</div>
				<div style="display:none" class="box-body other-infections">
                    <div class="form-group">
                      <label>Other infections</label>
                      <textarea  name="other_infections" id="other_infections" class="form-control" rows="3" placeholder="Other infections"></textarea>
                    </div>
                   
                </div>
			
		  
                  <div class="box-body">
                    

                    <div class="form-group">
                      <label>Description of Ailment</label>
                      <textarea  name="description" id="description" class="form-control" rows="3" placeholder="Dairy Text"></textarea>
                    </div>
                   
                  </div><!-- /.box-body -->


                  <div class="box-footer">
                    <div class="error" style="color:red"></div>
                    <button type="submit" class="btn btn-primary">Next</button>
                  </div>
                </form>
              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      
<?php require_once("includes/footer.php"); ?>

<script type="text/javascript">
function check_condition_treated(treated_type){
	if(treated_type==15){
		$(".cancer-type").show();
	}else{
		$(".cancer-type").hide();
	}
	
	
	if(treated_type=='oi'){
		$(".other-infections").show();
	}else{
		$(".other-infections").hide();
	}
}  
  
$(document).ready(function (e) { 
$("#add_treatment").on('submit',(function(e) {
e.preventDefault();


$.ajax({
url: "ajax/save-treatment.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,  
   
success: function(data)   // A function to be called if request succeeds
{
  var obj = jQuery.parseJSON(data);
  if( obj.error==1 ){
      $(".error").html(obj.msg);
  }else{
	  alert("Submitted successfully");
		window.location="add_strain_data.php?history_id=<?php echo $_GET['history_id']; ?>";
  }

}
});
return false;
}));
});
</script>
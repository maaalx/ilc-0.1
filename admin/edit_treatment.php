<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
	require_once("includes/left.php");
	if(!checkPermissions($_SESSION['admin_user_id'],array(5))){ 
		header("location:index.php");
	}
	 
	
	$admin_id=$_SESSION['admin_user_id'];
	$treatment_id=addslashes($_GET['treatment_id']);
	$query=mysqli_query($db,"select * from patienttreatment where idpatientTreatment='$treatment_id'");
	$data=mysqli_fetch_assoc($query);
	
	
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           update Treatment
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
                <form role="form" name="update_treatment" id="update_treatment" action="" method="post">  
				<input type="hidden" name="treatment_id" id="treatment_id" value="<?php echo addslashes($_GET['treatment_id']); ?>">

				<div class="form-group ">
					<div class="form-group">
                      <label>Cannabinoid Ratio</label>
                      <select name="cannabinoidRatio" id="cannabinoidRatio" class="form-control">
						
                        <option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from treatment_cannabinoid_ratio");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option <?php if($data['cannabinoidRatio']==$row['id'])echo 'selected'; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
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
						<option <?php if($data['doseAmount']==$row['id'])echo 'selected'; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
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
						<option <?php if($data['minimumDaily']==$row['id'])echo 'selected'; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
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
						<option <?php if($data['maximumDaily']==$row['id'])echo 'selected'; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
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
						<option <?php if($data['method_of_administration']==$row['id'])echo 'selected'; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
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
						<option <?php if($data['frequency']==$row['id'])echo 'selected'; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
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
						<option <?php if($data['dosage_type']==$row['id'])echo 'selected'; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
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
								<option <?php if($data['conditionsOfBeingTreated']==$row['id'])echo 'selected'; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
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
								<option <?php if($data['cancer_type']==$row['id'])echo 'selected'; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
								<?php
							}
						?>
                       					
                        
                      </select>
                    </div>
			</div>
				<div style="display:none" class="box-body other-infections">
                    <div class="form-group">
                      <label>Other infections</label>
                      <textarea value="<?php echo $data['other_infections']; ?>"  name="other_infections" id="other_infections" class="form-control" rows="3" placeholder="Other infections"></textarea>
                    </div>
                   
                </div>
			
		  
                  <div class="box-body">
                    

                    <div class="form-group">
                      <label>Description of Ailment</label>
                      <textarea  name="description" id="description" class="form-control" rows="3" placeholder="Dairy Text"><?php echo $data['description']; ?></textarea>
                    </div>
                   
                  </div><!-- /.box-body -->


                  <div class="box-footer">
                    <div class="error" style="color:red"></div>
                    <button type="submit" class="btn btn-primary">Update</button>
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
$("#update_treatment").on('submit',(function(e) {
e.preventDefault();


$.ajax({
url: "ajax/update_treatment.php", // Url to which the request is send
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
		window.location="edit_treatment.php?treatment_id="+$("#treatment_id").val();
  }

}
});
return false;
}));
});
</script>
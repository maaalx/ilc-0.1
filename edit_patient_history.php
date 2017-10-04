<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
	require_once("includes/left.php");
	if(!checkPermissions($_SESSION['admin_user_id'],array(5))){ 
		header("location:index.php");
	}

	
	$admin_id=$_SESSION['admin_user_id'];
	
	$history_id=addslashes($_GET['history_id']);
	$query=mysqli_query($db,"select * from patient_history where id='$history_id'");
	$data=mysqli_fetch_assoc($query);
	
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
			Update Patient History
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
                <form role="form" name="update_patient_history" id="update_patient_history" action="" method="post">  
				<input type="hidden" name="history_id" id="history_id" value="<?php echo $history_id; ?>">
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Admission Type(<span style="color:red">*</span>)</label>
                      <select onchange="check_admission_type(this.value)" name="admission_type" id="admission_type" class="form-control">
						<option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from patient_history_admission_types");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option <?php if($data['admission_type']==$row['id'])echo 'selected'; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
						
                        
                      </select>
					  <input style="display:none" class="form-control" type="text" name="other_admission_type" id="other_admission_type" placeholder="Other Admission Type">
                    </div>
            
			</div>
				<div class="form-group ">
					<div class="form-group">
                      <label>Qualification Status(<span style="color:red">*</span>)</label>
                      <select name="qualification_status" id="qualification_status" class="form-control">
						<option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from patient_history_qualification_status");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option  <?php if($data['qualification_status']==$row['id'])echo 'selected'; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
						
                        
                      </select>
                    </div>
            
			</div>
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Criterion for Admission(<span style="color:red">*</span>)</label>
                     <select name="criterion_for_admission" id="criterion_for_admission" class="form-control">
						<option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from patient_history_criterion_for_admission");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option <?php if($data['criterion_for_admission']==$row['id'])echo 'selected'; ?>  value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
						
                        
                      </select>
                    </div>
            
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Intended Duration(<span style="color:red">*</span>)</label>
                      <select name="intended_duration" id="intended_duration" class="form-control">
						<option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from patient_history_intended_duration");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option <?php if($data['intended_duration_of_stay']==$row['id'])echo 'selected'; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
						
                        
                      </select>
                    </div>
            
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Admission Weight(<span style="color:red">*</span>)</label>
                      <select name="admission_weight" id="admission_weight" class="form-control">
						<option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from patient_history_admission_weight");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option  <?php if($data['admission_weight']==$row['id'])echo 'selected'; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
					   </select>
                    </div>
            
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>FIM Score on Admission(<span style="color:red">*</span>)</label>
                      <select name="fim_score_on_admission" id="fim_score_on_admission" class="form-control">
						<option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from patient_history_fim_score_on_admission");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option <?php if($data['FIM_Score_on_Admission']==$row['id'])echo 'selected'; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
						
                        
                      </select>
                    </div>
            
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Admission/Read mission to Rehabilitation(<span style="color:red">*</span>)</label>
                      <select name="admission_read_mission_to_rehabilitation" id="admission_read_mission_to_rehabilitation" class="form-control">
						<option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from patient_history_admission_read_mission_to_rehabilitation");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option <?php if($data['Admission_readmission_to_rehabilitation']==$row['id'])echo 'selected'; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
						
                        
                      </select>
                    </div>
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>RUG ADL on Admission(<span style="color:red">*</span>)</label>
                      <select name="rug_adl_on_admission" id="rug_adl_on_admission" class="form-control">
						<option value="">Select</option>
						<?php 
						$query=mysqli_query($db,"select * from patient_history_rug_adl_on_admission");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option <?php if($data['RUG_ADL_on_admission']==$row['id'])echo 'selected'; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
                        					
                        
                      </select>
                    </div>
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Source of Referral to Palliative Care(<span style="color:red">*</span>)</label>
                      <select onchange="return check_referral_care(this.value)" name="source_of_referral_to_palliative_care" id="source_of_referral_to_palliative_care" class="form-control">
						<option value="">Select</option>
						<?php 
						$query=mysqli_query($db,"select * from patient_history_source_of_referral_to_palliative_care");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option <?php if($data['Source_of_referral_to_palliative_care']==$row['id'])echo 'selected'; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
                        					
                        
                      </select>
					   <input style="display:none" class="form-control" type="text" name="other_source_of_referral_to_palliative_care" id="other_source_of_referral_to_palliative_care" placeholder="Other Source of Referral to Palliative Care">
                    </div>
			</div>
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Patient Type(<span style="color:red">*</span>)</label>
                      <select name="patient_type" id="patient_type" class="form-control">
						<option value="">Select</option>
						<?php 
						$query=mysqli_query($db,"select * from patient_history_patient_type");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option <?php if($data['Patient_type']==$row['id'])echo 'selected'; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
                        					
                        
                      </select>
                    </div>
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Accommodation Type during Admission(<span style="color:red">*</span>)</label>
                      <select name="accommodation_type_during_admission" id="accommodation_type_during_admission" class="form-control">
						<option value="">Select</option>
						<?php 
						$query=mysqli_query($db,"select * from patient_history_accommodation_type_during_admission");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option  <?php if($data['Accommodation_type_during_admission']==$row['id'])echo 'selected'; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
                        					
                        
                      </select>
                    </div>
			</div>
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Admission Source(<span style="color:red">*</span>)</label>
                      <select name="admission_source" id="admission_source" class="form-control">
						<option value="">Select</option>
						<?php 
						$query=mysqli_query($db,"select * from patient_history_admission_source");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option <?php if($data['Admission_Source']==$row['id'])echo 'selected'; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
                        					
                        
                      </select>
                    </div>
			</div>
			<div class="box-body">
                    

                    <div class="form-group">
                      <label>Hospital Campus Code(<span style="color:red">*</span>)</label>
                      <input class="form-control" type="text" name="hospital_campus_code" id="hospital_campus_code" placeholder="Hospital Campus Code" value="<?php echo $data['hospital_campus_code']; ?>">
                    </div>
                   
                  </div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Interpreter Required(<span style="color:red">*</span>)</label>
                      <select name="interpreter_required" id="interpreter_required" class="form-control">
						<option value="">Select</option>
						<?php 
						$query=mysqli_query($db,"select * from patient_history_interpreter_required");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option <?php if($data['Interpreter_Required']==$row['id'])echo 'selected'; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
                        					
                        
                      </select>
                    </div>
			</div>	
                  <div class="box-body">
                    

                    <div class="form-group">
                      <label>Comments</label>
                      <textarea  name="comments" id="comments" class="form-control" rows="3" placeholder="Comments"><?php echo $data['comment']; ?></textarea>
                    </div>
                   
                  </div><!-- /.box-body -->


                  <div class="box-footer">
                    <div class="error" style="color:red"></div>
                    <button type="submit" class="btn btn-primary">Update</button>
					<img style="display:none" class="loading" src="img/loading.gif">
                  </div>
                </form>
              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      
<?php require_once("includes/footer.php"); ?>

<script type="text/javascript">
function check_referral_care(referral_care){
	if(referral_care==9){
		$("#other_source_of_referral_to_palliative_care").show();
	}else{
		$("#other_source_of_referral_to_palliative_care").hide();
	}
}
function check_admission_type(type_id){
	if(type_id==8){
		$("#other_admission_type").show();
	}else{
		$("#other_admission_type").hide();
	}
}
  
$(document).ready(function (e) { 
$("#update_patient_history").on('submit',(function(e) {
	$(".loading").show();
e.preventDefault();


$.ajax({
url: "ajax/update_patient_history.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,  
   
success: function(data)   // A function to be called if request succeeds
{
 $(".loading").hide();	
  var obj = jQuery.parseJSON(data);
  if( obj.error==1 ){
      $(".error").html(obj.msg);
  }else{
	    alert("Submitted successfully");
		window.location="edit_patient_history.php?history_id="+$("#history_id").val();
  }

}
});
return false;
}));
});
</script>
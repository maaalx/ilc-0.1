<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
	require_once("includes/left.php");
	if(!checkPermissions($_SESSION['admin_user_id'],array(4))){ 
		header("location:index.php");
	}
	 
	if(isset($_GET['id']) && $_GET['id']!=''){ 
		$id=addslashes($_GET['id']); 
	}
	
	$query=mysqli_query($db,"select * from patient_history where id='$id'");
    $history_data=mysqli_fetch_assoc($query);	
	
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          View Patient History
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
                <form role="form" name="add_patient_history" id="add_patient_history" action="" method="post">  
				<input type="hidden" name="patient_id" id="patient_id" value="<?php echo $_SESSION['admin_user_id']; ?>">
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Admission Type</label>
					  <?php $admission_type=$history_data['admission_type'];
							$query=mysqli_query($db,"select * from patient_history_admission_types where id='$admission_type'");
							$row=mysqli_fetch_assoc($query);
							echo $row['name'];
					  ?>
                     
                    </div>
            
			</div>
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Other Admission Type</label>
					  <?php echo $history_data['other_admission_type'];
							
					  ?>
                    </div>
            
			</div>
				<div class="form-group ">
					<div class="form-group">
                      <label>Qualification Status</label>
					  <?php $qualification_status=$history_data['qualification_status'];
							$query=mysqli_query($db,"select * from patient_history_qualification_status where id='$qualification_status'");
							$row=mysqli_fetch_assoc($query);
							echo $row['name'];
					  ?>
                     
                    </div>
            
			</div>
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Criterion for Admission</label>
					   <?php $criterion_for_admission=$history_data['criterion_for_admission'];
							$query=mysqli_query($db,"select * from patient_history_criterion_for_admission where id='$criterion_for_admission'");
							$row=mysqli_fetch_assoc($query);
							echo $row['name'];
					  ?>
                     
                    </div>
            
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Intended Duration</label>
					  <?php $intended_duration=$history_data['intended_duration_of_stay'];
							$query=mysqli_query($db,"select * from patient_history_intended_duration where id='$intended_duration'");
							$row=mysqli_fetch_assoc($query);
							echo $row['name'];
					  ?>
                     
                    </div>
            
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Admission Weight</label>
					  <?php $admission_weight=$history_data['admission_weight'];
							$query=mysqli_query($db,"select * from patient_history_admission_weight where id='$admission_weight'");
							$row=mysqli_fetch_assoc($query);
							echo $row['name'];
					  ?>
                      
                    </div>
            
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>FIM Score on Admission</label>
					  <?php $FIM_Score_on_Admission=$history_data['FIM_Score_on_Admission'];
							$query=mysqli_query($db,"select * from patient_history_fim_score_on_admission where id='$FIM_Score_on_Admission'");
							$row=mysqli_fetch_assoc($query);
							echo $row['name'];
					  ?>
                      
                    </div>
            
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Admission/Read mission to Rehabilitation</label>
					  <?php $Admission_readmission_to_rehabilitation=$history_data['Admission_readmission_to_rehabilitation'];
							$query=mysqli_query($db,"select * from patient_history_admission_read_mission_to_rehabilitation where id='$Admission_readmission_to_rehabilitation'");
							$row=mysqli_fetch_assoc($query);
							echo $row['name'];
					  ?>
                      
                    </div>
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>RUG ADL on Admission</label>
					   <?php $RUG_ADL_on_admission=$history_data['RUG_ADL_on_admission'];
							$query=mysqli_query($db,"select * from patient_history_rug_adl_on_admission where id='$RUG_ADL_on_admission'");
							$row=mysqli_fetch_assoc($query);
							echo $row['name'];
					  ?>
                      
                    </div>
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Source of Referral to Palliative Care</label>
					  <?php $Source_of_referral_to_palliative_care=$history_data['Source_of_referral_to_palliative_care'];
							$query=mysqli_query($db,"select * from patient_history_source_of_referral_to_palliative_care where id='$Source_of_referral_to_palliative_care'");
							$row=mysqli_fetch_assoc($query);
							echo $row['name'];
					  ?>
                     
					  
                    </div>
			</div>
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Other Source of Referral to Palliative Care</label>
					  <?php echo $history_data['other_source_of_referral_to_palliative_care'];
							
					  ?>
                    </div>
			</div>
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Patient Type</label>
					  <?php $Patient_type=$history_data['Patient_type'];
							$query=mysqli_query($db,"select * from patient_history_patient_type where id='$Patient_type'");
							$row=mysqli_fetch_assoc($query);
							echo $row['name'];
					  ?>
					  
                      
                    </div>
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Accommodation Type during Admission</label>
					  <?php $Accommodation_type_during_admission=$history_data['Accommodation_type_during_admission'];
							$query=mysqli_query($db,"select * from patient_history_accommodation_type_during_admission where id='$Accommodation_type_during_admission'");
							$row=mysqli_fetch_assoc($query);
							echo $row['name'];
					  ?>
					  
                     
                    </div>
			</div>
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Admission Source</label>
					  <?php $Admission_Source=$history_data['Admission_Source'];
							$query=mysqli_query($db,"select * from patient_history_admission_source where id='$Admission_Source'");
							$row=mysqli_fetch_assoc($query);
							echo $row['name'];
					  ?>
                      
                    </div>
			</div>
			<div class="box-body">
                    

                    <div class="form-group">
                      <label>Hospital Campus Code</label>
                      <?php echo $history_data['hospital_campus_code']; ?>
                    </div>
                   
                  </div>
				  <!--
			<div class="form-group ">
					<div class="form-group">
                      <label>Interpreter Required</label>
					  <?php $Interpreter_Required=$history_data['Interpreter_Required'];
							$query=mysqli_query($db,"select * from patient_history_interpreter_required where id='$Interpreter_Required'");
							$row=mysqli_fetch_assoc($query);
							echo $row['name'];
					  ?>
                      
                    </div>
			</div>	 -->
                  <div class="box-body">
                    

                    <div class="form-group">
                      <label>Comments</label>
                      <?php echo $history_data['comment']; ?>
                    </div>
                   
                  </div><!-- /.box-body -->


                  
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
$("#add_patient_history").on('submit',(function(e) {
	$(".loading").show();
e.preventDefault();


$.ajax({
url: "ajax/save-patient_history.php", // Url to which the request is send
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
		window.location="add-treatment.php?history_id="+obj.history_id;
  }

}
});
return false;
}));
});
</script>
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
	
	
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          Step 1: Add Patient History
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
				<input type="hidden" name="patient_id" id="patient_id" value="<?php echo addslashes($patient_id); ?>">
				
				<?php if(checkPermissions($_SESSION['admin_user_id'],array(4))){  ?>
				<div class="form-group ">
						<label>First Name <span style="color:red">*</span></label>
						<input type="text" value="" class="form-control" name="first_name" id="first_name" placeholder="First name">
						<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
		  
				  <div class="form-group ">
					<label>Last Name <span style="color:red">*</span></label>
					<input type="text" value="" class="form-control" name="last_name" id="last_name" placeholder="Last name">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				  </div>
				  
				   <div class="form-group">
					   <label>Date Of Birth</label>
						<div class="input-group">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input value="" type="text" name="dob" id="dob" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
								</div><!-- /.input group -->
					  </div>
					  
				<div class="form-group has-feedback">
				<label>Height in (Foot,Inches)</label>
				<input value="" type="text" name="height" id="height" class="form-control" placeholder="Height">
				
			</div>
			
			<div class="form-group has-feedback">
				<label>Weight(Kilograms)</label>
				<input value="" type="text" name="weight" id="weight" class="form-control" placeholder="Weight">
				
			</div>
         
			<div class="form-group has-feedback">
				<label>Ethnicity</label>
				<select name="ethnicity" id="ethnicity" class="form-control">
					  <option value='0'>Select</option>
					  <?php $temp_query=mysqli_query($db,"select * from patient_ethnicity order by name");
						while($eth_row=mysqli_fetch_assoc($temp_query)){
						?>
                        <option value="<?php echo $eth_row['id']; ?>"><?php echo $eth_row['name']; ?></option>
                        <?php } ?>
                      </select>
				
			</div>
				<?php } ?>
			<div class="form-group ">
					<div class="form-group">
                      <label>Gender</label>
					  
                      <select name="gender" id="gender" class="form-control">
					   <option  value="">Select</option>
					  <option  value="male">Male</option>
                      <option  value="female">Female</option>  
                      <option  value="other">Other</option>  
						
                        
                      </select>
                    </div>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
			
				
                  <div class="form-group">
                    

                    <div class="form-group">
                      <label>Comments</label>
                      <textarea  name="comments" id="comments" class="form-control" rows="3" placeholder="Comments"></textarea>
                    </div>
                   
                  </div><!-- /.box-body -->


                  <div class="box-footer">
                    <div class="error" style="color:red"></div>
                    <button type="submit" class="btn btn-primary">Next</button>
					<img style="display:none" class="loading" src="img/loading.gif">
                  </div>
                </form>
              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      
<?php require_once("includes/footer.php"); ?>
<!-- Select2 -->
    <script src="plugins/select2/select2.full.min.js"></script>
	 <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
	
	 <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        
      });
    </script>
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
url: "ajax/researcher_save-patient_history.php", // Url to which the request is send
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
		window.location="doctor_add_treatment.php?user_id="+obj.patient_id+"&history_id="+obj.history_id;
  }

}
});
return false;
}));
});
</script>
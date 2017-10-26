<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
	require_once("includes/left.php");
	$patient_id=$_SESSION['admin_user_id'];
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Add FollowUps
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
                <form role="form" name="add_followup" id="add_followup" action="" method="post">  
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Select Treatment(Treatment Number)</label>
					 
                      <select name="treatment_id" id="treatment_id" class="form-control">
						<option value="0">Select</option>
                        <?php
						
							$query=mysqli_query($db,"select * from patienttreatment where patientId='$patient_id'");
							while($row=mysqli_fetch_assoc($query)){
								?>
								<option value="<?php echo $row['idpatientTreatment']; ?>"><?php echo $row['idpatientTreatment']; ?></option>
							<?php	}
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
						$query=mysqli_query($db,"select * from follow_up_frequency");
						while($frow=mysqli_fetch_assoc($query)){
							?>
							<option value="<?php echo $frow['id']; ?>"><?php echo $frow['name']; ?></option>
						<?php	
						}
					  ?>
                        
                      </select>
                    </div>
			</div>
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Efficiency (%)</label>
					  <input type="text" name="efficacyInpercent" id="efficacyInpercent" class="form-control">
                     
                    </div>
			</div>
			
  
                  <div class="box-body">
                    

               				<div class="form-group ">
					<div class="form-group">
                      <label>Side Effects</label>
                      <select multiple name="side_effects_of_cannabis_treatment[]" id="side_effects_of_cannabis_treatment" class="form-control">
						<option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from side_effect order by name");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option  value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
						
                        
                      </select>
					  <span style="color:red">Press control key to select multiple</span>
				</div>
			</div>
                   
                  </div><!-- /.box-body -->
				  
				  
				  <div class="form-group ">
					<div class="form-group">
                      <label>Improvement In Secondary Condition</label>
                      <select onchange="check_condition_treated(this.value)" name="improvementInSecondaryCondition" id="improvementInSecondaryCondition" class="form-control">
						<option value="">Select</option>
						<?php
							$query=mysqli_query($db,"select * from conditionsofbeingtreated order by name");
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
			


                  <div class="box-footer">
                    <div class="error" style="color:red"></div>
                    <button type="submit" class="btn btn-primary">Submit</button>
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
$("#add_followup").on('submit',(function(e) {
e.preventDefault();


$.ajax({
url: "ajax/save_follow_up.php", // Url to which the request is send
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
		window.location="index.php";
  }

}
});
return false;
}));
});
</script>
<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
	require_once("includes/left.php");
	if(isset($_GET['treatment_id']) && $_GET['treatment_id']!='' ){
	   $treatment_id=  addslashes($_GET['treatment_id']);
	   	
	}
	
	if(!checkPermissions($_SESSION['admin_user_id'],array(2,4))){ 
		header("location:index.php");
	 }
	 
	$query=mysqli_query($db,"select pt.* from patienttreatment pt where pt.idpatientTreatment='$treatment_id'"); 
	$data=mysqli_fetch_assoc($query);
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Treatment Detail
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
                <form role="form" name="add_comments" id="add_comments" action="" method="post">  
				<input type="hidden" name="treatment_id" id="treatment_id" value="<?php echo $treatment_id; ?>">
				<div class="form-group ">
					<div class="form-group">
                      <label>Cannabinoid Ratio:</label>
                     <?php echo $data['cannabinoidRatio']; ?>
                    </div>
            
			</div>
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Dose Amount:</label>
                     <?php echo $data['doseAmount']; ?>
                    </div>
            
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Minimum Daily:</label>
                      <?php echo $data['minimumDaily']; ?>
                    </div>
            
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Maximum Daily:</label>
                      <?php echo $data['maximumDaily']; ?>
                    </div>
            
			</div>
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Frequency:</label>
                      <?php echo $data['frequency']; ?>
                    </div>
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Conditions Of Being Treated:</label>
                      
						<?php
							$conditionid=$data['conditionsOfBeingTreated'];
							$tquery=mysqli_query($db,"select * from conditionsofbeingtreated where id='$conditionid' ");
							$trow=mysqli_fetch_assoc($tquery);
							echo $trow['name'];
								
						?>
                        					
                        
                      </select>
                    </div>
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Description:</label>
                      
						<?php echo $data['description']; ?>			
                        
                      </select>
                    </div>
			</div>

                </form>
              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      
<?php require_once("includes/footer.php"); ?>

<script type="text/javascript">
  
$(document).ready(function (e) { 
$("#add_comments").on('submit',(function(e) {
e.preventDefault();


$.ajax({
url: "ajax/save-comments.php", // Url to which the request is send
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
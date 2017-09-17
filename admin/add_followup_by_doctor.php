<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
	require_once("includes/left.php");
	$patient_id=$_SESSION['admin_user_id'];
	$treatment_id=addslashes($_GET['treatment_id']);
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
				<input type="hidden" name="treatment_id" id="treatment_id" value="<?php echo $treatment_id; ?>">
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Frequency</label>
                      <select name="frequency" id="frequency" class="form-control">
						<option value="1">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						
                        
                      </select>
                    </div>
			</div>
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Effcient In Percentag</label>
                      <select name="efficacyInpercent" id="	efficacyInpercent" class="form-control">
						<option value="0">0%</option>
                        <option value="10">10%</option>
                        <option value="20">20%</option>
                        <option value="30">30%</option>
                        <option value="40">40%</option>
						<option value="50">50%</option>
						<option value="60">60%</option>
						<option value="70">70%</option>
						<option value="80">80%</option>
						<option value="90">90%</option>
						<option value="100">100%</option>
						
                        
                      </select>
                    </div>
			</div>
			
  
                  <div class="box-body">
                    

                    <div class="form-group">
                      <label>Side Effect</label>
                      <textarea  name="sideEffect" id="sideEffect" class="form-control" rows="3" placeholder="Side Effect"></textarea>
                    </div>
                   
                  </div><!-- /.box-body -->
				  
				   <div class="box-body">
                    

                    <div class="form-group">
                      <label>Improvement In Secondary Condition</label>
                      <textarea  name="improvementInSecondaryCondition" id="improvementInSecondaryCondition" class="form-control" rows="3" placeholder="Improvement In Secondary Condition"></textarea>
                    </div>
                   
                  </div><!-- /.box-body -->


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
		window.location="my-treatments.php";
  }

}
});
return false;
}));
});
</script>
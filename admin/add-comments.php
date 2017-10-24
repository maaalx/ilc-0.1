<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
	require_once("includes/left.php");
	if(isset($_GET['follow_up_id']) && $_GET['follow_up_id']!='' ){
	   $follow_up_id=  addslashes($_GET['follow_up_id']);
	   	
	}
	$treatment_id=  addslashes($_GET['treatment_id']);
	if(!checkPermissions($_SESSION['admin_user_id'],array(3))){ 
		header("location:index.php");
	 }
	 
	$query=mysqli_query($db,"select * from followups where idfollowUps='$follow_up_id'"); 
	$data=mysqli_fetch_assoc($query);
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Add Comments
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
				<input type="hidden" name="follow_up_id" id="follow_up_id" value="<?php echo $follow_up_id; ?>">
				<input type="hidden" name="treatment_id" id="treatment_id" value="<?php echo $treatment_id; ?>">
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Frequency:</label>
                     <?php echo $data['frequency']; ?>
                    </div>
            
			</div>
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Efficacy Inpercent:</label>
                     <?php echo $data['efficacyInpercent']; ?>
                    </div>
            
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Dide Effect:</label>
                      <?php echo $data['sideEffect']; ?>
                    </div>
            
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Improvement In Secondary Condition:</label>
                      <?php echo $data['improvementInSecondaryCondition']; ?>
                    </div>
            
			</div>

		  
                  <div class="box-body">
                    

                    <div class="form-group">
                      <label>Comments</label>
                      <textarea  name="comments" id="comments" class="form-control" rows="3" placeholder="Comments"></textarea>
                    </div>
                   
                  </div><!-- /.box-body -->


                  <div class="box-footer">
                    <div class="error" style="color:red"></div>
                    <button type="submit" class="btn btn-primary">Add Comments</button>
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
	  var treatment_id= $("#treatment_id").val();
	  alert("Submitted successfully");
		window.location="treatment_followups.php?treatment_id="+treatment_id;
  }

}
});
return false;
}));
});
</script>
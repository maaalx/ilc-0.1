<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
	require_once("includes/left.php");
	if(!checkPermissions($_SESSION['admin_user_id'],array(4))){ 
		header("location:index.php");
	}
	 
	if(isset($_GET['user_id']) && $_GET['user_id']!=''){ 
		$patient_id=addslashes($_GET['user_id']); 
	}else{
		$patient_id=0;
	}
	$doctor_id=$_SESSION['admin_user_id'];
	
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
				Add Article
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
                <form role="form" name="add_article" id="add_article" action="" method="post">  
				
				
				
				<div class="box-body">
                    

                    <div class="form-group">
                      <label>Article Name(<span style="color:red">*</span>)</label>
                      <input class="form-control" type="text" name="article_name" id="article_name" placeholder="Article Name">
                    </div>
                   
                  </div>
				  
				  <div class="box-body">
                    

                    <div class="form-group">
                      <label>Article URL(<span style="color:red">*</span>)</label>
                      <input class="form-control" type="text" name="article_url" id="article_url" placeholder="Article URL">
                    </div>
                   
                  </div>

                 


                  <div class="box-footer">
                    <div class="error" style="color:red"></div>
                    <button type="submit" class="btn btn-primary">Submit</button>
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
$("#add_article").on('submit',(function(e) {
	
e.preventDefault();

if($("#article_name").val()==''){
	alert("Please enter article name");
	return false;
}

if($("#article_url").val()==''){
	alert("Please enter article URL");
	return false;
}
$(".loading").show();
$.ajax({
url: "ajax/save-article.php", // Url to which the request is send
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
	    alert("Article successfully..Pending for admin approval.");
		window.location="all_articles.php";
  }

}
});
return false;
}));
});
</script>
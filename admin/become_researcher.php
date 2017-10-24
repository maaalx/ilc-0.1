<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
	require_once("includes/left.php");
	if(!checkPermissions($_SESSION['admin_user_id'],array(2,3))){ 
		header("location:index.php");
	}
	
	
	$flag=0;
	$errors=array();
	$file_name='';
		if(isset($_POST['save'])){
				
				$errors= array();
				if($_FILES['app_doc']['name']!=''){
						$file_name = $_FILES['app_doc']['name'];
						$file_size =$_FILES['app_doc']['size'];
						$file_tmp =$_FILES['app_doc']['tmp_name'];
						$file_type=$_FILES['app_doc']['type'];
						$file_ext=strtolower(end(explode('.',$_FILES['app_doc']['name'])));
					  
						$extensions= array("jpeg","jpg","png","pdf","gif");
						$file_ext=strtolower($file_ext);
						  if(in_array($file_ext,$extensions)=== false){
							 $errors[]="extension not allowed, please choose a JPEG or PNG,GIF and PDF file.";
						  }
						  
						  if($file_size > 2097152){
							 $errors[]='File size must be excately 2 MB';
						  }
						  move_uploaded_file($file_tmp,"upload/certifications/".$file_name);
				}
				
				if(empty($errors)==true){
					$user_type=0;
				    if(checkPermissions($_SESSION['admin_user_id'],array(2))){ 
							$user_type=2;
					}
					if(checkPermissions($_SESSION['admin_user_id'],array(3))){ 
							$user_type=3;
					}
					$patient_id		=$_SESSION['admin_user_id'];
					$why_researcher	=addslashes($_POST['why_researcher']);
					
					 $query="insert into become_researcher(user_id,user_type_id,why_researcher,attachment_doc,	added_date)values('$patient_id','$user_type','$why_researcher','$file_name',now())";
					$run_q=mysqli_query($db,$query);
				 $flag=1;
			  }else{
				 
			  }	
			  
			
		}
	
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
				Send request for to become resercher
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
                  <div style="color:red"><?php if(count($errors)>0){
				foreach($errors as $val){
					echo $val;
				}
			} ?>
			</div>
			<div style="color:green">
			<?php if($flag==1){
				echo "Your document is submitted for admin approval. We will send you email once admin approve it.";
			}else{ ?>
			
             
			<?php } ?>
               </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                <!-- form start -->
                <form  name="add_request" id="add_request" enctype="multipart/form-data" action="" method="post">  
				
				
				
				<div class="box-body">
                    

                    <div class="form-group">
                      <label>Why You want to become researcher(<span style="color:red">*</span>)</label>
                      <input require class="form-control" type="text" name="why_researcher" id="why_researcher" placeholder="Why You want to become researcher">
                    </div>
                   
                  </div>
				  
				  <div class="box-body">
                    

                    <div class="form-group">
                      <label>Please Upload document to approve:(<span style="color:red">*</span>)</label>
                      <input type="file" name="app_doc" name="app_doc">
                    </div>
                   
                  </div>

                 


                  <div class="box-footer">
                    <div class="error" style="color:red"></div>
                    <button id="save" name="save" type="submit" class="btn btn-primary">Submit</button>
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
$("#add_request").on('submit',(function(e) {

	if($("#why_researcher").val()==''){
		alert("Please enter Why You want to become researcher");
		return false;
	}

}));
});
</script>
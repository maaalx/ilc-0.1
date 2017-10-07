<?php  	require("../db.php"); ?>
<?php 
	
	require_once("includes/header.php");
	require_once("includes/left.php");
		
	 if(!checkPermissions($_SESSION['admin_user_id'],array(4))){ 
		header("location:index.php");
	 }
	 
	 if(isset($_GET['id']) && $_GET['id']!=''){ 
		$id=addslashes($_GET['id']); 
	}
	
	$query=mysqli_query($db,"select ilc_id from users where id='$id'");
    $temp_data=mysqli_fetch_assoc($query);
	$patient_ilc_id=$temp_data['ilc_id'];
	
	$query=mysqli_query($db,"select ethnicity,height,weight from patient where ilc_id='$patient_ilc_id'");
    $data=mysqli_fetch_assoc($query);
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Patient Details
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
				
              
                <div class="box">
                <div class="box-body">
					<div class="form-group ">
						<div class="form-group">
						  <label>Doctor ILC ID:</label>
						 <?php echo $patient_ilc_id; ?>
						</div>
            
					</div>
					
					<div class="form-group ">
						<div class="form-group">
						  <label>Ethnicity:</label>
						 <?php echo $data['ethnicity']; ?>
						</div>
            
					</div>
					
					
					<div class="form-group ">
						<div class="form-group">
						  <label>Height:</label>
						 <?php echo $data['height']; ?>
						</div>
            
					</div>
					
					<div class="form-group ">
						<div class="form-group">
						  <label>Weight:</label>
						 <?php echo $data['weight']; ?>
						</div>
            
					</div>
			
			
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
<?php require_once("includes/footer.php"); ?>
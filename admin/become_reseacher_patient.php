<?php  	require("../db.php"); ?>
<?php 
	
	require_once("includes/header.php");
	require_once("includes/left.php");
	if(isset($_GET['id']) && $_GET['id']!='' ){
	   $id=addslashes($_GET['id']);
	   $query=mysqli_query($db,"update become_researcher set approved='yes' where id='$id'");
	  
	   $user_id=addslashes($_GET['user_id']);
	   $query=mysqli_query($db,"update users set is_reseacher='yes' where user_id='$user_id'");
		header("location:become_reseacher_patient.php?msg='Updated successfully'");exit;
	}
	
	 if(!checkPermissions($_SESSION['admin_user_id'],array(5))){ 
		header("location:index.php");
	 }
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Become Reseacher Patient List
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
                 
				 <?php 
						if(isset($_GET['msg'])){
							?>
							<div class="alert alert-success alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4>	<i class="icon fa fa-check"></i> Success</h4>
							<?php echo $_GET['msg']; ?>
						  </div>
							<?php
						}
				 ?>
                </div><!-- /.box-header -->
                <div class="box-body">
                 
                <div class="box">
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Patient Name</th>
                        <th>Why become researcher</th>
                        <th>Attachment doc</th>
                        
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     
          <?php
$query1=mysqli_query($db,"select bs.*,u.fname,u.lname from become_researcher bs inner join users u on u.user_id=bs.user_id where user_type='2'");
while($row1=mysqli_fetch_assoc($query1)){

?>

<tr><td><?php echo $row1['fname'].' '.$row1['lname']; ?></td>
<td><?php echo $row1['why_researcher']; ?></td>
<td>
 <?php if($row1['attachment_doc']!=''){
		$file_name="../upload/certifications/".$row1['attachment_doc']; 	
 ?>
					  <a href="lib/download.php?filename=<?php echo $file_name; ?>" class="links">Download</a>
					  <?php }else{
						  echo "Not uploaded";
					  } ?>
</td>

<td>
<?php if($row1['approved']=='no'){ ?>
<a href="become_reseacher_patient.php?id=<?php echo $row1['id']; ?>&user_id=<?php echo $row1['user_id']; ?>">
<button style="width: auto;" class="btn-success disabled" name="approved">Make as Reseacher</button>
</a>
<?php }else{
	?>
	Patient is Reseacher
	<?php 
} ?>
</td>
</tr>
<?php } ?>

<script type="text/javascript">

function update_status(user_id,status){

      var dataString = '?user_id='+ user_id+"&status="+status;

      $.ajax({url: "ajax/update_status.php"+dataString, success: function(result){
					if(status==1){
						$("#update-status"+user_id).text("DisApprove");
					}else{
						$("#update-status"+user_id).text("Approve");
					}
		}});
      }
      
</script>

                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
<?php require_once("includes/footer.php"); ?>
<?php  	require("../db.php"); ?>
<?php 
	
	require_once("includes/header.php");
	require_once("includes/left.php");
		
	 if(!checkPermissions($_SESSION['admin_user_id'],array(3))){ 
		header("location:index.php");
	 }
	 
	 $doctor_id=$_SESSION['admin_user_id'];
	 $treatment_id=addslashes($_GET['treatment_id']);
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Treatment Follow Ups
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
				
                 <h3>Treatment Number: <?php echo $treatment_id; ?></h3>
                <div class="box">
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Frequency</th>
                        <th>Efficiency In Percent</th>
                        <th>Side Effect</th>
                        <th>Improvement In Secondary Condition</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     
          <?php
$query1=mysqli_query($db,"select * from followups where treatmentNo='$treatment_id'");
while($row1=mysqli_fetch_assoc($query1)){
$follow_up_id=$row1['idfollowUps'];

?>

<tr><td><?php echo $row1['frequency']; ?></td>
<td><?php echo $row1['efficacyInpercent']; ?></td>
<td><?php echo $row1['sideEffect']; ?></td>
<td><?php echo $row1['improvementInSecondaryCondition']; ?></td>

<td>
<?php 
$queryf=mysqli_query($db,"select * from follow_up_comments where follow_up_id='$follow_up_id'");
$total_comments=mysqli_num_rows($queryf);
?>
<a href="view-comment.php?follow_up_id=<?php echo $row1['idfollowUps']; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View Comments(<?php echo $total_comments; ?>)</button></a>

<a href="add-comments.php?follow_up_id=<?php echo $row1['idfollowUps']; ?>&treatment_id=<?php echo $treatment_id; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">Add Comments</button></a>

<a onclick="return confirm('Are you sure?')" href="contact-list.php?id=<?php echo $row1['id']; ?>">
</a>
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
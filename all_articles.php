<?php  	require("../db.php"); ?>
<?php 
	
	require_once("includes/header.php");
	require_once("includes/left.php");
	
	
		
	 if(!checkPermissions($_SESSION['admin_user_id'],array(4))){ 
		header("location:index.php");
	 }
	 
	 $r_id=$_SESSION['admin_user_id'];
	 
	 if(isset($_GET['action'])){
		 $aid=addslashes($_GET['id']);
		 $q=mysqli_query($db,"delete from articles where id='$aid'");
		 header("location:all_articles.php");exit;
	 }
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            All Articles
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
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>URL</th>
                        <th>Status</th>
                        
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     
          <?php
$query1=mysqli_query($db,"select * from articles where researcher_id='$r_id'");
while($row1=mysqli_fetch_assoc($query1)){

?>

<tr><td><?php echo $row1['name']; ?></td>
<td><?php echo $row1['url']; ?></td>
<td><?php echo ucfirst($row1['status']); ?></td>

<td>
<!--
<a href="view-user.php?user_id=<?php echo $row1['user_id']; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View</button></a>

<!--
<a href="doctor_add_treatment.php?user_id=<?php echo $row1['user_id']; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">Add Treatment</button></a>
-->
<a onclick="return confirm('Are you sure?')" href="all_articles.php?action=delete&id=<?php echo $row1['id']; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">Delete</button>
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
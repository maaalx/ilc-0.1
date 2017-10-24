<?php  	require("../db.php"); ?>
<?php 
	
	require_once("includes/header.php");
	require_once("includes/left.php");
		
	 if(!checkPermissions($_SESSION['admin_user_id'],array(5))){ 
		header("location:index.php");
	 }
	 
	 $doctor_id=$_SESSION['admin_user_id'];
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Active Vitro Experiment
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
                        <th>Cell Density Per Treatment</th>
                        <th>Conditions Being Investigated</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     
          <?php
$query1=mysqli_query($db,"select sd.id as strain_id,u.fname,u.lname,ve.cell_density_per_treatment,ve.condition_being_investigated from vitro_experiment ve
left join strain_data sd on ve.id=sd.vitro_id 
inner join users u on ve.researcher_id=u.user_id
where sd.status='1'");
while($row1=mysqli_fetch_assoc($query1)){

$conditionsofbeingtreated=$row1['condition_being_investigated'];
$temp_q=mysqli_query($db,"select * from conditionsofbeingtreated where id='$conditionsofbeingtreated'");
$temp_row=mysqli_fetch_assoc($temp_q);


?>

<tr><td><?php echo $row1['cell_density_per_treatment']; ?></td>
<td><?php echo $temp_row['name']; ?></td>
<td><a href="edit_strain_data.php?strain_id=<?php echo $row1['strain_id']; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">Edit Strain Data</button></a>
</td>
</tr>
<?php } ?>
</tbody>


                  </table>
				  
<script type="text/javascript">

function approve_stain(strain_id){

      var dataString = '?strain_id='+ strain_id;

      $.ajax({url: "ajax/approve_strain.php"+dataString, success: function(result){
					
						alert("Approved successfully.");
						location.reload(); 
					
		}});
      }
      
</script>				  
                 </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php require_once("includes/footer.php"); ?>
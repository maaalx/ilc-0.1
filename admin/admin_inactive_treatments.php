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
            Treatment List
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
                        <th>Patient Name</th>
                        
                        <th>Conditions Being Treated</th>
                       
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     
          <?php
$query1=mysqli_query($db,"select sd.id as strain_id,pt.idpatientTreatment as treatment_id,ph.id as history_id,pt.conditionsOfBeingTreated,pt.doseAmount,pt.idpatientTreatment,u.fname,u.lname from patient_history ph left join patienttreatment pt on ph.id=pt.patient_history_id
left join strain_data sd on ph.id=sd.patient_history_id 
inner join users u on ph.patientid=u.user_id
where sd.status='0'");
while($row1=mysqli_fetch_assoc($query1)){

$conditionsofbeingtreated=$row1['conditionsOfBeingTreated'];
$temp_q=mysqli_query($db,"select * from conditionsofbeingtreated where id='$conditionsofbeingtreated'");
$temp_row=mysqli_fetch_assoc($temp_q);

$treatmentNo=$row1['idpatientTreatment'];
$queryf=mysqli_query($db,"select * from followups where treatmentNo='$treatmentNo'");
$total_followups=mysqli_num_rows($queryf);
?>

<tr><td><?php echo $row1['fname'].' '.$row1['lname']; ?></td>

<td><?php echo $temp_row['name']; ?></td>


<td >


<a href="edit_patient_history.php?hisory_id=<?php echo $row1['history_id']; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">Edit Patient History</button></a>


<a href="edit_treatment.php?treatment_id=<?php echo $row1['treatment_id']; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">Edit Treatement</button></a>

<a href="edit_strain_data.php?strain_id=<?php echo $row1['strain_id']; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">Edit Strain Data</button></a>

<button onclick="return approve_stain(<?php echo $row1['strain_id']; ?>)" style="width: auto;" class="btn-success disabled" name="approved">Approve Strain Data</button>


</td>
</tr>
<?php } ?>

<script type="text/javascript">

function approve_stain(strain_id){

      var dataString = '?strain_id='+ strain_id;

      $.ajax({url: "ajax/approve_strain.php"+dataString, success: function(result){
					
						alert("Approved successfully.");
						location.reload(); 
					
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
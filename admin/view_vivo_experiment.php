<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
	require_once("includes/left.php");
	if(!checkPermissions($_SESSION['admin_user_id'],array(4))){ 
		header("location:index.php");
	}	
	
	if(isset($_GET['id']) && $_GET['id']!='' ){
	   $id=  addslashes($_GET['id']);
	   	
	}
	$query=mysqli_query($db,"select * from vivo_experiment where id='$id'"); 
	$data=mysqli_fetch_assoc($query);
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           View Vivo Experiment
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
                <form role="form" name="add_vivo_experiment" id="add_vivo_experiment" action="" method="post">  
		
				<div class="form-group ">
					<div class="form-group">
                      <label>Animal name</label>
					  <?php echo $data['animal_name']; ?>
					 
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Animal model name</label>
					  <?php echo $data['animal_name']; ?>
					  
                     
                    </div>
            
				</div>
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Gender of Animals</label>
					  <?php echo $data['gender_of_animals']; ?>
                      
                    </div>
            
			</div>
			
			<div  class="form-group male-female-ration">
					<div class="form-group">
                      <label>If mixed gender, provide ratio of male : female</label>
					  <?php echo $data['male_female_ratio']; ?>
					  
                     
                    </div>
            
				</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Condition being investigated</label>
					  <?php 
						$condition_being_investigated=$data['condition_being_investigated'];
						$query=mysqli_query($db,"select * from conditionsOfBeingTreated where id='$condition_being_investigated'"); 
						$row=mysqli_fetch_assoc($query);
						echo $row['name'];
						?>
                     
                    </div>
            
			</div>
			<div  class="form-group cancer-type">
					<div class="form-group">
                      <label>Please select cancer type</label>
					  
					  <?php 
						$cancer_type=$data['cancer_type'];
						$query=mysqli_query($db,"select * from cancer_types where id='$cancer_type'"); 
						$row=mysqli_fetch_assoc($query);
						echo $row['name'];
						?>
						
					 
                    </div>
			</div>
				<div  class="box-body other-infections">
                    <div class="form-group">
                      <label>Other infections</label>
					  <?php echo $data['other_infections']; ?>
                     
                    </div>
                   
                </div>
				
				<div  class="box-body other-infections">
                    <div class="form-group">
                      <label>Description of Ailment</label>
					  <?php echo $data['description_of_ailment']; ?>
                      
                    </div>
                   
                </div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Age at treatment (months)</label>
					  <?php echo $data['age_at_treatment']; ?>
					  
                     
                    </div>
            
				</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Cannabinoid Ratio used</label>
					  <?php echo $data['cannabinoid_ratio_used']; ?>
                     
                    </div>
            
			</div>
			
			<div  class="box-body cannabinoid-ratio-used-other">
                    <div class="form-group">
                      <label>Cannabinoid Ratio used(Other,specify )</label>
					  <?php echo $data['cannabinoid_ratio_used_other']; ?>
                     
                    </div>
                   
                </div>
			
				<div class="form-group ">
					<div class="form-group">
                      <label>Average Dose Amount (mg/kg body weight)</label>
					  <?php echo $data['average_dose_amount']; ?>
					 
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Minimum daily Target Dose (mg/kg body weight)</label>
					  <?php echo $data['minimum_daily']; ?>
					  
                     
                    </div>
            
				</div>
				
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Maximum daily Target Dose (mg/kg body weight)</label>
					  <?php echo $data['maximum_daily']; ?>
					  
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Positive control (name)</label>
					  <?php echo $data['positive_control']; ?>
					 
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Positive control dose (mg/kg body weight)</label>
					  <?php echo $data['positive_control_dose']; ?>
					 
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Vehicle control (name)</label>
					  <?php echo $data['vehicle_control']; ?>
					  
					  
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Vehicle control dose (mg/kg body weight)</label>
					  <?php echo $data['vehicle_control_dose']; ?>
					  
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Negative control (name)</label>
					  <?php echo $data['negative_control']; ?>
					  
					  
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Negative control dose (mg/kg body weight)</label>
					  <?php echo $data['negative_control_dose']; ?>
					  
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>No of replicates/treatment</label>
					  <?php echo $data['number_of_replicates_treatment']; ?>
					 
                     
                    </div>
            
				</div>
				
			<div class="form-group ">
					<div class="form-group">
                      <label>Method of Administration</label>
					  <?php $method_of_administration= $data['method_of_administration'];
							$query=mysqli_query($db,"select * from vivo_method_of_administration where id='$method_of_administration'");
							$row=mysqli_fetch_assoc($query);
							echo $row['name'];
					  ?>
                      
                    </div>
            
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Frequency</label>
					
					  
					  <?php $frequency= $data['frequency'];
							$query=mysqli_query($db,"select * from vivo_frequency where id='$frequency'");
							$row=mysqli_fetch_assoc($query);
							echo $row['name'];
					  ?>
                      
                    </div>
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Dosage type</label>
					  <?php echo $data['dosage_type']; ?>
                      
                    </div>
			</div>
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Follow up Frequency</label>
					  
					  
					  <?php $follow_up_frequency= $data['follow_up_frequency'];
							$query=mysqli_query($db,"select * from vivo_follow_up_frequency where id='$follow_up_frequency'");
							$row=mysqli_fetch_assoc($query);
							echo $row['name'];
					  ?>
                     
				</div>
			</div>		  
                   
				<div class="form-group ">
					<div class="form-group">
                      <label>% Efficacy of cannabis treatment </label>
					  <?php echo $data['perent_efficacy_of_cannabis_treatment']; ?>
					 
                     
                    </div>
            
				</div>
				
				
				<div class="form-group ">
					<div class="form-group">
                      <label>% Efficacy of Positive Control </label>
					  <?php echo $data['percent_efficacy_of_positive_control']; ?>
					  
                     
                    </div>
            
				</div>
			
				<div class="form-group ">
					<div class="form-group">
                      <label>% Efficacy of Vehicle Control</label>
					  <?php echo $data['percent_efficacy_of_vehicle_control']; ?>
					  
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>% Efficacy of Negative Control</label>
					  <?php echo $data['percent_efficacy_of_negative_control']; ?>
					  
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Side Effects of cannabis treatment</label>
					  
					   <?php $side_effects_of_cannabis_treatment= $data['side_effects_of_cannabis_treatment'];
							if($side_effects_of_cannabis_treatment!=''){
							$query=mysqli_query($db,"select * from side_effect where id in('$side_effects_of_cannabis_treatment')");
							$row=mysqli_fetch_assoc($query);
							echo $row['name'].',';
							}
					  ?>
					  
					  
				</div>
			</div>
			
			
			<div class="form-group ">
					<div class="form-group">
					<?php echo $data['full_reference_of_the_study_including_dio']; ?>
                     
					  
                     
                    </div>
            
				</div>
                 


                  
                </form>
              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      
<?php require_once("includes/footer.php"); ?>

<script type="text/javascript">

$(document).ready(function () {
    $('body').on('keyup', '.maskedExt', function () {
        var num = $(this).attr("maskedFormat").toString().split(',');
        var regex = new RegExp("^\\d{0," + num[0] + "}(\\.\\d{0," + num[1] + "})?$");
        if (!regex.test(this.value)) {
            this.value = this.value.substring(0, this.value.length - 1);
        }
    });
});

function check_gender(gender_type){
	if(gender_type=='mixed'){
		$(".male-female-ration").show();
	}else{
		$(".male-female-ration").hide();
	}
}

function check_cannabinoid_ratio(cannabinoid_ratio){ 
	if(cannabinoid_ratio=='Other'){
		$(".cannabinoid-ratio-used-other").show();
	}else{
		$(".cannabinoid-ratio-used-other").hide();
	}
}
function check_condition_investigated(treated_type){
	if(treated_type==15){
		$(".cancer-type").show();
	}else{
		$(".cancer-type").hide();
	}
	
	
	if(treated_type=='oi'){
		$(".other-infections").show();
	}else{
		$(".other-infections").hide();
	}
}  
  
$(document).ready(function (e) { 
$("#add_vivo_experiment").on('submit',(function(e) {
e.preventDefault();


$.ajax({
url: "ajax/save_vivo_experiment.php", // Url to which the request is send
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
		window.location="add_vivo_strain_data.php?vivo_id="+obj.vivo_id;
  }

}
});
return false;
}));
});
</script>
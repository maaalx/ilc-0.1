<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
	require_once("includes/left.php");
	if(!checkPermissions($_SESSION['admin_user_id'],array(4))){ 
		header("location:index.php");
	}
	 
	
	
	
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Step 1: Add In vivo Experiment
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
					  <input type="text" name="animal_name" id="animal_name" class="form-control" placeholder="Animal name">
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Animal model name</label>
					  <input type="text" name="animal_model_name" id="animal_model_name" class="form-control" placeholder="Animal model name">
                     
                    </div>
            
				</div>
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Gender of Animals</label>
                      <select onchange="return check_gender(this.value)" name="gender_of_animals" id="gender_of_animals" class="form-control">
						<option value="0">Select</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="mixed">Mixed</option>
                       
                        
                      </select>
                    </div>
            
			</div>
			
			<div style="display:none" class="form-group male-female-ration">
					<div class="form-group">
                      <label>If mixed gender, provide ratio of male : female</label>
					  <input type="text" name="male_female_ratio" id="male_female_ratio" class="form-control"  placeholder="00 : 00">
                     
                    </div>
            
				</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Condition being investigated</label>
                      <select onchange="check_condition_investigated(this.value)" name="condition_being_investigated" id="condition_being_investigated" class="form-control">
						<option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from conditionsofbeingtreated order by name");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option  value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
						<option value="oi">Other infections</option>
                        
                      </select>
                    </div>
            
			</div>
			<div style="display:none" class="form-group cancer-type">
					<div class="form-group">
                      <label>Please select cancer type</label>
                      <select name="cancer_type" id="cancer_type" class="form-control">
						<option value="">Select</option>
						<?php
							$query=mysqli_query($db,"select * from cancer_types order by name");
							while($row=mysqli_fetch_assoc($query)){
								?>
								<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
								<?php
							}
						?>
                       					
                        
                      </select>
                    </div>
			</div>
				<div style="display:none" class="box-body other-infections">
                    <div class="form-group">
                      <label>Other infections</label>
                      <textarea  name="other_infections" id="other_infections" class="form-control" rows="3" placeholder="Other infections"></textarea>
                    </div>
                   
                </div>
				
				<div  class="box-body other-infections">
                    <div class="form-group">
                      <label>Description of Ailment</label>
                      <textarea  name="description_of_ailment" id="description_of_ailment" class="form-control" rows="3" placeholder="Description of Ailment"></textarea>
					  
					  Add text here (200 characters)
                    </div>
                   
                </div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Age at treatment (months)</label>
					  <input type="text" name="age_at_treatment" id="age_at_treatment" class="form-control maskedExt" maskedFormat="10,1"  placeholder="Age at treatment (months)">
					  <span style="color:red">Enter number with one decimal place</span>
                     
                    </div>
            
				</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Cannabinoid Ratio used</label>
                      <select onchange="return check_cannabinoid_ratio(this.value)" name="cannabinoid_ratio_used" id="cannabinoid_ratio_used" class="form-control">
						<option value="0">Select</option>
						<option value="High THC">High THC (THC/CBD = ~50-150:1)</option>
						<option value="Balanced THC & CBD">Balanced THC & CBD (THC/CBD = ~1:1)</option>
                        <option value="High CBD">High CBD (THC/CBD = ~1:20)</option>
						<option value="Other">Other, specify</option>
                      </select>
                    </div>
            
			</div>
			
			<div style="display:none" class="box-body cannabinoid-ratio-used-other">
                    <div class="form-group">
                      <label>Cannabinoid Ratio used(Other,specify )</label>
                      <textarea  name="cannabinoid_ratio_used_other" id="cannabinoid_ratio_used_other" class="form-control" rows="3" placeholder="Cannabinoid Ratio used(Other,specify )"></textarea>
                    </div>
                   
                </div>
			
				<div class="form-group ">
					<div class="form-group">
                      <label>Average Dose Amount (mg/kg body weight)</label>
					  <input type="text" name="average_dose_amount" id="average_dose_amount" class="form-control maskedExt" maskedFormat="10,6"  placeholder="Average Dose Amount 0.000001">
					  <span style="color:red">Enter number with 6 decimal places</span>
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Minimum daily Target Dose (mg/kg body weight)</label>
					  <input type="text" name="minimum_daily" id="minimum_daily" class="form-control maskedExt" maskedFormat="10,6"  placeholder="Minimum daily Target Dose 0.000001">
					  <span style="color:red">Enter number with 6 decimal places</span>
                     
                    </div>
            
				</div>
				
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Maximum daily Target Dose (mg/kg body weight)</label>
					  <input type="text" name="maximum_daily" id="maximum_daily" class="form-control maskedExt" maskedFormat="10,6"  placeholder="Maximum daily Target Dose">
					  <span style="color:red">Enter number with 6 decimal places</span>
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Positive control (name)</label>
					  <input type="text" name="positive_control" id="positive_control" class="form-control "   placeholder="Positive control (name)">
					  
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Positive control dose (mg/kg body weight)</label>
					  <input type="text" name="positive_control_dose" id="positive_control_dose" class="form-control maskedExt" maskedFormat="10,6"  placeholder="Positive control dose">
					  <span style="color:red">Enter number with 6 decimal places</span>
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Vehicle control (name)</label>
					  <input type="text" name="vehicle_control" id="vehicle_control" class="form-control "   placeholder="Vehicle control (name)">
					  
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Vehicle control dose (mg/kg body weight)</label>
					  <input type="text" name="vehicle_control_dose" id="vehicle_control_dose" class="form-control maskedExt" maskedFormat="10,6"  placeholder="Vehicle control dose">
					  <span style="color:red">Enter number with 6 decimal places</span>
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Negative control (name)</label>
					  <input type="text" name="negative_control" id="negative_control" class="form-control "   placeholder="Negative control (name)">
					  
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Negative control dose (mg/kg body weight)</label>
					  <input type="text" name="negative_control_dose" id="negative_control_dose" class="form-control maskedExt" maskedFormat="10,6"  placeholder="Negative control dose">
					  <span style="color:red">Enter number with 6 decimal places</span>
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>No of replicates/treatment</label>
					  <input type="number" name="number_of_replicates_treatment" id="number_of_replicates_treatment" class="form-control "   placeholder="No of replicates/treatment">
					  <span style="color:red">Whole number</span>
                     
                    </div>
            
				</div>
				
			<div class="form-group ">
					<div class="form-group">
                      <label>Method of Administration</label>
                      <select name="method_of_administration" id="method_of_administration" class="form-control">
						<option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from vivo_method_of_administration");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option  value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
						
                        
                      </select>
                    </div>
            
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Frequency</label>
                      <select name="frequency" id="frequency" class="form-control">
						<option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from vivo_frequency");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option  value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
						
                        
                      </select>
                    </div>
			</div>
			<div class="form-group ">
					<div class="form-group">
                      <label>Dosage type</label>
                      <select name="dosage_type" id="dosage_type" class="form-control">
						<option value="0">Select</option>
                       <option value="before_meals">Before meals</option>
					   <option value="during_meals">During meals</option>
					   <option value="after_meals">After meals</option>
                        
                      </select>
                    </div>
			</div>
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Follow up Frequency</label>
                      <select name="follow_up_frequency" id="follow_up_frequency" class="form-control">
						<option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from vivo_follow_up_frequency");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option  value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
						
                        
                      </select>
				</div>
			</div>		  
                   
				<div class="form-group ">
					<div class="form-group">
                      <label>% Efficacy of cannabis treatment </label>
					  <input type="text" name="perent_efficacy_of_cannabis_treatment" id="perent_efficacy_of_cannabis_treatment" class="form-control maskedExt" maskedFormat="10,2"  placeholder="% Efficacy of cannabis treatment">
					  <span style="color:red">Enter number with 2 decimal places</span>
                     
                    </div>
            
				</div>
				
				
				<div class="form-group ">
					<div class="form-group">
                      <label>% Efficacy of Positive Control </label>
					  <input type="text" name="percent_efficacy_of_positive_control" id="percent_efficacy_of_positive_control" class="form-control maskedExt" maskedFormat="10,2"  placeholder="% Efficacy of Positive Control">
					  <span style="color:red">Enter number with 2 decimal places</span>
                     
                    </div>
            
				</div>
			
				<div class="form-group ">
					<div class="form-group">
                      <label>% Efficacy of Vehicle Control</label>
					  <input type="text" name="percent_efficacy_of_vehicle_control" id="percent_efficacy_of_vehicle_control" class="form-control maskedExt" maskedFormat="10,2"  placeholder="% Efficacy of Vehicle Control">
					  <span style="color:red">Enter number with 2 decimal places</span>
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>% Efficacy of Negative Control</label>
					  <input type="text" name="percent_efficacy_of_negative_control" id="percent_efficacy_of_negative_control" class="form-control maskedExt" maskedFormat="10,2"  placeholder="% Efficacy of Negative Control">
					  <span style="color:red">Enter number with 2 decimal places</span>
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Side Effects of cannabis treatment</label>
                      <select multiple name="side_effects_of_cannabis_treatment[]" id="side_effects_of_cannabis_treatment" class="form-control">
						<option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from side_effect order by name");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option  value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
						
                        
                      </select>
					  <span style="color:red">Press control key to select multiple</span>
				</div>
			</div>
			
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Full Reference of the study including DOI</label>
					  <input type="text" name="full_reference_of_the_study_including_dio" id="full_reference_of_the_study_including_dio" class="form-control "  placeholder="Full Reference of the study including DOI">
					  
                     
                    </div>
            
				</div>
                 


                  <div class="box-footer">
                    <div class="error" style="color:red"></div>
                    <button type="submit" class="btn btn-primary">Next</button>
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
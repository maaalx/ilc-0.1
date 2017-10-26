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
           Step 1: Add In vitro Experiment
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
                <form role="form" name="add_vitro_experiment" id="add_vitro_experiment" action="" method="post">  
		
				
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Condition being investigated</label>
                      <select onchange="check_condition_investigated(this.value)" name="condition_being_investigated" id="	condition_being_investigated" class="form-control">
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
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cell line</label>
					  <input type="text" name="cell_line[]" id="cell_line" class="form-control" placeholder="Cell line">
							 <div class="input_fields_wrap">
								<button class="btn btn-primary add_field_button">Add More Cell Line</button>
								
							</div>
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cell Density per treatment</label>
					  <input type="text" name="cell_density_per_treatment" id="cell_density_per_treatment" class="form-control" placeholder="Cell Density per treatment">
							 
                    </div>
            
				</div>
				
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cell Culture Medium</label>
					  <input type="text" name="cell_culture_medium" id="cell_culture_medium" class="form-control" placeholder="Cell Culture Medium">
							 
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cell Culture Method</label>
                      <select onchange="return check_cell_method(this.value)" name="cell_culture_method" id="cell_culture_method" class="form-control">
						<option value="0">Select</option>
                       <?php 
						$query=mysqli_query($db,"select * from vitro_cell_culture_method");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option  value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>
						
                        
                      </select>
                    </div>
            
				</div>
				
				<div style="display:none" class="form-group cell-culture-method-other">
					<div class="form-group">
                      <label>Cell Culture Method Other Specify</label>
					  <input type="text" name="cell_culture_method_other" id="cell_culture_method_other" class="form-control" placeholder="Cell Culture Medium">
							 
                    </div>
            
				</div>
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Cell Culture conditions</label>
					  <input type="text" name="cell_culture_conditions" id="cell_culture_conditions" class="form-control" placeholder="Cell Culture conditions">
							 
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cytotoxicity results</label>
					  <input type="text" name="cytotoxicity_results" id="cytotoxicity_results" class="form-control" placeholder="Cytotoxicity results">
							 
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cannabis Treatment 1 (name)</label>
					  <input type="text" name="cannabis_treatment_1_name" id="cannabis_treatment_1_name" class="form-control" placeholder="Cannabis Treatment 1 (name)">
							 
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cannabis Treatment 1 dose (ug/1000 cells)</label>
					  <input type="text" name="cannabis_treatment_1_dose" id="cannabis_treatment_1_dose" class="form-control maskedExt" maskedFormat="10,6"  placeholder="Cannabis Treatment 1 dose (ug/1000 cells)">
					  <span style="color:red">Number with 6 decimal point</span>
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cannabis Treatment 2 (name)</label>
					  <input type="text" name="cannabis_treatment_2_name" id="cannabis_treatment_2_name" class="form-control" placeholder="Cannabis Treatment 2 (name)">
							 
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cannabis Treatment 2 dose (ug/1000 cells)</label>
					  <input type="text" name="cannabis_treatment_2_dose" id="cannabis_treatment_2_dose" class="form-control maskedExt" maskedFormat="10,6"  placeholder="Cannabis Treatment 2 dose (ug/1000 cells)">
					  <span style="color:red">Number with 6 decimal point</span>
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cannabis Treatment 3 (name)</label>
					  <input type="text" name="cannabis_treatment_3_name" id="cannabis_treatment_3_name" class="form-control" placeholder="Cannabis Treatment 3 (name)">
							 
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cannabis Treatment 3 dose (ug/1000 cells)</label>
					  <input type="text" name="cannabis_treatment_3_dose" id="cannabis_treatment_3_dose" class="form-control maskedExt" maskedFormat="10,6"  placeholder="Cannabis Treatment 3 dose (ug/1000 cells)">
					  <span style="color:red">Number with 6 decimal point</span>
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cannabis Treatment 4 (name)</label>
					  <input type="text" name="cannabis_treatment_4_name" id="cannabis_treatment_4_name" class="form-control" placeholder="Cannabis Treatment 4 (name)">
							 
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cannabis Treatment 4 dose (ug/1000 cells)</label>
					  <input type="text" name="cannabis_treatment_4_dose" id="cannabis_treatment_4_dose" class="form-control maskedExt" maskedFormat="10,6"  placeholder="Cannabis Treatment 4 dose (ug/1000 cells)">
					  <span style="color:red">Number with 6 decimal point</span>
                     
                    </div>
            
				</div>
				
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Positive control (name)</label>
					  <input type="text" name="positive_control_name" id="positive_control_name" class="form-control" placeholder="Positive control (name)">
							 
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Positive control dose (ug/1000 cells)</label>
					  <input type="text" name="positive_control_dose" id="positive_control_dose" class="form-control maskedExt" maskedFormat="10,6"  placeholder="Positive control dose (ug/1000 cells)">
					  <span style="color:red">Number with 6 decimal point</span>
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Vehicle control (name)</label>
					  <input type="text" name="vehicle_control_name" id="vehicle_control_name" class="form-control" placeholder="Vehicle control (name)">
							 
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Vehicle control dose (ug/1000 cells)</label>
					  <input type="text" name="vehicle_control_dose" id="vehicle_control_dose" class="form-control maskedExt" maskedFormat="10,6"  placeholder="Vehicle control dose (ug/1000 cells)">
					  <span style="color:red">Number with 6 decimal point</span>
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Negative control (name)</label>
					  <input type="text" name="negative_control_name" id="negative_control_name" class="form-control" placeholder="Negative control (name)">
							 
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Negative control dose (ug/1000 cells)</label>
					  <input type="text" name="neative_control_dose" id="neative_control_dose" class="form-control maskedExt" maskedFormat="10,6"  placeholder="Negative control dose (ug/1000 cells)">
					  <span style="color:red">Number with 6 decimal point</span>
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>No of replicates/treatment</label>
					  <input type="number" name="number_of_replicates_treatment" id="number_of_replicates_treatment" class="form-control" placeholder="No of replicates/treatment">
							 <span style="color:red">Whole number</span>
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>% Efficacy in cannabis treatment 1</label>
					  <input type="text" name="percent_efficacy_in_cannabis_treatment_1" id="percent_efficacy_in_cannabis_treatment_1" class="form-control maskedExt" maskedFormat="10,2"  placeholder="% Efficacy in cannabis treatment 1">
					  <span style="color:red">Number with 2 decimal point</span>
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>% Efficacy in cannabis treatment 2</label>
					  <input type="text" name="percent_efficacy_in_cannabis_treatment_2" id="percent_efficacy_in_cannabis_treatment_2" class="form-control maskedExt" maskedFormat="10,2"  placeholder="% Efficacy in cannabis treatment 2">
					  <span style="color:red">Number with 2 decimal point</span>
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>% Efficacy in cannabis treatment 3</label>
					  <input type="text" name="percent_efficacy_in_cannabis_treatment_3" id="percent_efficacy_in_cannabis_treatment_3" class="form-control maskedExt" maskedFormat="10,2"  placeholder="% Efficacy in cannabis treatment 3">
					  <span style="color:red">Number with 2 decimal point</span>
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>% Efficacy in cannabis treatment 4</label>
					  <input type="text" name="percent_efficacy_in_cannabis_treatment_4" id="percent_efficacy_in_cannabis_treatment_4" class="form-control maskedExt" maskedFormat="10,2"  placeholder="% Efficacy in cannabis treatment 4">
					  <span style="color:red">Number with 2 decimal point</span>
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>% Efficacy in Positive Control</label>
					  <input type="text" name="percent_efficacy_in_positive_control" id="percent_efficacy_in_positive_control" class="form-control maskedExt" maskedFormat="10,2"  placeholder="% Efficacy in Positive Control">
					  <span style="color:red">Number with 2 decimal point</span>
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>% Efficacy in Vehicle Control</label>
					  <input type="text" name="percent_efficacy_in_vehicle_control" id="percent_efficacy_in_vehicle_control" class="form-control maskedExt" maskedFormat="10,2"  placeholder="% Efficacy in Vehicle Control">
					  <span style="color:red">Number with 2 decimal point</span>
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>% Efficacy in Negative Control</label>
					  <input type="text" name="percent_efficacy_in_negative_control" id="percent_efficacy_in_negative_control" class="form-control maskedExt" maskedFormat="10,2"  placeholder="% Efficacy in Negative Control">
					  <span style="color:red">Number with 2 decimal point</span>
                     
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
					  <input type="text" name="full_reference_of_the_study_including_doi" id="full_reference_of_the_study_including_doi" class="form-control "   placeholder="% Efficacy in Negative Control">
					 
                     
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

$(document).ready(function() {
    var max_fields      = 10; //maximum input boxes allowed
    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
        e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div><input class="form-control" type="text" name="cell_line[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
        }
    });
    
    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});

$(document).ready(function () {
    $('body').on('keyup', '.maskedExt', function () {
        var num = $(this).attr("maskedFormat").toString().split(',');
        var regex = new RegExp("^\\d{0," + num[0] + "}(\\.\\d{0," + num[1] + "})?$");
        if (!regex.test(this.value)) {
            this.value = this.value.substring(0, this.value.length - 1);
        }
    });
});

function check_cell_method(cell_method){
	if(cell_method=='5'){
		$(".cell-culture-method-other").show();
	}else{
		$(".cell-culture-method-other").hide();
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
$("#add_vitro_experiment").on('submit',(function(e) {
e.preventDefault();


$.ajax({
url: "ajax/save_vitro_experiment.php", // Url to which the request is send
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
		window.location="add_vitro_strain_data.php?vitro_id="+obj.vitro_id;
  }

}
});
return false;
}));
});
</script>
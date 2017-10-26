<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
	require_once("includes/left.php");
	if(!checkPermissions($_SESSION['admin_user_id'],array(4))){ 
		header("location:index.php");
	}
	 
	if(isset($_GET['id']) && $_GET['id']!='' ){
	   $id=  addslashes($_GET['id']);
	   	
	}
	$query=mysqli_query($db,"select * from vitro_experiment where id='$id'"); 
	$data=mysqli_fetch_assoc($query);
	
	
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           View In vitro Experiment
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
						$cancer_types=$data['cancer_types'];
						$query=mysqli_query($db,"select * from cancer_types where id='$cancer_types'"); 
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
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cell line</label>
					   <?php echo $data['cell_line']; ?>
					  
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cell Density per treatment</label>
					   <?php echo $data['cell_density_per_treatment']; ?>
					 
							 
                    </div>
            
				</div>
				
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cell Culture Medium</label>
					   <?php echo $data['cell_culture_medium']; ?>
					 
							 
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cell Culture Method</label>
					   <?php $cell_culture_method=$data['cell_culture_method'];
								$query=mysqli_query($db,"select * from vitro_cell_culture_method where id='$cell_culture_method'"); 
						$row=mysqli_fetch_assoc($query);
						echo $row['name'];
					   ?>
                     
                    </div>
            
				</div>
				
				<div  class="form-group cell-culture-method-other">
					<div class="form-group">
                      <label>Cell Culture Method Other Specify</label>
					   <?php echo $data['cell_culture_method_other']; ?>
					  
                    </div>
            
				</div>
			
			<div class="form-group ">
					<div class="form-group">
                      <label>Cell Culture conditions</label>
					   <?php echo $data['cell_culture_conditions']; ?>
					
							 
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cytotoxicity results</label>
					   <?php echo $data['cytotoxicity_results']; ?>
					  
							 
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cannabis Treatment 1 (name)</label>
					   <?php echo $data['cannabis_treatment_1_name']; ?>
					  
							 
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cannabis Treatment 1 dose (ug/1000 cells)</label>
					   <?php echo $data['cannabis_treatment_1_dose']; ?>
					 
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cannabis Treatment 2 (name)</label>
					   <?php echo $data['cannabis_treatment_2_name']; ?>
					  
							 
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cannabis Treatment 2 dose (ug/1000 cells)</label>
					   <?php echo $data['cannabis_treatment_2_dose']; ?>
					  
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cannabis Treatment 3 (name)</label>
					   <?php echo $data['cannabis_treatment_3_name']; ?>
					  
							 
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cannabis Treatment 3 dose (ug/1000 cells)</label>
					   <?php echo $data['cannabis_treatment_3_dose']; ?>
					  
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cannabis Treatment 4 (name)</label>
					   <?php echo $data['cannabis_treatment_4_name']; ?>
					  
							 
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Cannabis Treatment 4 dose (ug/1000 cells)</label>
					   <?php echo $data['cannabis_treatment_4_dose']; ?>
					  
                     
                    </div>
            
				</div>
				
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Positive control (name)</label>
					   <?php echo $data['positive_control_name']; ?>
					  
							 
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Positive control dose (ug/1000 cells)</label>
					   <?php echo $data['positive_control_dose']; ?>
					  
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Vehicle control (name)</label>
					   <?php echo $data['vehicle_control_name']; ?>
					  
							 
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Vehicle control dose (ug/1000 cells)</label>
					   <?php echo $data['vehicle_control_dose']; ?>
					  
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Negative control (name)</label>
					   <?php echo $data['negative_control_name']; ?>
					 
							 
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Negative control dose (ug/1000 cells)</label>
					   <?php echo $data['neative_control_dose']; ?>
					 
                     
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
                      <label>% Efficacy in cannabis treatment 1</label>
					   <?php echo $data['percent_efficacy_in_cannabis_treatment_1	']; ?>
					 
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>% Efficacy in cannabis treatment 2</label>
					   <?php echo $data['percent_efficacy_in_cannabis_treatment_2']; ?>
					 
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>% Efficacy in cannabis treatment 3</label>
					   <?php echo $data['percent_efficacy_in_cannabis_treatment_3']; ?>
					  
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>% Efficacy in cannabis treatment 4</label>
					   <?php echo $data['percent_efficacy_in_cannabis_treatment_4']; ?>
					  
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>% Efficacy in Positive Control</label>
					   <?php echo $data['percent_efficacy_in_positive_control']; ?>
					  
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>% Efficacy in Vehicle Control</label>
					   <?php echo $data['percent_efficacy_in_vehicle_control']; ?>
					 
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>% Efficacy in Negative Control</label>
					   <?php echo $data['percent_efficacy_in_negative_control']; ?>
					  
                     
                    </div>
            
				</div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Full Reference of the study including DOI</label>
					   <?php echo $data['full_reference_of_the_study_including_doi']; ?>
					  
					 
                     
                    </div>
            
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
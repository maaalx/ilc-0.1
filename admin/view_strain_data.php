<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
	require_once("includes/left.php");
	if(!checkPermissions($_SESSION['admin_user_id'],array(4))){ 
		header("location:index.php");
	}
	 
	if(isset($_GET['id']) && $_GET['id']!=''){ 
		$id=addslashes($_GET['id']); 
	}
	
	$query=mysqli_query($db,"select * from strain_data where id='$id'");
	$strain_data=mysqli_fetch_assoc($query);
	$reseacher_id=$_SESSION['admin_user_id'];
	
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
			View Strain Data
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
                <form role="form" name="save_strain_data" id="save_strain_data" action="" enctype="multipart/form-data" method="post">  
				
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Common Name</label>
                      <?php echo $strain_data['common_name']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Any other descriptors 1</label>
                      <?php echo $strain_data['any_other_descriptors_1']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Any other descriptors 2</label>
                      <?php echo $strain_data['any_other_descriptors_2']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Any other descriptors 3</label>
                      <?php echo $strain_data['any_other_descriptors_3']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Any other descriptors 4</label>
                      <?php echo $strain_data['any_other_descriptors_4']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Any other descriptors 5</label>
                      <?php echo $strain_data['any_other_descriptors_5']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
					<div class="form-group">
                      <label>Country of origin</label>
                      <?php $country_of_origin=$strain_data['common_name']; 
							$query=mysqli_query($db,"select * from country where id='$country_of_origin'");
							$row=mysqli_fetch_assoc($query);
							echo $row['name'];
					  
					  ?>
                    </div>
				</div>	
				
				<div class="box-body ">
					<div class="form-group">
                      <label>Pedigree</label>
                      <?php echo $strain_data['pedigree']; ?>
                    </div>
				</div>	
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Pedigree (Enter the parentage)</label>
                      <?php echo $strain_data['pedigree_enter_the_parentage']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Breeder name if known</label>
                      <?php echo $strain_data['breeder_name_if_known']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Growers</label>
                      <?php echo $strain_data['growers']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Manufacturer Name (if a product)</label>
                      <?php echo $strain_data['manufacturer_name']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Manufacturer Address</label>
                      <?php echo $strain_data['manufacturer_address']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Available regions (post code)</label>
                      <?php echo $strain_data['available_regions']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
					<div class="form-group">
                      <label>Available region (Country)</label>
                      <?php $available_region_country=$strain_data['available_region_country'];
							$query=mysqli_query($db,"select * from country where id='$available_region_country'");
							$row=mysqli_fetch_assoc($query);
							echo $row['name'];
					  ?>
                    </div>
				</div>	
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Accession Date</label>
                      <?php echo $strain_data['accession_date']; ?>
                    </div>      
                </div>
				
				<div class="box-body ">
                      <label>Gender</label>
					<div class="form-group">
                      <?php echo $strain_data['gender']; ?>
                    </div>
				</div>	
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Percent Heterozygosity</label>
                      <?php echo $strain_data['percent_heterozygosity']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>VCF file of sequence</label>
                      <?php echo $strain_data['vcf_file_of_sequence']; ?>
					  
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>FastQ Files of sequence</label>
                      <?php echo $strain_data['fastq_files_of_sequence']; ?>
					  
                    </div>      
                </div>
				
				<div class="box-body ">
                      <label>Location</label>
					<div class="form-group">
                      <?php echo $strain_data['location']; ?>
                    </div>
				</div>	
				
				<div class="box-body ">
                      <label>Grow method</label>
					<div class="form-group">
                      <?php echo $strain_data['grow_method']; ?>
                    </div>
				</div>	
				
				<div class="box-body ">
                      <label>Soil Mix</label>
					<div class="form-group">
                      <?php $soil_mix= $strain_data['soil_mix'];
							$query=mysqli_query($db,"select * from strain_data_soil_mix where id='$soil_mix'");
							$row=mysqli_fetch_assoc($query);	
							echo $row['name'];
							?>
                    </div>
				</div>	
				
				<div class="box-body ">
                      <label>Are you using living soil</label>
					<div class="form-group">
                      <?php echo $strain_data['are_you_using_living_soil']; ?>
                    </div>
				</div>

				<div class="box-body ">
                      <label>Day Light during Vegetative Stage (hours)</label>
					<div class="form-group">
                      <?php echo $strain_data['day_light_during_vegetative_stage']; ?>
                    </div>
				</div>

				<div class="box-body ">
                      <label>Night Light during Vegetative Stage (hours)</label>
					<div class="form-group">
                      <?php echo $strain_data['night_light_during_vegetative_stage']; ?>
                    </div>
				</div>	
				
				<div class="box-body ">
                      <label>Day Light during Reproductive Stage</label>
					<div class="form-group">
                      <?php echo $strain_data['day_light_during_reproductive_stage']; ?>
                    </div>
				</div>	
				
				
				<div class="box-body ">
                      <label>Night Light during Reproductive Stage</label>
					<div class="form-group">
                      <?php echo $strain_data['night_light_during_reproductive_stage']; ?>
                    </div>
				</div>	
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Temperature during Vegetative Stage (o Celsius)</label>
                      <?php echo $strain_data['temperature_during_vegetative_stage']; ?>
                    </div>      
                </div>
				
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Temperature during Reproductive Stage (o Celsius)</label>
                      <?php echo $strain_data['temperature_during_reproductive_stage']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Relative Humidity during Vegetative Stage (%)</label>
                      <?php echo $strain_data['relative_humidity_during_vegetative_stage']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Relative Humidity during Reproductive Stage (%)</label>
                      <?php echo $strain_data['relative_humidity_during_reproductive_stage']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
				
                      <label>CO2 supplementation</label>
					<div class="form-group">
                      <?php echo $strain_data['co2_supplementation']; ?>
                    </div>
				</div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>CO2 supplementation (ppm)</label>
                      <?php echo $strain_data['co2_supplementation_ppm']; ?>
					 
                    </div>      
                </div>
				
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Light spectrum during vegetative stage (kelvin)</label>
                      <?php echo $strain_data['light_spectrum_during_vegetative_stage']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Light spectrum during reproductive stage (kelvin)</label>
                      <?php echo $strain_data['light_spectrum_during_reproductive_stage']; ?>
                    </div>      
                </div>
				
				<div class="form-group ">
                      <label>Lamp type (vegetative stage)</label>
					<div class="form-group">
                      <?php echo $strain_data['lamp_type_vegetative_stage']; ?>
                    </div>
				</div>
				
				
				<div class="box-body ">
                      <label>Lamp type (reproductive stage)</label>
					<div class="form-group">
                      <?php echo $strain_data['lamp_type_reproductive_stage']; ?>
                    </div>
				</div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Watering during vegetative stage (litres per day per sq mt)</label>
                      <?php echo $strain_data['watering_during_vegetative_stage']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Watering during reproductive stage (litres per day per sq mt)</label>
                      <?php echo $strain_data['watering_during_reproductive_stage']; ?>
                    </div>      
                </div>
				
				<div class="box-body ">
                      <label>Fertilisers during vegetative stage</label>
					<div class="form-group">
                     <?php echo $strain_data['fertilisers_during_vegetative_stage']; ?> 
				</div>
				
				<div class="box-body ">
                      <label>Fertilisers during reproductive stage</label>
					<div class="form-group">
                      <?php echo $strain_data['fertilisers_during_reproductive_stage']; ?>
                    </div>
				</div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Fertilisers (target N:P:K ratio vegetative stage)</label>
                      <?php echo $strain_data['fertilisers_vegetative_stage']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Fertilisers (target N:P:K ratio reproductive stage)</label>
                     <?php echo $strain_data['fertilisers_reproductive_stage']; ?> 
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Time from seed/cutting to transplantation (days) </label>
                      <?php echo $strain_data['time_from_seed_cutting_to_transplantation']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Time from transplantation to flower induction (weeks)</label>
                      <?php echo $strain_data['time_from_transplantation_to_flower_induction']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Time from flower induction to harvest (weeks)</label>
                      <?php echo $strain_data['time_from_flower_induction_to_harvest']; ?>
                    </div>      
                </div>
				
				<div class="form-group ">
                      <label>Time of harvest</label>
					<div class="form-group">
                      <?php echo $strain_data['time_of_harvest']; ?>
                    </div>
				</div>
				
				
				
				<div class="box-body ">
                      <label>Trichome maturity</label>
					<div class="form-group">
                      <?php echo $strain_data['trichome_maturity']; ?>
                    </div>
				</div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Average yield (grams per sq mt)</label>
                      <?php echo $strain_data['average_yield']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Outdoor sowing date</label>
                      <?php echo $strain_data['outdoor_sowing_date']; ?>
					  <span style="color:red"></span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Outdoor harvest date</label>
                      <?php echo $strain_data['outdoor_harvest_date']; ?>
                    </div>      
                </div>
				
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Average height (mts)</label>
                      <?php echo $strain_data['average_height']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Cultivation tips</label>
                      <?php echo $strain_data['cultivation_tips']; ?>
					  
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Drying Temperature (oC)</label>
                      <?php echo $strain_data['drying_temperature']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Drying Humidity (%)</label>
                      <?php echo $strain_data['drying_humidity']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Drying time (days)</label>
                      <?php echo $strain_data['drying_time']; ?>
                    </div>      
                </div>
				
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Type of packaging</label>
                      <?php echo $strain_data['type_of_packaging']; ?>
					  
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Storage temperature (oC)</label>
                      <?php echo $strain_data['storage_temperature']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Storage time (oC)</label>
                      <?php echo $strain_data['storage_time']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Extraction method</label>
                      <?php echo $strain_data['extraction_method']; ?>
					  
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Flavour/Scent</label>
                      <?php echo $strain_data['flavour_scent']; ?>
					  
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Cannabinoid ingredient THC + THCA (%)</label>
                      <?php echo $strain_data['cannabinoid_ingredient_thc_thca']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Cannabinoid ingredient CBD + CBDA (%)</label>
                      <?php echo $strain_data['cannabinoid_ingredient_cbd_cbda']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Cannabinoid ingredient THCV + THCVA (%)</label>
                      <?php echo $strain_data['cannabinoid_ingredient_thcv_thcva']; ?>
                    </div>      
                </div>
				
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Cannabinoid ingredient CBC + CBCA (%)</label>
                      <?php echo $strain_data['cannabinoid_ingredient_cbc_cbca']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Cannabinoid ingredient CBG + CBGA (%)</label>
                      <?php echo $strain_data['cannabinoid_ingredient_cbg_cbga']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Cannabinoid ingredient CBN + CBNA (%)</label>
                      <?php echo $strain_data['cannabinoid_ingredient_cbn_cbna']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids α-Bisabolol (%)</label>
                      <?php echo $strain_data['terpenoids_bisabolol']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids Borneol (%)</label>
                      <?php echo $strain_data['terpenoids_borneol']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids Camphene (%)</label>
                      <?php echo $strain_data['terpenoids_camphene']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids Carene (%)</label>
                      <?php echo $strain_data['terpenoids_carene']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids Caryophyllene Oxide (%)</label>
                      <?php echo $strain_data['terpenoids_caryophyllene_oxide']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids β-Carophyllene (%))</label>
                      <?php echo $strain_data['terpenoids_carophyllene']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids Fenchol (%)</label>
                      <?php echo $strain_data['terpenoids_fenchol']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids Geraniol (%)</label>
                      <?php echo $strain_data['terpenoids_geraniol']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids α-Humulene (%)</label>
                      <?php echo $strain_data['terpenoids_humulene']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids Limonene (%)</label>
                      <?php echo $strain_data['terpenoids_limonene']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids Linalool (%)</label>
                      <?php echo $strain_data['terpenoids_linalool']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids Myrcene (%)</label>
                     <?php echo $strain_data['terpenoids_myrcene']; ?> 
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids α- Phellandrene (%)</label>
                      <?php echo $strain_data['terpenoids_phellandrene']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids Terpinolene (%)</label>
                      <?php echo $strain_data['terpenoids_terpinolene']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids α-Terpineol (%)</label>
                      <?php echo $strain_data['terpenoids_terpineol']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids α-Terpinene (%)</label>
                      <?php echo $strain_data['terpenoids_terpinene']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids γ-Terpinene (%)</label>
                      <?php echo $strain_data['terpenoids_y_terpinene']; ?>
					  
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Total Nerolidol (%)</label>
                      <?php echo $strain_data['total_nerolidol']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Total Ocimene (%)</label>
                      <?php echo $strain_data['total_ocimene']; ?>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids α-Pinene (%)</label>
                      <?php echo $strain_data['terpenoids_pinene']; ?>
                    </div>      
                </div>
				
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids β-Pinene (%)</label>
                      <?php echo $strain_data['terpenoids_b_pinene']; ?>
                    </div>      
                </div>

                  
                </form>
              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      
<?php require_once("includes/footer.php"); ?>

 <!-- Select2 -->
    <script src="plugins/select2/select2.full.min.js"></script>
	 <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
	
	<script>
      $(function () {
        //Initialize Select2 Elements
     

        //Datemask dd/mm/yyyy
		 $("#accession_date").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        $("#outdoor_harvest_date").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#outdoor_sowing_date").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        
      });
    </script>

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

function check_referral_care(referral_care){
	if(referral_care==9){
		$("#other_source_of_referral_to_palliative_care").show();
	}else{
		$("#other_source_of_referral_to_palliative_care").hide();
	}
}
function check_admission_type(type_id){
	if(type_id==8){
		$("#other_admission_type").show();
	}else{
		$("#other_admission_type").hide();
	}
}
  
$(document).ready(function (e) { 
$("#save_strain_data").on('submit',(function(e) {
	$(".loading").show();
e.preventDefault();


$.ajax({
url: "ajax/save_strain_data.php", // Url to which the request is send
type: "POST",             // Type of request to be send, called as method
data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
contentType: false,       // The content type used when sending data to the server.
cache: false,             // To unable request pages to be cached
processData:false,  
   
success: function(data)   // A function to be called if request succeeds
{
 $(".loading").hide();	
  var obj = jQuery.parseJSON(data);
  if( obj.error==1 ){
      $(".error").html(obj.msg);
  }else{
	    alert("Submitted successfully");
		if( obj.error=='doctor'){
			window.location="my-treatments.php";
		}else{
			window.location="researcher_treatments.php";
		}
  }

}
});
return false;
}));
});
</script>
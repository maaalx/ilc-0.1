<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
	require_once("includes/left.php");
	if(!checkPermissions($_SESSION['admin_user_id'],array(4))){ 
		header("location:index.php");
	}
	 
	if(isset($_GET['vivo_id']) && $_GET['vivo_id']!=''){ 
		$vivo_id=addslashes($_GET['vivo_id']); 
	}else{
		$vivo_id=0;
	}
	$researcher_id=$_SESSION['admin_user_id'];
	
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          Step 2: Add Strain Data
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
                <form role="form" name="save_vivo_strain_data" id="save_vivo_strain_data" action="" enctype="multipart/form-data" method="post">  
				<input type="hidden" name="vivo_id" id="vivo_id" value="<?php echo $_GET['vivo_id']; ?>">
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Common Name(<span style="color:red">*</span>)</label>
                      <input class="form-control" type="text" name="common_name" id="common_name" placeholder="Common Name">
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Any other descriptors 1</label>
                      <input class="form-control" type="text" name="any_other_descriptors_1" id="any_other_descriptors_1" placeholder="Common Name">
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Any other descriptors 2</label>
                      <input class="form-control" type="text" name="any_other_descriptors_2" id="any_other_descriptors_2" placeholder="Any other descriptors 2">
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Any other descriptors 3</label>
                      <input class="form-control" type="text" name="any_other_descriptors_3" id="any_other_descriptors_3" placeholder="Any other descriptors 3">
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Any other descriptors 4</label>
                      <input class="form-control" type="text" name="any_other_descriptors_4" id="any_other_descriptors_4" placeholder="Any other descriptors 4">
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Any other descriptors 5</label>
                      <input class="form-control" type="text" name="any_other_descriptors_5" id="any_other_descriptors_5" placeholder="Any other descriptors 5">
                    </div>      
                </div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Country of origin</label>
                      <select name="country_of_origin" id="country_of_origin" class="form-control">
						<option value="">Select</option>
						<?php 
						$query=mysqli_query($db,"select * from country");
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
                      <label>Pedigree</label>
                      <select name="pedigree" id="pedigree" class="form-control">
						<option value="">Select</option>
						<option  value="indica">Indica</option>	
						<option  value="sativa">Sativa</option>
						<option  value="hybrid">Hybrid</option>						
                      </select>
                    </div>
				</div>	
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Pedigree (Enter the parentage)</label>
                      <input class="form-control" type="text" name="pedigree_enter_the_parentage" id="pedigree_enter_the_parentage" placeholder="Pedigree (Enter the parentage)">
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Breeder name if known</label>
                      <input class="form-control" type="text" name="breeder_name_if_known" id="breeder_name_if_known" placeholder="Breeder name if known">
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Growers</label>
                      <input class="form-control" type="text" name="growers" id="growers" placeholder="Growers">
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Manufacturer Name (if a product)</label>
                      <input class="form-control" type="text" name="manufacturer_name" id="manufacturer_name" placeholder="Manufacturer Name (if a product)">
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Manufacturer Address</label>
                      <input class="form-control" type="text" name="manufacturer_address" id="manufacturer_address" placeholder="Manufacturer Address">
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Available regions (post code)</label>
                      <input class="form-control" type="text" name="available_regions" id="available_regions" placeholder="Available regions (post code)">
                    </div>      
                </div>
				
				<div class="form-group ">
					<div class="form-group">
                      <label>Available region (Country)</label>
                      <select name="available_region_country" id="available_region_country" class="form-control">
						<option value="">Select</option>
						<?php 
						$query=mysqli_query($db,"select * from country");
						while($row=mysqli_fetch_assoc($query)){
						?>
						<option  value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
						<?php 	
						}
					   ?>					
                      </select>
                    </div>
				</div>	
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Accession Date</label>
                      <input class="form-control" type="text" name="accession_date" id="accession_date" placeholder="DD/MM/YYYY">
                    </div>      
                </div>
				
				<div class="form-group ">
                      <label>Gender</label>
					<div class="form-group">
                      <select name="gender" id="gender" class="form-control">
						<option value="">Select</option>
						<option  value="male">Male</option>	
						<option  value="female">Female</option>				
                      </select>
                    </div>
				</div>	
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Percent Heterozygosity</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="percent_heterozygosity" id="percent_heterozygosity" placeholder="Percent Heterozygosity">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>VCF file of sequence</label>
                      <input class="form-control" type="file" name="vcf_file_of_sequence" id="vcf_file_of_sequence">
					  
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>FastQ Files of sequence</label>
                      <input class="form-control" type="file" name="fastq_files_of_sequence" id="fastq_files_of_sequence">
					  
                    </div>      
                </div>
				
				<div class="form-group ">
                      <label>Location</label>
					<div class="form-group">
                      <select name="location" id="location" class="form-control">
						<option value="">Select</option>
						<option  value="indoor">Indoor</option>	
						<option  value="outdoor">Outdoor</option>				
                      </select>
                    </div>
				</div>	
				
				<div class="form-group ">
                      <label>Grow method</label>
					<div class="form-group">
                      <select name="grow_method" id="grow_method" class="form-control">
						<option value="">Select</option>
						<option  value="soil">Soil</option>	
						<option  value="coco">Coco</option>	
						<option  value="hydroponics">Hydroponics</option>						
                      </select>
                    </div>
				</div>	
				
				<div class="form-group ">
                      <label>Soil Mix</label>
					<div class="form-group">
                      <select name="soil_mix" id="soil_mix" class="form-control">
						<option value="">Select</option>
						<?php 
						$query=mysqli_query($db,"select * from strain_data_soil_mix order by name");
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
                      <label>Are you using living soil</label>
					<div class="form-group">
                      <select name="are_you_using_living_soil" id="are_you_using_living_soil" class="form-control">
						<option value="">Select</option>
						<option  value="yes">Yes</option>	
						<option  value="no">No</option>				
                      </select>
                    </div>
				</div>

				<div class="form-group ">
                      <label>Day Light during Vegetative Stage (hours)</label>
					<div class="form-group">
                      <select name="day_light_during_vegetative_stage" id="day_light_during_vegetative_stage" class="form-control">
						<option value="">Select</option>
						<?php 
						for($i=1;$i<=24;$i++){
						?>
						<option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
						<?php 	
						}
					   ?>				
                      </select>
                    </div>
				</div>

				<div class="form-group ">
                      <label>Night Light during Vegetative Stage (hours)</label>
					<div class="form-group">
                      <select name="night_light_during_vegetative_stage" id="night_light_during_vegetative_stage" class="form-control">
						<option value="">Select</option>
						<?php 
						for($i=1;$i<=24;$i++){
						?>
						<option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
						<?php 	
						}
					   ?>				
                      </select>
                    </div>
				</div>	
				
				<div class="form-group ">
                      <label>Day Light during Reproductive Stage</label>
					<div class="form-group">
                      <select name="day_light_during_reproductive_stage" id="day_light_during_reproductive_stage" class="form-control">
						<option value="">Select</option>
						<?php 
						for($i=1;$i<=24;$i++){
						?>
						<option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
						<?php 	
						}
					   ?>				
                      </select>
                    </div>
				</div>	
				
				
				<div class="form-group ">
                      <label>Night Light during Reproductive Stage</label>
					<div class="form-group">
                      <select name="night_light_during_reproductive_stage" id="night_light_during_reproductive_stage" class="form-control">
						<option value="">Select</option>
						<?php 
						for($i=1;$i<=24;$i++){
						?>
						<option  value="<?php echo $i; ?>"><?php echo $i; ?></option>
						<?php 	
						}
					   ?>				
                      </select>
                    </div>
				</div>	
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Temperature during Vegetative Stage (o Celsius)</label>
                      <input class="form-control maskedExt" maskedFormat="10,1" type="text" name="temperature_during_vegetative_stage" id="temperature_during_vegetative_stage" placeholder="Temperature during Vegetative Stage (o Celsius)">
					  <span style="color:red">(Can enter a number with one decimal place)</span>
                    </div>      
                </div>
				
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Temperature during Reproductive Stage (o Celsius)</label>
                      <input class="form-control maskedExt" maskedFormat="10,1" type="text" name="temperature_during_reproductive_stage" id="temperature_during_reproductive_stage" placeholder="Temperature during Reproductive Stage (o Celsius)">
					  <span style="color:red">(Can enter a number with one decimal place)</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Relative Humidity during Vegetative Stage (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,1" type="text" name="relative_humidity_during_vegetative_stage" id="relative_humidity_during_vegetative_stage" placeholder="Relative Humidity during Vegetative Stage (%)">
					  <span style="color:red">(Can enter a number with one decimal place)</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Relative Humidity during Reproductive Stage (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,1" type="text" name="relative_humidity_during_reproductive_stage" id="relative_humidity_during_reproductive_stage" placeholder="Relative Humidity during Reproductive Stage (%)">
					  <span style="color:red">(Can enter a number with one decimal place)</span>
                    </div>      
                </div>
				
				<div class="form-group ">
                      <label>CO2 supplementation</label>
					<div class="form-group">
                      <select name="co2_supplementation" id="co2_supplementation" class="form-control">
						<option value="">Select</option>
						<option  value="yes">Yes</option>	
						<option  value="no">No</option>				
                      </select>
                    </div>
				</div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>CO2 supplementation (ppm)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="co2_supplementation_ppm" id="co2_supplementation_ppm" placeholder="CO2 supplementation (ppm)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Light spectrum during vegetative stage (kelvin)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="light_spectrum_during_vegetative_stage" id="light_spectrum_during_vegetative_stage" placeholder="Light spectrum during vegetative stage (kelvin)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Light spectrum during reproductive stage (kelvin)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="light_spectrum_during_reproductive_stage" id="light_spectrum_during_reproductive_stage" placeholder="Light spectrum during reproductive stage (kelvin)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="form-group ">
                      <label>Lamp type (vegetative stage)</label>
					<div class="form-group">
                      <select name="lamp_type_vegetative_stage" id="lamp_type_vegetative_stage" class="form-control">
						<option value="">Select</option>
						<option  value="high_pressure_sodium">High Pressure Sodium</option>	
						<option  value="metal_halide">Metal Halide</option>	
						<option  value="ceramic_metal_halide">Ceramic Metal Halide</option>
						<option  value="led">LED</option>						
                      </select>
                    </div>
				</div>
				
				
				<div class="form-group ">
                      <label>Lamp type (reproductive stage)</label>
					<div class="form-group">
                      <select name="lamp_type_reproductive_stage" id="lamp_type_reproductive_stage" class="form-control">
						<option value="">Select</option>
						<option  value="high_pressure_sodium">High Pressure Sodium</option>	
						<option  value="metal_halide">Metal Halide</option>	
						<option  value="ceramic_metal_halide">Ceramic Metal Halide</option>
						<option  value="led">LED</option>					
                      </select>
                    </div>
				</div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Watering during vegetative stage (litres per day per sq mt)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="watering_during_vegetative_stage" id="watering_during_vegetative_stage" placeholder="Watering during vegetative stage (litres per day per sq mt)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Watering during reproductive stage (litres per day per sq mt)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="watering_during_reproductive_stage" id="watering_during_reproductive_stage" placeholder="Watering during reproductive stage (litres per day per sq mt)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="form-group ">
                      <label>Fertilisers during vegetative stage</label>
					<div class="form-group">
                      <select name="fertilisers_during_vegetative_stage" id="fertilisers_during_vegetative_stage" class="form-control">
						<option value="">Select</option>
						<option  value="mineral_based">Mineral based</option>	
						<option  value="organic_based">Organic based</option>	
						<option  value="combination">Combination</option>		
                      </select>
                    </div>
				</div>
				
				<div class="form-group ">
                      <label>Fertilisers during reproductive stage</label>
					<div class="form-group">
                      <select name="fertilisers_during_reproductive_stage" id="fertilisers_during_reproductive_stage" class="form-control">
						<option value="">Select</option>
						<option  value="mineral_based">Mineral based</option>	
						<option  value="organic_based">Organic based</option>	
						<option  value="combination">Combination</option>
									
                      </select>
                    </div>
				</div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Fertilisers (target N:P:K ratio vegetative stage)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="fertilisers_vegetative_stage" id="fertilisers_vegetative_stage" placeholder="Fertilisers (target N:P:K ratio vegetative stage)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Fertilisers (target N:P:K ratio reproductive stage)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="fertilisers_reproductive_stage" id="fertilisers_reproductive_stage" placeholder="Fertilisers (target N:P:K ratio reproductive stage)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Time from seed/cutting to transplantation (days) </label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="time_from_seed_cutting_to_transplantation" id="time_from_seed_cutting_to_transplantation" placeholder="Time from seed/cutting to transplantation (days) ">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Time from transplantation to flower induction (weeks)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="time_from_transplantation_to_flower_induction" id="time_from_transplantation_to_flower_induction" placeholder="Time from transplantation to flower induction (weeks)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Time from flower induction to harvest (weeks)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="time_from_flower_induction_to_harvest" id="time_from_flower_induction_to_harvest" placeholder="Time from flower induction to harvest (weeks)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="form-group ">
                      <label>Time of harvest</label>
					<div class="form-group">
                      <select name="time_of_harvest" id="time_of_harvest" class="form-control">
						<option value="">Select</option>
						<option  value="morning">Morning</option>	
						<option  value="afternoon">Afternoon</option>	
						<option  value="evening">Evening</option>
				
                      </select>
                    </div>
				</div>
				
				
				
				<div class="form-group ">
                      <label>Trichome maturity</label>
					<div class="form-group">
                      <select name="trichome_maturity" id="trichome_maturity" class="form-control">
						<option value="">Select</option>
						<option  value="majority_clear">Majority Clear</option>	
						<option  value="majority_cloudy">Majority Cloudy</option>	
						<option  value="majority_amber">Majority Amber</option>
											
                      </select>
                    </div>
				</div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Average yield (grams per sq mt)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="average_yield" id="	average_yield" placeholder="Time from transplantation to flower induction (weeks)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Outdoor sowing date</label>
                      <input class="form-control" type="text" name="outdoor_sowing_date" id="outdoor_sowing_date" placeholder="DD/MM/YYYY">
					  <span style="color:red"></span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Outdoor harvest date</label>
                      <input class="form-control" type="text" name="outdoor_harvest_date" id="outdoor_harvest_date" placeholder="DD/MM/YYYY">
					  <span style="color:red"></span>
                    </div>      
                </div>
				
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Average height (mts)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="average_height" id="average_height" placeholder="Average height (mts)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Cultivation tips</label>
                      <input class="form-control "  type="text" name="cultivation_tips" id="cultivation_tips" placeholder="Cultivation tips">
					  
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Drying Temperature (oC)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="drying_temperature" id="drying_temperature" placeholder="Drying Temperature (oC)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Drying Humidity (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="drying_humidity" id="drying_humidity" placeholder="Drying Humidity (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Drying time (days)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="drying_time" id="drying_time" placeholder="Drying time (days)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Type of packaging</label>
                      <input class="form-control "  type="text" name="type_of_packaging" id="type_of_packaging" placeholder="Type of packaging">
					  
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Storage temperature (oC)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="storage_temperature" id="storage_temperature" placeholder="Storage temperature (oC)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Storage time (oC)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="storage_time" id="storage_time" placeholder="Storage time (oC)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Extraction method</label>
                      <input class="form-control "  type="text" name="extraction_method" id="extraction_method" placeholder="Extraction method">
					  
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Flavour/Scent</label>
                      <input class="form-control "  type="text" name="flavour_scent" id="flavour_scent" placeholder="Flavour/Scent">
					  
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Cannabinoid ingredient THC + THCA (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="cannabinoid_ingredient_thc_thca" id="cannabinoid_ingredient_thc_thca" placeholder="Cannabinoid ingredient THC + THCA (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Cannabinoid ingredient CBD + CBDA (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="cannabinoid_ingredient_cbd_cbda" id="cannabinoid_ingredient_cbd_cbda" placeholder="Cannabinoid ingredient CBD + CBDA (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Cannabinoid ingredient THCV + THCVA (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="cannabinoid_ingredient_thcv_thcva" id="cannabinoid_ingredient_thcv_thcva" placeholder="Cannabinoid ingredient THCV + THCVA (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Cannabinoid ingredient CBC + CBCA (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="cannabinoid_ingredient_cbc_cbca" id="cannabinoid_ingredient_cbc_cbca" placeholder="Cannabinoid ingredient CBC + CBCA (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Cannabinoid ingredient CBG + CBGA (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="cannabinoid_ingredient_cbg_cbga" id="cannabinoid_ingredient_cbg_cbga" placeholder="Cannabinoid ingredient CBG + CBGA (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Cannabinoid ingredient CBN + CBNA (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="cannabinoid_ingredient_cbn_cbna" id="cannabinoid_ingredient_cbn_cbna" placeholder="Cannabinoid ingredient CBN + CBNA (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids α-Bisabolol (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_bisabolol" id="terpenoids_bisabolol" placeholder="Terpenoids α-Bisabolol (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids Borneol (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_borneol" id="terpenoids_borneol" placeholder="Terpenoids Borneol (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids Camphene (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_camphene" id="terpenoids_camphene" placeholder="Terpenoids Camphene (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids Carene (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_carene" id="terpenoids_carene" placeholder="Terpenoids Carene (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids Caryophyllene Oxide (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_caryophyllene_oxide" id="terpenoids_caryophyllene_oxide" placeholder="Terpenoids Caryophyllene Oxide (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids β-Carophyllene (%))</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_carophyllene" id="terpenoids_carophyllene" placeholder="Terpenoids Carene (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids Fenchol (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_fenchol" id="terpenoids_fenchol" placeholder="Terpenoids Carene (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids Geraniol (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_geraniol" id="terpenoids_geraniol" placeholder="Terpenoids Geraniol (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids α-Humulene (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_humulene" id="terpenoids_humulene" placeholder="Terpenoids α-Humulene (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids Limonene (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_limonene" id="terpenoids_limonene" placeholder="Terpenoids Limonene (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids Linalool (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_linalool" id="terpenoids_linalool" placeholder="Terpenoids Linalool (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids Myrcene (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_myrcene" id="terpenoids_myrcene" placeholder="Terpenoids Myrcene (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids α- Phellandrene (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_phellandrene" id="terpenoids_phellandrene" placeholder="Terpenoids α- Phellandrene (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids Terpinolene (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_terpinolene" id="terpenoids_terpinolene" placeholder="Terpenoids Terpinolene (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids α-Terpineol (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_terpineol" id="terpenoids_terpineol" placeholder="Terpenoids α-Terpineol (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids α-Terpinene (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_terpinene" id="terpenoids_terpinene" placeholder="Terpenoids α-Terpinene (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids γ-Terpinene (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_y_terpinene" id="terpenoids_y_terpinene" placeholder="Terpenoids γ-Terpinene (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Total Nerolidol (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="total_nerolidol" id="total_nerolidol" placeholder="Total Nerolidol (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Total Ocimene (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="total_ocimene" id="total_ocimene" placeholder="Total Ocimene (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids α-Pinene (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_pinene" id="terpenoids_pinene" placeholder="Terpenoids α-Pinene (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>
				
				
				<div class="box-body">
                  <div class="form-group">
                      <label>Terpenoids β-Pinene (%)</label>
                      <input class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_b_pinene" id="terpenoids_b_pinene" placeholder="Terpenoids β-Pinene (%)">
					  <span style="color:red">(Enter number here (Up to two decimal points))</span>
                    </div>      
                </div>

                  <div class="box-footer">
                    <div class="error" style="color:red"></div>
                    <button type="submit" class="btn btn-primary">Next</button>
					<img style="display:none" class="loading" src="img/loading.gif">
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
$("#save_vivo_strain_data").on('submit',(function(e) {
	$(".loading").show();
e.preventDefault();


$.ajax({
url: "ajax/save_vivo_strain_data.php", // Url to which the request is send
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
		window.location="my-treatments.php";
		
  }

}
});
return false;
}));
});
</script>
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
			Strain Search
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
				
				<div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li ><a href="search_advanced.php" >Advanced Disease Search</a></li>
                  <li class="active"><a href="strain_search_advanced.phps" >Advanced Strain Search</a></li>
                  
                </ul>
                <div class="tab-content">
                  <div class=" tab-pane" id="activity">
                                 

                 
                  </div><!-- /.tab-pane -->
                  <div class="tab-pane active" id="timeline">
						<form role="form" name="search" id="search" action="strain_search_advanced.php" method="post">  
				
				
				
					<div class="box-body">
                    
						<div class="col-xs-6">
							<div class="form-group">
							  <label>Strain name</label>
							  <input value="<?php if(isset($_POST['strain_name']))echo $_POST['strain_name']; ?>" class="form-control" type="text" name="strain_name" id="strain_name" placeholder="Strain name" value="<?php if(isset($_POST['strain_name']))echo $_POST['strain_name']; ?>">
							</div>
						</div>
					   
						<div class="col-xs-6">
						  <div class="form-group">
							  <label>Terpenoids α-Bisabolol (%)</label>
							  <input value="<?php if(isset($_POST['terpenoids_bisabolol']))echo $_POST['terpenoids_bisabolol']; ?>" class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_bisabolol" id="terpenoids_bisabolol" placeholder="Terpenoids α-Bisabolol (%)">
							  <span style="color:red">(Enter number here (Up to two decimal points))</span>
							</div>      
						</div>
						<div class="col-xs-6">
						  <div class="form-group">
							  <label>Terpenoids Borneol (%)</label>
							  <input value="<?php if(isset($_POST['terpenoids_borneol']))echo $_POST['terpenoids_borneol']; ?>" class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_borneol" id="terpenoids_borneol" placeholder="Terpenoids Borneol (%)">
							  <span style="color:red">(Enter number here (Up to two decimal points))</span>
							</div>      
						</div>
				
						<div class="col-xs-6">
						  <div class="form-group">
							  <label>Terpenoids Camphene (%)</label>
							  <input value="<?php if(isset($_POST['terpenoids_camphene']))echo $_POST['terpenoids_camphene']; ?>" class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_camphene" id="terpenoids_camphene" placeholder="Terpenoids Camphene (%)">
							  <span style="color:red">(Enter number here (Up to two decimal points))</span>
							</div>      
						</div>
				
					<div class="col-xs-6">
					  <div class="form-group">
						  <label>Terpenoids Carene (%)</label>
						  <input value="<?php if(isset($_POST['terpenoids_carene']))echo $_POST['terpenoids_carene']; ?>" class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_carene" id="terpenoids_carene" placeholder="Terpenoids Carene (%)">
						  <span style="color:red">(Enter number here (Up to two decimal points))</span>
						</div>      
					</div>
				
					<div class="col-xs-6">
					  <div class="form-group">
						  <label>Terpenoids Caryophyllene Oxide (%)</label>
						  <input value="<?php if(isset($_POST['terpenoids_caryophyllene_oxide']))echo $_POST['terpenoids_caryophyllene_oxide']; ?>" class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_caryophyllene_oxide" id="terpenoids_caryophyllene_oxide" placeholder="Terpenoids Caryophyllene Oxide (%)">
						  <span style="color:red">(Enter number here (Up to two decimal points))</span>
						</div>      
					</div>
				
					<div class="col-xs-6">
					  <div class="form-group">
						  <label>Terpenoids β-Carophyllene (%))</label>
						  <input value="<?php if(isset($_POST['terpenoids_carophyllene']))echo $_POST['terpenoids_carophyllene']; ?>" class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_carophyllene" id="terpenoids_carophyllene" placeholder="Terpenoids Carene (%)">
						  <span style="color:red">(Enter number here (Up to two decimal points))</span>
						</div>      
					</div>
				
					<div class="col-xs-6">
					  <div class="form-group">
						  <label>Terpenoids Fenchol (%)</label>
						  <input value="<?php if(isset($_POST['terpenoids_fenchol']))echo $_POST['terpenoids_fenchol']; ?>" class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_fenchol" id="terpenoids_fenchol" placeholder="Terpenoids Carene (%)">
						  <span style="color:red">(Enter number here (Up to two decimal points))</span>
						</div>      
					</div>
				
					<div class="col-xs-6">
					  <div class="form-group">
						  <label>Terpenoids Geraniol (%)</label>
						  <input value="<?php if(isset($_POST['terpenoids_geraniol']))echo $_POST['terpenoids_geraniol']; ?>" class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_geraniol" id="terpenoids_geraniol" placeholder="Terpenoids Geraniol (%)">
						  <span style="color:red">(Enter number here (Up to two decimal points))</span>
						</div>      
					</div>
				
					<div class="col-xs-6">
					  <div class="form-group">
						  <label>Terpenoids α-Humulene (%)</label>
						  <input value="<?php if(isset($_POST['terpenoids_humulene']))echo $_POST['terpenoids_humulene']; ?>" class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_humulene" id="terpenoids_humulene" placeholder="Terpenoids α-Humulene (%)">
						  <span style="color:red">(Enter number here (Up to two decimal points))</span>
						</div>      
					</div>
				
					<div class="col-xs-6">
					  <div class="form-group">
						  <label>Terpenoids Limonene (%)</label>
						  <input value="<?php if(isset($_POST['terpenoids_limonene']))echo $_POST['terpenoids_limonene']; ?>" class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_limonene" id="terpenoids_limonene" placeholder="Terpenoids Limonene (%)">
						  <span style="color:red">(Enter number here (Up to two decimal points))</span>
						</div>      
					</div>
				
					<div class="col-xs-6">
					  <div class="form-group">
						  <label>Terpenoids Linalool (%)</label>
						  <input value="<?php if(isset($_POST['terpenoids_linalool']))echo $_POST['terpenoids_linalool']; ?>" class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_linalool" id="terpenoids_linalool" placeholder="Terpenoids Linalool (%)">
						  <span style="color:red">(Enter number here (Up to two decimal points))</span>
						</div>      
					</div>
				
					<div class="col-xs-6">
					  <div class="form-group">
						  <label>Terpenoids Myrcene (%)</label>
						  <input value="<?php if(isset($_POST['terpenoids_myrcene']))echo $_POST['terpenoids_myrcene']; ?>" class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_myrcene" id="terpenoids_myrcene" placeholder="Terpenoids Myrcene (%)">
						  <span style="color:red">(Enter number here (Up to two decimal points))</span>
						</div>      
					</div>
				
					<div class="col-xs-6">
					  <div class="form-group">
						  <label>Terpenoids α- Phellandrene (%)</label>
						  <input value="<?php if(isset($_POST['terpenoids_phellandrene']))echo $_POST['terpenoids_phellandrene']; ?>" class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_phellandrene" id="terpenoids_phellandrene" placeholder="Terpenoids α- Phellandrene (%)">
						  <span style="color:red">(Enter number here (Up to two decimal points))</span>
						</div>      
					</div>
				
					<div class="col-xs-6">
					  <div class="form-group">
						  <label>Terpenoids Terpinolene (%)</label>
						  <input value="<?php if(isset($_POST['terpenoids_terpinolene']))echo $_POST['terpenoids_terpinolene']; ?>" class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_terpinolene" id="terpenoids_terpinolene" placeholder="Terpenoids Terpinolene (%)">
						  <span style="color:red">(Enter number here (Up to two decimal points))</span>
						</div>      
					</div>
				
					<div class="col-xs-6">
					  <div class="form-group">
						  <label>Terpenoids α-Terpineol (%)</label>
						  <input value="<?php if(isset($_POST['terpenoids_terpineol']))echo $_POST['terpenoids_terpineol']; ?>" class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_terpineol" id="terpenoids_terpineol" placeholder="Terpenoids α-Terpineol (%)">
						  <span style="color:red">(Enter number here (Up to two decimal points))</span>
						</div>      
					</div>
				
					<div class="col-xs-6">
					  <div class="form-group">
						  <label>Terpenoids α-Terpinene (%)</label>
						  <input value="<?php if(isset($_POST['terpenoids_terpinene']))echo $_POST['terpenoids_terpinene']; ?>" class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_terpinene" id="terpenoids_terpinene" placeholder="Terpenoids α-Terpinene (%)">
						  <span style="color:red">(Enter number here (Up to two decimal points))</span>
						</div>      
					</div>
				
					<div class="col-xs-6">
					  <div class="form-group">
						  <label>Terpenoids γ-Terpinene (%)</label>
						  <input value="<?php if(isset($_POST['terpenoids_y_terpinene']))echo $_POST['terpenoids_y_terpinene']; ?>" class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_y_terpinene" id="terpenoids_y_terpinene" placeholder="Terpenoids γ-Terpinene (%)">
						  <span style="color:red">(Enter number here (Up to two decimal points))</span>
						</div>      
					</div>
				
					<div class="col-xs-6">
					  <div class="form-group">
						  <label>Total Nerolidol (%)</label>
						  <input value="<?php if(isset($_POST['total_nerolidol']))echo $_POST['total_nerolidol']; ?>" class="form-control maskedExt" maskedFormat="10,2" type="text" name="total_nerolidol" id="total_nerolidol" placeholder="Total Nerolidol (%)">
						  <span style="color:red">(Enter number here (Up to two decimal points))</span>
						</div>      
					</div>
				
					<div class="col-xs-6">
					  <div class="form-group">
						  <label>Total Ocimene (%)</label>
						  <input value="<?php if(isset($_POST['total_ocimene']))echo $_POST['total_ocimene']; ?>" class="form-control maskedExt" maskedFormat="10,2" type="text" name="total_ocimene" id="total_ocimene" placeholder="Total Ocimene (%)">
						  <span style="color:red">(Enter number here (Up to two decimal points))</span>
						</div>      
					</div>
				
					<div class="col-xs-6">
					  <div class="form-group">
						  <label>Terpenoids α-Pinene (%)</label>
						  <input value="<?php if(isset($_POST['terpenoids_pinene']))echo $_POST['terpenoids_pinene']; ?>" class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_pinene" id="terpenoids_pinene" placeholder="Terpenoids α-Pinene (%)">
						  <span style="color:red">(Enter number here (Up to two decimal points))</span>
						</div>      
					</div>
				
				
					<div class="col-xs-6">
					  <div class="form-group">
						  <label>Terpenoids β-Pinene (%)</label>
						  <input value="<?php if(isset($_POST['terpenoids_b_pinene']))echo $_POST['terpenoids_b_pinene']; ?>" class="form-control maskedExt" maskedFormat="10,2" type="text" name="terpenoids_b_pinene" id="terpenoids_b_pinene" placeholder="Terpenoids β-Pinene (%)">
						  <span style="color:red">(Enter number here (Up to two decimal points))</span>
						</div>      
					</div>
				</div>
                 


                  <div class="box-footer">
                    <div class="error" style="color:red"></div>
                    <button onclick="return validation()"  type="submit" class="btn btn-primary">Search</button>
					<img style="display:none" class="loading" src="img/loading.gif">
                  </div>
                </form>
                  </div><!-- /.tab-pane -->


                </div><!-- /.tab-content -->
              </div><!-- /.nav-tabs-custom -->
                <!-- form start -->
                
				
				<?php 
				
					if(isset($_POST['strain_name'])){
						$strain_name=addslashes($_POST['strain_name']);
						
						$where='';
						$terpenoids_bisabolol		=addslashes($_POST['terpenoids_bisabolol']);
						if($terpenoids_bisabolol!=''){
							$from=$terpenoids_bisabolol-1;
							$to=$terpenoids_bisabolol+1;
							$where.=" and terpenoids_bisabolol between '$from' and '$to'";
						}
						$terpenoids_borneol			=addslashes($_POST['terpenoids_borneol']);
						if($terpenoids_borneol!=''){
							$from=$terpenoids_borneol-1;
							$to=$terpenoids_borneol+1;
							$where.=" and terpenoids_borneol between '$from' and '$to'";
						}
						
						$terpenoids_camphene				=addslashes($_POST['terpenoids_camphene']);
						if($terpenoids_camphene!=''){
							$from=$terpenoids_camphene-1;
							$to=$terpenoids_camphene+1;
							$where.=" and terpenoids_camphene between '$from' and '$to'";
						}
						$terpenoids_carene				=addslashes($_POST['terpenoids_carene']);
						if($terpenoids_carene!=''){
							$from=$terpenoids_carene-1;
							$to=$terpenoids_carene+1;
							$where.=" and terpenoids_carene between '$from' and '$to'";
						}
						$terpenoids_caryophyllene_oxide		=addslashes($_POST['terpenoids_caryophyllene_oxide']);
						if($terpenoids_caryophyllene_oxide!=''){
							$from=$terpenoids_caryophyllene_oxide-1;
							$to=$terpenoids_caryophyllene_oxide+1;
							$where.=" and terpenoids_caryophyllene_oxide between '$from' and '$to'";
						}
						
						$terpenoids_carophyllene				=addslashes($_POST['terpenoids_carophyllene']);
						if($terpenoids_carophyllene!=''){
							$from=$terpenoids_carophyllene-1;
							$to=$terpenoids_carophyllene+1;
							$where.=" and terpenoids_carophyllene between '$from' and '$to'";
						}
						
						$terpenoids_fenchol				=addslashes($_POST['terpenoids_fenchol']);
						if($terpenoids_fenchol!=''){
							$from=$terpenoids_fenchol-1;
							$to=$terpenoids_fenchol+1;
							$where.=" and terpenoids_fenchol between '$from' and '$to'";
						}
						$terpenoids_geraniol				=addslashes($_POST['terpenoids_geraniol']);
						if($terpenoids_geraniol!=''){
							$from=$terpenoids_geraniol-1;
							$to=$terpenoids_geraniol+1;
							$where.=" and 	terpenoids_geraniol between '$from' and '$to'";
						}
						
						$terpenoids_humulene				=addslashes($_POST['terpenoids_humulene']);
						if($terpenoids_humulene!=''){
							$from=$terpenoids_humulene-1;
							$to=$terpenoids_humulene+1;
							$where.=" and 	terpenoids_humulene between '$from' and '$to'";
						}
						
						$terpenoids_limonene				=addslashes($_POST['terpenoids_limonene']);
						if($terpenoids_limonene!=''){
							$from=$terpenoids_limonene-1;
							$to=$terpenoids_limonene+1;
							$where.=" and 	terpenoids_limonene between '$from' and '$to'";
						}
						
						$terpenoids_linalool				=addslashes($_POST['terpenoids_linalool']);
						if($terpenoids_linalool!=''){
							$from=$terpenoids_linalool-1;
							$to=$terpenoids_linalool+1;
							$where.=" and 	terpenoids_linalool between '$from' and '$to'";
						}
						
						$terpenoids_myrcene				=addslashes($_POST['terpenoids_myrcene']);
						if($terpenoids_myrcene!=''){
							$from=$terpenoids_myrcene-1;
							$to=$terpenoids_myrcene+1;
							$where.=" and 	terpenoids_myrcene between '$from' and '$to'";
						}
						
						$terpenoids_phellandrene				=addslashes($_POST['terpenoids_phellandrene']);
						if($terpenoids_phellandrene!=''){
							$from=$terpenoids_phellandrene-1;
							$to=$terpenoids_phellandrene+1;
							$where.=" and 	terpenoids_phellandrene between '$from' and '$to'";
						}
						
						$terpenoids_terpinolene				=addslashes($_POST['terpenoids_terpinolene']);
						if($terpenoids_terpinolene!=''){
							$from=$terpenoids_terpinolene-1;
							$to=$terpenoids_terpinolene+1;
							$where.=" and terpenoids_terpinolene between '$from' and '$to'";
						}
						
						$terpenoids_terpineol				=addslashes($_POST['terpenoids_terpineol']);
						if($terpenoids_terpineol!=''){
							$from=$terpenoids_terpineol-1;
							$to=$terpenoids_terpineol+1;
							$where.=" and terpenoids_terpineol between '$from' and '$to'";
						}
						
						$terpenoids_terpinene				=addslashes($_POST['terpenoids_terpinene']);
						if($terpenoids_terpinene!=''){
							$from=$terpenoids_terpinene-1;
							$to=$terpenoids_terpinene+1;
							$where.=" and terpenoids_terpinene between '$from' and '$to'";
						}
						
						$terpenoids_y_terpinene				=addslashes($_POST['terpenoids_y_terpinene']);
						if($terpenoids_y_terpinene!=''){
							$from=$terpenoids_y_terpinene-1;
							$to=$terpenoids_y_terpinene+1;
							$where.=" and 	terpenoids_y_terpinene between '$from' and '$to'";
						}
						
						$total_nerolidol				=addslashes($_POST['total_nerolidol']);
						if($total_nerolidol!=''){
							$from=$total_nerolidol-1;
							$to=$total_nerolidol+1;
							$where.=" and total_nerolidol between '$from' and '$to'";
						}
						
						$total_ocimene				=addslashes($_POST['total_ocimene']);
						if($total_ocimene!=''){
							$from=$total_ocimene-1;
							$to=$total_ocimene+1;
							$where.=" and 	total_ocimene between '$from' and '$to'";
						}
						
						$terpenoids_pinene				=addslashes($_POST['terpenoids_pinene']);
						if($terpenoids_pinene!=''){
							$from=$terpenoids_pinene-1;
							$to=$terpenoids_pinene+1;
							$where.=" and 	terpenoids_pinene between '$from' and '$to'";
						}
						
						$terpenoids_b_pinene				=addslashes($_POST['terpenoids_b_pinene']);
						if($terpenoids_b_pinene!=''){
							$from=$terpenoids_b_pinene-1;
							$to=$terpenoids_b_pinene+1;
							$where.=" and terpenoids_b_pinene between '$from' and '$to'";
						}
						
						$search_query="select st.researcher_id,st.common_name,st.id,pt.	idpatientTreatment,st.vivo_id,st.vitro_id,st.patient_history_id,st.common_name,any_other_descriptors_1,st.any_other_descriptors_2,st.any_other_descriptors_3,st.any_other_descriptors_4,st.any_other_descriptors_5 from strain_data as st left join patienttreatment pt on st.patient_history_id=pt.patient_history_id where (st.ilc_id IS NOT NULL OR st.ilc_id!='') and (st.common_name like '%$strain_name%' OR st.any_other_descriptors_1 like '%$strain_name%' OR st.any_other_descriptors_2 like '%$strain_name%' OR st.any_other_descriptors_3 like '%$strain_name%' OR st.any_other_descriptors_4 like '%$strain_name%' OR st.any_other_descriptors_5 like '%$strain_name%') $where";
						
					$exe_query=mysqli_query($db,$search_query);
					$total_rec=mysqli_num_rows($exe_query);
						
					if($total_rec<1){
						echo "<span style='color:red'>No result was found</span>";
					}
					if($total_rec>0){
				?>
				
				<table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
					    <th>Strain Name</th>
                        <th>Disease Name</th>
                        <th>Efficacy Percent</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     
          <?php

		  
while($row=mysqli_fetch_assoc($exe_query)){
	$efficacyInpercent='';
	$diseaseName='';
	
	if($row['patient_history_id']!=NULL && $row['patient_history_id']!=''){
		$treatment_id=$row['idpatientTreatment'];
		$q=mysqli_query($db,"select efficacyInpercent from followups where treatmentNo='$treatment_id'");
		$followup=mysqli_fetch_assoc($q);
		$efficacyInpercent=$followup['efficacyInpercent'];
		
		$q=mysqli_query($db,"select ct.name from patienttreatment pt inner join conditionsofbeingtreated ct on ct.id=pt.conditionsOfBeingTreated where pt.idpatientTreatment='$treatment_id'");
		$temp_row=mysqli_fetch_assoc($q);
		$diseaseName=$temp_row['name'];
	}
	
	if($row['vivo_id']!=NULL && $row['vivo_id']!=''){
		$vivo_id=$row['vivo_id'];
		$q=mysqli_query($db,"select perent_efficacy_of_cannabis_treatment from vivo_experiment where id='$vivo_id'");
		$temp_row=mysqli_fetch_assoc($q);
		$efficacyInpercent=$temp_row['perent_efficacy_of_cannabis_treatment'];
		
		$q=mysqli_query($db,"select ct.name from vivo_experiment ve inner join conditionsofbeingtreated ct on ct.id=ve.condition_being_investigated where ve.id='$vivo_id'");
		$temp_row=mysqli_fetch_assoc($q);
		$diseaseName=$temp_row['name'];
	}
	
	if($row['vitro_id']!=NULL && $row['vitro_id']!=''){
		$vitro_id=$row['vitro_id'];
		
		$q=mysqli_query($db,"select percent_efficacy_in_cannabis_treatment_1,percent_efficacy_in_cannabis_treatment_2,percent_efficacy_in_cannabis_treatment_3,percent_efficacy_in_cannabis_treatment_4 from vitro_experiment where id='$vitro_id'");
		$temp_row=mysqli_fetch_assoc($q);
		if($temp_row['percent_efficacy_in_cannabis_treatment_1']!='0.00'){
			$efficacyInpercent=$temp_row['percent_efficacy_in_cannabis_treatment_1'];
		}elseif($temp_row['percent_efficacy_in_cannabis_treatment_2']!='0.00'){
			$efficacyInpercent=$temp_row['percent_efficacy_in_cannabis_treatment_2'];
		}elseif($temp_row['percent_efficacy_in_cannabis_treatment_3']!='0.00'){
			$efficacyInpercent=$temp_row['percent_efficacy_in_cannabis_treatment_3'];
		}else{
			$efficacyInpercent=$temp_row['percent_efficacy_in_cannabis_treatment_4'];
		}
		
		
		$q=mysqli_query($db,"select ct.name from vitro_experiment ve inner join conditionsofbeingtreated ct on ct.id=ve.condition_being_investigated where ve.id='$vitro_id'");
		$temp_row=mysqli_fetch_assoc($q);
		$diseaseName=$temp_row['name'];
		
	}	
 
?>

<tr>

<td><?php echo $row['common_name'];  ?></td>
<td><?php echo $diseaseName;  ?></td>
<td><?php echo $efficacyInpercent;  ?></td>



<td>
<a href="view_strain_data.php?id=<?php echo $row['id']; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View Strain Data</button></a>
<?php
$treatment_id=$row['idpatientTreatment'];
$temp_q=mysqli_query($db,"select researcher_id,patientId,doctorId from patienttreatment where idpatientTreatment='$treatment_id'");
$temp_row=mysqli_fetch_assoc($temp_q);

$researcher_id=$row['researcher_id'];
 if($_SESSION['admin_user_id']==$researcher_id && $row['patient_history_id']!='' && $row['patient_history_id']!=NULL){ ?>
<a href="view_patient_history.php?id=<?php echo $row['patient_history_id']; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View Patient History</button></a>

<a href="view_treatment.php?treatment_id=<?php echo $treatment_id; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View Treatment Details</button></a>
<?php } ?>

<?php 
if($row['patient_history_id']!=NULL && $row['patient_history_id']!=''){ ?>
				<?php if($temp_row['patientId']!=0 && $temp_row['patientId']!='' && $temp_row['patientId']!=NULL){ ?>
<a href="patient_details.php?id=<?php echo $temp_row['patientId']; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View Patient Details</button></a>
				<?php } ?>
	<?php if($temp_row['doctorId']!=0 && $temp_row['doctorId']!='' && $temp_row['doctorId']!=NULL){ ?>
<a href="doctor_details.php.php?id=<?php echo $temp_row['doctorId']; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View Doctor Details</button></a>
		<?php } ?>
<?php }  ?>

<?php if($row['vivo_id']!=NULL && $row['vivo_id']!=''){ ?>
<a href="view_vivo_experiment.php?id=<?php echo $vivo_id; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View Vivo Details</button></a>
<?php } ?>

<?php if($row['vitro_id']!=NULL && $row['vitro_id']!=''){ ?>
<a href="view_vitro_experiment.php?id=<?php echo $vitro_id; ?>"><button style="width: auto;" class="btn-success disabled" name="approved">View Vitro Details</button></a>
<?php } ?>
</td>
</tr>
<?php } ?>
</table>
					<?php } } ?>
              
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      
<?php require_once("includes/footer.php"); ?>

<script type="text/javascript">
function validation(){
	if($("#strain_name").val()==''){
		alert('Please Enter Strain Name');return false;
	}
}

</script>

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
</script>
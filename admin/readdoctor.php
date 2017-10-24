<?php
include("../db.php");

if(!empty($_POST["keyword"])) {
	$keyword=addslashes($_POST["keyword"]);
 $query ="SELECT fname,lname,user_id,ilc_id FROM users WHERE (lname like '%" . addslashes($keyword) . "%' OR fname like '%" . addslashes($keyword) . "%') and user_type='3' and ilc_id!='' ORDER BY fname,lname LIMIT 0,20";
$result = mysqli_query($db,$query);
echo '<ul id="country-list">';
$flag=1;
while($row=mysqli_fetch_assoc($result)) {

	$ilc_id=$row['ilc_id'];
	$q=mysqli_query($db,"select hospital_name,country from doctor where ilc_id='$ilc_id'");
	$doctor=mysqli_fetch_assoc($q);
	
	$country_id=$doctor['country'];
	$q=mysqli_query($db,"select * from country where iso='$country_id'");
	$country_data=mysqli_fetch_assoc($q);
	
	$flag=0;
?>


<li style="cursor:pointer" onClick="selectCountry('<?php echo $row["fname"].' '.$row['lname']; ?>','<?php echo $row["user_id"]; ?>');"><?php echo $row["fname"].' '.$row["lname"].' ('.$doctor['hospital_name'].', '.$country_data['name'].")"; ?></li>


<?php
	$q=mysqli_query($db,"select clinic_name,country from doctor_clinic where doctor_id='$ilc_id'");
	$total_clinic=mysqli_num_rows($q);
	$clinic=mysqli_fetch_assoc($q);
	
	
	$country_id=$clinic['country'];
	$q=mysqli_query($db,"select * from country where iso='$country_id'");
	$country_data=mysqli_fetch_assoc($q);
	if($total_clinic>0){
		$flag=0;
	?>
	<li style="cursor:pointer" onClick="selectCountry('<?php echo $row["fname"].' '.$row['lname']; ?>','<?php echo $row["user_id"]; ?>');"><?php echo $row["fname"].' '.$row["lname"].' ('.$clinic['clinic_name'].', '.$country_data['name'].")"; ?></li>
	<?php
	}

 }
 if($flag==1){
	 ?>
	<li style="cursor:pointer" onClick="selectCountry('',0)">Record Not Found</li>
	 <?php 
 }
echo '</ul>';
 } ?>
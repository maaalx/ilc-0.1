<?php 
function checkPermissions($user_id,$permissions){
	global $db;
	$flag=0;
	
	foreach($permissions as $val){
		
		if($val==4){
		$query=mysqli_query($db,"select * from users where user_id='$user_id' and (user_type='2' OR user_type='3') and is_reseacher='yes'");
		if(mysqli_num_rows($query)>0)return 1;
		}
		
	}
	foreach($permissions as $val){
		
		$query=mysqli_query($db,"select * from users where user_id='$user_id' and user_type='$val'");
		$total=mysqli_num_rows($query);
		if($total>0){
			$flag=1;break;
		}
	}
	if($flag==1)
		return 1;
	else return 0;
}

function checkPatientBelongsToDoctor($patientId,$doctorId){
	global $db;
	$query=mysqli_query($db,"select * from users where user_id='$patientId' and doctor_id='$doctorId'");
	$total_rows=mysqli_fetch_assoc($query);
	
	if($total_rows>0){
		return 1;
	}else{
		return 0;
	}
}

function show_only_for_searcher($user_id){
	global $db;
	$query=mysqli_query($db,"select * from users where user_id='$user_id' and user_type='4'");
	if(mysqli_num_rows($query)>0){
		return 1;
	}else{
		return 0;
	}
}
?>
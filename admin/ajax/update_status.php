<?php  	session_start();
include("../../db.php");

    
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }

    
    $user_id = filter_var(addslashes($_GET["user_id"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    $status = filter_var(addslashes($_GET["status"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
	
	if($status==1){
		$q=mysqli_query($db,"select * from users where user_id='$user_id'");
		$row=mysqli_fetch_assoc($q);
		
		$ilc_id='';
		$user_type=$row['user_type'];
		if($user_type==2){
			$ilc_id='P'.$user_id ;
		}
		if($user_type==3){
			$ilc_id='D'.$user_id ;
		}
		if($user_type==4){
			$ilc_id='R'.$user_id ;
		}
		
		$query="update users set ilc_id='$ilc_id' where user_id='$user_id'";
		$run_q=mysqli_query($db,$query);
	}else{
		$query="update users set ilc_id='' where user_id='$user_id'";
		$run_q=mysqli_query($db,$query);
	}
	$query="update users set status='$status' where user_id='$user_id'";
	$run_q=mysqli_query($db,$query);
	
   $arr = array('error' => "0",'msg'=>'success',"success"=>'1');
	echo json_encode($arr);return true;

?>
  

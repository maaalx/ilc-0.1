<?php  	session_start();
include("../../db.php");

    
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    }

    
    $strain_id = filter_var(addslashes($_GET["strain_id"]), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW|FILTER_FLAG_STRIP_HIGH);
    $ilc_id='S'.$strain_id;
	
	
	$query="update strain_data set status='1',ilc_id='$ilc_id' where id='$strain_id'";
	$run_q=mysqli_query($db,$query);
	
   $arr = array('error' => "0",'msg'=>'success',"success"=>'1');
	echo json_encode($arr);return true;

?>
  

<?php 	session_start();  	require("../../db.php");


	$user_id=$_SESSION['admin_user_id'];

$doctor_id=$_SESSION['admin_user_id'];
$comments=addslashes($_POST['comments']);
$follow_up_id=addslashes($_POST['follow_up_id']);


  $query="insert into follow_up_comments(doctor_id,follow_up_id,comment_txt,added_date)
  values('$doctor_id','$follow_up_id','$comments',now())";

  $exe_q=mysqli_query($db,$query);
  mysqli_close($db);

   $arr = array('error' => "0",'msg'=>'success',"success"=>'1');
  echo json_encode($arr);return true;

?>
  

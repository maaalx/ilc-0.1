<?php 	/* Start session */
		session_start();  
		/*Connect to database */
		require("../../db.php");



$r_id=$_SESSION['admin_user_id'];

/*Get all form fields*/
$article_name							=addslashes($_POST['article_name']);
$article_url							=addslashes(urlencode($_POST['article_url']));

	/* Query for insert patient data in database */
   $query="insert into articles(name,url,researcher_id,added_date)
  values('$article_name','$article_url','$r_id',now())";

  $exe_q=mysqli_query($db,$query);
  /*Close database connection*/
  mysqli_close($db);

  /*Return with success message*/
  $arr = array('error' => "0",'msg'=>'success',"success"=>'1');
  echo json_encode($arr);return true;

?>
  

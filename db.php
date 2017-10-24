<?php ob_start();
$mysql_hostname = "localhost";
$mysql_user = "id2573673_root";
$mysql_password = "password";
$mysql_database = "id2573673_ilc";
$prefix = "";
$db = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password,$mysql_database);


define("SITEROOT","http://www.maaalx.com");
?>
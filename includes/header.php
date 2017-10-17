<style>
	#navbarrighttop li {
		margin:0px;
		padding: 8px 50px 0 0;
		
	}
	#navbarrighttop li a{
		border: none;
		font-size: 120%;
	}
	#navbarrightbottom{
		margin: 0 20px 0 0;
		padding: 0 10px 0 10px;
	}
	#navbarbottom{
		height: 3%;
		font-size: 80%
	}
	
	#sociallink span {
		color: gainsboro;
		margin: 20px 0 0 0;
		font-size: 110%
	}
	#sociallink span:hover{
		color: gold;
	}
</style>
<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>ILC</title>
	<!-- Stylesheets -->
	<link rel="shortcut icon" type="image/png" href="../images/leave.png">
	<link href="<?php echo SITEROOT; ?>/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo SITEROOT; ?>/css/style.css" rel="stylesheet">
	<!-- Responsive -->
	<link href="<?php echo SITEROOT; ?>/css/responsive.css" rel="stylesheet">
	<link href="<?php echo SITEROOT; ?>/css/responsive.css" rel="stylesheet">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	
</head>


<body class="theme-green">

	<div class="page-wrapper">

		<!-- start preloader -->
		<div class="preloader"></div>
		<!-- end preloader -->

		<!-- Main Header / Style One-->
		<header class="main-header header-style-one">
			<!--navbar top-->
			<nav class="navbar navbar-inverse navbar-fixed-top" id="navbartop">
				<div class="navbar-header">
					<a class="navbar-brand" href="<?php echo SITEROOT; ?>/index.php"><span class="glyphicon glyphicon-leaf"></span> International Library Cannabinoid</a>
				</div>
				
				<ul id="navbarrighttop" class="nav navbar-nav navbar-right">
					<?php if(isset($_SESSION['admin_user_id'])){ ?>
				   
				    
					<li id="fadeinout"><a href="<?php echo SITEROOT; ?>/admin/index.php" class="appoinment" ><span class="glyphicon glyphicon-th-list"></span> Dashboard</a>
					</li>
				
					<li><a href="<?php echo SITEROOT; ?>/admin/logout.php" class="appoinment fadeinout"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
					</li>
					<?php 	
			}else{		?>
			       
				    <li><a href="/index.php" class="appoinment fadeinout"><span class="glyphicon glyphicon-log-in"></span> Home</a>
				    </li>
					<li><a href="<?php echo SITEROOT; ?>/login.php" class="appoinment fadeinout"><span class="glyphicon glyphicon-log-in"></span> Login</a>
					</li>
					<li><a href="<?php echo SITEROOT; ?>/admin/register.php" class="appoinment fadeinout"><span class="glyphicon glyphicon-user"></span> Register</a>
					</li>
					<?php } ?>

				</ul>

			</nav>
			<!--navbar bottom-->
		<nav class="navbar navbar-inverse navbar-fixed-bottom" id="navbarbottom">

				
				<div class="navbar-header">
					<div class="social-links pull-left" id="sociallink"> <span class="text-theme-color" style="color:gainsboro;font-size: 90% ">Follow Us</span> : <a href="#"><span class="fa fa-facebook-f"></span></a> <a href="#"><span class="fa fa-twitter"></span></a> <a href="#"><span class="fa fa-google-plus"></span></a> <a href="#"><span class="fa fa-linkedin"></span></a> </div>
				</div>
				<ul id="navbarrightbottom" class="nav navbar-nav navbar-right">
					<li><a href="<?php echo SITEROOT; ?>/index.php"><span class="glyphicon glyphicon-home"></span></a>
					</li>
					<li><a href="<?php echo SITEROOT; ?>/index.php"><span class="glyphicon glyphicon-question-sign"></span> </a>
					</li>
					<li><a href="<?php echo SITEROOT; ?>/index.php"><span class="glyphicon glyphicon-shopping-cart"></span> </a>
					</li>
					<li><a href="<?php echo SITEROOT; ?>/index.php"><span class="glyphicon glyphicon-earphone"></span> </a>
					</li>
				</ul>

			</nav>
			<script src="../js/jquery-3.2.1.js"></script>
			<script>
				$( document ).ready(function () {
					$("#fadeinout").fadeIn(1000).fadeOut(500).fadeIn(1000);
				} );
			</script>
		</header>

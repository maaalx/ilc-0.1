<?php
require("db.php");
//require_once("includes/header.php");
//require_once("includes/left.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="International Lbrary of Cannabies">
 <meta property="og:title" content="International Lbrary of Cannabies" />
 <meta property="og:image" content="images/leave.png" />
 <meta property="og:description" content="International Lbrary of Cannabies" />
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript"> //<![CDATA[ 
var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "http://www.trustlogo.com/");
document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]>
</script>
<link rel="stylesheet" href="css/style2.css">
<title>International Library of Cannabinoids</title>
<link rel="shortcut icon" href="images/leave.png">

</head>
<!--Header-->
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="container-fluid" style="background-color:#7B7C86;height:200px;">
	<div class="col-sm-12 container-fluid" >
		<div id="particles-js"> </div>
		<div id="introduction"> <img id="leaf" src="images/leave.png"> <img id="leftup" src="images/left-up.png"> <img id="leftlinear" src="images/lm.png"> <img id="rightup" src="images/right-up.png"> <img id="rightlinear" src="images/rm.png">
			<h4 id="leftuplabel">Purpose</h4>
			<h4 id="leftlinearlabel">Vision</h4>
			<h4 id="rightuplabel">Developers</h4>
			<h4 id="rightlinearlabel">Data Sources</h4>
		</div>
		<div id="welcomelabel">
			<h3 id="welcome">International Library of Cannabinoids</h3>
			<p id="welcomecontent">Our features are</p>
		</div>
	</div>
</div>
<!--navigation bar-->
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-leaf"></span> International Library of Cannabinoids</a> </div>
		<div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul id="navUl" class="nav navbar-nav navbar-right">
					<li><a href="#" ><span class="glyphicon glyphicon-home"></span> Home</a></li>
					
					<li><a href="login.php"><span class="glyphicon glyphicon-question-sign"></span> Login</a></li>
					
					
					<li><a href="<?php echo SITEROOT; ?>/admin/register.php"><span class="glyphicon glyphicon-shopping-cart"></span> Register</a></li>
				
				</ul>
			</div>
		</div>
	</div>
</nav>

<!--Left Carousel -->
<div class="row" id="leftCarousel">
	<div class="col-sm-8">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1" ></li>
				<li data-target="#myCarousel" data-slide-to="2" ></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active"> <img class="img-thumbnail" src="images/Left-Carousel-1.jpg" alt="ad1"> </div>
				<div class="item"> <img class="img-thumbnail" src="images/Left-Carousel-2.jpg" alt="ad2"> </div>
				<div class="item"> <img class="img-thumbnail" src="images/Left-Carousel-3.jpg" alt="ad3"> </div>
			</div>
		</div>
	</div>
	
	<!--Right Tabs-->
	<div id="rightTabs" class="col-sm-3 col-xs-offset-5 col-xs-8" >
		<ul class="nav nav-tabs">
			<li class="active"><a data-toggle="tab" href="#Researcher">Researcher</a></li>
			<li><a data-toggle="tab" href="#Doctor">Doctor</a></li>
			<li><a data-toggle="tab" href="#Patient">Patient</a></li>
			<li><a data-toggle="tab" href="#Admin">Admin</a></li>
		</ul>
		<div class="tab-content">
			<div id="Researcher" class="tab-pane fade in active">
				<h4><b>Researcher function</b></h4>
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>Items</th>
							<th>Descriptions</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Search</td>
							<td class="Description" style="font-size:0.9em">Researchers who hold a valid certificate can search for comprehensive investigation of strain data and patient data, also includes advance search function.</td>
						</tr>
					
						<tr>
							<td>Browse Patient Case</td>
							<td class="Descriptions"  style="font-size:0.9em">Researchers can browse any patient case to help their research. </td>
						</tr>
					</tbody>
				</table>
				<a href="login.php"><button class="btn btn-default">
				 Login
				</button></a>
			</div>
			<div id="Doctor" class="tab-pane fade">
				<h4><b>Doctor function</b></h4>
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>Items</th>
							<th>Descriptions</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Management Patient Case</a></td>
							<td class="Description" style="font-size:0.9em">Doctors can manage their patient's cases. They can add comments and annotations for individual case.</td>
						</tr>
					</tbody>
				</table>
				<a href="login.php"><button class="btn btn-default">
				 Login
				</button></a>
			</div>
			<div id="Patient" class="tab-pane fade">
				<h4><b>Patient function</b></h4>
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>Items</th>
							<th>Descriptions</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Upload Case </td>
							<td class="Description" style="font-size:0.9em">Patients can add their treatment history including severity of condition and effectiveness of particulat formulations. They can keep track of their treatment history to understand what works for their condition. Their assigned doctors will have access to patient treatment data to help customise treatment.</td>
						</tr>
					</tbody>
				</table>
				<a href="login.php"><button class="btn btn-default">
				 Login
				</button></a>
			</div>
			<div id="Admin" class="tab-pane fade">
				<h4><b>Admin function</b></h4>
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>Items</th>
							<th>Descriptions</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Modify Data </td>
							<td class="Description" style="font-size:0.9em">Admin can edit all daat including strain data, research data, npatient data. They can also edit user profiles and authorise individual entries </td>
						</tr>
						
							<tr>
							<td>System administrator </td>
							<td class="Description" style="font-size:0.9em">Admins can aprrove request to become researcher, add and delete users and all the system administration</td>
						</tr>
					</tbody>
				</table>
				<a href="login.php"><button class="btn btn-default">
				 Login
				</button></a>
			</div>
		</div>
	</div>
</div>
<div id="section1" class="container-fluid">
	<h3 id="aboutus">About ILC</h3>
	<div class="panel-group" id="accordion">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" >Who We Are</a> </h4>
			</div>
			<div id="collapse1" class="panel-collapse collapse-in">
				<div class="panel-body">This database has been created by RMIT University in collaboration with MGC Pharmaceuticals and BuddingTech Pty Ltd. It is designed to curate data cannabinoids. from growers, patients, doctors and researchers. </div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Research Opportunities</a> </h4>
			</div>
			<div id="collapse2" class="panel-collapse collapse">
				<div class="panel-body">We are interested in hearing from potential research groups and hospitals who are willing to share data and collaborate with us on this community project. Please contact Dr Nitin Mantri (nitin.mantri@rmit.edu.au).</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Website Features</a> </h4>
			</div>
			<div id="collapse3" class="panel-collapse collapse">
				<div class="panel-body">
					<table class="table-condensed table-responsive">
						<thead>
							<tr>
								<td><h3><span class="glyphicon glyphicon-star-empty"></span> Purpose</h3>
									<p>This project aims to provide an integrated and open source platform for cannabinoid research/user data from academia, industry and clinicians.</p></td>
										
								<td><h3><span class="glyphicon glyphicon-star-empty"></span> Vision</h3>
									<p>The vision is that all cannabinoid research/user data will be deposited in a common repository and overtime this repository will provide evidence for efficacy of cannabinoid treatment of various disorders, and help doctors, researchers and industry to choose the right cannabinoid profiles for various conditions.</p></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><h3><span class="glyphicon glyphicon-star-empty"></span> Developers</h3>
									<p>The database will be developed by Project Students, PhD students and Post Doc Fellow from RMIT University. Dr Nitin Mantri has worked on initial design in collaboration with other experts from RMIT University and across the world. Mr Adam Miller (BuddingTech and Medical Cannabis Council) is our industry liaison manager and is facilitating the collaboration with data producers across the world to ensure maximum data deposition and utilisation. MGC Pharmaceuticals is funding the development of the database to serve the Medical Cannabis community including Growers, Doctors, Patients, Researchers, Regulators and Industries.</p></td>
										
								<td><h3><span class="glyphicon glyphicon-star-empty"></span> Data Sources</h3>
									<p>There are two main trusted sources of data that will be initially considered: clinical case studies and research articles. There is enormous amount of data on medical use of cannabis that is right now scattered in a sense that it has not been archived in a systematic (structured) fashion to enable scientific evidence based data mining. This project will systematically archive research and clinical data to ensure all comprehensively performed and recorded cases are captured under one umbrella. Any study or case with poor evidence will be excluded. However the excluded cases will be recorded in a separate section with explanation on reason for exclusion.</p></td>
							</tr>
						
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>


<?php include("includes/footer.php"); ?> 
<div align="center">
	<p id="footerinfo">©2017 International Library of Cannabinoids, Inc. All rights reserved. </p>
</div>

<script src="js/my_scripts.js"></script>

<script type="text/javascript" src="js/particles.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>

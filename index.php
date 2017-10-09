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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style2.css">
<title>ILC</title>
<link rel="shortcut icon" href="images/leave.png">
</head>
<!--Header-->
<body data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="container-fluid" style="background-color:#7B7C86;height:200px;">
	<div class="col-sm-12 container-fluid" >
		<div id="particles-js"> </div>
		<div id="introduction"> <img id="leaf" src="images/leave.png"> <img id="leftup" src="images/left-up.png"> <img id="leftlinear" src="images/lm.png"> <img id="rightup" src="images/right-up.png"> <img id="rightlinear" src="images/rm.png">
			<h4 id="leftuplabel">Professional</h4>
			<h4 id="leftlinearlabel">Comprehensive</h4>
			<h4 id="rightuplabel">Reliable</h4>
			<h4 id="rightlinearlabel">Accurate</h4>
		</div>
		<div id="welcomelabel">
			<h3 id="welcome">Welcome to ILC</h3>
			<p id="welcomecontent">Our features are</p>
		</div>
	</div>
</div>
<!--navigation bar-->
<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<a class="navbar-brand" href="#"><span class="glyphicon glyphicon-leaf"></span> International Library Cannabinoid</a> </div>
		<div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul id="navUl" class="nav navbar-nav navbar-right">
					<li><a href="#" ><span class="glyphicon glyphicon-home"></span> Home</a></li>
					<li><a href="#section1" ><span class="glyphicon glyphicon-question-sign"></span> About Us</a></li>
					<li><a href="#section2" ><span class="glyphicon glyphicon-shopping-cart"></span> Products</a></li>
					<li><a href="#section3" ><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
				</ul>
			</div>
		</div>
	</div>
</nav>

<!--Left Carousel -->
<div class="row" id="leftCarousel">
	<div class="col-sm-9">
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
				<h4>Researcher function</h4>
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
							<td class="Description">ILC provides search function for researchers who hold a valid certificate.The search function includes advance search which provides extremely accurate search.</td>
						</tr>
						<tr>
							<td>Peer Review</td>
							<td class="Descriptions">ILC invites researchers who hold a valid certificate to rate and add comments for public articles</td>
						</tr>
						<tr>
							<td>Browse Patient Case</td>
							<td class="Descriptions">Researchers can search and browse any patient case to help their research. </td>
						</tr>
					</tbody>
				</table>
				<a href="login.php"><button class="btn btn-default">
				 Get start
				</button></a>
			</div>
			<div id="Doctor" class="tab-pane fade">
				<h4>Doctor function</h4>
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>Items</th>
							<th>Descriptions</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><a href="#" data-toggle="tooltip" title="only for charges">Management Patient Case<span class="glyphicon glyphicon-question-sign"> </span></a></td>
							<td class="Description">ILC provides function for doctors to manage their patient's cases.Doctor can add comments and annotations for individual case.</td>
						</tr>
					</tbody>
				</table>
				<a href="login.php"><button class="btn btn-default">
				 Get start
				</button></a>
			</div>
			<div id="Patient" class="tab-pane fade">
				<h4>Patient function</h4>
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
							<td class="Description">ILC provides storage space for patient to save their cases which can be browsed by doctors and researchers</td>
						</tr>
					</tbody>
				</table>
				<a href="login.php"><button class="btn btn-default">
				 Get start
				</button></a>
			</div>
			<div id="Admin" class="tab-pane fade">
				<h4>Admin function</h4>
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
							<td class="Description">Admins can modify data which include add label for specific article or change strain data.</td>
						</tr>
					</tbody>
				</table>
				<a href="login.php"><button class="btn btn-default">
				 Get start
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
				<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco  	laboris nisi ut aliquip ex ea commodo consequat.</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Career Opportunities</a> </h4>
			</div>
			<div id="collapse2" class="panel-collapse collapse">
				<div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
					sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">ILC's Advantages</a> </h4>
			</div>
			<div id="collapse3" class="panel-collapse collapse">
				<div class="panel-body">
					<table class="table-condensed table-responsive">
						<thead>
							<tr>
								<td><h3><span class="glyphicon glyphicon-thumbs-up"></span> Professional</h3>
									<p>ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliq</p></td>
								<td><h3><span class="glyphicon glyphicon-calendar"></span> Reliable</h3>
									<p>ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliq</p></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><h3><span class="glyphicon glyphicon-globe"></span> Comprehensive</h3>
									<p>ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliq</p></td>
								<td><h3><span class="glyphicon glyphicon-screenshot"></span> Accurate</h3>
									<p>ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliq</p></td>
							</tr>
						<td><h3><span class="glyphicon glyphicon-cloud"></span> Security</h3>
								<p>ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliq</p></td>
							<td><h3><span class="glyphicon glyphicon-piggy-bank"></span> Low price</h3>
								<p>ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliq</p></td>
								</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="section2" class="container-fluid">
	<div>
		<h3>ILC Products and Plans</h3>
		<ul class="panels">
			<li class="spuare">
				<div class="front" style="background-color: darkgrey">1 Day</div>
				<div class="back" style="background-color: dimgrey">AUD 1</div>
			</li>
			<li class="spuare">
				<div class="front" style="background-color: darkseagreen">3 Days</div>
				<div class="back" style="background-color: forestgreen">AUD 3</div>
			</li>
			<li class="spuare">
				<div class="front" style="background-color: #0789BC">7 Days</div>
				<div class="back" style="background-color: dodgerblue">AUD 6.5</div>
			</li>
			<li class="spuare">
				<div class="front" style="background-color:navajowhite">14 Days</div>
				<div class="back" style="background-color:burlywood">AUD 12</div>
			</li>
			<li class="spuare">
				<div class="front" style="background-color:darkgrey">1 Month</div>
				<div class="back" style="background-color: dimgrey">AUD 25</div>
			</li>
			<li class="spuare">
				<div class="front" style="background-color:darkseagreen">3 Months</div>
				<div class="back" style="background-color: forestgreen">AUD 70</div>
			</li>
			<li class="spuare">
				<div class="front" style="background-color:#0789BC">6 Months</div>
				<div class="back" style="background-color: dodgerblue">AUD 135</div>
			</li>
			<li class="spuare">
				<div class="front" style="background-color: navajowhite">1 Year</div>
				<div class="back" style="background-color: burlywood">AUD 260</div>
			</li>
		</ul>
	</div>
</div>
<div id="section3" class="container-fluid">
	<canvas id="canvas"></canvas>
	<h3 id="contactusheader">Contact Us</h3>
	<form id="contactus" class="col-sm-4 col-xs-12">
	
		<div class="form-group">
			<label for="name">Name <span class="glyphicon glyphicon-info-sign"></span></label>
			<input id="name" type="text" class="form-control" required style="width: 400px;" placeholder="Please input your name">
		</div>
		<div class="form-group">
			<label for="email">E-mail <span class="glyphicon glyphicon-info-sign"></span></label>
			<input id="email" type="email" class="form-control" required style="width: 400px;" placeholder="Please input your E-mail">
		</div>
		<div class="form-group">
			<label for="phone">Phone <span class="glyphicon glyphicon-info-sign"></span></label>
			<input id="phone" type="text" class="form-control" required style="width: 400px;" placeholder="Please input your phone">
		</div>
		<div class="form-group">
			<label for="Textarea">Textarea <span class="glyphicon glyphicon-info-sign"></span></label>
			<textarea id="textarea" class="form-control" rows="5" style="width: 400px;" required placeholder="Please input your enquire..."></textarea>
		</div>
		<button type="button" class="btn btn-default">Submit</button>
	</form>
	<div class="col-sm-3 col-xs-12"> <img class="img-thumbnail" id="map" src="images/map.jpg"> </div>
<!--Footer Column-->
        <div class="col-md-3 col-sm-6 col-xs-12">


		<ul>
			<li>
				<h4>Address</h4>
			</li>
			<li><font color="white">124 La Trobe St, Melbourne VIC 3000 </font></li>
			<li></li>
			<li>
				<h4>Phone</h4>
			</li>
			
			<li><font color="white"> (03) 9925 2000 </font></li>
			<li></li>
			<li>
				<h4>E-mail</h4>
			</li>
			<li><font color="white">ILC@gmail.com</font></li>
		</ul>
	</div>

        
          
<div id="footer" class="container-fluid">
	<p id="footerinfo">©2017 International Library Cannabinoid, Inc. All rights reserved. </p>
</div>

<script src="js/my_scripts.js"></script>

<script type="text/javascript" src="js/particles.js"></script>
<script type="text/javascript" src="js/app.js"></script>
</body>
</html>

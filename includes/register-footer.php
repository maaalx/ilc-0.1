<style>
#contactus{

	margin: 5px;
	float: left;
}

#map{
	position: absolute;
	
	width: 450px;
	margin: 30px 0 0 10px;
}
#map:hover{
	transform: scale(1.6);
}

#contactdetails{
	z-index: -1;
	list-style: none;
	margin: 30px 0 0 50px;
	
}
#contactdetails ul li{
	list-style: none;
	
	
}
#canvas{
	position: absolute;
	z-index: -2;
	background: #fefefe;
	width: 101%;
	height: 37%;
	margin-top: -10px;
	margin-left: -14px;
	margin-right: -5px;
}


</style>
 <!--Main Footer-->
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
	<div class="col-sm-3 col-xs-12"> <img class="img-thumbnail" id="map" src="../images/map.jpg"> </div>
	<div class="col-sm-3 col-xs-12" id="contactdetails">
		<ul>
			<li>
				<h4>Address</h4>
			</li>
			<li>124 La Trobe St, Melbourne VIC 3000</li>
			<li></li>
			<li>
				<h4>Phone</h4>
			</li>
			<li>(03) 9925 2000</li>
			<li></li>
			<li>
				<h4>E-mail</h4>
			</li>
			<li>ILC@gmail.com</li>
		</ul>
	</div>
</div>


<script src="<?php echo SITEROOT; ?>/js/my_scripts.js"></script>
<script src="<?php echo SITEROOT; ?>/js/jquery.js"></script> 
<script src="<?php echo SITEROOT; ?>/js/all-jquery.js"></script> 
<script src="<?php echo SITEROOT; ?>/js/script.js"></script>
</body>
</html>
<?php mysqli_close($db); ?>
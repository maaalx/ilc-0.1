<html>
    
<head>
    
    
    <script type="text/javascript"> //<![CDATA[ 
var tlJsHost = ((window.location.protocol == "https:") ? "https://secure.comodo.com/" : "http://www.trustlogo.com/");
document.write(unescape("%3Cscript src='" + tlJsHost + "trustlogo/javascript/trustlogo.js' type='text/javascript'%3E%3C/script%3E"));
//]]>
</script>
</head>    
    
<body>


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
#nitin:hover{
	text-decoration: underline;
}


</style>
 <!--Main Footer-->
  <div id="section3" class="container-fluid">
	<canvas id="canvas"></canvas>
	<h3 id="contactusheader">Contact Us</h3>

	</form>
	<div class="col-sm-3 col-xs-12" style="z-index: 1"> <img class="img-thumbnail" id="map" src="../images/map.jpg"> </div>
	<div class="col-sm-3 col-xs-12" id="contactdetails" style="z-index: 0">
		<ul>
			<li>
				<h4>Address</h4>
			</li>
			<li>PO Box 71, Plenty Road, Bundoora 3083 Victoria Australia</li>
			<li></li>
			<li>
				<h4>Phone</h4>
			</li>
			
			<li>+61 3 9925 7152</li>
			<li></li>
			<li>
				<h4>E-mail </h4>
			</li>
				<li>
				<li>Dr Nitin Mantri</li>
			</li>
			<li>
			<a id="nitin" href = "mailto: nitin.mantri@rmit.edu.au">nitin.mantri@rmit.edu.au</a></li>
		</ul>
	</div>
<script language="JavaScript" type="text/javascript">
TrustLogo("http://maaalx.com/comodo_secure_seal.png", "CL1", "none");
</script>
<a  href="https://ssl.comodo.com" id="comodoTL">SSL Certificates</a>
	</div>
</div>


<script src="<?php echo SITEROOT; ?>/js/my_scripts.js"></script>
<script src="<?php echo SITEROOT; ?>/js/jquery.js"></script> 
<script src="<?php echo SITEROOT; ?>/js/all-jquery.js"></script> 
<script src="<?php echo SITEROOT; ?>/js/script.js"></script>
</body>
</html>
<?php mysqli_close($db); ?>

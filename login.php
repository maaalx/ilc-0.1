

<?php
include( "db.php" );
include( "includes/header.php" );
?>
<style>
	/* CSS Document */
	body{
		background-color: darkgray;
	}
	.colorbox{
		padding: 6px 0 0 0;
		margin: 0 0 0 10px;
		text-align: center;
		color:white;
		font-size: 200%;
		border: white dotted 1px;
	}
	
	
	.trigger {
		position: absolute;
		top: 0%;
		left: 2.5%;
		#border: solid 1px black;
	}
	
	.box1 {
		background-color:darkgrey;
		width: 40px;
		height: 40px;
		margin: 0 -2px -2px 0;
		display: inline-block;
		transition: transform 500ms ease-in-out 500ms;
		pointer-events: none;
	}
	
	.box2 {
		background-color: darkgrey;
		width: 40px;
		height: 40px;
		margin: 0 -2px -2px -2px;
		display: inline-block;
		transition: transform 500ms ease-in-out 500ms;
		pointer-events: none;
	}
	
	.box3 {
		background-color: darkgrey;
		width: 40px;
		height: 40px;
		margin: 0 -2px -2px -2px;
		display: inline-block;
		transition: transform 300ms ease-in-out 500ms;
		pointer-events: none;
	}
	
	.box4 {
		background: darkgrey;
		width: 40px;
		height: 40px;
		margin: 0 -2px -2px -2px;
		display: inline-block;
		transition: transform 300ms ease-in-out 500ms;
		pointer-events: none;
	}
	
	.box5 {
		background-color: darkgrey;
		width: 40px;
		height: 40px;
		margin: -2px -2px -2px -2px;
		display: inline-block;
		transition: transform 500ms ease-in-out 500ms;
		pointer-events: none;
	}
	
	.box6 {
		background: darkgrey;
		width: 40px;
		height: 40px;
		margin: -2px -2px -2px -2px;
		display: inline-block;
		transition: transform 300ms ease-in-out 500ms;
		pointer-events: none;
	}
	
	.box7 {
		background-color: darkgrey;
		width: 40px;
		height: 40px;
		margin: -2px -2px -2px -2px;
		display: inline-block;
		transition: transform 500ms ease-in-out 500ms;
		pointer-events: none;
	}
	
	.box8 {
		background-color: darkgrey;
		width: 40px;
		height: 40px;
		margin: 0px -2px -2px -2px;
		display: inline-block;
		transition: transform 700ms ease-in-out 500ms;
		pointer-events: none;
	}
	
	.box9 {
		background-color: darkgrey;
		width: 40px;
		height: 40px;
		margin: 0 -2px -2px -2px;
		display: inline-block;
		transition: transform 700ms ease-in-out 500ms;
		pointer-events: none;
	}
	
	.box10 {
		background-color: darkgrey;
		width: 40px;
		height: 40px;
		margin: -2px -2px -2px -2px;
		display: inline-block;
		transition: transform 700ms ease-in-out 500ms;
		pointer-events: none;
	}
	
	.box11 {
		background-color: darkgrey;
		width: 40px;
		height: 40px;
		margin: -2px -2px -2px -2px;
		display: inline-block;
		transition: transform 700ms ease-in-out 500ms;
		pointer-events: none;
	}
	
	.box12 {
		background-color:darkgrey;
		width: 40px;
		height: 40px;
		margin: -2px -2px -2px -2px;
		display: inline-block;
		transition: transform 700ms ease-in-out 500ms;
		pointer-events: none;
	}
	
	.box13 {
		background-color:darkgrey;
		width: 40px;
		height: 40px;
		margin: -2px -2px -2px -2px;
		display: inline-block;
		transition: transform 700ms ease-in-out 500ms;
		pointer-events: none;
	}
	
	.box14 {
		background-color:darkgrey;
		width: 40px;
		height: 40px;
		margin: -2px -2px -2px -2px;
		display: inline-block;
		transition: transform 700ms ease-in-out 500ms;
		pointer-events: none;
	}
	
	.box15 {
		background-color:darkgrey;
		width: 40px;
		height: 40px;
		margin: -2px -2px -2px -2px;
		display: inline-block;
		transition: transform 700ms ease-in-out 500ms;
		pointer-events: none;
	}
	
	.box16 {
		background-color:darkgrey;
		width: 40px;
		height: 40px;
		margin: -2px -2px -2px -2px;
		display: inline-block;
		transition: transform 700ms ease-in-out 500ms;
		pointer-events: none;
	}
	
	.trigger:hover .box1 {
		transform: translate(600px, 50px)  scale(1.8)
	}
	
	.trigger:hover .box2 {
		transform: translate(560px, 130px)  scale(1.8)
	}
	
	.trigger:hover .box3 {
		transform: translate(520px, 210px)  scale(1.8)
	}
	
	.trigger:hover .box4 {
		transform: translate(480px, 290px)  scale(1.8)
	}
	
	.trigger:hover .box5 {
		transform: translate(440px, 370px) scale(1.8)
	}
	
	.trigger:hover .box6 {
		transform: translate(480px, 210px) scale(1.8)
	}
	
	.trigger:hover .box7 {
		transform: translate(520px, 210px) scale(1.8)
	}
	
	.trigger:hover .box8 {
		transform: translate(560px, 210px) scale(1.8)
	}
	.trigger:hover .box9 {
		transform: translate(520px, 50px) scale(1.8)
	}
	
	.trigger:hover .box10 {
		transform: translate(480px, 130px) scale(1.8)
	}
	
	.trigger:hover .box11 {
		transform: translate(440px, 290px) scale(1.8)
	}
	
	.trigger:hover .box12 {
		transform: translate(400px, 370px) scale(1.8) 
	}
	
	.trigger:hover .box13 {
		transform: translate(550px, 50px) scale(1.8) rotate(45deg)
	}
	
	.trigger:hover .box14 {
		transform: translate(505px, 210px) scale(1.8)
	}
	
	.trigger:hover .box15 {
		transform: translate(465px, 290px) scale(1.8)
	}
	
	.trigger:hover .box16 {
		transform: translate(425px, 370px) scale(1.8)
	}
	
	form {
		#text-align: center;
		width: 320px;
		height: auto;
		#border: 1px black solid;
		#z-index: -2;
	}
	
	@keyframes squeracolor {
		0% {
			background: white
		}
		50% {
			background: aquamarine
		}
		100% {
			background: indianred
		}
	}
</style>
<script src="admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>

<script>
	$( document ).ready( function () {
		$( '#fadeinandout' ).fadeIn( 1000 ).fadeOut( 1000 ).fadeIn( 1000 ).fadeOut( 1000 ).fadeIn( 1000 );

	} );
</script>

<section id="loginbox" class="contact-1">
	<div class="container">
		<div class="section-content">


			<div class=" col-md-8">
				<!-- Contact Form -->

				<div style="color:indianred" id="check_user_text"></div>
				
				<div class="trigger">
				<br>
				<br>
				<br>
					<h2 id="fadeinandout" style="left: 5%">Login</h2>
					<div class="box1 colorbox"><span>-</span></div>
					<div class="box2 colorbox"><span>W</span></div>
					<div class="box3 colorbox"><span>E</span></div>
					<div class="box4 colorbox"><span>L</span></div>
					<div class="box5 colorbox"><span>C</span></div>
					<div class="box6 colorbox"><span>O</span></div>
					<div class="box7 colorbox"><span>M</span></div>
					<div class="box8 colorbox"><span>E</span> </div>
					<div class="box9 colorbox"><span>-</span></div>
					<div class="box10 colorbox"><span>T</span></div>
					<div class="box11 colorbox"><span>O</span> </div>
					<div class="box12 colorbox"><span>-</span></div>
					<div class="box13 colorbox"><span>I</span></div>
					<div class="box14 colorbox"><span>L</span></div>
					<div class="box15 colorbox"><span>C</span></div>
					<div class="box16 colorbox"><span>-</span></div>
					<br>
					<br>
					
					<form class="contact-form" method="post" role="form" id="loginform">
						<div class="col-md-12" style="width: 400px;">
							<div class="form-group">
								<label for="form_name">Email</label>
								<input id="email_id" type="text" name="name" class="form-control" placeholder="Please enter your Email" required="required" data-error="Name is required.">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						<div class="col-md-12" style="width: 400px;">
							<div class="form-group">
								<label for="password">Password</label>
								<input id="password" type="password" name="phone" class="form-control" placeholder="Please enter your password" required="required" data-error="Phone number is required.">
								<div class="help-block with-errors"></div>
							</div>
						</div>
						
					</form>
					
					<div class="col-md-12">
							<input type="submit" class="btn btn-info btn-send sign-in" value="Login">
						</div>
				</div>
				
			</div>

		</div>
</section>
<script type="text/javascript">
	$( document ).ready( function () {
		$( ".sign-in" ).click( function () {
			if ( $( "#email_id" ).val() == '' ) {
				alert( "Email is required." );
				$( "#email_id" ).focus();
				return false;
			}

			if ( $( "#password" ).val() == '' ) {
				alert( "Password is required." );
				$( "#password" ).focus();
				return false;
			}

			var dataString = '?username=' + $( "#email_id" ).val() + '&password=' + $( "#password" ).val();

			$.ajax( {
				url: "admin/save-admin-login.php" + dataString,
				success: function ( result ) {
					if ( result == 1 ) {
						window.location = "admin/index.php";
					} else {
						$( "#check_user_text" ).text( "Wrong username and password." );
					}
				}
			} );

			return false;
		} );
	} );
</script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include("includes/footer.php"); ?>
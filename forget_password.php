<style>
	#pleaseenteremail {
		margin: 100px 0 0 20px;
	}
</style>
<?php
include( "db.php" );
include( "includes/header.php" );
?>
<script src="admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- inner Section -->
<section class="overlay overlay-green parallax" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-title">
					<h2>Forget Password</h2>

				</div>
			</div>
		</div>
	</div>
</section>


<div class="container">
	<div class="section-content">
		<div class="row">

			<div class=" col-md-8">
				<!-- Contact Form -->

				
				<form class="contact-form" method="post" role="form">
					<div class="messages"></div>
					<div class="controls">
						<div class="row" id="pleaseenteremail">
							<div class="col-md-12">
								<div class="form-group">
									<div style="color:red" id="check_user_text"></div>
									<label for="form_name">Please enter your email we will send you new password in email</label>
									<input id="email_id" type="text" name="email_id" class="form-control" placeholder="Please enter your Email *" required="required" data-error="Email is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>

							<div class="col-md-12">
								<input type="submit" class="btn btn-success btn-send forget-pass" value="Submit">
							</div>
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$( document ).ready( function () {
		$( ".forget-pass" ).click( function () {
			if ( $( "#email_id" ).val() == '' ) {
				alert( "Email is required." );
				$( "#email_id" ).focus();
				return false;
			}

			var dataString = '?email_id=' + $( "#email_id" ).val();

			$.ajax( {
				url: "admin/ajax/forget_password.php" + dataString,
				success: function ( result ) {
					if ( result == 1 ) {
						alert( "Update password instructions successfully sent, Please check email inbox." );
						window.location = "login.php";
					} else {
						$( "#check_user_text" ).text( "Email id does not exit." );
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

<?php include("includes/footer.php"); ?>
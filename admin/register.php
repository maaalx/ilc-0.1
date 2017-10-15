<script src="../js/jquery-3.2.1.js"></script>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




<style>
	.invalid {
		color: indianred;
	}
	
	.valid {
		color: darkseagreen;
	}
	
	#passwordinfo {
		position: absolute;
		margin: -20px 0 0 0;
		width: 300PX;
		height: 200px;
		top: 42%;
		left: 100%;
		opacity: 0.7;
		border: grey 1px solid;
		text-align: center;
	}
	
	#passwordrequirement {
		font-size: 100%
	}
	
	.signinvalid {}
	
	.weakvalid {
		background-color: indianred;
	}
	
	.mediumvalid {
		background-color: yellow;
	}
	
	.highvalid {
		background-color: palegreen;
	}
	
	#registertitle {
		position: absolute;
		padding: 60px 0 20px 0;
		top: 0%;
		left: 12%;
	}
	
	#registertitle {
		text-shadow: 10px 10px 10px rgba(0, 0, 0, .5);
	}
	.space{
		margin: 0 ;
	}
</style>

 <?php
 include( "../db.php" );
 include( "../includes/header.php" );
 ?>

<section class="overlay overlay-green parallax" data-stellar-background-ratio="0.5">
	<div class="space">
		<div class="row">
			<div class="col-md-12">
				<div class="inner-title">
					<h2 style="text-shadow: ">Register</h2>

				</div>
			</div>
		</div>
	</div>
</section>

<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
  
   <section class="contact-1">
              <div class="space">
                  <div class="section-content">
                      <div class="row">
                         
                          <div class=" col-md-8">
						  
    <div class="login-box">
      <div class="login-logo">
        
	 <div class="login-box-body">	
        
        
        <form action="index.php" method="post" style="margin: 0 0 0 100px">
           <div class="register-box-body">
            <br>
           <br>
           <br>
           <br>
           <br>
      <p class="login-box-msg"> <h2 id="registertitle">Register</h2></p>
		<div style="color:red" id="check_user_text"></div>
        <form action="../../index.html" method="post" >
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First name">
            
          </div>
		  <div class="form-group has-feedback">
            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last name">
           
          </div>
		  <div class="form-group ">
					<div class="form-group">
                      <label>User Type</label>
                      <select onchange="return check_type(this.value)" name="user_type" id="user_type" class="form-control">
					  <option value='0'>Select</option>
					  <?php $query=mysqli_query($db,"select * from user_type where id!='5'");
						while($row=mysqli_fetch_assoc($query)){
							
						
					  ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                        
                        <?php } ?>
                      </select>
                    </div>
          
          </div>
		  
		  <div  style="display:none" class="form-group choose-doctor">
					<div class="form-group">
                      <label>Select Doctor</label>
                      <select name="doctor_id" id="doctor_id" class="form-control">
					  <option value='0'>Select Doctor</option>
					  <?php $temp_query=mysqli_query($db,"select * from users where user_type='3' order by fname,lname");
						while($row=mysqli_fetch_assoc($temp_query)){
						?>
                        <option value="<?php echo $row['user_id']; ?>"><?php echo $row['fname'].' '.$row['lname']; ?></option>
                        <?php } ?>
                      </select>
                    </div>
         
          </div>
		  
          <div class="form-group has-feedback">
            <input onkeyup="return checkemil()" type="email" name="user_email" id="user_email" class="form-control" placeholder="Email">
          
			<div style="color:red" class="email-error"></div>
			
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
           
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Retype password">
          </div>
          <table class="table table-condensed table-bordered" style="width: 100%;margin: -20px 0 20px 0;text-align: center">
			
			<tr>
				<td id="weak" style="width: 33%">Weak</td>
				<td id="medium" style="width: 33%">Medium</td>
				<td id="high" style="width: 33%">High</td>
			</tr>
			
		</table>
	  <div id="passwordinfo" hidden>
		<h4 id="passwordrequirement">Password must contain following requirement</h4>
		<ul>
			<li id="sign" class="invalid">At least <strong>one special characters</strong></li>
			<li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
			<li id="number" class="invalid">At least <strong>one number</strong></li>
			<li id="length" class="invalid">At least <strong>8 characters</strong></li>
		</ul>
	</div>
		  <div class="form-group">
		   <label>Date Of Birth</label>
            <div class="input-group" id="date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" name="date" id="dob" class="form-control pickdate" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                    </div>
		  <div class="form-group ">
					<div class="form-group">
                      <label>Security Question</label>
                      <select name="security_question" id="security_question" class="form-control">
                        <option value="" selected="selected">Please select...</option>
						<option value="Your mothers maiden name">Your mothers maiden name</option>
						<option value="Your first pets name">Your first pets name</option>
						<option value="The name of your elementary school">The name of your elementary school</option>
						<option value="Your elementary school mascot">Your elementary school mascot</option>
						<option value="Your best friends nickname">Your best friends nickname</option>
						<option value="Your favorite sports team">Your favorite sports team</option>
						<option value="Your favorite writer">Your favorite writer</option>
						<option value="Your favorite actor">Your favorite actor</option>
						<option value="Your favorite singer">Your favorite singer</option>
						<option value="Your favorite song">Your favorite song</option>
						<option value="The name of the street you grew up on">The name of the street you grew up on</option>
						<option value="Make and model of your first car">Make and model of your first car</option>
						<option value="The city where you first met your spouse">The city where you first met your spouse</option><option value="other">Other...</option>
                        
                      </select>
                    </div>
					<input type="text" class="form-control" name="security_answer" id="security_answer" placeholder="Security Answer">
            
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> <a href="#">I agree to the terms</a>
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat register">Register</button>
			 <div style="display:none" class="loading"> Saving<img src="img/loading.gif"></div>
            </div><!-- /.col -->
          </div>
        </form>


        <a href="<?php echo SITEROOT; ?>/login.php" class="text-center">I already have a membership</a>
      </div><!-- /.form-box -->
        </form>

        </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
	
</div>
</div>
</div>
</div>
</div>
	

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
	
	 <!-- Select2 -->
    <script src="plugins/select2/select2.full.min.js"></script>
	 <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
    <!-- date-range-picker -->
	
    <script type="text/javascript">
	function checkemil(){
		var user_email = $( "#user_email" ).val();
		var dataString = '?user_email='+ $("#user_email").val();
		$(".loading").show();
		$.ajax({url: "ajax/check_email.php"+dataString, success: function(result){
					   $(".loading").hide();
					  if (result==1){
							$(".email-error").html("Email address already exist. Please enter another email.");
					  }else{
						 $(".email-error").html(""); 
					  }
				  }});
	}
     function check_type(type_id){
		 if(type_id==2){
			 $(".choose-doctor").show();
		 }else{
			 $(".choose-doctor").hide();
		 }
	 }
      
	  function validateEmail(email) {
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}
      $(document).ready(function(){
		$(".register").click(function(){  
					if($( "#first_name" ).val()==''){
						alert ("First name is required."); 
						$("#first_name").focus();
						return false;
					}
					if($( "#last_name" ).val()==''){
						alert ("Last name is required."); 
						$("#last_name").focus();
						return false;
					}
					if($( "#user_email" ).val()==''){
						alert ("Email is required."); 
						$("#user_email").focus();
						return false;
					}
					if (!validateEmail($( "#user_email" ).val())) {
						$("#user_email").focus();
						alert("Please enter valid email address");
						return false;
					}

					if($( "#password" ).val()==''){
						alert ("Password is required.");
						$("#password").focus();
						return false;
					}
					
					var numric_str=0;
					var upper_str=0;
					var i=0;
					var character='';
					var pass_tr=$( "#password" ).val();

						while (i <= pass_tr.length){
							character = pass_tr.charAt(i);
							if (!isNaN(character * 1)){
								numric_str=1;
							}else{
								if (character == character.toUpperCase()) {
									upper_str=1;
								}
								if (character == character.toLowerCase()){
									//alert ('lower case true');
								}
							}
							i++;
						}
					var matches = pass_tr.match(/\d+/g);
					if (matches != null) {
						
					}else{
						alert("Password must contain at least one interger value");
						$("#password").focus();
						return false;
					}	
					

					if(upper_str==0){
						alert("Password must contain at least one upper case letter");
						$("#password").focus();
						return false;
					}	

					if(pass_tr.length<8){
						alert("Password requires minimum 8 characters");
						$("#password").focus();
						return false;
					}	
					
					if($( "#password" ).val()!=$( "#confirm_password" ).val()){
						alert ("Password and confirm password should be same.");
						$("#confirm_password").focus();
						return false;
					}
				  
				  var dataString = '?fname='+ $("#first_name").val() + '&lname=' + $("#last_name").val()+ '&user_type=' + $("#user_type").val()+ '&user_email=' + $("#user_email").val()+ '&password=' + $("#password").val()+ '&dob=' + $("#dob").val()+ '&security_question=' + $("#security_question").val()+ '&security_answer=' + $("#security_answer").val()+'&doctor_id=' + $("#doctor_id").val();
				  
				  $(".loading").show();
				  $.ajax({url: "save-register.php"+dataString, success: function(result){
					   $(".loading").hide();
					  if (result==1){
							alert("Successfully Registered. We have sent you account activate link on your email address.");
						    window.location="../login.php";
					  }else if(result==2){
						  alert("Email address already used. Please enter another email address.");
						  $("#check_user_text").text("Email address already used. Please enter another email address.");
					  } else{
						$("#check_user_text").text("Something went wrong. Please try again");
						alert("Something went wrong. Please try again");
					  }
				  }});
				  
                        return false;
		});                   
      });
    </script>
     <script>
$(document).ready(function(){
	
	$('input[type="password"]').keyup(function(){
		var password = $(this).val();
		var value = 0;
		//1-length
		if(password.length<6){
			$('#length').removeClass('valid').addClass('invalid');
		}
		else if(password.length<8){
			$('#length').removeClass('invalid').addClass('valid');
			value+=10;
		}
		else if(password.length<9){
			$('#length').removeClass('invalid').addClass('valid');
			value+=15;
		}
		else{
			$('#length').removeClass('invalid').addClass('valid');
			value+=20;
			
		}
		
		//2-sign
		if(password.match(/[!.@.#.$./.\.%.^]/)){
			$('#sign').removeClass('invalid').addClass('valid');
			value +=20;
		}
		else{
			$('#sign').removeClass('valid').addClass('invalid');
		}
		//3-capital
		if(password.match(/[A-Z]/)){
			$("#capital").removeClass('invalid').addClass('valid');
			value +=20;
		}
		else{
			$("#capital").removeClass('valid').addClass('invalid');
		}
		
		//4-number
		if(password.match(/\d/)){
			$("#number").removeClass('invalid').addClass('valid');
			value += 20;
		}
		else{
			$("#number").removeClass('valid').addClass('invalid');
		}
		//security1
		if(value==0){
			$("#medium").removeClass('mediumvalid');
			$('#high').removeClass('highvalid');
			$("#weak").removeClass('weakvalid');
		}
		else if(value<=50){
			$("#weak").addClass('weakvalid');
			$("#medium").removeClass('mediumvalid');
			$('#high').removeClass('highvalid');
			
		}
		else if(value<=70){
			$("#medium").addClass('mediumvalid');
			$("#weak").removeClass('weakvalid');
			$("#high").removeClass('highvalid');
		}
		else{
			$("#high").addClass('highvalid');
			$("#medium").removeClass('mediumvalid');
			$("#weak").removeClass('weakvalid');
		}
		
	}).focus(function(){
		$('#passwordinfo').show();
	}).blur(function(){
		$('#passwordinfo').hide();
	});	
});
</script>
 <script>
	 $(document).ready(function(){
		  $('#registertitle').fadeIn(1000).fadeOut(1000).fadeIn(1000).fadeOut(1000).fadeIn(1000);
	 });
</script>
<script src="../js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap-datepicker.css">



<script>
  $('#dob').datepicker({
    format: "dd/mm/yyyy"
});
</script>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
<?php include("../includes/register-footer.php"); ?>
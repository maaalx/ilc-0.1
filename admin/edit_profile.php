<?php  	require("../db.php"); ?>
<?php 	require_once("includes/header.php");
		require_once("includes/left.php");
		
		$user_id=$_SESSION['admin_user_id'];
		$query=mysqli_query($db,"select * from users where user_id='$user_id'");
		$row=mysqli_fetch_assoc($query);
		
		$ilc_id=$row['ilc_id'];
		$query=mysqli_query($db,"select * from patient where ilc_id='$ilc_id'");
		$patient=mysqli_fetch_assoc($query);
		
		
?>

    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Update profile details
          </h1>
          <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
                <!-- form start -->
                 <form id="update_user"  method="post" enctype="multipart/form-data">
				 <div class="col-xs-6">
				<div class="box">
                
                <div class="box-body ">
          <div class="form-group ">
		    <label>First Name <span style="color:red">*</span></label>
            <input type="text" value="<?php echo $row['fname']; ?>" class="form-control" name="first_name" id="first_name" placeholder="First name">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
		  
		  <div class="form-group ">
			<label>Last Name <span style="color:red">*</span></label>
            <input type="text" value="<?php echo $row['lname']; ?>" class="form-control" name="last_name" id="last_name" placeholder="Last name">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
		  
		  <div class="form-group ">
		  <label>Profile Picture</label>
            <input type="file" name="profile_pic" id="profile_pic">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
			<br>
			<?php
				if($row['photo']!=''){
					?>
					<img style="width:40%" src="upload/profiles/<?php echo $row['photo']; ?>">
					<?php
				}
			?>
          </div>
		  <div class="form-group ">
					<div class="form-group">
                      <label>User Type</label>
					  
                      <select name="user_type" id="user_type" class="form-control">
					   <?php $query=mysqli_query($db,"select * from user_type where id=".$row['user_type']);
						while($row_user_type=mysqli_fetch_assoc($query)){
							
						
					  ?>
					  
                        <option  value="<?php echo $row_user_type['id']; ?>"><?php echo $row_user_type['name']; ?></option>
                        
						
                        <?php } ?>
                      </select>
                    </div>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input value="<?php echo $row['email']; ?>" type="email" name="user_email" id="user_email" class="form-control" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
			<label>Password <span style="color:red">*</span></label>
            <input  type="password" class="form-control" name="password" id="password" placeholder="Password">
			<span style="color:red">Note: Only enter if you want to change password</span>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
			<label>Confirm Password <span style="color:red">*</span></label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Retype password">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
		  <div class="form-group">
		   <label>Date Of Birth</label>
            <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input value="<?php echo $row['dob']; ?>" type="text" name="dob" id="dob" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask>
                    </div><!-- /.input group -->
          </div>
		  <div class="form-group ">
					<div class="form-group">
                      <label>Security Question</label>
                      <select name="security_question" id="security_question" class="form-control">
						
                        <option <?php if($row['security_question']=='selected')echo 'selected'; ?> value="selected">Please select...</option>
						<option <?php if($row['security_question']=='Your mothers maiden name')echo 'selected'; ?> value="Your mothers maiden name">Your mothers maiden name</option>
						<option <?php if($row['security_question']=='Your first pets name')echo 'selected'; ?> value="Your first pets name">Your first pets name</option>
						<option <?php if($row['security_question']=='The name of your elementary school')echo 'selected'; ?> value="The name of your elementary school">The name of your elementary school</option>
						<option <?php if($row['security_question']=='Your elementary school mascot')echo 'selected'; ?> value="Your elementary school mascot">Your elementary school mascot</option>
						<option <?php if($row['security_question']=='Your best friends nickname')echo 'selected'; ?> value="Your best friends nickname">Your best friends nickname</option>
						<option <?php if($row['security_question']=='Your favorite sports team')echo 'selected'; ?> value="Your favorite sports team">Your favorite sports team</option>
						<option <?php if($row['security_question']=='Your favorite writer')echo 'selected'; ?> value="Your favorite writer">Your favorite writer</option>
						<option <?php if($row['security_question']=='Your favorite actor')echo 'selected'; ?> value="Your favorite actor">Your favorite actor</option>
						<option <?php if($row['security_question']=='Your favorite singer')echo 'selected'; ?> value="Your favorite singer">Your favorite singer</option>
						<option <?php if($row['security_question']=='Your favorite song')echo 'selected'; ?> value="Your favorite song">Your favorite song</option>
						<option <?php if($row['security_question']=='The name of the street you grew up on')echo 'selected'; ?> value="The name of the street you grew up on">The name of the street you grew up on</option>
						<option <?php if($row['security_question']=='Make and model of your first car')echo 'selected'; ?> value="Make and model of your first car">Make and model of your first car</option>
						<option <?php if($row['security_question']=='The city where you first met your spouse')echo 'selected'; ?> value="The city where you first met your spouse">The city where you first met your spouse</option>
						<option <?php if($row['security_question']=='other')echo 'selected'; ?> value="other">Other...</option>
                        
                      </select>
                    </div>
					<label>Security Answer <span style="color:red">*</span></label>
					<input value="<?php echo $row['security_answer']; ?>" type="text" class="form-control" name="security_answer" id="security_answer" placeholder="Security Answer">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
		  </div></div></div>
		  
		  <div class="col-xs-6">
				<div class="box">
                
                <div class="box-body ">
		  
			<div class="form-group has-feedback">
				<label>Phone 1</label>
				<input value="<?php echo $patient['phone_1']; ?>" type="text" name="phone1" id="phone1" class="form-control" placeholder="Phone 1">
				
			</div>
			
			<div class="form-group has-feedback">
				<label>Phone 2(Work Phone Number)</label>
				<input value="<?php echo $patient['phone_2']; ?>" type="text" name="phone2" id="phone2" class="form-control" placeholder="Phone 2">
				
			</div>
			
			<div class="form-group has-feedback">
				<label>Height in (Foot,Inches)</label>
				<input value="<?php echo $patient['height']; ?>" type="text" name="height" id="height" class="form-control" placeholder="Height">
				
			</div>
			
			<div class="form-group has-feedback">
				<label>Weight(Kilograms)</label>
				<input value="<?php echo $patient['weight']; ?>" type="text" name="weight" id="weight" class="form-control" placeholder="Weight">
				
			</div>
         
			<div class="form-group has-feedback">
				<label>Ethnicity</label>
				<select name="ethnicity" id="ethnicity" class="form-control">
					  <option value='0'>Select</option>
					  <?php $temp_query=mysqli_query($db,"select * from patient_ethnicity order by name");
						while($eth_row=mysqli_fetch_assoc($temp_query)){
						?>
                        <option <?php if($patient['ethnicity']==$eth_row['id'])echo "selected"; ?> value="<?php echo $eth_row['id']; ?>"><?php echo $eth_row['name']; ?></option>
                        <?php } ?>
                      </select>
				
			</div>
			
			<div class="form-group has-feedback">
				<label>Emergency Contact Name</label>
				<input value="<?php echo $patient['emergency_contact_name']; ?>" type="text" name="emergency_contact_name" id="emergency_contact_name" class="form-control" placeholder="Emergency Contact Name">
				
			</div>
			
			<div class="form-group has-feedback">
				<label>Emergency Contact Number</label>
				<input value="<?php echo $patient['emergency_contact_number']; ?>" type="text" name="emergency_contact_number" id="emergency_contact_number" class="form-control" placeholder="Emergency Contact Number">
				
			</div>
			
			<div class="form-group has-feedback">
				<label>Address Line 1</label>
				<input value="<?php echo $patient['address_line_1']; ?>" type="text" name="address_line_1" id="address_line_1" class="form-control" placeholder="Address Line 1">
				
			</div>
			
			<div class="form-group has-feedback">
				<label>Address Line 2</label>
				<input value="<?php echo $patient['emergency_contact_number']; ?>" type="text" name="address_line_2" id="address_line_2" class="form-control" placeholder="Address Line 2">
				
			</div>
			
			<div class="form-group has-feedback">
				<label>Suburb</label>
				<input value="<?php echo $patient['suburb']; ?>" type="text" name="suburb" id="suburb" class="form-control" placeholder="Suburb">
				
			</div>
			
			<div class="form-group has-feedback">
				<label>State</label>
				<input value="<?php echo $patient['state']; ?>" type="text" name="state" id="state" class="form-control" placeholder="State">
				
			</div>
			
			<div class="form-group has-feedback">
				<label>Country</label>
				<select name="country" id="country" class="form-control">
					  <option value='0'>Select</option>
					  <?php $temp_query=mysqli_query($db,"select * from country order by name");
						while($c_row=mysqli_fetch_assoc($temp_query)){
						?>
                        <option <?php if($patient['country']==$c_row['iso'])echo "selected"; ?> value="<?php echo $c_row['iso']; ?>"><?php echo $c_row['name']; ?></option>
                        <?php } ?>
                      </select>
				
			</div>
			
			
      

                  
				   </div><!-- /.col -->
				</div><!-- /.row -->
		    </div><!-- /.content-wrapper -->
			
			 <div class="col-xs-12">
				<div class="box">
                
                <div class="box-body ">
				<div class="box-footer">
                    <div class="error" style="color:red"></div>
                    <button type="submit"  class="btn btn-primary">Update</button>
                  </div>
				  </div><!-- /.col -->
				</div><!-- /.row -->
		    </div><!-- /.content-wrapper -->
                </form>
              
					
		</div>
		</div>
        </section><!-- /.content -->
    
      
<?php require_once("includes/footer.php"); ?>
<!-- Select2 -->
    <script src="plugins/select2/select2.full.min.js"></script>
	 <!-- InputMask -->
    <script src="plugins/input-mask/jquery.inputmask.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
    <script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
	
	 <script>
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        
      });
    </script>
<script type="text/javascript">
  function validateEmail(email) {
		var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	}
	
$(document).ready(function (e) { 
	$("#update_user").on('submit',(function(e) {
		e.preventDefault();
		
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
					if($( "#password" ).val()!=''){
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
					}

					if($( "#password" ).val()!=$( "#confirm_password" ).val()){
						alert ("Password and confirm password should be same.");
						$("#confirm_password").focus();
						return false;
					}

				$.ajax({
				url: "ajax/update-user.php", // Url to which the request is send
				type: "POST",             // Type of request to be send, called as method
				data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,  
				   
				success: function(data)   // A function to be called if request succeeds
				{
				  var obj = jQuery.parseJSON(data);
				  if( obj.error==1 ){
					  alert(obj.msg);
					  $(".error").html(obj.msg);
				  }else{
					 alert("Updated successfully"); 
					 window.location="edit_profile.php";
				  }

				}
				});
		return false;
	}));
});
</script>
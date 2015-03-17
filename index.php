<?php
include "core/init.php";
include "includes/header.php";
if(logged_in()){
	$username = $user_data['username'];
	header("Location: ../website/$username");
} 
?>
<script type="text/javascript">
	$(function() {
  
    // Setup form validation on the #register-form element
	    $("#registerform").validate({
	    
	        // Specify the validation rules
	        rules: {
	            firstname: "required",
	            lastname: "required",
	            email2: {
	                required: true,
	                email2: true
	            },
	            password2: {
	                required: true,
	                minlength: 5
	            },
	            agree: "required"
	        },
	        
	        // Specify the validation error messages
	        messages: {
	            firstname: "Please enter your first name",
	            lastname: "Please enter your last name",
	            password2: {
	                required: "Please provide a password",
	                minlength: "Your password must be at least 5 characters long"
	            },
	            email2: "Please enter a valid email address",
	            agree: "Please accept our policy"
	        },
	        
	        submitHandler: function(form) {
	            form.submit();
	        }
	    });

  	});
</script>


<div id="dynamic"></div>
   	<div id="container">
	   	<div id="image">
	   		<a href="index.php"><img src="Home logo.png" height="502.5" width="525"></a>   	
	   	</div>
   	   	<div id="buttons">
   	   		<button class="loginregisterbutton" id="loginbutton">Sign In</button><br /><br />
   	   		<div class="loginslide">
   	   			<form method="post" action="#" id="loginform">
   	   				<input type="text" placeholder="Email" name="email" class="logininputoriginal1">
   	   				<input type="password" placeholder="Password" name="password" class="logininputoriginal2">
   	   				<input type="submit" name="submit" id="submit" value="Go!" class="loginregisterbutton">
   	   			</form>
   	   		</div>
   	   		<button class="loginregisterbutton" id="registerbutton">Register</button><br /><br />
   	   		<div class="slide">
   	   			<form method="post" action="#" id="registerform" novalidate="novalidate">
   	   				<br /><input type="text" class="registerinput" name="firstname" id="firstname" placeholder="First Name"><br /><br />
					<input type="text" class="registerinput" name="lastname" id="lastname" placeholder="Last Name"><br /><br />
					<input type="text" class="registerinput" name="email2" id="email2" placeholder="Email"><br /><br />
					<input type="password" class="registerinput" name="password2" id="password2" placeholder="Password"><br /><br />
					<input type="password" class="registerinput" name="repeatpassword" id="repeatpassword" placeholder="Repeat Password"><br /><br />
					<input type="submit" name="submit2" id="submit2" value="Go!" class="loginregisterbutton" style="margin-left:30%">
   	   			</form>
	   		</div>
		   	<script type="text/javascript">
		   		$(document).ready(function(){
   					$("#registerbutton").click(function () {
      					$('.slide').slideToggle(650);
				   	});
				   	$("#loginbutton").click(function () {
					    $('.loginslide').slideToggle();
					});
				});
		   	</script>
	   	</div>
   	</div>
</div>












<?php
include "includes/footer.php";
?>
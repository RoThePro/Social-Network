<?php
include "core/init.php";
include "includes/header.php";
if(logged_in()){
	$username = $user_data['username'];
	header("Location: ../website/$username");
}
?>
<<!DOCTYPE html>
<head>
</head>
<script type="text/javascript" src="js/jquery-1.9.1.js"> </script>
<script type="text/javascript" src="js/loginscript.js"></script>
<div id="dynamic"></div>
   	<div id="container">
	   	<div id="image">
	   	<a href="index.php"><img src="Home logo.png" height="502.5" width="525"></a>   	
	   	</div>
   	   	<div id="buttons">
   	   	<a onclick="document.getElementById('overlay2').style.display='block';document.getElementById('fade').style.display='block'"
    		href="javascript:void(0)" ><button class="button">Sign In</button></a><br>
    	<a onclick="document.getElementById('overlay3').style.display='block';document.getElementById('fade').style.display='block'"
    		href="javascript:void(0)" ><button class="button">Register</button></a>
<!-- 	   	<a href="javascript:open_box()"><button class="button">Sign in</button></a><br>
	   	<a href="javascript:open_box2()"><button class="button">Signup</button></a> -->
	   	</div>
   	</div>

   	<div id="overlay2">
   		<div id="box_frame">
   			<div id="box">
   				<div id="xbutton">
   					<a onclick="document.getElementById('overlay2').style.display='none';document.getElementById('fade').style.display='none'" href="javascript:void(0)"><img src="includes/images/xbutton.jpg" height="20px" width="20px"></a>
   				</div>
   				<div>
	   				<form action="index.php" method="post" id="loginform">
	   					<input type="text" class="login" name="email" placeholder="Email"><br />
						<input type="password" class="login" name="password" placeholder="Password"><br /><br />
						<input type="submit" value="Login" class="submit" name="submit">
	   				</form>
   				</div>
   			</div>
   		</div>
   	</div>


   	<div id="overlay3">
		<div id="box_frame">
			<div id="box">
				<div id="xbutton">
	   				<a onclick="document.getElementById('overlay3').style.display='none';document.getElementById('fade').style.display='none'" href="javascript:void(0)"><img src="includes/images/xbutton.jpg" height="20px" width="20px"></a>
	   			</div>
	   			<div>
					<form action="index.php" method="post" id="registerform">
						<input type="text" class="login" name="firstname" placeholder="First Name"><br/>
						<input type="text" class="login" name="lastname" placeholder="Last Name"><br/>
						<input type="text" class="login" name="email2" placeholder="Email"><br/>
						<input type="password" class="login" name="password2" placeholder="Password"><br>
						<input type="password" class="login" name="repeatpassword" placeholder="Repeat Password"><br>
						<input type="submit" name="submit2" value="Register" class="submit">
					</form>
				</div>
				<div id="mydiv"></div>
			</div>   	
   		</div>
   	</div>
    <div id="fade"></div>

<?php

if (isset($_POST['submit'])){

	#Login Details:
	$submit = $_POST['submit'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	if ($submit){
	if ($email && $password) {
	}
	else {
		echo "Please fill in <b>all fields.</b>";
	}
}
}

if (isset($_POST['submit2'])){
	#Register Details:
	$submit2 = $_POST['submit2'];
	$fname = strip_tags($_POST['firstname']);
	$lname = $_POST['lastname'];
	$email2 = $_POST['email2'];
	$password2 = strip_tags($_POST['password2']);
	$passwordagain = strip_tags($_POST['repeatpassword']);

}

?>

<?php
include "includes/footer.php";
?>

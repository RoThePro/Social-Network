<?php
include "core/init.php";
include "includes/header.php";
if(logged_in()){
	$username = $user_data['username'];
	header("Location: ../website/$username");
}
?>

<!DOCTYPE html>
<html>
<?php 

#If press login:
if (!empty($_POST['loginsubmit'])){
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

#If press register:
if (!empty($_POST['registersubmit'])){
	
}

?>

<head>
	<div id="header">
		<div id="title">Interesteen</div>
		<div id="movable">
			<form method="post">
				<input type="text" name="email" placeholder="Email" class="logininputoriginal1">
				<input type="text" name="password" placeholder="Password" class="logininputoriginal2">
				<input type="submit" name="submit" class="loginbutton" value="Login" name="loginsubmit">
			</form>
		</div>
	</div>
</head>
<body>
	<form action="" method="post" >
        <ul id="form">
            <br /><br /><br /><input type="text" name="email2" placeholder="Email" class="logininput"><br />
            <input type="password" name="password2" placeholder="Password" class="logininput"><br />
            <input type="password" name="passwordagain" placeholder="Re-enter password" class="logininput"><br />
            <input type="text" name="fname" placeholder="First Name" class="logininput"><br />
            <input type="text" name="lname" placeholder="Last Name" class="logininput"><br />
            <input type="submit" name="submit2" class="submit" value="Register" class="logininput" name="registersubmit"><br />
        </ul>
    </form>
</body>
</html>

<?php
include "includes/footer.php";
?>
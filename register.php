<?php
include 'core/init.php';

$submit = $_POST['submit'];
$fname = strip_tags($_POST['firstname']);
$lname = $_POST['lastname'];
$email = $_POST['email'];
$password = strip_tags($_POST['password']);
$repeatpassword = strip_tags($_POST['repeatpassword']);

if ($submit){
	if ($fname && $lname && $email && $password && $repeatpassword) {
	}
	else {
		echo "Please fill in <b>all fields.</b>";
	}
}


?>
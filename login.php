<?php
include 'core/init.php';

if(logged_in()){
	$username = $user_data['username'];
	header("Location: ../website/$username");
}




if (empty($_POST) === false){
	$email = $_POST['email'];
	$password = $_POST['password'];
	if (empty($email)===true || empty($password)===true){
		$errors[] = 'You need to enter an email and password';
	}else if(user_exists($email) === false){
		$errors[] = 'No email exists';
	}else if(user_active($email) === false){
		$errors[] = "You haven't activated you account";	
	}else{
		if (strlen($password) > 32) {
			$errors[] = 'Password too long';
		}
		$login = login($email, $password);
		if($login === false){
			$errors[] = 'That username and password is incorrect';
		}else{
			$_SESSION['user_id']=$login;
			$username=get_username($login);			
			header("Location: ../website/$username");
			exit();
		}
	
	}
}
	
}else{
	$errors[]='No data recieved';
}
include 'includes/header.php';
echo(output_errors($errors));
?>
<?php
include 'includes/footer.php';
?>

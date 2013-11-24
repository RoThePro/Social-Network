<?php
	include 'core/init.php';
	$post = $_POST['post'];
	$user_id = $user_data['user_id'];
	if(empty($post)===false){
		mysql_query("INSERT INTO posts (`user_id`,`content`) VALUES ('$user_id','$post')");
	}
?>
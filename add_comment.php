<?php
	include 'core/init.php';
	$comment = $_POST['comment'];
	$id = $_POST['id'];
	$user_id = $user_data['user_id'];
	if(empty($comment)===false){
		mysql_query("INSERT INTO comments (`user_id`,`content`,`post_id`) VALUES ('$user_id','$comment','$id')");
	}
?>
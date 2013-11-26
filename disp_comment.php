<?php
	header('Content-Type: application/json');
	include 'core/init.php';
	$id = $_GET['id'];
	$post_id = $_GET['post_id'];
	if(empty($id)===false){
		$data = array();
		$result = mysql_query("SELECT `content`,`id` FROM `comments` WHERE `post_id` = $post_id ORDER BY `time` DESC");
		$result2 = mysql_query("SELECT `fname`,`lname`,`username` FROM `users` WHERE `user_id` = $id");
		$row2=mysql_fetch_assoc($result2);
		while($row1 = mysql_fetch_assoc($result)){			
			$row = array_merge($row1,$row2);
			$data[] = $row;
		}
		echo(json_encode($data));
	}
?>
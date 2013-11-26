<?php
	header('Content-Type: application/json');
	include 'core/init.php';
	$post_id = $_GET['post_id'];
	if(empty($post_id)===false){
		$data = array();
		$result = mysql_query("SELECT `content`,`id`,`user_id` FROM `comments` WHERE `post_id` = $post_id ORDER BY `time` DESC");
		while($row1 = mysql_fetch_assoc($result)){		
			$u_id = $row1['user_id'];
			$result2 = mysql_query("SELECT `fname`,`lname`,`username` FROM `users` WHERE `user_id` = $u_id");
			$row2=mysql_fetch_assoc($result2);
			$row = array_merge($row1,$row2);
			$data[] = $row;
		}		
		echo(json_encode($data));
	}
?>
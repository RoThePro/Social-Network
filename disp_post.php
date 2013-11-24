<?php
	header('Content-Type: application/json');
	include 'core/init.php';
	$id = $_GET['id'];
	if(empty($id)===false){
		$data = array();
		$result = mysql_query("SELECT `content` FROM `posts` WHERE `user_id` = $id ORDER BY `time` DESC LIMIT 10");
		$result2 = mysql_query("SELECT `fname`,`lname`,`username` FROM `users` WHERE `user_id` = $id");
		$row2=mysql_fetch_assoc($result2);
		while($row1 = mysql_fetch_assoc($result)){			
			$row = array_merge($row1,$row2);
			$data[] = $row;
		}
		echo(json_encode($data));
	}
?>
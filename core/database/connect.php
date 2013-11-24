<?php
$connect_error = 'Sorry, we\'re experiencing technical difficulties ';
mysql_connect('localhost','root','pass') or die($connect_error);
mysql_select_db('interesteen') or die($connect_error);
?>

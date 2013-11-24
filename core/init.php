<?php
session_start();
//error_reporting(0);
require 'database/connect.php';
require 'function/general.php';
require 'function/users.php';
if(logged_in() === true){
    $session_ui = $_SESSION['user_id'];
    $user_data = user_data($session_ui,'user_id', 'fname', 'lname', 'email','active','username');
    if(user_active($user_data['email'])=== false){
        session_destroy();
        header('Location: index.php');
        exit();
    }
}


$errors = array();
?>
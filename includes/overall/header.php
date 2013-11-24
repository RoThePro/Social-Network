<!doctype html>
<html>
<head>
    <title>Website Title</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/screen.css">
</head>
<body>
<header>
        <h1 class="logo">Logo</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="downloads.php">Downloads</a></li>
                <li><a href="forum.php">Forum</a></li>
                <li><a href="contact.php">Contact us</a></li>
            </ul>
        </nav>
        <div class="clear"></div>
    </header>
    <div id="container">
      <aside>
<?php
if (logged_in() === true){
    include 'widgets/loggedin.php';
}else{
    include 'widgets/loginw.php';
}
?>
</aside>
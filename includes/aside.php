<aside>
<?php
if (logged_in() === true){
    include 'widgets/loggedin.php';
}else{
    include 'widgets/loginw.php';
}
?>
</aside>
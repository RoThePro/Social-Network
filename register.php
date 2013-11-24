<?php
include 'core/init.php';
include 'includes/header.php';
if (empty($_POST)===false){
    $req_fields= array('email','password','password-again','fname','lname');
    //echo '<pre>', print_r($_POST, true), '<pre>';
    foreach($_POST as $key=>$value){
        if (empty($value) && in_array($key, $req_fields) === true){
            $errors[] = 'Fields marked with an asterisk are required.';
            break 1;
        }
    }
    
    if (empty($errors) === true) {
        if (user_exists($_POST['email']) === true) {
            $errors[] = 'The email is already used.';
        }
        if (strlen($_POST['password']) < 6) {
            $errors[] = 'Your password must be at least 6 characters.';
        }
        if ($_POST['password'] !== $_POST['password-again']) {
            $errors[] = 'Your passwords do not match';
        }
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
            $errors[] = 'Your email is not valid.';
        }
    }
}

?>
<h1>Register</h1>

<?php

if (isset($_GET['success']) && empty($_GET['success'])) {
    echo 'You\'ve been registered succesfully!';
} else {
    if (empty($_POST) === false && empty($errors) === true) {
        $un1 = $_POST['fname'];
        $un2 = substr($_POST['lname'], 0,1);
        $unn = 1;
        $inserted = false;
        while($inserted === false){
            $username = $un1.'_'.$un2.'_'.$unn;
            $username = strtolower($username);
            if(mysql_result(mysql_query("SELECT COUNT(`username`) FROM users WHERE `username` = '$username'"),0)==0){
                $inserted = true;

            }else{
                $unn = $unn + 1;
            }
        }

        $register_data = array(
            'email'         => $_POST['email'],
            'password'      => $_POST['password'],
            'fname'    => $_POST['fname'],
            'lname'     => $_POST['lname'],
            'username'  => $username,
        );
        
        register_user($register_data);
        header('Location: register.php?success');
        exit();
        
    } else if (empty($errors) === false){
        echo output_errors($errors);
    }
    
    ?>
    
    <form action="" method="post" >
        <ul id="form">
            <li>
                <input type="text" name="email" placeholder="Email"><br>  
            </li>
            <li>
                <input type="password" name="password" placeholder="Password"><br>  
            </li>
            <li>
                <input type="password" name="password-again" placeholder="Re-enter password"><br>  
            </li>
            <li>
                <input type="text" name="fname" placeholder="First Name"><br>  
            </li>
            <li>
                <input type="text" name="lname" placeholder="Last Name"><br>  
            </li>
            <li><br>
                <input type="submit" class="submit" value="Register"><br>  
            </li>
        </ul>
    </form>
    <?php
}
include 'includes/footer.php'; ?>

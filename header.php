<!DOCTYPE>
    <html>
        <head>
            <link rel="stylesheet" href="css/footer.css"/>
            <title>Chatterbox</title>
        </head>
        <body>
            <div id="header">
                <a href="index.php"><img src="home logo.png"</a>
                <ul id="footer_menu">
                    <?php
                        if (logged_in() === true){
                            include 'includes/widgets/logoutw.php';
                        }else{
                            include 'includes/widgets/signupw.php';
                        }
                    ?>
                </ul>
            </div>
            <div id="content">
                <?php include 'includes/aside.php';?>    
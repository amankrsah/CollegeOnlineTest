<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login or Register</title>
    <link rel="shortcut icon" href="http://localhost/php_/College_project/assets/logo.jpg">

</head>
<body>
<!-- <?php include('http://localhost/php_/College_project/components/navbar.php') ?> -->
<?php include("components/navbar.php") ?>

    <!-- <div class="login">
        <span style="font-size: 50px;margin:">Login</span>
        <input type="text" placeholder="Enter User name"><br>
        <input placeholder="Enter Password" type="password">
        <input class="btn" id="loginBtn"  placeholder="Login" type="submit">

    </div> -->
    <div class = "space_top"></div>
    <div id="loginForm">
        <center>
            
            <div style="margin-bottom: -10px;margin-top:80px;padding: 25px">Login</div>
            <input placeholder="USERNAME">
            <input type="password" placeholder="PASSWORD">
            <div id="btn" style="margin-top:10px"><a href="http://localhost/php_/College_project/pages/cpanel.php">Login</a> </div>
            <div style="font-size: 20px;margin-top:10px">or</p>
            <div id="btn"><a href="http://localhost/php_/College_project/pages/register.php">Register</a></div>
        </center>
    </div>
    <!-- <?php include('http://localhost/php_/College_project/components/navbar.php') ?> -->
    <?php include("components/footer.php") ?>
</body>
</html>
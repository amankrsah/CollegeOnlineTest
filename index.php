<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login or Register</title>
    <link rel="shortcut icon" href="http://localhost/php_/CollegeOnlineTest/assets/logo.jpg">
    <link rel="shortcut icon" href="http://localhost/php_/college_project/assets/logo.jpg">
</head>
<body>
<!-- <?php include('http://localhost/php_/CollegeOnlineTest/components/navbar.php') ?> -->
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
            <div class="title">LOGIN</div>
            <input placeholder="USERNAME">
            <input type="password" placeholder="PASSWORD">
            <a href="http://localhost/php_/CollegeOnlineTest/pages/cpanel.php"><div id="btn" style="margin-top:10px">Login </div></a>
            <div style="font-size: 20px;margin-top:10px">or</p>
            <a href="http://localhost/php_/CollegeOnlineTest/pages/register.php"><div id="btn">Register</div></a>
        </center>
    </div>
    <?php include("components/footer.php") ?>
    <!-- <?php include('http://localhost/php_/CollegeOnlineTest/components/navbar.php') ?> -->
</body>
</html>
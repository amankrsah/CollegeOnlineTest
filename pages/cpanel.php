<!-- /*----------------------------------- cpanel code (Anurag) -------------------------------------*/ -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="http://localhost/php_/CollegeOnlineTest/assets/logo.jpg">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <title>Control panel</title>
    <style>
        *{
    padding: 0;
    margin: 0;
    /* background-color: #2596be; */
}
:root{
    --font : 'Ubuntu', sans-serif;
}
.main h1{
    position: absolute;
    top: 13px;
    left: 105px;
    color: #ffffff;
    text-shadow: -3px 6px 2px #393131;
    font-family: var(--font);
}
.logo img{
    position: absolute;
    width: 69px;
    top: 13px;
    left: 2%;
}
/*------------------------------- Css for navigation bar------------------------------------- */
.nav{
    background-color: black;
    /* border: 2px solid black; */
    width: 100%;
    height: 55px;
}
.nav ul {
    float: right;
    list-style: none;    
    margin-top: 12px;

}
.nav ul li{
    display: inline-block; 
}
.nav ul li a{
    text-decoration: none;
    color: #ffffff;
    /* text-shadow: 0px 2px 0px #565656; */
    /* text-shadow: -3px -2px 2px #ffffff; */
    font-family: var(--font) ;
    font-weight: bolder;
    font-size: 25px;
    padding: 2px 2px;
    margin: 2px 52px;
}
.nav ul li a:hover{
    text-decoration: underline;
    color: rgb(26, 159, 231);
    transition: 0.4s ease;
} 
.boxes{
    display: flex;
    width: 60%;
    height: 90vh;
    margin: auto;
    flex-wrap: wrap;
    /* border: 2px solid black; */
    position: absolute;
    top: 8%;
    left: 18%;   
    justify-content: space-evenly;
    
}
.box{
    display: flex;
    flex-shrink: 100%;
    /* justify-content: center;
    align-items: center; */
    margin: 49px;
    width: 175px;
    height: 175px;
    border: 2px solid black;
    border-radius: 20px;
    box-shadow: 0px 0px 11px black;
}
.box img{
    position: relative;
    top: 22%;
    left: 32%;
    width: 30%;
    height: 30%;
}
.box a{
    text-decoration: none;
    position: relative;
    top: 72%;
    left: -3%;
    font-family: var(--font);
    font-weight: bolder;
    font-size: 27px;
    color: black;
    text-shadow: 0px 0px 2px black;
}
.box a:hover{
    text-decoration: underline;
    color: rgb(26, 159, 231);
    /* text-shadow: rgb(26, 159, 231); */
    transition: 0.6 ease;
}

    </style>
</head>

<body>
    <header>
    <!-- <?php include('http://localhost/php_/CollegeOnlineTest/components/navbar.php') ?> -->
        <?php include("../components/navbar.php") ?>

        <div class="main">
            <div class="logo">
                <img src="columbia.jpg" alt="loading...">
            </div>
            <h1>Columbia</h1>
        </div>
        <div class="boxes">
            <div class="box" id="box-1"><img src="http://localhost/php_/CollegeOnlineTest/assets/logo.jpg" alt="loading..."><a href="">Lorem</a></div>
            <div class="box" id="box-2"><img src="http://localhost/php_/CollegeOnlineTest/assets/logo.jpg" alt="loading..."><a href="">Lorem</a></div>
            <div class="box" id="box-3"><img src="http://localhost/php_/CollegeOnlineTest/assets/logo.jpg" alt="loading..."><a href="">Lorem</a></div>
            <div class="box" id="box-4"><img src="http://localhost/php_/CollegeOnlineTest/assets/logo.jpg" alt="loading..."><a href="">Lorem</a></div>
            <div class="box" id="box-5"><img src="http://localhost/php_/CollegeOnlineTest/assets/logo.jpg" alt="loading..."><a href="">Lorem</a></div>
            <div class="box" id="box-6"><img src="http://localhost/php_/CollegeOnlineTest/assets/logo.jpg" alt="loading..."><a href="">Lorem</a></div>
            <div class="box" id="box-7"><img src="http://localhost/php_/CollegeOnlineTest/assets/logo.jpg" alt="loading..."><a href="">Lorem</a></div>
            <div class="box" id="box-8"><img src="http://localhost/php_/CollegeOnlineTest/assets/logo.jpg" alt="loading..."><a href="">Lorem</a></div>
            <div class="box" id="box-9"><img src="http://localhost/php_/CollegeOnlineTest/assets/logo.jpg" alt="loading..."><a href="">Lorem</a></div>
        </div>
    </header>
</body>

</html>
<!-- /*----------------------------------- Control panel code ends (Anurag) -------------------------------------*/ -->

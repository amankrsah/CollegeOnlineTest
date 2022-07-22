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
        * {
            padding: 0;
            margin: 0;
            /* background-color: #2596be; */

        }

        /* body{
            background-color: #67e6ff;
        } */

        :root {
            --font: 'Ubuntu', sans-serif;
        }

        .main h1 {
            position: absolute;
            top: 13px;
            left: 105px;
            color: #ffffff;
            text-shadow: -3px 6px 2px #393131;
            font-family: var(--font);
        }

        .logo img {
            position: absolute;
            width: 69px;
            top: 13px;
            left: 2%;
        }

        /*------------------------------- Css for navigation bar------------------------------------- */
        .nav {
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

        .nav ul li {
            display: inline-block;
        }

        .nav ul li a {
            text-decoration: none;
            color: #ffffff;
            /* text-shadow: 0px 2px 0px #565656; */
            /* text-shadow: -3px -2px 2px #ffffff; */
            font-family: var(--font);
            font-weight: bolder;
            font-size: 25px;
            padding: 2px 2px;
            margin: 2px 52px;
        }
        .nav ul li a:hover {
            text-decoration: underline;
            color: rgb(26, 159, 231);
            transition: 0.4s ease;
        }
        .boxes {
            display: flex;
            width: 75%;
            margin: auto;
            flex-wrap: wrap;
            border: 1px solid #4e4e4e;
            position: absolute;
            top: 10%;
            left: 12.5%;
            justify-content: space-evenly;
            border-radius: 10px;
            background-color:var(--cont_color);
            box-shadow: 0px 0px 10px rgb(71, 71, 71);
        }
        .box {
            background-color: rgba(219, 226, 255, 0.702);
            /* background-color: white; */
            display: flex;
            flex-shrink: 100%;
            margin: 49px;
            width: 175px;
            height: 175px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgb(71, 71, 71);
        }
        
        .box:hover {
            cursor:pointer;
            background-color: rgba(185, 216, 255, 0.801);
            box-shadow: 0px 0px 20px rgb(71, 71, 71);
            transition: 0.2s ease;;
        }
        .box img {
            position: relative;
            top: 22%;
            left: 32%;
            width: 30%;
            height: 30%;
        }
        .boxes p{
            color:var(--primary);
            text-align:center;
            margin-top: 70%;
            font-size:150%;


        }
        /* .box a {
            text-decoration: none;
            font-family: var(--font);
            font-weight: bolder;
            font-size: 27px;
            color: rgb(5, 51, 255);
            text-shadow: 1px 0px 1px #cccccc, 0px 1px 1px #eeeeee, 2px 1px 1px #cccccc, 1px 2px 1px #eeeeee, 3px 2px 1px #cccccc, 2px 3px 1px #eeeeee, 4px 3px 1px #cccccc, 3px 4px 1px #eeeeee, 5px 4px 1px #cccccc, 4px 5px 1px #eeeeee, 6px 5px 1px #cccccc, 5px 6px 1px #eeeeee, 7px 6px 1px #cccccc;
        } */
        .box:hover{
            cursor: pointer;
            box-shadow: 0px 0px 20px rgb(71, 71, 71);

        }

    </style>
</head>

<body>
        <!-- <?php include('http://localhost/php_/CollegeOnlineTest/components/navbar.php') ?> -->
        <?php include("../components/navbar.php") ?>
        <!-- <div class="main">
            <div class="logo">
                <img src="columbia.jpg" alt="loading...">
            </div>
            <h1>Columbia</h1>
        </div> -->
        <div class="boxes">
            <a href=""><div class="box" id="box-1"><img src="http://localhost/php_/CollegeOnlineTest/assets/logo.jpg" alt="loading..."><p>option</p></div></a>
            <a href=""><div class="box" id="box-2"><img src="http://localhost/php_/CollegeOnlineTest/assets/logo.jpg" alt="loading..."><p>option</p></div></a>
            <a href=""><div class="box" id="box-3"><img src="http://localhost/php_/CollegeOnlineTest/assets/logo.jpg" alt="loading..."><p>option</p></div></a>
            <a href=""><div class="box" id="box-4"><img src="http://localhost/php_/CollegeOnlineTest/assets/logo.jpg" alt="loading..."><p>option</p></div></a>
            <a href=""><div class="box" id="box-5"><img src="http://localhost/php_/CollegeOnlineTest/assets/logo.jpg" alt="loading..."><p>option</p></div></a>
            <a href=""><div class="box" id="box-6"><img src="http://localhost/php_/CollegeOnlineTest/assets/logo.jpg" alt="loading..."><p>option</p></div></a>
            <a href=""><div class="box" id="box-7"><img src="http://localhost/php_/CollegeOnlineTest/assets/logo.jpg" alt="loading..."><p>option</p></div></a>
            <a href=""><div class="box" id="box-8"><img src="http://localhost/php_/CollegeOnlineTest/assets/logo.jpg" alt="loading..."><p>option</p></div></a>
            <a href=""><div class="box" id="box-9"><img src="http://localhost/php_/CollegeOnlineTest/assets/logo.jpg" alt="loading..."><p>option</p></div></a>
        </div>
        <!-- <?php include("../components/footer.php") ?> -->
        <!-- <?php include('http://localhost/php_/CollegeOnlineTest/components/navbar.php') ?> -->
    </body>

</html>
<!-- /*----------------------------------- Control panel code ends (Anurag) -------------------------------------*/ -->

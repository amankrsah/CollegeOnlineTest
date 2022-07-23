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

        body {
            /* background-color: #67e6ff; */
            height: 0;
        }

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

        .main-box {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 93vh;
            margin-top: 5%;
            justify-items: center;
            width: 99vw;
            /* border: 2px solid red; */
            flex-wrap: wrap;
        }

        .boxes {
            display: flex;
            width: 68vw;
            height: 88vh;
            border: 2px solid #4e4e4e;
            /* position: relative;
            top: 10vh;
            left: 16vw; */
            border-radius: 60px;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
            box-shadow: 4px -3px 9px 1px #a99e9e, -3px 6px 9px 1px #afafaf, -50px -50px 0px -30px rgb(0 0 0 / 0%);
        }


        .box {
            /* background-color: #67e6ff; */
            /* background-color: snow; */
            display: flex;
            margin: 0% 5%;
            width: 180px;
            height: 180px;
            border: 2px solid black;
            border-radius: 20px;
            box-shadow: 7px 7px 4px -2px #000000;
            /* flex-wrap: wrap; */
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .box:hover {
            /* width: 160px;
            height: 160px; */
            background-color: #efefef;
            box-shadow: 7px 7px 2px -2px #000000;
            transition: 0.3s ease;
            ;
        }

        .box img {
            /* position: relative;
            top: 4vh;
            left: 2.5vw;*/
            height: 5vh;
            border-radius: 28px;
        }

        .box a {
            text-decoration: none;
            /* position: relative;
            top: 9vh;
            left: -1.7vw; */
            font-family: var(--font);
            font-weight: bolder;
            font-size: 27px;
            color: #444444;
            text-shadow: 1px 0px 1px #cccccc, 0px 1px 1px #eeeeee, 2px 1px 1px #cccccc, 1px 2px 1px #eeeeee, 3px 2px 1px #cccccc, 2px 3px 1px #eeeeee, 4px 3px 1px #cccccc, 3px 4px 1px #eeeeee, 5px 4px 1px #cccccc, 4px 5px 1px #eeeeee, 6px 5px 1px #cccccc, 5px 6px 1px #eeeeee, 7px 6px 1px #cccccc;
        }

        .box a:hover {
            color: rgb(26, 159, 231);
            /* text-shadow: rgb(26, 159, 231); */
            transition: 0.3s ease;
        }

        @media (max-width : 1260px) {
            .box {
                width: 165px;
                height: 165px;
            }
        }

        @media (max-width : 1069px) and (min-width : 754px) {
            .boxes {
                display: flex;
                width: 91vw;
                height: 73vh;
                border: 2px solid black;
                flex-wrap: wrap;
                justify-content: space-around;
                align-items: center;
            }

            .box {
                width: 150px;
                height: 150px;
            }

            nav ul li {
                /* color: rgb(5, 51, 255); */
                display: block;
                position: relative;
                left: 0;
                top: 126%;
                font: 20px sans-serif;
                font-weight: normal;
                float: none;
                padding: 0px;
                margin: 9px 19px;
                text-shadow: 0px 0px 2px rgb(148 148 148);
                border: none;
                border-radius: 10px;
            }
        }

        @media (max-width : 754px) {

            nav ul li {
                /* color: rgb(5, 51, 255); */
                display: block;
                position: relative;
                left: 0;
                top: 98%;
                font: 18px sans-serif;
                font-weight: normal;
                float: none;
                padding: 0px;
                margin: 10px 22px;
                text-shadow: 0px 0px 2px rgb(148 148 148);
                border: none;
                border-radius: 10px;
            }

            .boxes {
                width: 76vw;
                height: 116vh;
                justify-content: space-evenly;
                margin-top: 11%;
            }

            .box {
                width: 140px;
                height: 140px;
            }

            .box a {
                font-size: 21px;
            }

            .box img {
                height: 4vh;
            }
        }

        @media (max-width: 478px) {
            .boxes {
                width: 76vw;
                height: 116vh;
                justify-content: space-evenly;
                margin-top: 11%;
            }

            .box {
                width: 120px;
                height: 120px;
            }
        }

        @media (max-width : 407px) {
            .boxes {
                width: 79vw;
                height: 82vh;
                justify-content: space-evenly;
                margin-top: 16%;
            }

            .box {
                width: 100px;
                height: 101px;
            }

            .box a {
                font-size: 18px;
            }

            .box img {
                height: 3vh;
            }
        }

        @media (max-width : 407px) {
            .box {
                width: 80px;
                height: 80px;
            }

            .box a {
                font-size: 16px;
            }
        }

        @media (max-width : 265px) {
            .boxes {
                height: 150vh;
            }
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
        <div class="main-box">
            <div class="boxes">
                <div class="box" id="box-1"><img src="https://uploads.sarvgyan.com/2015/04/Columbia-Institute-of-Engineering-and-Technology-Raipur.jpg" alt="loading..."><a href=""><br><span>Lorem</span></a></div>
                <div class="box" id="box-2"><img src="https://uploads.sarvgyan.com/2015/04/Columbia-Institute-of-Engineering-and-Technology-Raipur.jpg" alt="loading..."><a href=""><br><span>Lorem</span></a></div>
                <div class="box" id="box-3"><img src="https://uploads.sarvgyan.com/2015/04/Columbia-Institute-of-Engineering-and-Technology-Raipur.jpg" alt="loading..."><a href=""><br><span>Lorem</span></a></div>
                <div class="box" id="box-4"><img src="https://uploads.sarvgyan.com/2015/04/Columbia-Institute-of-Engineering-and-Technology-Raipur.jpg" alt="loading..."><a href=""><br><span>Lorem</span></a></div>
                <div class="box" id="box-5"><img src="https://uploads.sarvgyan.com/2015/04/Columbia-Institute-of-Engineering-and-Technology-Raipur.jpg" alt="loading..."><a href=""><br><span>Lorem</span></a></div>
                <div class="box" id="box-6"><img src="https://uploads.sarvgyan.com/2015/04/Columbia-Institute-of-Engineering-and-Technology-Raipur.jpg" alt="loading..."><a href=""><br><span>Lorem</span></a></div>
                <div class="box" id="box-7"><img src="https://uploads.sarvgyan.com/2015/04/Columbia-Institute-of-Engineering-and-Technology-Raipur.jpg" alt="loading..."><a href=""><br><span>Lorem</span></a></div>
                <div class="box" id="box-8"><img src="https://uploads.sarvgyan.com/2015/04/Columbia-Institute-of-Engineering-and-Technology-Raipur.jpg" alt="loading..."><a href=""><br><span>Lorem</span></a></div>
                <div class="box" id="box-9"><img src="https://uploads.sarvgyan.com/2015/04/Columbia-Institute-of-Engineering-and-Technology-Raipur.jpg" alt="loading..."><a href=""><br><span>Lorem</span></a></div>
            </div>
        </div>
    </header>
</body>

</html>
<!-- /*----------------------------------- Control panel code ends (Anurag) -------------------------------------*/ -->

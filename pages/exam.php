<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>MCQ's Test</title>
    <style>
    #ques_ans {
    display: flex;
    flex-direction: column;
    /* justify-content: center; */
    /* align-items: center; */
    margin: auto;
    width: 60vw;
    height: fit-content;
    border-radius: 10px;
    padding: 5vw 15vh;
    /* background: white; */
    background-color: var(--cont_color);
    /* background-image: url(http://localhost/php_/College_project/assets/web-bg.svg); */
    box-shadow: 0px 0px 44px rgb(37, 37, 37);
}

.que_no {
    margin-top: 10vh;
    margin-bottom: 10vh;
    text-align: center;
    font-size: 50px;
    color: rgb(41, 22, 118);
}

.question {
    text-align: justify;
    font-size: 25px;
    width: 100%;
    color: rgb(41, 22, 118);
}

.ans {
    width: 100%;
    font-size: 20px;
    color: rgb(41, 22, 118);
    height: fit-content;
    padding: 10px;
}

#ques_ans .option {
    margin: 1vh;
    background-color: rgba(219, 226, 255, 0.502);
    font-size: 20px;
    height: fit-content;
    display: flex;
    flex-direction: column;
    padding: 10px 40px;
    border-radius: 10px;
    border: 0.1px solid rgba(168, 185, 255, 0.502);
    box-shadow: 0px 0px 1px rgb(37, 37, 37);
}

#ques_ans .option:hover {
    background-color: rgba(185, 216, 255, 0.801);
    cursor: pointer;
}
    </style>
</head>
<body>
    <?php include("../components/navbar.php") ?>
    
    <div id="ques_ans">
        <?php
        for ($i=1; $i < 11; $i++) { 
        echo '<div class="que_no">Question No.'.$i.' </div>
            <div class = "question">'.$i.'. what if... Strange trapped Strange in time loop...?Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae officiis itaque, ad eaque dolor aspernatur ipsam, commodi quod necessitatibus odio eligendi saepe numquam quo harum! Sunt obcaecati similique doloremque maiores!</div>
                <div class = "ans">
                    <div class="option">Option A</div>
                    <div class="option">Option B Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, quas natus id nesciunt quidem possimus magni est voluptatum repudiandae architecto dolorem magnam neque amet corporis culpa, provident reiciendis? Optio, vel!</div>
                    <div class="option">Option C</div>
                    <div class="option">Option D</div>
                </div>';}
            ?>
    </div>
</body>
</html>
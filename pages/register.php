<!-- This page is Contributed by KAMAL singh Rajput -->
<!-- Modified by Aman Kumar Sah 😉 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register to Columbia</title>
    <link rel="shortcut icon" href="http://localhost/php_/CollegeOnlineTest/assets/logo.jpg">
    <link rel="stylesheet" href="../css/style.css">
    <style>
        #Name{
            width: 100%;
        }
        .f-name{
            margin-left: 15px;
            width: 40%;
            margin-right: 15px;
           
           
        }
        .l-name{
           width:40%;
        }
        /* second line date of birth and enromental no. css starting here */
        
        #second{
            width: 100%;
            margin-left: 5px;
            

        }
        .dob{
            
            margin-right: 20%px;
            margin-top: 15px;
            width: 40%;
        }
        .e-number{
        margin-right: 15px;
        width: 40%;
           
           
    
        }/* third line email  css starting here */
        #third{
            margin-left: 5px;
            margin-top: 15px;
            margin-right: 15px;
        }
        .email{
            width: 88%;
        }
        #fourth{
            /* fourth line contact css starting here */
            margin-left: 5px;
            margin-top: 15px;
            margin-right: 15px;
        }
        .contact{
            width: 88%;
        }
        #fifth{
            /* second line course and diploma btech css starting here */
            display: flex;
            align-items:center;
            font-size:25px;
            color:var(--primary);
            text-align: left;
            width: 60%;
            margin:auto;          
        }
       
        .r1{
            margin-left: 5px;
        
            margin-right: 15px;
        }

        #six{            
            margin: 50px 0px;
        }
        .d1{
            margin-right: 15px;
            width:40%;
        }
        .b1{
            margin-right: 15px;
            width:40%;
        }
        #reg_btn{
            color: var(--secondary);
            font-size: 30px;
            height: 45px;
            border-radius: 20PX;
            background-color: var(--primary);
            padding: 6px 8px;
            width: 30%;
            margin:auto;
            cursor:pointer;
        }
        #reg_btn:hover{
            cursor: pointer;
            box-shadow: 0px 0px 10px rgb(37, 37, 37);
            transition: 300ms;
        }
        #border input{
        height: 5vh;
        margin: 2%;
        font-size: 20px;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom: 2px solid var(--primary);
        outline: none;  
        }
        #border input:focus{
        font-size: 25px;
        transition: 300ms;
        }
            
        #border{
        width: 50vw;
        padding: 5vw;
        padding-right: 1vw;
        margin: auto;
        background-color: var(--cont_color);
        border-radius: 10px;
        box-shadow: 0px 0px 44px rgb(37, 37, 37);
            
        }
        
     /* .input_style{
    width: 80%;
    height: 50px;
    margin: 2%;
    font-size: 25px;
    border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: 2px solid var(--primary);
    outline: none;
    }
    
    .input_style:focus {
    font-size: 50px;
    transition: 300ms;
} */
    
     

    </style>
</head>
<body>       
   <?php include('../components/navbar.php') ?>
   <!-- <?php include('http://localhost/php_/CollegeOnlineTest/components/navbar.php') ?> -->
   <div class = "space_top"></div>

<form id="border">
    <h1 style="color: var(--primary);font-size: 40px; text-align:center">REGISTRATION</h1>
     <div class="input_style" id="Name">
                   <input type="text" class="f-name" placeholder="First Name">
       
    
               <input type="text" class="l-name"placeholder="Last Name">
    </div>
            
    <div class="input_style" id="second">
       <input type="text"  class="dob" onfocus="(this.type='date')" placeholder="Date of birth">
     <input type="nemeric" class="e-number" placeholder="Enrollment No.">
    </div>
     <div class="input_style" id="third">   
                   <input type="email" class="email" placeholder="Email">
    </div>
    <div id="fourth">
                   <input type="number" class="contact" placeholder="Contact Number">
    </div>
    <div class="input_style" id="fifth">
            Course : 
            <input type="radio" class = "r1" id="b_tech" name="k" value="">
            <label for="b_tech">B. tech</label><br>
            <!-- <input type="radio" class="r2" name="k">Diploma -->
            <input type="radio" class = "r2" id="Diploma" name="k" value="">
            <label for="Diploma">Diploma</label><br>
            
    </div>
    <div class="input_style" id="six">
                     <input type="text" onfocus="(this.type='date')" class="d1" placeholder="Registeration Date">    
                     <input type="text" placeholder="Branch" class="b1">
    </div>  
    <a href="http://localhost/php_/CollegeOnlineTest/"><div id="reg_btn"><center>Register</center></div> </a> 
</form>
</div>
<!-- <?php include('http://localhost/php_/CollegeOnlineTest/components/navbar.php') ?> -->
<?php include("../components/footer.php") ?>
    
</body>
</html>
<?php
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Failed</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-image: linear-gradient(90deg,#177DB5,#E9D53F);
        }
        .login_failed_container{
            display: flex;
            align-items:center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }
        .lock .fa-lock{
            font-size: 200px;
            color: #177DB5;
            transition: 1.3s;
        }
        .lock:hover .fa-lock{
            transform: rotateY(360deg);
            color: #E9D53F;
            font-size: 250px;
        }
        .login_failed h1:hover{
            transform: scale(1.3);
        }
    </style>
</head>
<body>
    <div class="login_failed_container">
        <div class="login_failed">
            <div class="lock">
                <i class="fas fa-lock"></i>
            </div>
            <h1 style="margin-top: 20px; transition: 1s;">Opps! Login Failed</h1>
            <h3 style="margin-top: 20px;">
                Username or Password are incorrect :(
            </h3>
            <h4 style="margin-top: 10px;">Please try again...</h5>
        </div>
    </div>
</body>
</html>

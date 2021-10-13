<?php
    if(isset($_POST["login"])){
        include "config.php";
        $user = $_POST["user_login"];
        $lpswd = md5($_POST["lpswd"]);
        $lsql = "select uid,user_name,pswd from users where user_name='$user' and pswd='$lpswd'";
        $result1 = mysqli_query($con,$lsql) or exit("query faild");
        if(mysqli_num_rows($result1)>0){
            while($row = mysqli_fetch_assoc($result1)){
                session_start();
                $_SESSION["username"] = $row['user_name'];
                $_SESSION["user_id"] = $row['uid'];
            }
            header('location: http://localhost/online_shoping_site/home.php');
        }
        else{
            header('location: http://localhost/online_shoping_site/login_failed.php');
        }
    }
?>
<?php
    if(isset($_POST['regis'])){
        include "config.php";
        $username = $_POST["username"];
        $email = md5($_POST["email"]);
        $pswd = md5($_POST["rpswd"]);
        $sql = "insert into users (user_name,email,pswd) values ('$username','$email','$pswd')";
        $result = mysqli_query($con,$sql) or exit("query faild");
        if($result){
            $lsql = "select uid,user_name from users where user_name='$username' and pswd='$pswd'";
            $result3 = mysqli_query($con,$lsql) or exit("query failed");
            while($row = mysqli_fetch_assoc($result3)){
                session_start();
                $_SESSION["username"] = $row['user_name'];
                $_SESSION["user_id"] = $row['uid'];
            }
            header('location: http://localhost/online_shoping_site/home.php');
        }
        else{
            header('location: http://localhost/online_shoping_site/login_failed.php');
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Zillah</title>
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;1,200;1,300;1,400;1,600;1,700&family=Wellfleet&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script defer src="vanilla-tilt.js"></script>
</head>
<body>
    <div class="nav_container" id="nav_container">
        <div class="navbar">
            <div class="logo">
                <!-- <img src="./images/Online.png" alt="logo.png"> -->
            </div>
            <div class="nav_menu">
                <a href="http://localhost/online_shoping_site/home.php" style="text-decoration:none"><li>Home</li></a>
                <a href="#menu_one" style="text-decoration:none"><li>Products</li></a>
                <a href="http://localhost/online_shoping_site/search.php" style="text-decoration:none"><li>Search</li></a>
                <a href="" style="text-decoration:none"><li>Control Panel</li></a>
            </div>
            <div class="nav_feature">
                <div class="search_box" id="search_box">
                    <form action="<?php $_SERVER['PHP_SELF']?>" method="get">
                        <input type="text" name="search" id="nav_search" placeholder="Search..." autocomplete="off">
                        <a href="http://localhost/online_shoping_site/search_result.php?search=" class="search_btn" value="nav_search_btn" id="search-btn">
                            <i class="fas fa-search"></i>
                        </a>
                    </form>
                </div>
                <div class="nav_cart">
                    <a href="http://localhost/online_shoping_site/cart.php"><i class="fas fa-shopping-cart" title="Add to Cart"></i></a>
                </div>
                
                <div class="nav_account" id="nav_account" style='display: <?php 
                    session_start();
                    if(isset($_SESSION["username"])){
                        echo "none";
                    }
                    else{
                        echo "block";
                    }
                ?>'>
                    <i class="fas fa-user-circle" title="Account" onclick="form_ani()" id="user_ani"></i>
                </div>
                <a href="logout.php">
                    <div class="logout" name="logout" title="logout" style='display: <?php 
                    if(isset($_SESSION["username"])){
                        echo "block";
                    }
                    else{
                        echo "none";
                    }
                    ?>;cursor:pointer'>
                        <i class="fas fa-sign-out-alt"></i>
                    </div>
                </a>
                <?php
                    if(isset($_SESSION["username"])){
                        echo "<div style='font-size: 25px;color: #177DB5;font-weight: 500;margin-left:10px;line-height:40px'>Hello, ".$_SESSION["username"]."</div>";
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- login & logout form -->

    <div class="login_container" id="login_container">
               <div class="form_container">
                   <div class="form_btn">
                       <span onclick="login()">Login</span>
                        <span onclick="reg()">Register</span>
                        <hr id="intor">
                   </div>
                    
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" id="loginform" method="post">
                        <div class="lun">
                            <input type="text" name="user_login" autocomplete="off" id="login_textbox">
                            <label for="login_username" class="login_label_username" id="login_label_username">
                                <span class="login_span_username" id="login_span_username">Username</span>
                            </label>
                        </div>
                        <div class="lpswd">
                            <input type="password" name="lpswd" id="login_pswd">
                            <i class="fas fa-eye" id="pswd_shaw" onclick="lshawpswd()"></i>
                            <label for="lpswd" class="login_label_pswd" id="login_label_pswd">
                                <span class="login_span_pswd">Password</span>
                            </label>
                        </div>
                            <button type="submit" name="login" class="btn" id="login_btn" onclick="return validation()">Login</button>
                    </form>
        
                    <form action="<?php $_SERVER['PHP_SELF']?>" id="regform" method="post">
                        <div class="run">
                            <input type="text" name ="username" id="reg_textbox" autocomplete="off">
                            <label for="" id="reg_label_username">
                                <span id="reg_span_username">Username</span>
                            </label>
                        </div>
                        <?php
                            // echo checkuser();
                        ?>
                        <div class="reml">
                            <input type="email" id="reg_eml" name="email" autocomplete="off">
                            <label for="" id="reg_label_eml">
                                <span id="reg_span_eml">Email</span>
                            </label>
                        </div>    
                        <div class="rpswd">
                            <input type="password" id="reg_pswd" name="rpswd">
                            <i class="fas fa-eye" id="pswd_shaw" onclick="rshawpswd()"></i>
                            <label for="" id="reg_label_pswd">
                                <span id="reg_span_pswd">Password</span>
                            </label>
                        </div>    
                        <button type="submit" name="regis" class="btn">Register</button>
                    </form>
                </div>
       <i class="fas fa-times-circle" id="form_close_icon" onclick="closeform()"></i>
    </div>

    <!-- chatbot -->
    <div class="chat_icon_container">
        <i class="fas fa-comment" id="bot_open" title="Open chat bot"></i>
        <i class="fas fa-comment-slash" id="bot_close" title="Close chat bot"></i>
    </div>
    <div class="chat_bot" style="border-radius: 10px;border-left:3px solid #e9d53f;border-right:3px solid #e9d53f">
        <div class="chat_bot_title" style="transition: 1s; display: none;">
            <h3 style="display: flex;justify-content: center;background-color: #f1dd40;height: 40px;color: #177DB5;border-radius: 10px;box-shadow: 1px 3px 5px rgba(0, 0, 0, 0.1);">Let's do some chat</h3>
        </div>
        <div class="display_chats">
            
        </div>
        <div class="chat_input_field" style="display: none;border-radius: 10px;">
            <input type="text" id="chat_input" placeholder="Type here..." autocomplete="off">
            <i class="fas fa-microphone talk2" style="margin-left: -15px; cursor: pointer;" onclick="talkchat()"></i>
            <i class="fas fa-paper-plane" id="send_msg" style="cursor: pointer;"></i>
        </div>
    </div>
    <script src="header.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="search.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document</title>
</head>
<body>
    <div class="search_box_container">
        <div class="search_box" id="search_box">
            <input type="text" name="search" id="nav_search" class="talk" placeholder="Search..." autocomplete="off">
            <div class="search_btn" id="search-btn">
                <i class="fas fa-microphone talk" onclick="talking()"></i>
                <i class="fas fa-search"></i>
            </div>
        </div>
    </div>   
    <div class="filter_container">
        <a href="http://localhost/online_shoping_site/search_result.php?product=cloth">
            <div class="filters">
                <div class="filter_img_container">
                    <img src="https://image.freepik.com/free-vector/elegant-fashion-poster-template_1361-1220.jpg" alt="">
                </div>  
                <p>T-shirts</p>
            </div>
        </a>   
        <a href="http://localhost/online_shoping_site/search_result.php?product=laptop"> 
            <div class="filters">
                <div class="filter_img_container" style="width: 100%;height: 100%;">
                    <img src="https://cdn.mos.cms.futurecdn.net/hk72NFcNS7fAJzaFxeG2yh.jpg" alt="">
                </div>    
                <p>Laptops</p>
            </div>
        </a> 
        <a href="http://localhost/online_shoping_site/search_result.php?product=phone">  
            <div class="filters">
                <div class="filter_img_container" style="width: 100%;height: 100%;">
                    <img src="https://cdn.mos.cms.futurecdn.net/YWc6vfFXCRNyf63JXno8C4.png" alt="">
                </div>
                <p>Smart Phones</p>
            </div>
        </a> 
        <div class="filters">
            <div class="filter_img_container" style="width: 100%;height: 100%;">
                <img src="https://previews.123rf.com/images/dreamsvector/dreamsvector1905/dreamsvector190500164/122519565-baby-toy-shop-poster-in-flat-cartoon-style-kids-game-includes-teddy-bear-pyramid-doll-children-fun-a.jpg" alt="">
            </div>
            <p>Toys</p>
        </div>
    </div> 

    <div class="card_container_actual" style="display: none; transition: 1s;">
        <div class="card_container">
            <div class="cards">
                <div class="card_img">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/khmbafk0-0/t-shirt/w/j/s/xs-t322-blwh-seven-rocks-original-imafxhagtyj2xvpn.jpeg?q=50" alt="">
                </div>
                <div class="card_info">
                    <p>Seven Rocks</p>
                    <h1>Color Block Men Round Neck Black T-Shirt</h1>
                    <br><br>
                    <ul>
                        <li style="font-size: 17px;"><h3>Size : XXL XL L S </h3></li>
                        <br>
                        <li style="font-size: 17px;"><h3> 100% Cotton</h3></li>
                    </ul>
                </div>
                <div class="card_prize">
                    <i class="fas fa-rupee-sign" style=" text-decoration: underline;">233</i>
                </div>
            </div>
        </div>
        
        <hr style="margin:20px">

        <div class="card_container">
            <div class="cards">
                <div class="card_img">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/khmbafk0-0/t-shirt/w/j/s/xs-t322-blwh-seven-rocks-original-imafxhagtyj2xvpn.jpeg?q=50" alt="">
                </div>
                <div class="card_info">
                    <p>Seven Rocks</p>
                    <h1>Color Block Men Round Neck Black T-Shirt</h1>
                    <br><br>
                    <ul>
                        <li style="font-size: 17px;"><h3>Size : XXL XL L S </h3></li>
                        <br>
                        <li style="font-size: 17px;"><h3> 100% Cotton</h3></li>
                    </ul>
                </div>
                <div class="card_prize">
                    <i class="fas fa-rupee-sign" style=" text-decoration: underline;">233</i>
                </div>
            </div>
        </div>

        <hr style="margin:20px">

        <div class="card_container">
            <div class="cards">
                <div class="card_img">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/khmbafk0-0/t-shirt/w/j/s/xs-t322-blwh-seven-rocks-original-imafxhagtyj2xvpn.jpeg?q=50" alt="">
                </div>
                <div class="card_info">
                    <p>Seven Rocks</p>
                    <h1>Color Block Men Round Neck Black T-Shirt</h1>
                    <br><br>
                    <ul>
                        <li style="font-size: 17px;"><h3>Size : XXL XL L S </h3></li>
                        <br>
                        <li style="font-size: 17px;"><h3> 100% Cotton</h3></li>
                    </ul>
                </div>
                <div class="card_prize">
                    <i class="fas fa-rupee-sign" style=" text-decoration: underline;">233</i>
                </div>
            </div>
        </div>
    </div>
    <script src="search.js"></script>
</body>
</html>

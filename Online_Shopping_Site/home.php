<?php
    include "header.php";  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
    <div class="poster_container">
        <img src="images\poster.jpg" id="poster_img" alt="poster">
        <h1>Get ready<br>for<br>Shopping....</h1>
        <div class="poster_btn_container">
            <a href="#slider_container"><button id="poster_trend_btn">Let's Go</button></a>
            <a href="http://localhost/online_shoping_site/search.php"><button id="poster_search_btn">Search</button></a>
        </div>    
    </div>
    <br>
    <h3 class="contenet_heading">
        <i class="fas fa-caret-right"></i>
        Explore Here..
    </h3>
    <div class="slider_container" id="slider_container" style="margin-top: 20px;">
        <div class="slides">
            <a href="http://localhost/online_shoping_site/search_result.php?product=phone">
                <div class="slide one active" id="one">
                    <img src="images/slider_3.jpg" class="img-fluid" alt="">
                    <div class="slider_content_one">
                    <p>Looking for</p>
                    <h2>Brand new Phones</h2>
                    </div>
                </div>
            </a>
            <div class="slide two">
                <img src="images/slider_4.jpg" class="img-fluid" alt="">
                <div class="slider_content_one slider_content_two">
                    <p>Looking for</p>
                    <h2>Brand new Toys</h2>
                </div>
            </div>
            <a href="http://localhost/online_shoping_site/search_result.php?product=cloth">
                <div class="slide thr">
                    <img src="images/slider_1.jpg" class="img-fluid" alt="">
                    <div class="slider_content_one">
                        <p>Looking for</p>
                        <h2>Brand new Fashion</h2>
                    </div>
                </div>
            </a>
            <a href="http://localhost/online_shoping_site/search_result.php?product=laptop">
                <div class="slide four">
                    <img src="images/slider_2.jpg" class="img-fluid" alt="">
                    <div class="slider_content_one">
                        <p>Looking for</p>
                        <h2>Brand new Laptop</h2>
                    </div>
                </div>
            </a>
        </div>
        <button id="prev"><i class="fas fa-angle-double-left"></i></button>
        <button id="next"><i class="fas fa-angle-double-right"></i></button>
    </div>
    <br>
    <h3 class="contenet_heading cht">
        <i class="fas fa-caret-right"></i>
        Explore Here..
        <div class="right_contenet">
            <i class="fas fa-tv cursor_pointer" title="Slide show"></i>
            <a href="http://localhost/online_shoping_site/search_result.php?product=cloth"><button class="view_all">view All</button></a>
        </div>
    </h3>
    <div class="menu_one_container container-fuild" style="box-shadow: 0 1px 10px rgba(0, 0, 0,.9);" id="menu_one">
        <div class="row menu_one">
            <div class="col-2">
                <div class="menu_one_images">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/khmbafk0-0/t-shirt/w/j/s/xs-t322-blwh-seven-rocks-original-imafxhagtyj2xvpn.jpeg?q=50" class="" alt="">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/khmbafk0-0/t-shirt/o/x/w/xs-t322-blwh-seven-rocks-original-imafxhagbmz4mam5.jpeg?q=50" class="" alt="">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/khmbafk0-0/t-shirt/4/e/v/xs-t322-blwh-seven-rocks-original-imafxhagvpbgmrj2.jpeg?q=50" class="" alt="">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/khmbafk0-0/t-shirt/3/r/r/xs-t322-blwh-seven-rocks-original-imafxhagd9y5hn3q.jpeg?q=50" class="" alt="">
                </div>  
                <h4 class="product_com_name">Seven Rocks</h4>
                <i class="fas fa-plus-square" title="Add to Compare"></i>
            </div>
            <div class="col-2">
                <div class="menu_one_images">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/kjiwfbk0-0/t-shirt/e/k/s/m-t305-as10yldnwh-seven-rocks-original-imafz2qfvx7tznnn.jpeg?q=50" class="" alt="">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/k612pow0/t-shirt/m/h/h/xl-t305-as10yldnwh-seven-rocks-original-imafzhyn3krvwqf7.jpeg?q=50" class="" alt="">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/k612pow0/t-shirt/m/h/h/3xl-t305-as10yldnwh-seven-rocks-original-imafzhynnun8debb.jpeg?q=50" class="" alt="">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/k612pow0/t-shirt/m/h/h/xl-t305-as10yldnwh-seven-rocks-original-imafzhynyngbuwts.jpeg?q=50" class="" alt="">
                </div>  
                <h4 class="product_com_name">Seven Rocks</h4> 
                <i class="fas fa-plus-circle" title="Add to Compare"></i>  
            </div>
            <div class="col-2">
                <div class="menu_one_images">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/kflftzk0-0/t-shirt/y/b/n/m-aps-12-ausk-original-imafwyf9ecyzy7xn.jpeg?q=50" class="" alt="">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/jyj0how0/t-shirt/e/s/7/xl-aa-12-ausk-original-imafgnk9hysxnazr.jpeg?q=50" class="" alt="">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/jyj0how0/t-shirt/e/s/7/xl-aa-12-ausk-original-imafgnk9tpn8xycj.jpeg?q=50" class="" alt="">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/jyhl1u80/t-shirt/b/g/w/l-aps-12-ausk-original-imafgpb3kjpnp3f6.jpeg?q=50" class="" alt="">
                </div>   
                <h4 class="product_com_name">Vero LIE</h4> 
                <i class="fas fa-plus-circle" title="Add to Compare"></i> 
            </div>
            <div class="col-2">
                <div class="menu_one_images">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/km3s1ow0/t-shirt/s/0/d/l-scott-ladies-polo-shirts-scott-international-original-imagf2svq7ndzmgc.jpeg?q=50" class="" alt="">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/km3s1ow0/t-shirt/a/0/y/l-scott-ladies-polo-shirts-scott-international-original-imagf2svheadghqy.jpeg?q=50" class="" alt="">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/km3s1ow0/t-shirt/w/t/k/l-scott-ladies-polo-shirts-scott-international-original-imagf2svczvahy8f.jpeg?q=50" class="" alt="">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/km3s1ow0/t-shirt/x/r/q/l-scott-ladies-polo-shirts-scott-international-original-imagf2svkynavmxf.jpeg?q=50" class="" alt="">
                </div>     
                <h4 class="product_com_name">VEDUU</h4>
                <i class="fas fa-plus-circle" title="Add to Compare"></i>
            </div>
            <!-- <div class="col-2">
                <div class="menu_one_images">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/kpmy8i80/shirt/1/4/5/l-crc-ch-01-carbonn-cloth-original-imag3uyxrg7azzhh.jpeg?q=50" class="" alt="">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/kpmy8i80/shirt/m/h/c/l-crc-ch-01-carbonn-cloth-original-imag3uyx5gkvdgtt.jpeg?q=50" class="" alt="">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/kpmy8i80/shirt/2/g/u/l-crc-ch-01-carbonn-cloth-original-imag3uyxdvcq5zhp.jpeg?q=50" class="" alt="">
                    <img src="https://rukminim1.flixcart.com/image/880/1056/kpmy8i80/shirt/j/2/x/l-crc-ch-01-carbonn-cloth-original-imag3uyxsysgwepa.jpeg?q=50" class="" alt="">
                </div>     
            </div> -->
        </div>
    </div>
    <br>
    <a href="http://localhost/online_shoping_site/pro_detail.php?pro_id=6&product=laptop">
        <div class="asus_container">
            <div class="asus_img_cont" id="asus_img_cont">
                <img src="images\ASUS.jpg" alt="">
            </div>
            <h2>Game ON</h2>
            <h1>ASUS ROG Strix G15</h1>
            <i class="fas fa-rupee-sign"></i>
            <h3>1,49,999/-</h3>
            <button>Buy now</button>
        </div>
    </a>
    <!-- 2nd_menu -->
    <h3 class="contenet_heading cht" style="box-shadow: 0 1px 10px rgba(0, 0, 0,.9);padding-bottom: 500px;">
        <i class="fas fa-caret-right"></i>
        Explore Here..
        <div class="right_contenet">
            <i class="fas fa-tv cursor_pointer" title="Slide show"></i>
            <a href="http://localhost/online_shoping_site/search_result.php?product=phone"><button class="view_all">view All</button></a>
        </div>
    </h3>
    <div class="menu_two_container container-fuild">
        <div class="row menu_two">
            <div class="col-2">
                <img src="https://rukminim1.flixcart.com/image/416/416/kfvfwy80/mobile/j/h/t/poco-c3-mzb07riin-original-imafw8qbg63kvngr.jpeg?q=70" alt="">
                <h4 class="product_com_name">Vero LIE</h4> 
                <i class="fas fa-plus-circle" title="Add to Compare"></i>
            </div>
            <div class="col-2">
                <img src="https://rukminim1.flixcart.com/image/416/416/kn7sdjk0/mobile/q/j/x/c21-rmx3201-realme-original-imagfxfwbszrxkvu.jpeg?q=70" alt="">
                <h4 class="product_com_name">Vero LIE</h4> 
                <i class="fas fa-plus-circle" title="Add to Compare"></i>
            </div>
            <div class="col-2">
                <img src="https://rukminim1.flixcart.com/image/416/416/kg8avm80/mobile/y/7/n/apple-iphone-12-dummyapplefsn-original-imafwg8dqq7z8cgh.jpeg?q=70" alt="">
                <h4 class="product_com_name">Vero LIE</h4> 
                <i class="fas fa-plus-circle" title="Add to Compare"></i>
            </div>
            <div class="col-2">
                <img src="https://rukminim1.flixcart.com/image/416/416/krp94sw0/mobile/c/v/w/m21-2021-edition-sm-m215glbhins-samsung-original-imag5fhyvenmzpzh.jpeg?q=70" alt="">
                <h4 class="product_com_name">Vero LIE</h4> 
                <i class="fas fa-plus-circle" title="Add to Compare"></i>
            </div>
        </div>
    </div>
    <br>
    <br>
    <h3 class="contenet_heading cht">
        <i class="fas fa-caret-right"></i>
        Explore Here..
        <div class="right_contenet">
            <i class="fas fa-tv cursor_pointer" title="Slide show"></i>
            <a href="http://localhost/online_shoping_site/search_result.php?product=phone"><button class="view_all">view All</button></a>
        </div>
    </h3>
    <div class="menu_two_container container-fuild">
        <div class="row menu_two">
            <div class="col-2">
                <img src="https://rukminim1.flixcart.com/image/416/416/kfvfwy80/mobile/j/h/t/poco-c3-mzb07riin-original-imafw8qbg63kvngr.jpeg?q=70" alt="">
                <h4 class="product_com_name">Vero LIE</h4> 
                <i class="fas fa-plus-circle" title="Add to Compare"></i>
            </div>
            <div class="col-2">
                <img src="https://rukminim1.flixcart.com/image/416/416/kn7sdjk0/mobile/q/j/x/c21-rmx3201-realme-original-imagfxfwbszrxkvu.jpeg?q=70" alt="">
                <h4 class="product_com_name">Vero LIE</h4> 
                <i class="fas fa-plus-circle" title="Add to Compare"></i>
            </div>
            <div class="col-2">
                <img src="https://rukminim1.flixcart.com/image/416/416/kg8avm80/mobile/y/7/n/apple-iphone-12-dummyapplefsn-original-imafwg8dqq7z8cgh.jpeg?q=70" alt="">
                <h4 class="product_com_name">Vero LIE</h4> 
                <i class="fas fa-plus-circle" title="Add to Compare"></i>
            </div>
            <div class="col-2">
                <img src="https://rukminim1.flixcart.com/image/416/416/krp94sw0/mobile/c/v/w/m21-2021-edition-sm-m215glbhins-samsung-original-imag5fhyvenmzpzh.jpeg?q=70" alt="">
                <h4 class="product_com_name">Vero LIE</h4> 
                <i class="fas fa-plus-circle" title="Add to Compare"></i>
            </div>
        </div>
    </div>
    <script src="home.js"></script>
</body>
</html>

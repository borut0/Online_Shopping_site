<?php
    include "header.php";
?>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="pro_detail.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;1,200;1,300;1,400;1,600;1,700&family=Wellfleet&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>
<body>
    <!-- product detail -->
    <div class="product_detail_container">
        <?php   
            include "config.php";
            if(isset($_GET['product']) && isset($_GET['pro_id'])){
                $product = $_GET['product'];
                $id = $_GET['pro_id'];
                $sql = "select * from {$product} where {$product}_id = {$id}";
            }
            else{
                exit("Not Found");
            }
            $result = mysqli_query($con,$sql) or exit("query faild");
            if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
        ?>
        <div class="container-fuild">
            <div class="row">
                <div class="col-6">
                    <div class="big_img">
                        <img src="<?php echo $row['main_img'] ?>" alt="" id="big_img" style="<?php if($product=="phone"){
                            echo "width:300px";
                        } ?>">
                    </div>
                    <div class="small_imgs">
                        <div class="small_img" style= <?php if($product=="phone"){
                                echo "'height:100px;width:50px'";
                        } ?>>
                            <img src="<?php echo $row['main_img'] ?>" alt="" class="sml_img">
                        </div>
                        <div class="small_img" style= <?php if($product=="phone"){
                                echo "'height:100px;width:50px'";
                        } ?>>
                            <img src="<?php echo $row['sec_img'] ?>" alt="" class="sml_img">
                        </div>
                        <div class="small_img" style= <?php if($product=="phone"){
                                echo "'height:100px;width:50px'";
                        }?>>
                            <img src="<?php echo $row['thr_img'] ?>" alt="" class="sml_img">
                        </div>
                        <div class="small_img" style= <?php if($product=="phone"){
                                echo "'height:100px;width:50px'";
                        }?>>
                            <img src="<?php echo $row['four_img'] ?>" alt="" class="sml_img">
                        </div>       
                    </div>
                </div>
                <div class="col-6">
                    <h4> 
                        <?php echo $row['comp_name']; ?>
                    </h4>
                    <h1><?php echo $row['title']; ?></h1>
                    <br>
                    <p style="font-size: large;">Only /-</p>
                    <i class="fas fa-rupee-sign" style="font-size: xx-large; color: black;box-shadow: 10px 5px 10px rgba(0, 0, 0, .1);"><?php echo $row['prize'] ?></i>
                    <i class="fas fa-rupee-sign" style="text-decoration:line-through; font-size: medium;"><?php echo $row['cros'] ?></i> <span style="font-size:larger; text-decoration: underline #E9D53F; color: red;"><?php echo (100 - round((($row['prize']/$row['cros'])*100),2)) ?>% off</span>
                    <br><br>
                    <div class="row" style="display:
                        <?php
                            if($product=="phone" or $product=="laptop"){
                                echo "none";
                            }
                        ?>
                    ">
                        <div class="col-1">
                            <p style="font-size: larger;font: bold;font-weight: 500;">Size:</p>
                        </div>
                        <div class="col-2" style="line-height: 35px">
                            <select name="" id="" style="outline: none;border: 3px solid #E9D53F;">
                                <option value="">Small</option>
                                <option value="">Large</option>
                                <option value="">XL</option>
                                <option value="">XXL</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <table style="width: 45%; font-size: 20px;">
                        <tr>
                            <th style="padding-right:20px">Quantity :</th>
                            <th id="minus">-</th>
                            <th style="padding-right: 20px;padding-left: 20px; text-decoration: underline;" id="qlty_no">1</th>
                            <th id="plus">+</th>
                        </tr>
                    </table>
                    <br><br><br>
                    <div class="pro_detail_btn_container">
                        <a href="http://localhost/online_shoping_site/cart.php?id=<?php echo $id ?>&product=<?php echo $product ?>&img=<?php echo $row['main_img']?>&title=<?php echo $row['title'] ?>&prize=<?php echo $row['prize'] ?>"><button value="add_to_cart">Add to Cart</button></a>
                        <button class="pro_detail_btn">Buy Now</button>
                    </div>
                </div>
            </div>
        </div>
        <?php
            }
        }
        ?>
    </div>
    <br><br><br>
    <h3 class="contenet_heading cht">
        <i class="fas fa-caret-right"></i>
        Similar Products
        <div class="right_contenet">
            <i class="fas fa-tv cursor_pointer" title="Slide show"></i>
            <a href="http://localhost/online_shoping_site/search_result.php?product=cloth"><button class="view_all">view All</button></a>
        </div>
    </h3>
    <div class="menu_one_container container-fuild" style="box-shadow: 0 1px 10px rgba(0, 0, 0,.9);">
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
        </div>
    </div>
    <script src="vanilla-tilt.js"></script>
    <script src="pro_detail.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>

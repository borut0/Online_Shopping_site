<?php
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="search.css">
</head>
<body>
    <div class="card_container_actual" style="margin-top: 20px;">
    <?php
        include "config.php";
        if(isset($_GET['product'])){
            $product = $_GET['product'];
            $sql = "select * from {$product}";
        }
        else if(isset($_GET['search'])){
            $search_term = $_GET['search'];
            function searching(){
                include "config.php";
                $search_term = $_GET['search'];
                $sqltext[0] = "select * from phone where title like '%{$search_term}%' or comp_name like '%{$search_term}%'";
                $sqltext[1] = "phone";
                $result1 = mysqli_query($con,$sqltext[0]) or exit("query faild");
                if(mysqli_num_rows($result1)>0){
                    return $sqltext;
                }
                $sqltext[0] = "select * from cloth where title like '%{$search_term}%' or comp_name like '%{$search_term}%'";
                $sqltext[1] = "cloth";
                $result1 = mysqli_query($con,$sqltext[0]) or exit("query faild");
                if(mysqli_num_rows($result1)>0){
                    return $sqltext;
                }
                $sqltext[0] = "select * from laptop where title like '%{$search_term}%' or comp_name like '%{$search_term}%' or detail1 like '%{$search_term}%' or detail2 like '%{$search_term}%'";
                $sqltext[1] = "laptop";
                $result1 = mysqli_query($con,$sqltext[0]) or exit("query faild");
                if(mysqli_num_rows($result1)>0){
                    return $sqltext;
                }
                else{
                    exit("Not Found");
                }
            }
            $getsearch_result = searching();
            $sql = $getsearch_result[0];
            $product = $getsearch_result[1];
        }
        else{
            exit("Not Found.....");
        }
        $result = mysqli_query($con,$sql) or exit("query faild");
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
    ?>
        <div class="card_container">
            <div class="cards">
                <div class="card_img" style="width:<?php
                        if($product == "phones"){
                            echo "150px";
                        }
                        else if($product == "laptop"){
                            echo "320px";
                        }
                    ?>
                ">
                    <a href="http://localhost/online_shoping_site/pro_detail.php?pro_id=<?php echo $row[$product."_id"]; ?>&product=<?php  echo $product?>"><img src="<?php echo $row['main_img']; ?>" alt=""></a>
                </div>
                <div class="card_info">
                    <p><?php echo $row['comp_name']; ?></p>
                    <h1><a href="http://localhost/online_shoping_site/pro_detail.php?pro_id=<?php echo $row[$product.'_id']; ?>&product=<?php  echo $product?>" style="text-decoration: none;color:black"><?php if($product == "laptop"){echo substr($row['title'],0,20).'...';} else{echo $row['title'];} ?></a></h1>
                    <br><br>
                    <ul style="display:<?php
                            if($product == "phone" or $product == "laptop"){
                                echo "none";
                            }
                        ?>
                    ">
                        <li style="font-size: 17px;"><h3>Size : XXL XL L S </h3></li>
                        <br>
                        <li style="font-size: 17px;"><h3> 100% Cotton</h3></li>
                    </ul>
                    <?php 
                        if($product == "laptop"){
                            echo "<ul>";
                            echo "<li style='font-size: 17px;'><h3>{$row["detail1"]}</h3></li>";
                            echo "<br>";
                            echo "<li style='font-size: 17px;'><h3>{$row["detail2"]}</h3></li>";
                        }
                    ?>
                </div>
                <div class="card_prize">
                    <i class="fas fa-rupee-sign" style=" text-decoration: underline;"><?php echo $row['prize']; ?></i>
                </div>
            </div>
        </div>
    <?php 
            echo "<hr style='margin:20px'>";
        }
    }
    ?>    
        <!-- <hr style="margin:20px">

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
        </div> -->
    </div>
</body>
</html>

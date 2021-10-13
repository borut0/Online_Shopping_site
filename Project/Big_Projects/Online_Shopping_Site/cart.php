<?php
    include "header.php";
    if(!isset($_SESSION["username"])){
        exit("Please Login first");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cart.css"> 
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>Document</title>
</head>
<body>
    <div class="cart_container">
        <table>
            <tr>
                <th>Product</th>
                <th>Detail</th>
                <th>Prize</th>
            </tr>   
            <?php 
                include "config.php";
                if(mysqli_query($con,"create table {$_SESSION['username']}_cart(
                    cart_id int not null,
                    title varchar(100),
                    prize int,
                    product varchar(100),
                    main_img varchar(500),
                    primary key(cart_id)
                )"));
                if(isset($_GET['id']) && $_GET['product'] && $_GET['img'] && $_GET['title'] && $_GET['prize']){
                    $insert = mysqli_query($con,"insert into {$_SESSION['username']}_cart (cart_id,title,prize,product,main_img) values ({$_GET['id']},'{$_GET['title']}',{$_GET['prize']},'{$_GET['product']}','{$_GET['img']}')");
                }  
                elseif(isset($_GET['remove_item'])){
                    mysqli_query($con,"delete from {$_SESSION['username']}_cart where cart_id = {$_GET['remove_item']}");
                } 
                $sql = "select * from {$_SESSION['username']}_cart";
                $result = mysqli_query($con,$sql) or exit("query faild");
                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td>
                    <div class="img_detail">
                        <img src="<?php echo $row['main_img'] ?>" alt="">
                    </div>
                </td>
                <td>
                    <h3><a href="http://localhost/online_shoping_site/pro_detail.php?pro_id=<?php echo $row['cart_id'] ?>&product=<?php echo $row['product'] ?>" style="text-decoration:none;color:black"><?php echo $row['title'] ?></a></h3>
                    <table class="small_table">
                        <tr>
                            <th>Size:</th>
                            <th>
                                <select name="" id="" style="outline: none;border: 3px solid #E9D53F;">
                                    <option value="">Small</option>
                                    <option value="">Large</option>
                                    <option value="">XL</option>
                                    <option value="">XXL</option>
                                </select>
                            </th>
                        </tr>
                        <tr>
                            <th>Quantity :</th>
                            <th>
                                <th class="minus">-</th>
                                <th style="padding-right: 20px;padding-left: 20px; text-decoration: underline;" class="qlty_no">1</th>
                                <th class="plus">+</th>
                                
                            </th>
                        </tr>
                        <tr>
                            <th><a href="http://localhost/online_shoping_site/cart.php?remove_item=<?php echo $row['cart_id'] ?>">remove</a></th>
                            <th><a href="">Buy Now</a></th>
                        </tr>
                    </table>
                </td>
                <td><i class="fas fa-rupee-sign" style="font-size: x-large"><?php echo $row['prize'] ?></i></td>
            </tr> 
            <?php 
                    }
                }
                else{
                    echo "No Record found";
                }
            ?>  
        </table>
    </div>
    <script>
        let minus = document.getElementsByClassName("minus");
        let plus = document.getElementsByClassName("plus");
        let qlty_no = document.getElementsByClassName("qlty_no");

        for(let i=0;i<qlty_no.length;i++){
            qlty_no[i].value = 1;
        }
        for(let i=0;i<plus.length;i++){
            plus[i].addEventListener("click",function(){
                qlty_no[i].innerHTML = ++qlty_no[i].value;
            });
            minus[i].addEventListener("click",function(){
                if(qlty_no[i].value == 1){
                    qlty_no[i].innerHTML = qlty_no[i].value;
                }
                else{
                    qlty_no[i].innerHTML = --qlty_no[i].value; 
                }
            });
        }
    </script>
</body>
</html>

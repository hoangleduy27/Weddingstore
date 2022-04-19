<?php

session_start();
?>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
    body {
        width: 100%;
    }

    .card-deck .card img {
        width: 250px;
        padding: 30px;
    }

    .card-deck {
        width: 400px;
    }

    .card-deck .card .card-footer {
        width: 370px;

    }

    .card-deck .card .card-footer button {
        color: #000;
        background-color: white;
        font-size: 20px
    }

    .xacnhan {
        font-size: 20px;

        border: 1px;
        color: red;
    }

    .img {
        margin-left: 100px;
        width: 30px;


    }
</style>
<header>
    <?php
    include '../header.php ';
    ?>

    

</header>

<body>
    <h3>Danh sách sản phẩm</h3>

    <?php
    $total = 0;
    if (isset($_SESSION['cart']) && ($_SESSION['cart'] != null)) {
        foreach ($_SESSION['cart'] as $list) {
            $total += $list['qty'];
        }
    }
    ?>







    <div>
        <p>
            Đang có <a href="viewcart.php"><button type="" class="xacnhan"> <?php echo $total; ?></button></a> sản phẩm trong giỏ hàng

        </p>
        <a href="viewcart.php"><img class="img" src="./img/giohang.jpg" alt=""> </a>
    </div>
    <!-- <a href="viewcart.php"><img class="anh" src="./img/giohang.jpg" alt=""> </a> -->


    <?php
    require_once 'listproduct.php';


    foreach ($product as $listProduct) {
        echo "<br>
        <div class='card-deck'>
        <div class='card'>

        <img class='card-img-top' src=$listProduct[img] alt=''>

        <div class='card-body'>
        <h5 class='card-title'>" . $listProduct['name'] . "</h5>
            <p class='card-text'> Giá bán: " . number_format($listProduct['price']) . " VNĐ</p>
        </div>
        
        <div class= 'card-footer'>  
            <button class='btn btn-primary'><a  href='insertcart.php?id=" . $listProduct['id'] . "'>Mua ngay</a></button>
        </div>

        </div>
         
        </div>
        ";
    }


    ?>
    <!-- <div class='card-deck'>
        <div class="card">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        
    </div> -->
    <br>
    <div>
        <Marquee Behavior=“scroll” Direction=“Center” Loop=n1 ScrollAmount=n2 ScrollDelay=n3 topmargin="20">
            <B>Chào mừng các bạn đến với love studio </B> </Marqueee>
    </div>
</body>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="/14-10/san pham/hanghoa.css">
  <style>
    .container1 {
      text-align: center;
      padding: 20px 0;
      position: relative;
    }

    .container1 p {
      font-size: 24px;
      background: #fff;
      position: absolute;
      padding: 0 20px;
      color: #0f9ed8;
      margin-top: -20px;
      margin-left: 100px;
    }

    .container1::before {
      display: table-cell;
      content: "";
      border-top: 1px solid #0f9ed8;
      width: 110%;
      position: absolute;
      top: 50%;

    }
  </style>
</head>

<!DOCTYPE html>
<html lang="en">

<head>
    <link type="text/css" href="/14-10/style.css" rel="stylesheet">
   
    <meta charset="UTF-8">
    <meta name="viewport"   content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="/css/font-awesome.min.css" rel="stylesheet">


</head>

<header>
    <div class="container">
        <div class="row">
            <a class="logo" href="#">
                <img class="img" src="./img/Thiết kế không tên.png" alt="">
            </a>

            <nav id="home-nav">
                <ul class="main-menu">
                    <li><a href="/14-10/index.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="/14-10/giohang/index.php">Cart</a></li>
                    <li><a href="/14-10/contact.php">Contact</a></li>

                </ul>
                <div class="menu-trigger">
                    <span class="span-1"></span>
                    <span class="span-2"></span>
                    <span class="span-3"></span>
                </div>

            </nav>
            <div class="search-box">
                <form action="">
                    <input type="text" class="sb-text" placeholder="Search...">
                    <input class="sb-submit" type="submit" name="" id="">
                </form>
            </div>


        </div>
        <div class="menu-container">
            

    </div>

</header>
<!--Thanh tim kiem JS-->
<script>
    $(document).ready(function() {
        $(".menu-trigger").click(function() {
            $(".menu-container").slideToggle()


        });
        //search
        $(".sb-submit").click(function(e) {
            if ($(".sb-text").val().length <= 0) {
                e.preventDefault();

            }

            $(".sb-text").toggleClass("open");
        });


    });
</script>

<body>

  

  <?php
  $conn = mysqli_connect('localhost','root','','danhmuc') or die('Không thể kết nói với database');
          $sql="SELECT * from hanghoa";
          $ketqua=mysqli_query($conn,$sql);
         while($row=mysqli_fetch_assoc($ketqua)){
             $dem=0;
             ?>
  <div class="container" style="margin-top:50px; margin-bottom:30px">
    <div class="container1">
      <p>
        <?php echo $row['tenhang'];?>
      </p>
    </div>
  </div>

  <div class="contaier">
    <div class="row">

      <?php
             $sql1="SELECT * from hanghoa  where iddanhmuc=".$row['iddanhmuc']." ORDER BY daban DESC limit 12 offset 0";
            $ketqua1=mysqli_query($conn,$sql1);
            if(mysqli_num_rows($ketqua1)>0){
            while($row1=mysqli_fetch_assoc($ketqua1)){
              if($row1['hienthi']==0){
                if ($dem%4==0){
                    $dem++;
                    ?>
    </div>
  </div>

  <div class="container" style="    
                        background-color: rgb(223, 217, 217);
                        display:block;
                        border: 5px solid rgb(189, 188, 188);">
    <div class="row">
      <div class="col col1">
        <a href="/14-10/san pham/chitiet.php?id=<?php echo $row1['idhanghoa'];?>">
          <img src="/14-10/QLadmin/images/<?php echo $row1['link'];?>" alt="">
          <h4 class="h4">
            <?php echo $row1['tenhang'];?>
          </h4>
          <h5 style="color:red;">
            <?php echo number_format($row1['dongia'], 0, ',', '.');?> <sup>Đ</sup>
          </h5>
        </a>
      </div>
      <?php
                } else{
                 $dem++;
                ?>
      <div class="col col1">

        <a href="/14-10/san pham/chitiet.php?id=<?php echo $row1['idhanghoa'];?>">
          <img src="/14-10/QLadmin/images/<?php echo $row1['link'];?>" alt="">
          <h4 class="h4">
            <?php echo $row1['tenhang'];?>
          </h4>
          <h5 style="color:red;">
            <?php echo number_format($row1['dongia'], 0, ',', '.');?> <sup>Đ</sup>
          </h5>
        </a>

      </div>
      <?php }
                 }
                }
                } else echo "<div class='container'><center><p>Không có hàng<p></center></div>";
            while($dem %4!=0){
              ?>
      <div class="col"></div>

      <?php
                  $dem++;
               }
                 ?>
    </div>
  </div>
  <?php
            }
       
        ?>
  </div>
  
</body>

</html>
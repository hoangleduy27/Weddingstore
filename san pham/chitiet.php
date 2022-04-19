

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="chitiet.css">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <style>
    .container1::before {
      display: table;
      content: "";
      border-top: 1px solid #0f9ed8;
      width: 100%;
      position: absolute;
      top: 50%;

    }

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
      margin-left: 500px;
    }
  </style>

</head>

<!DOCTYPE html>
<html lang="en">

<head>
    <link type="text/css" href="/14-10/style.css" rel="stylesheet">
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <a class="logo" href="/14-10/index.php">
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
            <div class="container">
                <ul id="menu" class="clearfix">
                    <li>
                        <a href="#">Category</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#"></a>Sub Category
                            </li>
                            <li>
                                <a href="#"></a>Sub Category
                            </li>
                            <li>
                                <a href="#"></a>Sub Category
                            </li>
                            <li>
                                <a href="#"></a>Sub Category
                            </li>
                        </ul>
                    </li>

                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Category</a></li>





                </ul>


            </div>
           

        </div>

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
  <div class="body">
    <?php
    $conn = mysqli_connect("localhost", "root", "", "danhmuc");

   ?>
    <?php if(isset($_POST['muahang'])){
                if(isset($_SESSION['tendangnhap'])){
                if(isset($_POST['soluong'])){  
               $tendangnhap= $_SESSION['tendangnhap'];
               $today = date("Y-m-d");
               $sql="SELECT dongia FROM hanghoa where idhanghoa=".$_GET['id'];
               $ketqua=mysqli_query($conn,$sql);
               $row=mysqli_fetch_assoc($ketqua);
                $tongTien=$_POST['soluong']*$row['dongia'];
               $sql="INSERT INTO hoadon( `tendangnhap`, `ngay`, `tongtien`,xacnhan) VALUES('$tendangnhap','$today','$tongTien',0);";   
               $ketqua=mysqli_query($conn,$sql);
               $row1= mysqli_insert_id($conn);


              //  tru so hang
               $sql="SELECT * FROM hanghoa WHERE idhanghoa=".$_GET['id'];
               $ketqua=mysqli_query($conn,$sql);
               while($row2=mysqli_fetch_assoc($ketqua)){
                $sql="INSERT INTO chitiet( idhoadon, idhanghoa, dongia,soluong) values($row1,$row2[idhanghoa],$row2[dongia],".$_POST['soluong'].")";
                $sqlhh="SELECT  `soluong` FROM `hanghoa` WHERE idhanghoa=".$row2['idhanghoa'];
                $ketqua1=mysqli_query($conn,$sqlhh);
                $rowhh=mysqli_fetch_assoc($ketqua1);
                $soluong=$rowhh['soluong']-$_POST['soluong'];
                $daban=$_POST['soluong'];
                $sql1="UPDATE hanghoa SET soluong=$soluong,daban=$daban WHERE idhanghoa=".$row2['idhanghoa'];
                $ketqua1=mysqli_query($conn,$sql);
                $ketqua1=mysqli_query($conn,$sql1);
              }
              ?>
    <?php
            } else{ $hienthi="Hàng hóa không còn";}
            } 
            }
          if(isset($_GET['sao'])){
            $sql="SELECT danhgia , soluongdanhgia  FROM hanghoa where idhanghoa=".$_GET['id'];
            $ketqua=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($ketqua);
            
            $row['danhgia']=$row['danhgia']*$row['soluongdanhgia']+$_GET['sao'];
            $row["soluongdanhgia"]++;
            $row['danhgia']/=$row['soluongdanhgia'];
            $sao= $row['danhgia'];
            $soluongdanhgia= $row["soluongdanhgia"];
            $sql="UPDATE `hanghoa` SET `danhgia`=$sao,`soluongdanhgia`=$soluongdanhgia WHERE idhanghoa=". $_GET['id'];
            $ketqua=mysqli_query($conn,$sql);
          }
            ?>


    <!--Modal: modalConfirmDelete-->

    <!-- them hang vao gio -->
    <?php 
    $conn = mysqli_connect("localhost", "root", "", "danhmuc");
    $sql = "SELECT * FROM hanghoa WHERE idhanghoa=".$_GET['id'];
    $ketqua = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($ketqua);
    $chitiet=$row['mieuta'];
  
    if(isset($_POST['themhang'])){
      if(isset($_POST['soluong'])){
        if( !isset($_SESSION['giohang'][$_GET['id']])){
          $_SESSION['giohang'][$_GET['id']]=$_POST['soluong'];
      }else{
         $_SESSION['giohang'][$_GET['id']]+=$_POST['soluong'];
      }
     $hienthi="Thêm hàng thành công";

     
    } else{
      $hienthi="Hàng đã hết";
    }  
    ?>
    <div class="modal fade" id="modalConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content text-center">
          <!--Header-->
          <div class="modal-header d-flex justify-content-center">
            <p class="heading">
              <?php echo $hienthi;?>
            </p>
          </div>

          <!--Body-->
          <div class="modal-body">

            <i class="fas fa-times fa-4x animated rotateIn"></i>

          </div>

          <!--Footer-->
          <div class="modal-footer flex-center">
            <a href="" class="btn  btn-outline-danger">Yes</a>

          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
    <script>
      $("#modalConfirmDelete").modal("show");
    </script>

    <?php  
    
    }
    ?>
    <!-- binh luan -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
      $(document).ready(function () {

        $("#guibinhluan").click(function () {

          var url_string = window.location.href;

          var url = new URL(url_string);
          var idsp = url.searchParams.get("id");

          var txt = $("#noidungbinhluan").val();

          $.post("xulybinhluan.php", { noidung: txt, idsach: idsp }, function (result) {
            $("#dsbinhluan").append('<hr>' + txt);
          });

        });
      });
    </script>


    <!--Modal: modalConfirmDelete-->
    <!-- img san pham -->
    <form action="" method="POST">
      <div class="container">
        <div class="row">
          <div class="col colchitiet">
            <img id="view" src="/14-10/QLadmin/images/<?php echo $row['link'];?>" alt="">
            <center>
              <div>
                <?php 
                 $arr=explode("   ", $row['link2']);
                 for($i=0;$i<count($arr)-1;$i++){
                  ?>
                <img class="imgview" onmouseover="bigImg(this)" src="/14-10/QLadmin/images/<?php echo $arr[$i];?>" alt="">
                <?php
                 }
                 ?>

                <script>
                  function bigImg(x) {
                    document.getElementById("view").src = x.getAttribute('src');
                  }  
                </script>

              </div>
            </center>
          </div>
          <div class="col colchitiet">
            <h2>
              <?php echo $row['tenhang'];?>
            </h2>
            <div class="container">
              <div class="row ">
                <div style="margin-left:30px">
                  <?php echo $row['danhgia'];?> <i class="fas fa-star"></i>

                  <p>Đã bán(
                    <?php echo $row['daban'];?>) Đánh giá (
                    <?php echo $row['soluongdanhgia'];?>)
                  </p>
                </div>
              </div>
              <hr>
              <center>
                <p style="color:red; background-color:rgb(235, 225, 225);">
                  <?php $dongia=$row['dongia']; echo number_format($row['dongia'], 0, ',', '.');?><sup>Đ</sup>
                </p>
              </center>
              <hr>





              <div class="row">
              </div>
              <div class="row">
                <div class="col">
                  <h4>Chọn số lượng mua</h4>
                </div>
              </div>
              <?php
            if($row['soluong']>0){
        ?>
              <input type="number" class="form-control form1" name="soluong" min='1' value='1'
                max="<?php echo $row['soluong'];?>">
              <p>Số lượng sản phẩm có sẵn
                <?php echo $row['soluong'];?>
              </p>
              <?php
            }
        ?>
              <br>
              <center>
                <?php
         if(isset($_SESSION['tendangnhap'])){
             ?>
                <input class="btn btn-danger" type="submit" value="Mua hàng" name="muahang">
                <?php
         }
         else{
             ?>
                <input type="button" class="btn btn-primary" data-toggle="modal" data-target="#muahang" value="Mua hàng"
                  style="margin-top:-20px">
                <?php
         }
           ?>
                <input type="submit" class="btn btn-primary" name="themhang" value="Thêm hàng">

                <!-- mua hang -->




                <div class="modal fade" id="muahang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">


                  <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
                    <!--Content-->
                    <div class="modal-content text-center">
                      <!--Header-->
                      <div class="modal-header d-flex justify-content-center">
                        <p class="heading">Đăng nhập để mua hàng</p>
                      </div>

                      <!--Body-->
                      <div class="modal-body">
                        <form action="" action="POST">

                          <div class="modal-footer flex-center">
                            <input type="submit" class="btn  btn-danger waves-effect" value="Yes">
                            <input type="submit" class="btn  btn-danger waves-effect" value="No">
                          </div>
                        </form>



                      </div>

                      <!--Footer-->

                    </div>
                    <!--/.Content-->

                  </div>
                  <!-- Modal Header -->


                  <!-- Modal body -->


                  <!-- Modal footer -->



                </div>





              </center>
            </div>
          </div>
        </div>
      </div>
    </form>



    <!-- san pham cung loai -->
    <div class="container colchitiet">

      <div class="container" style="margin-bottom:50px; ">
        <center>
          <h2 style="margin-top:20px !important; padding-top:20px !important">Sản phẩm cùng loại</h2>
        </center>
        <div class="owl-carousel owl-theme">
          <?php
      $conn=mysqli_connect("localhost","root","","danhmuc");
      $sql="SELECT * FROM `hanghoa` WHERE iddanhmuc=(SELECT iddanhmuc FROM hanghoa where idhanghoa=$_GET[id]) LIMIT 10 OFFSET 0";
      $ketqua=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($ketqua)){
        $iddanhmuc=$row['iddanhmuc'];
?>

          <div class="item">

            <div class="row1 col1">

              <a href="chitiet.php?id=<?php echo $row['idhanghoa'];?>" class="text-decoration-none">
                <div>

                  <img src="/14-10/QLadmin/images/<?php echo $row['link'];?>" height="170px" width="208px" class="mx-auto d-block"
                    alt="">
                  <p class="text-center" style="     white-space: nowrap;
                        text-overflow: ellipsis;
                        overflow: hidden;
                        width: 100%;
                        border: 1px solid rgb(255, 255, 255);">
                    <?php echo $row['tenhang']?>
                  </p>


                </div>
              </a>
            </div>
          </div>
          <?php
    }
    ?>


        </div>
      </div>
    </div>

    <!-- mo ta chi tiet -->

    <div class="container">

    </div>


    <div class="container ">

      <div class="row">

        <div class="col colchitiet">
          <div class="container1">
            <p>Chi tiết sản phẩm</p>
          </div>

          <br>
         
         
          <h4>Mô tả sản phẩm</h4><br>
          Mô tả chi tiết: <p class="text-justify">
            <?php echo $chitiet;?>
          </p>

          <a href="?id=<?php echo $_GET['id'];?>&&sao=5" class="btn">5<i class="fas fa-star"></i></a>
          <a href="?id=<?php echo $_GET['id'];?>&&sao=4" class="btn">4<i class="fas fa-star"></i></a>
          <a href="?id=<?php echo $_GET['id'];?>&&sao=3" class="btn">3<i class="fas fa-star"></i></a>
          <a href="?id=<?php echo $_GET['id'];?>&&sao=2" class="btn">2<i class="fas fa-star"></i></a>
          <a href="?id=<?php echo $_GET['id'];?>&&sao=1" class="btn">1<i class="fas fa-star"></i></a>
        </div>

      </div>

    </div>


    


  


 
</body>

</html>
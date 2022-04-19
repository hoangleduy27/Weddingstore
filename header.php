<!DOCTYPE html>
<html lang="en">

<head>
    <link type="text/css" href="../style.css" rel="stylesheet">
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<header>
    <div class="container">
        <div class="row">
            <a class="logo" href="#">
                <img class="img" src="./img/Thiết kế không tên.png" alt="">
            </a>

            <nav id="home-nav">
                <ul class="main-menu">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="./giohang/index.php">Cart</a></li>
                    <li><a href="./send-mail-php/index.php">Contact</a></li>

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
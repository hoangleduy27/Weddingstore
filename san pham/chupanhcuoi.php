<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


    <title></title>

    <link rel="stylesheet" href="./sanpham.css">
    <link rel="stylesheet" href="/style.css">
</head>


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


<body style="max-width: 100%">
    <header>
        <div class="container">
            <div class="row">
                <a class="logo" href="#">
                    <img class="img" src="/img/Thi%E1%BA%BFt%20k%E1%BA%BF%20kh%C3%B4ng%20t%C3%AAn.png" alt="">
                </a>

                <nav id="home-nav">
                    <ul class="main-menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Location</a></li>
                        <li><a href="#">Contact</a></li>

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


        </div>
        <link type="text/css" href="style.css" rel="stylesheet">




    </header>

    <section class="row-1">
        <article class="col-9">
            <div class="card float-left m-4" style="width: 15rem; ">
                <div class="card-header">
                    so 1
                </div>
                <div class="card-body" style="width: 10px">
                    <img src="/img/anhcuoi.jpg" alt="">
                </div>
                <div class="card-footer">
                    $200
                </div>
            </div>
            <div class="card float-left m-4" style="width: 15rem; ">
                <div class="card-header">
                    so 1
                </div>
                <div class="card-body" style="width: 10px">
                    <img src="/img/anhcuoi.jpg" alt="">
                </div>
                <div class="card-footer">
                    $200
                </div>
            </div>
            <div class="card float-left m-4" style="width: 15rem; ">
                <div class="card-header">
                    so 1
                </div>
                <div class="card-body" style="width: 10px">
                    <img src="/img/anhcuoi.jpg" alt="">
                </div>
                <div class="card-footer">
                    $200
                </div>
            </div>
            <div class="card float-left m-4" style="width: 15rem; ">
                <div class="card-header">
                    so 1
                </div>
                <div class="card-body" style="width: 10px">
                    <img src="/img/anhcuoi.jpg" alt="">
                </div>
                <div class="card-footer">
                    $200
                </div>
            </div>
            <div class="card float-left m-4" style="width: 15rem; ">
                <div class="card-header">
                    so 1
                </div>
                <div class="card-body" style="width: 10px">
                    <img src="/img/anhcuoi.jpg" alt="">
                </div>
                <div class="card-footer">
                    $200
                </div>
            </div>
            <div class="card float-left m-4" style="width: 15rem; ">
                <div class="card-header">
                    so 1
                </div>
                <div class="card-body" style="width: 10px">
                    <img src="/img/anhcuoi.jpg" alt="">
                </div>
                <div class="card-footer">
                    $200
                </div>
            </div>
            <div class="card float-left m-4" style="width: 15rem; ">
                <div class="card-header">
                    so 1
                </div>
                <div class="card-body" style="width: 10px">
                    <img src="/img/anhcuoi.jpg" alt="">
                </div>
                <div class="card-footer">
                    $200
                </div>
            </div>
            <div class="card float-left m-4" style="width: 15rem; ">
                <div class="card-header">
                    so 1
                </div>
                <div class="card-body" style="width: 10px">
                    <img src="/img/anhcuoi.jpg" alt="">
                </div>
                <div class="card-footer">
                    $200
                </div>
            </div>
        </article>
    </section>
</body>

</html>
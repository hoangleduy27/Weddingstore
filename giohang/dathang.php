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

    <link href="/css/font-awesome.min.css" rel="stylesheet">


</head>
<?php
@include('header.php')
?>
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
<style>
    .dathang {
        margin-left: 100px;
        list-style: none;

    }

    .dathang input {
        border-radius: 3px;
    }

    .dathang textarea {
        width: 250px;
        height: 80px;
    }

    .one {
        margin-left: 300px;
        border-radius: 5px;
        width: 90px;

    }

    .one:hover {
        color: red;
        font-weight: bold;
    }
</style>

<body>
    <br>
    <div class="dathang">
        <h1>THÔNG TIN CÁ NHÂN</h1>
        <br>
        <section>
            <div>
              
                    <h7>Tên khách hàng:</h7>

                    <li><input id="name" type="text" placeholder="Type..."></li>

               

               
                    <h7>Email:</h7>
                    <li><input id="email" type="email" placeholder="Type..."></li>

               
             
                    <h7>Số điện thoại:</h7>

                    <li><input id="SDT" type="text" placeholder="Type..."></li>

            

                    <h7>Địa chỉ:</h7>
                    <li><input id="diachi" type="text" placeholder="Type..."></li>

                
                    <h7>Số CMND:</h7>

                    <li><input id="cmnd" type="text" placeholder="Type..."></li>


                    <h7>Mô tả:</h7>
                    <li> <textarea type="text" placeholder="Type..."></textarea></li>

            </div>
        </section>

    </div>
    <br>
    <input onclick="send()" class="one" type="Submit" value="Xác nhận">

</body>
<script>
    function send() {
        var arr = document.getElementsByTagName('input');
        var name = arr[0].value;
        var email = arr[1].value;
        var SDT = arr[2].value;
        var diachi = arr[3].value;
        var cmnd = arr[4].value;
        if (name == "" || email == "" || SDT == "" || diachi == "" || cmnd == "") {


            if (confirm("Thành công") == true) {
                document.getElementById("demo").innerHTML = < a href = "./index.php" > < /a>
            } else {
                document.getElementById("demo").innerHTML = "Bạn không muốn tiếp tục"
            }

        }




    }
</script>
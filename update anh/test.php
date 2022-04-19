<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
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
            <a class="logo" href="#">
                <img class="img" src="./img/Thiết kế không tên.png" alt="">
            </a>

            <nav id="home-nav">
                <ul class="main-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="./giohang/index.php">Cart</a></li>
                    <li><a href="./binhluan/comment.php">Contact</a></li>

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
            <link type="text/css" href="style1.css" rel="stylesheet">

        </div>

    </div>

</header>



<!--   next-part gioi thieu-->


<div id="gioi-thieu" class="section-padding">

    <div class="box">
        <div class="imgBx">

            <img src="./img/anhcuoi.jpg" alt="">

        </div>
        <div class="content">
            <h2>SSS <br> <a href="/san pham/chupanhcuoi.html">Mẫu ảnh cưới</a></h2>
        </div>
    </div>

    <div class="box">
        <div class="imgBx">

            <img src="./img/anhkiyeu.jpg" alt="">
        </div>
        <div class="content">
            <h2>SSS <br> <a href="./san pham/chupanhcuoi.html">Mẫu ảnh kỉ yếu</a></h2>

        </div>
    </div>

    <div class="box">
        <div class="imgBx">
            <img src="./img/thoanh.jpg" alt="">
        </div>
        <div class="content">
            <h2>SSS <br> <span>Các thợ chụp ảnh</span></h2>
        </div>
    </div>
    <div class="box">
        <div class="imgBx">

            <img src="./img/anhcuoi.jpg" alt="">

        </div>
        <div class="content">
            <h2>SSS <br> <a href="/san pham/chupanhcuoi.html">Mẫu ảnh cưới</a></h2>
        </div>
    </div>
    <div class="box">
        <div class="imgBx">

            <img src="./img/anhkiyeu.jpg" alt="">
        </div>
        <div class="content">
            <h2>SSS <br> <a href="./san pham/chupanhcuoi.html">Mẫu ảnh kỉ yếu</a></h2>

        </div>
    </div>




</div>



<!--    Footer     -->

<section id="contact" class="add-padding border-top-color2">

    <div class="container text-center">

        <div class="row">

            <div class="col-sm-6 col-md-5 text-right scrollimation fade-up d1">

                <h1 class="big-text">Contact Me</h1>

                <p class="lead">Chào mừng bạn đã đến với chúng tối.<br>Love studio hân hạnh đồng hành cùng bạn.</p>

                <p>Love studio đem lại những trải nghiệm tuyệt với để lưu trữ những kỉ niệm đẹp nhất của bạn

                    <p>Please feel free to contact me with questions, comments or collaborations.</p>

                    <p>For more information, <a href="http://korenlc.com" target="_blank">visit my blog.</a></p>

            </div>

            <!--=== Contact Form ===-->

            <form id="contact-form" class="col-sm-6 col-md-offset-1 scrollimation fade-left d3" action="contact.php" method="post" novalidate>

                <div class="form-group">
                    <label class="control-label" for="contact-name">Name</label>
                    <div class="controls">
                        <input id="contact-name" name="contactName" placeholder="Your name" class="form-control requiredField" data-new-placeholder="Your name" type="text" data-error-empty="Please enter your name">
                        <i class="fa fa-user"></i>
                    </div>
                </div>
                <!-- End name input -->

                <div class="form-group">
                    <label class="control-label" for="contact-mail">Email</label>
                    <div class=" controls">
                        <input id="contact-mail" name="email" placeholder="Your email" class="form-control requiredField" data-new-placeholder="Your email" type="email" data-error-empty="Please enter your email" data-error-invalid="Invalid email address">
                        <i class="fa fa-envelope"></i>
                    </div>
                </div>
                <!-- End email input -->

                <div class="form-group">
                    <label class="control-label" for="contact-message">Message</label>
                    <div class="controls">
                        <textarea id="contact-message" name="comments" placeholder="Your message" class="form-control requiredField" data-new-placeholder="Your message" rows="6" data-error-empty="Please enter your message"></textarea>
                        <i class="fa fa-comment"></i>
                    </div>
                </div>
                <!-- End textarea -->

                <p><button name="submit" type="submit" class="btn btn-color2 btn-block" data-error-message="Error!" data-sending-message="Sending..." data-ok-message="Message Sent"><i class="fa fa-paper-plane"></i>Send Message</button></p>
                <input type="hidden" name="submitted" id="submitted" value="true" />

            </form>
            <!-- End contact-form -->

        </div>

    </div>

</section>

<!-- FOOTER -->

<footer id="main-footer" class="add-padding border-top-color2">

    <div class="container">

        <p><a href="http://korenlc.com" target="_blank">VISIT MY BLOG</a></p><br>



        <p class="text-center">&copy; 2020 - Love Studio</p>

    </div>

</footer>

<script>
    $(document).ready(function() {

                //contact.js//

                $(document).ready(function() {
                    $('#contact-form').submit(function() {

                        var buttonCopy = $('#contact-form button').html(),
                            errorMessage = $('#contact-form button').data('error-message'),
                            sendingMessage = $('#contact-form button').data('sending-message'),
                            okMessage = $('#contact-form button').data('ok-message'),
                            hasError = false;

                        $('#contact-form .error-message').remove();

                        $('.requiredField').each(function() {
                            if ($.trim($(this).val()) == '') {
                                var errorText = $(this).data('error-empty');
                                $(this).parent().append('<span class="error-message" style="display:none;">' + errorText + '.</span>').find('.error-message').fadeIn('fast');
                                $(this).addClass('inputError');
                                hasError = true;
                            } else if ($(this).is("input[type='email']") || $(this).attr('name') === 'email') {
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                                if (!emailReg.test($.trim($(this).val()))) {
                                    var invalidEmail = $(this).data('error-invalid');
                                    $(this).parent().append('<span class="error-message" style="display:none;">' + invalidEmail + '.</span>').find('.error-message').fadeIn('fast');
                                    $(this).addClass('inputError');
                                    hasError = true;
                                }
                            }
                        });

                        if (hasError) {
                            $('#contact-form button').html('<i class="fa fa-times"></i>' + errorMessage);
                            setTimeout(function() {
                                $('#contact-form button').html(buttonCopy);
                            }, 2000);
                        } else {
                            $('#contact-form button').html('<i class="fa fa-spinner fa-spin"></i>' + sendingMessage);

                            var formInput = $(this).serialize();
                            $.post($(this).attr('action'), formInput, function(data) {
                                $('#contact-form button').html('<i class="fa fa-check"></i>' + okMessage);

                                $('#contact-form')[0].reset();

                                setTimeout(function() {
                                    $('#contact-form button').html(buttonCopy);
                                }, 2000);

                            });
                        }

                        return false;
                    });
                });
</script>



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

</html>
<div>
    <Marquee Behavior=“scroll” Direction=“Center” Loop=n1 ScrollAmount=n2 ScrollDelay=n3 topmargin="20">
        <B>Chào mừng các bạn đến với love studio </B> </Marqueee>
</div>
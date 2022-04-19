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


</head>
<?php
@include('header.php')
?>
<section id="hero-image">
    <div class="hero-content text-center">
        <h1>LOVE STUDIO</h1>
        <p>loving happy</p>
        <p>Đem lại trải nghiệm tốt nhất cho khách hàng</p>

    </div>



    <!--        BUTTON   animation  -->
    <div class="test">
        <a href="#" class="btn-ls">See more</a>


        <script type="text/javascript">
            const buttons = document.querySelectorAll('a');
            buttons.forEach(btn => {
                btn.addEventListener('click', function(e) {
                    let x = e.clientX - e.target.offsetLeft;
                    let y = e.clientY - e.target.offsetTop;
                    let ripples = document.createElement('span');
                    ripples.style.left = x + 'px';
                    ripples.style.top = y + 'px';
                    this.appendChild(ripples);

                    setTimeout(() => {
                        ripples.remove()

                    }, 1000);
                })
            })
        </script>
    </div>

</section>

<!--   next-part gioi thieu-->


<div id="gioi-thieu" class="section-padding">

    <div class="box">
        <div class="imgBx">

            <a href="/14-10/san pham/hanghoa1.php"> <img src="./img/anhcuoi.jpg" alt=""></a>

        </div>
        <div class="content">
            <h2> <br> <a href="/14-10/san pham/hanghoa1.php">Mẫu ảnh cưới</a></h2>
        </div>
    </div>

    <div class="box">
        <div class="imgBx">
            <a href="/14-10/thicnw/signIn.php"><img src="./img/thoanh.jpg" alt=""></a>
        </div>
        <div class="content">
            <h2> <br> <span><a href="/14-10/thicnw/signIn.php">Liên hệ thợ chụp ảnh</a></span></h2>
        </div>
    </div>
    <div class="box">
        <div class="imgBx">
            <a href="/14-10/QLadmin/signIn.php"><img src="./img/thoanh.jpg" alt=""></a>
        </div>
        <div class="content">
            <h2> <br> <span><a href="/14-10/QLadmin/signIn.php">Admin</a></span></h2>
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
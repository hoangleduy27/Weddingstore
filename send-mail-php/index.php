<?php



session_start();
if (empty($_SESSION["mail_success"])) $_SESSION["mail_success"] = false;
if (empty($_SESSION["mail_error"])) $_SESSION["mail_error"] = false;

$success = $_SESSION["mail_success"];
$error = $_SESSION["mail_error"];

?>

<!DOCTYPE html>
<html lang="en">


<head>
  <title>Send Mail</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">

  <link rel="stylesheet" href="css/dist/contact.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
  <?php
  // @include('../header.php');

  ?>

  <section class="section-contact">
    <div class="container">
      <div class="contact-form">
        <h2>Contact us</h2>
        <form class="form-box" method="POST" action="email.php">
          <div class="input-box w50">
            <input type="text" name="name" required>
            <span>Name</span>
          </div>
          <div class="input-box w50">
            <input type="text" name="email" required>
            <span>E-mail</span>
          </div>
          <div class="input-box w100">
            <textarea name="message" required></textarea>
            <span>Write your message here...</span>
          </div>
          <div class="input-box w100 message">
            <?php include 'contact-message.php'; ?>
            <input class="button" type="submit" type="reset" value="Send message">
          </div>

      </div>
    </div>

  </section>
  <div class="row">

    <div class="col-sm-6 col-md-5 text-right scrollimation fade-up d1">

      <h1 class="big-text">Contact Me</h1>
      <br>

      <p class="lead">Chào mừng bạn đã đến với chúng tối.<br>Love studio hân hạnh đồng hành cùng bạn.</p>

      <p>Love studio đem lại những trải nghiệm tuyệt với để lưu trữ những kỉ niệm đẹp nhất của bạn

      <p>Please feel free to contact me with questions, comments or collaborations.</p>

      <p>For more information, <a href="http://localhost/14-10/">visit my blog.</a></p>

    </div>
  </div>
</body>

</html>
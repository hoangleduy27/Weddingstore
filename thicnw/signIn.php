<?php 
    
    // $user_email = $password = '';
    // $errors = array('user_email' => '' , 'password1' => '' );


    // if (isset($_POST['submit'])) {
        
    //     if (empty($_POST['user_email'])) {
    //         $errors['user_email'] = "Bạn chưa nhập tài khoản ";
    //     }

    //     if (empty($_POST['password1'])) {
    //         $errors['password1'] = "Bạn chưa nhập mật khẩu ";
        
    //     }else {
    //         include('login.php');
    //      }
    // }


 ?>


<html>

<head>
       <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Đăng nhập</title>
        <link rel="stylesheet" href="css/sign in.css">

        <style type="text/css">
            .loginbox input[type="email"] {
                border: none;
                border-bottom: 1px solid #fff;
                background: transparent;
                outline: none;
                height: 40px;
                color: #fff;
                font-size: 16px;
            }
        </style>
        <?php
        $user_email = $password = '';

        if (isset($_POST['submit'])) {



            if (empty($_POST['user_email'])) {
                $_SESSION['user_email'] = "Bạn chưa nhập tài khoản ";
            }

            if (empty($_POST['pass'])) {
                $_SESSION['pass'] = "Bạn chưa nhập mật khẩu ";
            }
         
            else {
                include("login.php");
            }
        }
        ?>
</head>

<style type="text/css">
    .loginbox input[type="email"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
</style>

<body style="background-image: url(images/login_bg.jpg); ">
    <div class="loginbox" style="height: 500px">
        <img src="images/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form method="post">
            <p>E-mail</p>
            <input type="email" name="user_email" placeholder="Enter E-mail" value="<?php echo htmlspecialchars($user_email) ?>">
            <div style="color: #FF3030"><?php if (!empty($_SESSION['user_email'])) {
                                            echo $_SESSION['user_email'];
                                        }; ?></div><br>
            <p>Password</p>
            <input type="password" name="pass" placeholder="Enter password" value="<?php htmlspecialchars($password) ?>">
            <div style="color: #FF3030 ">
            <?php if (!empty($_SESSION['pass'])) {
                                                echo $_SESSION['pass']; };?>
                                                
                                            </div><br>
            <input type="submit" name="submit" value="Login">
            <a href="forgotPassword.php">Lost your password?</a><br>
            <a href="signOut.php">Chưa có tài khoản?</a>
            <br>
            <a href="/14-10/index.php">Quay lại</a>
        </form>

    </div>
</body>


</html>

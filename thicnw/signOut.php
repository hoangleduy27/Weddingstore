<?php 
include("register.php");
    $username = $password1 = $email = $password2 = '';
    $errors = array('username' => '' , 'password2' => '', 'email' => '', 'password1' => '' );

    if (isset($_POST['submit'])) {
        
        if (empty($_POST['username'])) {
            $errors['username'] = "Bạn chưa nhập tài khoản ";
        }

        if (empty($_POST['password1'])) {
            $errors['password1'] = "Bạn chưa nhập mật khẩu ";
         }

         if (empty($_POST['email'])) {
             $errors['email'] = "Bạn chưa nhập Email ";
         } else {
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Email không hợp lệ";
            }
        
         if (empty($_POST['password2'])) {
             $errors['password2'] = "Bạn chưa nhập số điện thoại";
         } 
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="css/sign out.css">

<body>
    <div class="loginbox">
        <h1>Register</h1>
        <form method="post">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" value="<?php echo htmlspecialchars($username) ?>">
            <div style="color: #FF3030"><?php echo $errors['username']; ?></div>
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email" value="<?php echo htmlspecialchars($email) ?>">
            <div style="color: #FF3030"><?php echo $errors['email']; ?></div>
            <p>Password</p>
            <input type="password" name="password1" placeholder="Enter password">
            <div style="color: #FF3030"><?php echo $errors['password1']; ?></div>
            <p>Rewrite Password</p>                 
            <input type="password" name="password2" placeholder="Enter password">
            <div style="color: #FF3030"><?php echo $errors['password2']; ?></div><br>
            <input type="submit" name="submit" value="Đăng Ký">
            <a href="signIn.php">Có tài khoản đăng nhập rồi.</a><br>
        </form>

    </div>
</body>
</head>

</html>
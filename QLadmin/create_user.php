<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tao tai khoang</title>
    <style>
    
        .box-content{
            margin: 0 auto;
            width: 800px;
            border:1px solid #ccc;
            text-align: center;
            padding: 20px;
            
        }
        #create_user form{
            width: 200px;
            margin: 40px auto;
        }
        #create_user form input{
            margin: 5px 0;
            height: 20px;
            border-radius: 5px;
        }
        
    </style>
</head>
<body>
   <?php


$error = false;
   if (isset($_POST["submit"])) {
       include 'connect.php';
       // them ban ghi vao co so du lieu
       $username=$_POST['username'];
       $sql="SELECT * FROM `user` WHERE username='$username'";
       $result = mysqli_query($con, $sql);
       if (mysqli_num_rows($result)>0) {
           $error = "tai khoan da ton tai. ban vui long chon tai khoan khac"; ?>
    <div id="error-notify" class="box-content">
        <h1>thong bao</h1>
        <h4><?= $error ?></h4>
        <a href="create_user.php">Tao tai khoan khac</a>
    </div>
   <?php
       } else {
           $pass=md5($_POST['password']);
           $created=date('Y-m-d', time());
           $last=date(' d-m-Y H:i', time());
    
           $sql="INSERT INTO `user`( `username`, `password`, `status`, `created_time`, `last_updated`) VALUES ( '$username','$pass',1,'$created','$last')";
           $result = mysqli_query($con, $sql);
            ?>
    <div id="success-notify" class="box-content">
        <h1>Chuc mung</h1>
        <h4>Ban da tao thanh cong tai khoan <?=$_POST['username'] ?> </h4>
        <a href="index.php">Danh sach tai khoan</a>
    </div>
    <?php
       }
   }
?>
   



   
   
   
   <div id="create_user" class="box-content">
       <h1>Tao tai khoang</h1>
       <form action="" method="POST">
    <label for="">Username</label><br>
           <input type="text" name="username" value="" required>
           <br>
    <label for="">Password</label><br>
           <input type="password" name="password" value="" required>
           <br><br>
           <input type="submit" value="Create" name="submit">
       </form>

   </div>
   
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xoa tai khoan</title>
</head>
<body>
<?php
    $error = false;
    if (isset($_GET['id'])) {
        include 'connect.php';
            $result = mysqli_query($con, "DELETE  FROM `user` WHERE `id` = ".$_GET['id']);
            if (!$result) {
                $error = " khong the xoa tai khoan";
            }
            mysqli_close($con);
            if ($error !== false) {
                ?>
           <div id="error-notify" class="box-content">
               <h1>thong bao</h1>
               <h4><?= $error ?></h4>
               <a href="index.php">Danh sach tai khoan</a>
           </div>
           <?php
            } else {?>
     
    <div id="success-notify" class="box-content" >
        <h1>Xoa tai khoan thanh cong</h1>
        <a href="index.php"> Danh sach tai khoan</a>
    </div>
    <?php
    } ?>
    <?php
    } ?>
    
</body>
</html>
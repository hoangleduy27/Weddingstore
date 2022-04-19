<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>doi thong tin ca nhan</title>
</head>
<body>
    <?php
    include 'connect.php';
    $error="";
    if (isset($_GET['action']) && $_GET['action'] == 'edit'){
        if (isset($_POST['user_id']) && !empty($_POST['user_id']) && isset($_POST['password']) && !empty($_POST['password'])) {
            $result = mysqli_query($con, "UPDATE `user` SET `password`= MD5('" . $_POST['password'] . "'), `status` = ".$_POST['status'].",`last_updated`=".time()  ." WHERE `user`.`id` = ".$_POST['user_id'].";");
            if (!$result) {
                $error = " khong the cap nhat tai khoan";
            }
            mysqli_close($con);
            if ($error !="") {
                ?>
           <div id="error-notify" class="box-content">
               <h1>thong bao</h1>
               <h4><?= $error ?></h4>
               <a href="index.php">Danh sach tai khoan</a>
           </div>
           <?php
            } else {?>
        <?php } ?>
    <div id="edit-content" class="box-content" >
        <h1><?= ($error != false) ? $error: "Sua tai khoan thanh cong" ?></h1>
        <a href="index.php"> Danh sach tai khoan</a>
    </div>

<?php  }else{ ?>
    <div id="edit-notify" class="box-content">
    <h1>Vui long nhap du thong tin de sua tai khoan</h1> 
    <a href="edit_user.php?id=<?=$_POST['user_id']?>">Quay lai sua tai khoan</a>
    
    </div>
    <?php } 
}else{
        $result = mysqli_query($con, "SELECT * FROM `user` WHERE `id`=". $_GET['id']);
        $user = $result -> fetch_assoc();
        mysqli_close($con);
        if (!empty($user)) {
            ?>
        <div id="edit_user" class="box-cont">
            <h1>Sua tai khoan "<?= $user['username']?>"</h1>
            <form action="edit_user.php?action=edit" method="POST">
                <label>Password</label><br>
                <input type="hidden" name="user_id" value="<?= $user['id']?>">
                <input type="password" name="password" value="">
                <select name="status">

                    <option <?php if (!empty($user['status'])) { ?> selected <?php } ?> value="1">kich hoat</option>
                    <option <?php if (!empty($user['status'])) { ?> selected <?php } ?> value="0">Block</option>

                </select>
                <br><br>
                <input type="submit" value="Edit">
            </form>
        </div>
        <?php
        }
    } ?> 
</body>
</html>
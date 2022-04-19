<?php
session_start();

if ($_SESSION['quyenhan'] != 'admin') {
    header("location: signIn.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEB PRO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <?php
    if ($_SESSION["quyenhan"]) {
    ?><div class="logout">
            Welcome <?php echo $_SESSION["quyenhan"]; ?>  | Click here to <a href="logout.php" tite="Logout">Logout.
        </div>

    <?php
    } else echo "<h1>Please login first .</h1>";
    ?>

    </div>
    <?php
    include 'connect.php';
    $result = mysqli_query($con, "SELECT * FROM user");
    mysqli_close($con);


    ?>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }

        #user-info {
            font-size: 18px;
            border: 1px solid #ccc;
            width: 100%;
            margin: 0 auto;
            padding: 25px;
        }

        #user-info table {
            margin: 10px auto 0 auto;
            text-align: center;

        }

        #user-info h1 {
            text-align: center;
            text-decoration: none;
        }

        .logout {
            font-size: 22px;
        }

        .logout a {
            font-size: 24px;

            color: green;
            text-decoration: bold;
        }

        .logout a:hover {
            color: red;
            text-decoration: underline;
        }
    </style>
    
    <div id="user-info">
        <h1>Danh sách tài khoảng</h1>

        <a href="create_user.php">Tạo tài khoảng mới</a>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Tên tài khoảng</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Cập nhật lần cuối</th>
                    <th scope="col">Ngày lập</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xoá</th>
                </tr>
            </thead>
    </div>
            <?php
            while ($row = mysqli_fetch_array($result)) {


            ?>
                <tr>
                    <th><?= $row['username'] ?></th>
                    <th><?= $row['status'] == 1 ? "kich hoat" : "Block" ?></th>
                    <th><?= $row['last_updated'] ?></th>
                    <th><?= $row['created_time'] ?></th>
                    <th><a href="edit_user.php?id=<?= $row['id'] ?>">Sửa</a></th>
                    <th><a href="delete_user.php?id=<?= $row['id'] ?>">Xoá</a></th>
                </tr>
            <?php } ?>

        </table>
        <br>
        <a href="/14-10/admin/empty.html"><input type="submit" value="Quay lại"></a>

</body>

</html>
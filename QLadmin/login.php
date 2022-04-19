<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'demo_db') or die('Không thể kết nói với database');
$username = mysqli_real_escape_string($db, $_POST['username']);
$pass = mysqli_real_escape_string($db, $_POST['password']);

	// $username = trim($_POST['username']);
	// $pass = trim($_POST['password']);



	$usql = "SELECT * FROM user WHERE username = '$username' and password = '$pass' ";
	$uresult = mysqli_query($db, $usql) or die("database error:" . mysqli_error($db));
	$urow = mysqli_fetch_assoc($uresult);
	
	if(!$urow){
		$_SESSION['password'] = "Error - Bạn nhập sai mật khẩu ";
		
	}elseif('admin' ==  $urow['quyenhan']) {
    $_SESSION['quyenhan']='admin';
	header('Location: index.php');
	}
	
	




?>


<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'demo_db') or die('Không thể kết nói với database');
unset($_SESSION["quyenhan"]);
header("Location:signIn.php");
?>
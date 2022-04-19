<?php
	session_start();

$db = mysqli_connect('localhost','root','','thicnw') or die('Không thể kết nói với database'); 

	if(isset($_COOKIE['userid']))
	   {
	   	            $passwords=$_COOKIE['userid'];
					$user_email=$_COOKIE['useremail'];
	   	    setcookie("userid",$passwords,time()-(60*60*24*7));
			setcookie("useremail",$user_email,time()-(60*60*24*7));
			$queryz = "UPDATE user Set Online='Offline' WHERE password1='$passwords' ";

	if (isset($_SESSION['userid'])) {
		unset($_SESSION['userid']); // xóa session login
	}        $db->query($queryz) or die('Errorr, query failed');	
							
		    header("Location: signIn.php");
	   }
	
	
	else{ header("Location: signIn.php");}
?>

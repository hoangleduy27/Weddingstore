<?php
	session_start();
	$db = mysqli_connect('localhost','root','','thicnw') or die('Không thể kết nói với database');

if(isset($_POST['submit'])) {
	$user_email = trim($_POST['user_email']);
	$user_password = trim($_POST['pass']);
	
	
	$usql = "SELECT * FROM user WHERE email ='$user_email' and password1='$user_password' ";
	
	$uresult = mysqli_query($db, $usql) or die("database error:". mysqli_error($db));
	$urow = mysqli_fetch_assoc($uresult);
	if(!$urow){
	
		$_SESSION['pass'] = "Error - Bạn nhập sai mật khẩu ";

	}else{				
		
		
	 setcookie("userid",$user_password,time()+(60*60*24*7));
	 setcookie("useremail",$user_email,time()+(60*60*24*7));
	  
	  $time=time();
	  $queryz = "UPDATE user Set Online='Online' WHERE password1='$user_password' ";                        
      $db->query($queryz) or die('Errorr, query failed to upload');	
 
			
		header('Location: user.php');

	}
		
}

?>
<?php 
session_start();
$db = mysqli_connect('localhost','root','','thicnw') or die('Không thể kết nói với database');

if(isset($_COOKIE['userid'])&&$_COOKIE['useremail']){
$adminid = $_COOKIE['userid'];
$adminemail = $_COOKIE['useremail'];

$sqluser ="SELECT * FROM user WHERE password1='$adminid' && email='$adminemail'";

$retrieved = mysqli_query($db,$sqluser);
    while($found = mysqli_fetch_array($retrieved))
	     {
              $username = $found['username'];
              $id= $found['id'];
		 }	   
 }

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Trang Chat</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<link href="css/style.css" rel='stylesheet' type='text/css' />

<link href="css/font-awesome.css" rel="stylesheet"> 

<link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>



<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">

 <script src="script/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="script/sweetalert.css">
   <link rel="stylesheet" href="dist/css/lightbox.min.css"></head>
		  <script src="dist/js/lightbox-plus-jquery.min.js"></script>

<style>
#chartdiv {
  width: 100%;
  height: 295px;
}
</style>

<script type="text/javascript">
$(function() {


  $('#btnSave').click(function() {
    
    var myReply = document.getElementById("txt").value;
    var value =document.getElementById("vid").value;
        $.ajax ({
                 type :'POST',
                  url: "register.php",
                 data: {postid:value,replied:myReply},
               success: function(result) {               
                                            $("#errors1").html(result);
                                          }
               });
      $("#txt").val("");
      
                 });
                  
  });
  


  $(document).ready(function(){
    
    var optionValue='chart';
     $.ajax({
          type :'POST',
                  url: "register.php",
                 data: {loadid:optionValue},
               success: function(result) {               
                                            $("#errors1").html(result);
                                          }
                });  
         });
         
         
         $(document).ready(function(){
    
    var optionValue='group';
     $.ajax({
          type :'POST',
                  url: "register.php",
                 data: {loadgroup:optionValue},
               success: function(result) {               
                                            $("#groupshow").html(result);
                                          }
                });  
         }); 
         
</script>

<script type="text/javascript"> 
            $(document).on("click", ".open-Delete", function () {
                                  var myValue = $(this).data('id');
                                        swal({
                                         title: "Are you sure?",
                                         text: "You want to delete this group",
                                         type: "warning",
                                         showCancelButton: true,
                                        cancelButtonColor: "red",
                                        confirmButtonColor: "green",
                                        confirmButtonText: "Yes, remove!",
                                         cancelButtonText: "No, cancel!",
                                        closeOnConfirm: false,
                                        closeOnCancel: false,
                                          buttonsStyling: false
                                        },
                     function(isConfirm){
                                      if (isConfirm) {                                        
                                                    var vals=myValue;
                                               $.ajax ({
                                                      type : 'POST',
                                                      url: "register.php",
                                                      data: { Valuedel: vals},
                                                      success: function(result) {
                                                      if(result=="ok"){
                                                                    swal({title: "Deleted!", text: "Group has been deleted.", type: "success"},
                                                          function(){ 
                                                                          var optionValue='group';
                                                                     $.ajax({
                                                                            type :'POST',
                                                                                    url: "register.php",
                                                                                   data: {loadgroup:optionValue},
                                                                                success: function(result) {               
                                                                                                            $("#groupshow").html(result);
                                                                                                          }
                                                                                }); 
                                                                    }
                                                                      );                                                        
                                                                 }

                                                       }
                                                  }); } else {
                                                             swal("Cancelled", "Your group is safe :)", "error");
                                                          }
                                         });
                                       
                                       });
                </script>

<script type="text/javascript">
 $(document).on("click", ".open-Updatepicture", function () {
     var myTitle = $(this).data('id');
     $(".modal-body #bookId").val(myTitle);
     
}); 
 </script>
 
 <script type="text/javascript">
 $(document).on("click", ".open-Updatepictures", function () {
     var myTitle = $(this).data('id');
     $(".modal-body #bookId").val(myTitle);
     
}); 
 </script>

 <script type="text/javascript">
 $(document).on("click", ".open-ChangePassword", function () {
     var myTitle = $(this).data('id');
     $(".modal-body #bookId").val(myTitle);
     
}); 
 </script>

 <script type="text/javascript">
 $(document).on("click", ".open-ChangePassword", function () {
     var myTitle = $(this).data('id');
     $(".modal-body #bookId").val(myTitle);
     
}); 
 </script>

<script type="text/javascript">
 $(document).on("click", ".open-group", function () {
    
    var mygroupname = $(this).data('id');

         $.ajax({
          type :'POST',
                  url: "register.php",
                 data: {groups:mygroupname},
               success: function(result) {               
                                            $("#groupshow").html(result);
                                          }
                });  
}); 
 </script>
 
 <script type="text/javascript">
 $(document).on("click", ".open-exit", function () {
       var optionValue='group';
     $.ajax({
          type :'POST',
                  url: "register.php",
                 data: {loadgroup:optionValue},
               success: function(result) {               
                                            $("#groupshow").html(result);
                                          }
                });    
}); 
 </script>
 
 <script type="text/javascript"> 
            $(document).on("click", ".open-btnGroup", function () {
                                  var userid = $(this).data('id');
                               var mygroup = document.getElementById("gname").value;
                                    $.ajax ({
                                              type :'POST',
                                                url: "register.php",
                                               data: {username:userid,gnamed:mygroup},
                           success: function(result) {               
                                                        $("#groupshow").html(result);
                                                       }
                                             });
           
                                       });
                </script>
                <script type="text/javascript"> 
            $(document).on("click", ".open-btnPost", function () {
                                  var userid = $(this).data('id');
                                   var groupn = $(this).data('ib');
                               var mygroup = document.getElementById("txtpost").value;
                                    $.ajax ({
                                              type :'POST',
                                                url: "register.php",
                                               data: {username:userid,txtpost:mygroup,gname:groupn},
                           success: function(result) {               
                                                        $("#groupshow").html(result);
                                                       }
                                             });
           
                                       });
                </script>

</head>

<div id="ChangesPassword" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width:25%">

    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header"  style="background-color:#008800;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Đổi mật khẩu                
          </h4>
      </div>
      <div class="modal-body" >
        <center><p></p>
          <form method="POST" action="register.php" enctype='multipart/form-data'>            
            
          <table style="text-align: center; border-collapse: collapse; ">
            <tr>
              <td>Tài khoản</td>
              <td><input type="email" name="email"></td>
            </tr>
            <tr>
              <td>Mật khẩu cũ</td>
              <td><input type="text" name="password_cu"></td>
            </tr>
            <tr>
              <td>Mật khẩu mới</td>
              <td><input type="text" name="password_moi"></td>
            </tr>
            
          </table>              
                  
        </center>
      </div>
      <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Đổi mật khẩu" id="btns1" name="doimatkhau"> &nbsp;
                  
      </div>
      </div>
       </form>
  </div>
  </div>

<div id="Updatepicture" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width:25%">

    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header" style="background-color:#00a78e;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Chọn ảnh đại diện</h4>

      </div>
      <div class="modal-body" >
        <center><p></p>
        	<form method="post" action="register.php" enctype='multipart/form-data'>        		
            
        	<p style="margin-bottom:10px;">
        			Chọn ảnh<input name='file2' type='file' id='file2' >
           </p>  
           <p>
        	<input name='id' type='hidden' value='' id='bookId'>
        	<input name='category' type='hidden' value=''>

           </p>     	      		
	                
        </center>
      </div>
      <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Change" id="btns1" name="Change"> &nbsp;
                  
      </div>
      </div>
       </form>
  </div>
  </div>
 
 <div id="Updatepictures" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width:25%">

    <div class="modal-content" style="font-size: 14px; font-family: Times New Roman;color:black;">
      <div class="modal-header"  style="background-color:#0091cd;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Thay ảnh đại diện nhóm      	        	
        	</h4>
      </div>
      <div class="modal-body" >
        <center><p></p>
        	<form method="post" action="register.php" enctype='multipart/form-data'>        		
            
        	<p style="margin-bottom:10px;">
        			Chọn ảnh<input name='file2' type='file' id='file2' >
           </p>  
           <p>
        	<input name='id' type='hidden' value='' id='bookId'>
        	<input name='category' type='hidden' value='Group'>

           </p>     	      		
	                
        </center>
      </div>
      <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Change" id="btns1" name="Change"> &nbsp;
                  
      </div>
      </div>
       </form>
  </div>
  </div>

<body class="cbp-spmenu-push">
  <div class="main-content">
  <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">

    <aside class="sidebar-left">
      <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
       </button>
                        
         
            <h1>
              <a class="navbar-brand" href="index.php"><span class="fa fa-clock">
                
              </span>&nbsp;<span class="dashboard_text"></span>
              </a>
           </h1>
                    </div>
        
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="sidebar-menu">
              <li class="header">
                 <h4>GROUPS CHAT</h4>
              </li> 
              <li class="treeview">
                <a href="#">
                <i class="fa fa-bars"></i>
                <span>CHART FUNCTIONS</span>
                </a>
               <li class="treeview"> 
                  <a href="#">             
                
                <span>1.</span> 
                </a>     
              </li> 
              <li class="treeview"> 
                  <a href="#">             
                
                <span>2.</span>
                </a>      
              </li> 
              
              <li class="treeview"> 
                  <a href="#">             
             
                <span>3.</span>
                </a>      
              </li> 
              <li class="treeview">   
                  <a href="#">           
           
                <span>4.</span>
                </a>      
              </li>           
                <li class="treeview">
                    <a href="#">              
               
                <span>5.</span>
                </a>      
              </li>
              <li class="treeview">
                    <a href="#">              
               
                <span>6.</span>
                </a>      
              </li>
              <li class="treeview">
                    <a href="#">              
               
                <span>7.</span>
                </a>      
              </li>
              <li class="treeview">
                    <a href="#">              
               
                <span>8.</span>
                </a>      
              </li>
              <li class="treeview">
                    <a href="#">              
               
                <span>9.</span>
                </a>      
              </li>
              <li class="treeview">
                    <a href="#">              
               
                <span>10.</span>
                </a>      
              </li>
              </li>           
                          
                </ul>
          </div>

      </nav>
    </aside>
  </div>
	<div class="sticky-header header-section">
			
			<div class="header-right">
				
				<div class="profile_details" >		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									<span class="prfil-img">
										<?php   
										$sql ="SELECT * FROM Profilepictures WHERE ids='$id' ";
                    $rget = mysqli_query($db,$sql);
                        $num=mysqli_num_rows($rget);
                                                if($num!=0){
                                           while($found = mysqli_fetch_array($rget))
                                                                  {
                                                                       $profile = $found['name'];
                                                                 }
                                  echo"<img src='./images/$profile' height='50px' width='50px' alt=''>";     
                                     }
                                else{
                                    echo"<img src='./images/profile.png' height='50px' width='50px' alt=''>";    
                                  
                                     }
										?>
										 </span> 
									<div class="user-name"  style="margin-right: 30px">
										<p style="color:#1D809F;"><?php if(isset($username))
                                            {echo"<strong>".$username."! </strong>";} ?>
				                         </p>
										<span>Online&nbsp;<img src='images/dot.png' height='15px' width='15px' alt=''>
										</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								 <li> <a data-toggle='modal' data-id='<?php echo$id; ?>' href='#Updatepicture' class='open-Updatepicture'><i class="fa fa-user"></i>Đổi ảnh đại diện</a> </li>
								<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Đăng xuất</a> </li>
                 <li> <a data-toggle='modal' data-id='<?php echo$id; ?>' href='#ChangesPassword' class='open-ChangePassword'><i class="fa fa-user"></i>Đổi mật khẩu</a> </li>
							</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<div id="page-wrapper"  >
			<div class="main-page" >
			<div class="col_1">
			<div class="col-md-4 span_8">
				<div class="activity_box">
					<h2>USERS</h2>
					<div class="scrollbar" id="style-1">
					<?php 
					$sqlmember ="SELECT * FROM user WHERE id!=$id";
			       	$retrieve = mysqli_query($db,$sqlmember);
				                    $count=0;
                     while($found = mysqli_fetch_array($retrieve))
	                 {
                       $username=$found['username'];$ids=$found['id']; $pass=$found['password1']; $online=$found['Online'];
			           if($online=='Online'){
						                    $dis="<img src='./images/dot.png' height='15px' width='15px' alt=''>";
                                           }else
                                           {
                                             $dis="<img src='./images/dotoffline.png' height='15px' width='15px' alt=''>";
                                             
                                           }
				       $sql ="SELECT * FROM Profilepictures WHERE ids='$ids' ";
                                                $rget = mysqli_query($db,$sql);
												$num=mysqli_num_rows($rget);
                                                if($num!=0){
												                   while($found = mysqli_fetch_array($rget))
	                                                                {
                                                                       $profile= $found['name'];
		                                                            }
																	$pic="<img src='./images/$profile' height='50px' width='50px' alt=''>";	   
												             }
												        else{
												           	$pic="<img src='images/profile.png' height='50px' width='50px' alt=''>";	   
														     	   $profile='profile.png';
												             }

                                     
                       if($online=='Online'){
                                $dis="<img src='./images/dot.png' height='15px' width='15px' alt=''>";
                                           }else
                                           {
                                             $dis="<img src='./images/dotoffline.png' height='15px' width='15px' alt=''>";                      
                                           }
           
                       echo"<div class='activity-row'>
							<div class='col-xs-3 activity-img'>						
      <a class='example-image-link' href='images/$profile' data-lightbox='example-1'>$pic</a></div>
							<div class='col-xs-7 activity-desc'>
								<h5><a href='#'>$username</a></h5>
							</div>
							<div class='col-xs-2 activity-desc1'><h6>$dis</h6></div>
							<div class='clearfix'> </div>
						</div>";

                       }?>						
					</div>
					
				</div>
			</div>
			<div class="col-md-4 span_8">
				<div class="activity_box activity_box2">
					<h3>CHAT</h3>
					<div class="scrollbar" id="style-2">
						  <span id="errors1"></span>						
						
						
					</div>
					<form id="comment_form" method="post" >
                            	<input type="text" id="txt" name="replied" style="width:80%;background-color: #F0F0F0;" placeholder="Enter your text..">
       	                      <input type="hidden" id="vid" name="videoid" value='<?php echo$id; ?>'>

       	                  <a type="button" id="btnSave" class="btn btn-success glyphicon glyphicon-send" style="color:white;"></a>
       	         </form>
				</div>
			</div>
			<div class="col-md-4 span_8">
				<div class="activity_box activity_box1">
									<span id='groupshow'></span>
							
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			
		</div>
				
			</div>
		</div>
	</div>
		
		
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	
	<script src='js/SidebarNav.min.js' type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>

	
   <script src="js/bootstrap.js"> </script>
</body>

</html>
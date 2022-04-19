<?php
session_start();

        $db = mysqli_connect('localhost','root','','thicnw') or die('Không thể kết nói với database');

if(isset($_COOKIE['userid'])){
$userid = $_COOKIE['userid'];
$useremail = $_COOKIE['useremail'];}

                              
if(isset($_POST['submit'])){    

              $username = $_POST["username"]; 
			  $email = $_POST["email"];	
			  $password1 =$_POST["password1"];
						
	      
		  $sql="SELECT * FROM user  WHERE email='$email' && username='$username'";
                   $resultn=mysqli_query($db,$sql);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {
                             	 $sqlp="SELECT * FROM user WHERE password1='$password1' ";
                                 $found=mysqli_query($db,$sqlp);
                               if($rowcount=mysqli_num_rows($found)==0)
                               {
                               	 $enter="INSERT INTO user (username,email,password1,Userid) VALUES('$username','$email','$password1','$password1')";
                                  $db->query($enter);
                                  echo"Now";                             
                               }
                               else
                               {
                      	            echo"Nope";
						       }
                             
                         }
	           }
	if(isset($_FILES['file2']['name'])&&$_POST['Change'])	{
			 	
	              $id=$_POST['id'];
		          $cat=$_POST['category'];
			     $receiptName = $_FILES['file2']['name'];
                 $receipttmpName = $_FILES['file2']['tmp_name'];
                 $receiptSize = $_FILES['file2']['size'];
                 $receiptType = $_FILES['file2']['type'];
				   $pages=$_POST['page'];
				   
				 if($id=='')
				 {
				       $userid=$_COOKIE['userid'];
                       $useremail=$_COOKIE['useremail'];

                          $sqluser ="SELECT * FROM user WHERE password1='$userid' && email='$useremail'";

                          $retrieved = mysqli_query($db,$sqluser);
                          while($found = mysqli_fetch_array($retrieved))
	                     {
                             $id= $found['id'];   
  	                     }
				 }
			
 	 $qued="SELECT * FROM Profilepictures WHERE ids='$id' ";
                     $resul=mysqli_query($db,$qued);
                    $checks=mysqli_num_rows($resul);
                     if($checks!=0)
                     {
                     	if( move_uploaded_file ($receipttmpName, 'images/'.$receiptName)){
                            $queryz = "UPDATE Profilepictures SET name='$receiptName',size='$receiptSize',type='$receiptType',content='$receiptName',Category='$cat' WHERE ids='$id' ";
                                  $db->query($queryz) or die('Errorr, query failed to upload');	
										
										    header("Location:user.php");
																		  
						}
						
                     }
                     else{
							  
                             if( move_uploaded_file ($receipttmpName, './images/'.$receiptName)){
                                 $queryz = "INSERT INTO Profilepictures (name,size,type,content,Category,ids) ".
                                 "VALUES ('$receiptName','$receiptSize',' $receiptType', '$receiptName','$cat','$id')";                                 
                                     $db->query($queryz) or die('Errorr, query failed to upload');	
									
										   header("Location:user.php");
																		     
					
						             }
					   }
			 }

			 
if(isset($_POST['postid'])){
	   
	    $postid=$_POST['postid'];
	if(isset($_POST['replied'])) 
        {$texts=addslashes($_POST['replied']);
      		$text = mysqli_real_escape_string($db,$texts);
		}
		 if(isset($_POST['replied']))
    	     {  
        	      $sql = "SELECT * FROM user WHERE password1='$userid'";
	               $resultset = mysqli_query($db, $sql) or die("database error:". mysqli_error($db));
	                  while($row = mysqli_fetch_assoc($resultset)){ $urname= $row['username'];}	
	
		                   $time=time();
			              $date=date("d/m/y");
                           $today = date("g:i a");
				          $dbFormat = date('H:i:s', strtotime($today));
				
     	               $query1z = "INSERT INTO Chart (Message,Name,Userid,Time,Date) ".
                    "VALUES ('$text','$urname','$userid','$dbFormat','$date')";
                    $db->query($query1z) or die('Error, query failed');
              
			}
	   
	$get="SELECT * FROM Chart WHERE Group_Name= '' ";
						    $gets=mysqli_query($db,$get);						   
                          $entered=mysqli_num_rows($gets);
              if($entered!=0)
              {
              	$time=time();
			  
      while($get_row=mysqli_fetch_array($gets))
      {
      	
		$password1=$get_row['Userid'];
      	$nameo=$get_row['Name'];
      	$get_time=$get_row['Time'];
		$get_text=$get_row['Message'];
		$date=$get_row['Date'];
				      
				   $time=strtotime($get_time);
                  $times=date("g:i a",$time);
				  
				           $sqluserk ="SELECT * FROM user WHERE password1='$password1'";
                            $ret = mysqli_query($db,$sqluserk);
                            while($found = mysqli_fetch_array($ret))
	                        {
                                   $idb= $found['id'];
  	                        }
							  
										$sql ="SELECT * FROM Profilepictures WHERE ids='$idb' ";
                                                $rget = mysqli_query($db,$sql);
												$num=mysqli_num_rows($rget);
                                                if($num!=0){
												                   while($foundk = mysqli_fetch_array($rget))
	                                                                {
                                                                       $profile= $foundk['name'];
		                                                            }
												             }
												         else{
												         	     $profile="profile.png";
												            }
						
				   
				      if ($password1!=$userid)
		           {
		           	          			
		                echo"<div class='activity-row activity-row1'>
							<div class='col-xs-3 activity-img'>
							
      <a class='example-image-link' href='images/$profile' data-lightbox='example-1'><img src='images/$profile' class='img-responsive' alt=''/></a></div>
							<div class='col-xs-5 activity-img1'>
								<div class='activity-desc-sub'>
									<h5>$nameo</h5>
									<p>$get_text</p>
									<span>$date $times</span>
								</div>
							</div>
							<div class='col-xs-4 activity-desc1'></div>
							<div class='clearfix'> </div>
						</div>";
				 
				   }      
				  else{
				  	     echo"
				  	        <div class='activity-row activity-row1'>
							<div class='col-xs-2 activity-desc1'></div>
							<div class='col-xs-7 activity-img2'>
								<div class='activity-desc-sub1'>
									<h5>$nameo</h5>
									<p>$get_text</p>
									<p>$date $times</p>
								</div>
							</div>
							<div class='col-xs-3 activity-img'>
							
      <a class='example-image-link' href='images/$profile' data-lightbox='example-1'><img src='./images/$profile' class='img-responsive' alt=''/></a></div>
							<div class='clearfix'> </div>
						     </div>";
				  	                           
					 }
                 }
       }
	
}

if(isset($_POST['loadid'])){
	   
	    $postid=$_POST['loadid'];
	
		
	   
	$get="SELECT * FROM Chart WHERE Group_Name='' ";
						    $gets=mysqli_query($db,$get);						   
                          $entered=mysqli_num_rows($gets);
              if($entered!=0)
              {
              	$time=time();
			  
      while($get_row=mysqli_fetch_array($gets))
      {
      	
		$password1=$get_row['Userid'];
      	$nameo=$get_row['Name'];
      	$get_time=$get_row['Time'];
		$get_text=$get_row['Message'];
		$date=$get_row['Date'];
		 
		 $time=strtotime($get_time);
                  $times=date("g:i a",$time);
				  
		
				
				   
				           $sqluserk ="SELECT * FROM user WHERE password1='$password1' ";
                            $ret = mysqli_query($db,$sqluserk);
                            while($found = mysqli_fetch_array($ret))
	                        {
                                   $idb= $found['id'];
  	                        }
							  
										$sql ="SELECT * FROM Profilepictures WHERE ids='$idb' ";
                                                $rget = mysqli_query($db,$sql);
												$num=mysqli_num_rows($rget);
                                                if($num!=0){
												                   while($foundk = mysqli_fetch_array($rget))
	                                                                {
                                                                       $profile= $foundk['name'];
		                                                            }
												            }
												         else{
												         	     $profile="profile.png";
												            }
						
				   
				      if ($password1!=$userid)
		           {
		           	          			
		                echo"<div class='activity-row activity-row1'>
							<div class='col-xs-3 activity-img'>
							
      <a class='example-image-link' href='images/$profile' data-lightbox='example-1'><img src='images/$profile' class='img-responsive' alt=''/></a></div>
							<div class='col-xs-5 activity-img1'>
								<div class='activity-desc-sub'>
									<h5>$nameo</h5>
									<p>$get_text</p>
									<span>$date $times</span>
								</div>
							</div>
							<div class='col-xs-4 activity-desc1'></div>
							<div class='clearfix'> </div>
						</div>";
				
				   }      
				  else{
				  	     echo"
				  	        <div class='activity-row activity-row1'>
							<div class='col-xs-2 activity-desc1'></div>
							<div class='col-xs-7 activity-img2'>
								<div class='activity-desc-sub1'>
									<h5>$nameo</h5>
									<p>$get_text</p>
									<p>$date $times</p>
								</div>
							</div>
							
      <a class='example-image-link' href='images/$profile' data-lightbox='example-1'><div class='col-xs-3 activity-img'><img src='images/$profile' class='img-responsive' alt=''/></a></div>
							<div class='clearfix'> </div>
						     </div>";
				  	                           
					 }
                 }
       }
}
 if(isset($_POST['gnamed'])){               
	           $gname=$_POST['gnamed'];
              			
	      
		  $sql="SELECT * FROM Groups  WHERE GName='$gname'";
                   $resultn=mysqli_query($db,$sql);                    
                         if($rowcount=mysqli_num_rows($resultn)==0)
                         {
                             	 $date=date("d/m/y");
                               	 $enter="INSERT INTO Groups (GName,Userid,Members,Date) VALUES('$gname','$userid','1','$date')";
                                  $db->query($enter);								                                 
							  
						 } 
                      
                    $sqlL="SELECT * FROM Groups ORDER BY id DESC";
                   $resultnL=mysqli_query($db,$sqlL);                    
                         if($rowcount=mysqli_num_rows($resultnL)!=0)
                         {
                                        echo"<h3>GROUPS</h3>
					                   <div class='scrollbar' id='style-3'>
						               <div class='activity-row activity-row1'>
							              <div class='single-bottom'>";				
		                                                
                             while($foundk = mysqli_fetch_array($resultnL))
	                               {
                                     $grname= $foundk['GName'];$crid= $foundk['Userid'];
		                             $members= $foundk['Date'];$id= $foundk['id'];
		                                                   $sql ="SELECT * FROM Profilepictures WHERE ids='$id' && Category='Group' ";
                                                $rget = mysqli_query($db,$sql);
												$num=mysqli_num_rows($rget);
                                                if($num!=0){
												                   while($foundk = mysqli_fetch_array($rget))
	                                                                {
                                                                       $profile= $foundk['name'];
		                                                            }
												             }
												         else{
												         	     $profile="groups.png";
												            }
		                             echo"<div class='activity-row'>
							               <div class='col-xs-3 activity-img'>
							               
							               <a data-toggle='modal' data-id='$id' href='#Updatepictures' class='open-Updatepictures'><img src='./images/$profile' height='50px' width='50px' alt=''></a></div>
							                <div class='col-xs-7 activity-desc'>
								            <h5><a href='#'>$grname</a></h5>
								              <p>Created on:$members</p>
							               </div>";
							               if($crid==$userid){
							              echo"<div class='col-xs-2 activity-desc1'>
			                                       <a data-id='$id' href='#' class='open-Delete'  ><span class='glyphicon glyphicon-trash' style='color:red;font-size:15px'></span></a>
							              </div>";}
							               echo"<div class='clearfix'> </div>
						             </div>";
		                           }
								   echo"</div>
						</div>
					</div>
					<form id='groupsz' method='post' >
						  <input type='text' value=''  id='gname' placeholder='Create group'/>
                          <input type='hidden' value='<?php echo$id; ?>'  id='userid' />						  
       	                  <a type='button' id='btnGroup' class='btn btn-primary' style='color:white;'><i class='fa fa-users'></i></a>
				   </form>";
                      
                         }
                               
 }
if(isset($_POST['loadgroup'])){     
		 
                      
                    $sqlL="SELECT * FROM Groups ORDER BY id DESC";
                   $resultnL=mysqli_query($db,$sqlL);                    
                         if($rowcount=mysqli_num_rows($resultnL)!=0)
                         {
                                     echo"<h3>GROUPS</h3>
					                   <div class='scrollbar' id='style-3'>
						               <div class='activity-row activity-row1'>
							              <div class='single-bottom'>";				
		                            
                             while($foundk = mysqli_fetch_array($resultnL))
	                               {
                                     $grname= $foundk['GName'];$crid= $foundk['Userid'];
		                             $members= $foundk['Date'];$id= $foundk['id'];
									             
									             $sql ="SELECT * FROM Profilepictures WHERE ids='$id' && Category='Group' ";
                                                $rget = mysqli_query($db,$sql);
												$num=mysqli_num_rows($rget);
                                                if($num!=0){
												                   while($foundk = mysqli_fetch_array($rget))
	                                                                {
                                                                       $profile= $foundk['name'];
		                                                            }
												             }
												         else{
												         	     $profile="groups.png";
												            }
						
									 
		                             echo"
		                                   <div class='activity-row'>
							               <div class='col-xs-3 activity-img'>
							               <a data-toggle='modal' data-id='$id' href='#Updatepictures' class='open-Updatepictures'><img src='images/$profile' height='50px' width='50px' alt=''></a></div>
							                <div class='col-xs-7 activity-desc'>
								            <h5><a data-id='$grname' class='open-group' href='#'>$grname</a></h5>
								              <p>Created on:$members</p>
							               </div>";
							               if($crid==$userid){
							              echo"<div class='col-xs-2 activity-desc1'>
			                                       <a data-id='$id' href='#' class='open-Delete'  ><span class='glyphicon glyphicon-trash' style='color:red;font-size:15px'></span></a>
							              </div>";}
							              echo" <div class='clearfix'> </div>
						             </div>
						             ";
		                           }
                                        echo"</div>
						</div>
					</div>
					<form id='groupsz' method='post' >
						  <input type='text' value=''  id='gname' placeholder='Create group'/>
       	                  <a data-id='$userid' class='open-btnGroup btn  btn-primary' style='color:white;'><i class='fa fa-users'></i></a>
        
				   </form>";
                         }
                               
 }
if(isset($_POST['Valuedel'])){     
		 
                        $idsz=$_POST['Valuedel'];
						$sql="SELECT * FROM Groups  WHERE id='$idsz'";
                   $resultn=mysqli_query($db,$sql);                    
                         if($rowcount=mysqli_num_rows($resultn)!=0)
                         {
                             	 $enters="DELETE FROM Groups WHERE id='$idsz'";
                                 $db->query($enters);
                                      echo"ok";
						 }
				   
                               
 }
 if(isset($_POST['groups'])){
	   
	    $groupname=$_POST['groups'];
	
		
	   
	$get="SELECT * FROM Chart WHERE Group_Name='$groupname' ";
						    $gets=mysqli_query($db,$get);						   
                          $entered=mysqli_num_rows($gets);
                          
                          echo"<h3>GROUPS($groupname)<a href='#' style='float: right;color:white' class='open-exit'><span class='glyphicon glyphicon-log-out' style='color: white'></span>&nbsp;Exit</a>			                          </h3>
	             <div class='scrollbar' id='style-3'>
	             <div class='activity-row activity-row1'>
	             <div class='single-bottom'>";				
		
              if($entered!=0)
              {
              	$time=time();
			                           
      while($get_row=mysqli_fetch_array($gets))
      {
      	
		$password1=$get_row['Userid'];
      	$nameo=$get_row['Name'];
      	$get_time=$get_row['Time'];
		$get_text=$get_row['Message'];
		$date=$get_row['Date'];
		 
		 $time=strtotime($get_time);
                  $times=date("g:i a",$time);
				  
		
				
				   
				           $sqluserk ="SELECT * FROM user WHERE password1='$password1'";
                            $ret = mysqli_query($db,$sqluserk);
                            while($found = mysqli_fetch_array($ret))
	                        {
                                   $idb= $found['id'];
  	                        }
							  
										$sql ="SELECT * FROM Profilepictures WHERE ids='$idb' ";
                                                $rget = mysqli_query($db,$sql);
												$num=mysqli_num_rows($rget);
                                                if($num!=0){
												                   while($foundk = mysqli_fetch_array($rget))
	                                                                {
                                                                       $profile= $foundk['name'];
		                                                            }
												             }
												         else{
												         	     $profile="profile.png";
												            }
						
				   
				      if ($password1!=$userid)
		           {
		           	          			
		                echo"<div class='activity-row activity-row1'>
							<div class='col-xs-3 activity-img'><img src='images/$profile' class='img-responsive' alt=''/></div>
							<div class='col-xs-5 activity-img1'>
								<div class='activity-desc-sub'>
									<h5>$nameo</h5>
									<p>$get_text</p>
									<span>$date $times</span>
								</div>
							</div>
							<div class='col-xs-4 activity-desc1'></div>
							<div class='clearfix'> </div>
						</div>";
				 
				   }      
				  else{
				  	     echo"
				  	        <div class='activity-row activity-row1'>
							<div class='col-xs-2 activity-desc1'></div>
							<div class='col-xs-7 activity-img2'>
								<div class='activity-desc-sub1'>
									<h5>$nameo</h5>
									<p>$get_text</p>
									<p>$date $times</p>
								</div>
							</div>
							<div class='col-xs-3 activity-img'><img src='images/$profile' class='img-responsive' alt=''/></div>
							<div class='clearfix'> </div>
						     </div>";
				  	                           
					 }
                 }
                
       }
        echo"</div>
						</div>
					</div>					
				   <form id='groupsz' method='post' >
						  <input type='text' value=''  id='txtpost' placeholder='Post your message..'/>
       	                  <a data-id='$userid' data-ib='$groupname' class='open-btnPost btn  btn-success' style='color:white;'><i class='fa fa-send'></i></a>
        
				   </form>";
}
if(isset($_POST['txtpost'])){
	   
	    $postid=$_POST['txtpost'];
	    $postgroup=$_POST['gname'];
	    
	if(isset($_POST['txtpost'])) 
        {
        	  $texts=addslashes($_POST['txtpost']);
      		   $text = mysqli_real_escape_string($db,$texts);
		  
        	      $sql = "SELECT * FROM user WHERE password1='$userid'";
	               $resultset = mysqli_query($db, $sql) or die("database error:". mysqli_error($db));
	                  while($row = mysqli_fetch_assoc($resultset)){ $urname= $row['username'];}	
	
		                   $time=time();
			              $date=date("d/m/y");
                           $today = date("g:i a");
				          $dbFormat = date('H:i:s', strtotime($today));
				
     	               $query1z = "INSERT INTO Chart (Message,Name,Userid,Time,Date,Group_Name) ".
                    "VALUES ('$text','$urname','$userid','$dbFormat','$date','$postgroup')";
                    $db->query($query1z) or die('Error, query failed');
              
			}
	   
	$get="SELECT * FROM Chart WHERE Group_Name='$postgroup' ";
						    $gets=mysqli_query($db,$get);						   
                          $entered=mysqli_num_rows($gets);
                         
						  echo"<h3>GROUPS($postgroup)<a href='#' style='float: right;color:white' class='open-exit'><span class='glyphicon glyphicon-log-out' style='color: white'></span>&nbsp;Exit</a>			                          </h3>
	             <div class='scrollbar' id='style-3'>
	             <div class='activity-row activity-row1'>
	             <div class='single-bottom'>";				
		
              if($entered!=0)
              {
              	$time=time();
			  
      while($get_row=mysqli_fetch_array($gets))
      {
      	
		$password1=$get_row['Userid'];
      	$nameo=$get_row['Name'];
      	$get_time=$get_row['Time'];
		$get_text=$get_row['Message'];
		$date=$get_row['Date'];
				      
				   $time=strtotime($get_time);
                  $times=date("g:i a",$time);
				  
				           $sqluserk ="SELECT * FROM user WHERE password1='$password1'";
                            $ret = mysqli_query($db,$sqluserk);
                            while($found = mysqli_fetch_array($ret))
	                        {
                                   $idb= $found['id'];
  	                        }
							  
										$sql ="SELECT * FROM Profilepictures WHERE ids='$idb' ";
                                                $rget = mysqli_query($db,$sql);
												$num=mysqli_num_rows($rget);
                                                if($num!=0){
												                   while($foundk = mysqli_fetch_array($rget))
	                                                                {
                                                                       $profile= $foundk['name'];
		                                                            }
												             }
												         else{		
												         	     $profile="profile.png";
												            }
						
				   
				      if ($password1!=$userid)
		           {
		           	          			
		                echo"<div class='activity-row activity-row1'>
							<div class='col-xs-3 activity-img'><img src='images/$profile' class='img-responsive' alt=''/></div>
							<div class='col-xs-5 activity-img1'>
								<div class='activity-desc-sub'>
									<h5>$nameo</h5>
									<p>$get_text</p>
									<span>$date $times</span>
								</div>
							</div>
							<div class='col-xs-4 activity-desc1'></div>
							<div class='clearfix'> </div>
						</div>";
				 
				   }      
				  else{
				  	     echo"
				  	        <div class='activity-row activity-row1'>
							<div class='col-xs-2 activity-desc1'></div>
							<div class='col-xs-7 activity-img2'>
								<div class='activity-desc-sub1'>
									<h5>$nameo</h5>
									<p>$get_text</p>
									<p>$date $times</p>
								</div>
							</div>
							<div class='col-xs-3 activity-img'><img src='./images/$profile' class='img-responsive' alt=''/></div>
							<div class='clearfix'> </div>
						     </div>";
				  	                           
					 }
                 }
       }
       echo"</div>
						</div>
					</div>					
				   <form id='groupsz' method='post' >
						  <input type='text' value=''  id='txtpost' placeholder='Post your message..'/>
       	                  <a data-id='$userid' data-ib='$postgroup' class='open-btnPost btn  btn-success' style='color:white;'><i class='fa fa-send'></i></a>
        
				   </form>";
       
	
} 

	if (isset($_POST['doimatkhau'])) {

		$email = $_POST["email"];
		$matkhau_cu = $_POST["password_cu"];
		$matkhau_moi = $_POST["password_moi"];

		$sql = "SELECT * FROM user WHERE email='$email'&& password1='$matkhau_cu'";
		$row = mysqli_query($db,$sql);
		$count = mysqli_num_rows($row);

		if ($count>0) {
			$sql_update = "UPDATE user SET password1= '$matkhau_moi' WHERE email='$email'";
			$db->query($sql_update);
			header("Location:signIn.php");
		} else {
			echo "<p>Mật khẩu cũ không đúng, vui lòng nhập lại!</p>";
		}

	} 
?>
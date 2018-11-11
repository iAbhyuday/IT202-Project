<?php
    $conn = mysqli_connect('localhost','abhyuday','A8HYU04Y','users');
session_start();
   if(isset($_POST['email'])){
   	$email = mysqli_escape_string($conn,trim($_POST['email'])); 
   	$pass  = mysqli_escape_string($conn,trim($_POST['password']));

   	$cmd = "SELECT * FROM users WHERE Email = '$email';";
   	$sql = mysqli_query($conn,$cmd);
   	if(mysqli_num_rows($sql)>0){
   	$res = mysqli_fetch_array($sql);
   	
    if($res['verified']==0){
        $msg->success = 0;
     	$msg = json_encode($msg);
     	echo $msg;
    }
    else{
   	$hash = $res['Password'];
     if(password_verify($pass,$hash)){
     	$msg->success = 1;
     	
      $msg = json_encode($msg);
     	
      $_SESSION['uid']=$res['uid'];
      $_SESSION['name']=$res['FirstName'] .$res['LastName'];
      echo $msg;
     }
     else{
     	$msg->success = -1;
     	$msg = json_encode($msg);
     	echo $msg;
     }
}
  }
   	else{
   		$msg->success = -1;
     	$msg = json_encode($msg);
     	echo $msg;
   	}
   }
   else{
   	echo "<h2>Method Not Allowed</h2>";
   }
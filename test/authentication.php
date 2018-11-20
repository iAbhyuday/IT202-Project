<?php
    $conn = mysqli_connect('localhost','abhyuday','A8HYU04Y','users');
  $token = 'burlw!k6fhzcg813ti5jo4snp9e@70';

session_start();
   if(isset($_POST['email'])){
   	$email = mysqli_escape_string($conn,trim($_POST['email'])); 
   	$pass  = mysqli_escape_string($conn,trim($_POST['password']));

   	$cmd = "SELECT cast(aes_decrypt(uid,'$token') as char(100)),cast(aes_decrypt(Email,'$token') as char(100)),cast(aes_decrypt(Phone,'$token') as char(100)),cast(aes_decrypt(FirstName,'$token') as char(100)),cast(aes_decrypt(LastName,'$token') as char(100)),Password,verified,DOB FROM test WHERE cast(aes_decrypt(Email,'$token') as char(100)) = '$email';";
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
      $_SESSION['name']=$res['First Name'] ." " .$res['Last Name'];
      $_SESSION['dob'] = $res['DOB'];
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
   	$cmd = "SELECT cast(aes_decrypt(uid,'$token') as char(100)),cast(aes_decrypt(Email,'$token') as char(100)),cast(aes_decrypt(Phone,'$token') as char(100)),cast(aes_decrypt(FirstName,'$token') as char(100)),cast(aes_decrypt(LastName,'$token') as char(100)),Password,verified,DOB FROM test WHERE cast(aes_decrypt(Email,'$token') as char(100)) = '$email';";
    $sql = mysqli_query($conn,$cmd);
     if($sql)
    echo "<h2>done</h2>";
  else
    echo "nope";
   }
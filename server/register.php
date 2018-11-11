<?php
/*  ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*///   $conn = mysqli_connect('localhost','abhyuday','A8HYU04Y','users');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['FirstName'])){
     $conn = mysqli_connect('localhost','abhyuday','A8HYU04Y','users');
     $fname = mysqli_escape_string($conn,$_POST['FirstName']);     
     $lname  = mysqli_escape_string($conn,$_POST['LastName']);
     $dob    = mysqli_escape_string($conn,$_POST['DOB']);
     $gen    = mysqli_escape_string($conn,$_POST['gender']);
     $add     = mysqli_escape_string($conn,$_POST['Address']);
     $country = mysqli_escape_string($conn,$_POST['country']);
     $state   = mysqli_escape_string($conn,$_POST['state']);
     $city    = mysqli_escape_string($conn,$_POST['city']);
     $zip     = mysqli_escape_string($conn,$_POST['ZipCode']);
     $phone   = mysqli_escape_string($conn,$_POST['phone']);
     $email   = mysqli_escape_string($conn,$_POST['email']);
     $pass    = mysqli_escape_string($conn,$_POST['password']);
$cmd = "SELECT * FROM users WHERE Email = '$email';";
$sql = mysqli_query($conn,$cmd);
if(mysqli_num_rows($sql)>0){
  echo "Email is already registered with us !";
}
else{
  $cmd = "SELECT * FROM users WHERE Phone = '$phone';";
  $sql = mysqli_query($conn,$cmd);
  if(mysqli_num_rows($sql)>0){
    echo "Contact Number Already Registered !";
  }
  else{
  $hash = password_hash($pass,PASSWORD_BCRYPT);
  $str = "1234567890qwertyuiopasdfghjklzxcvbnm@!$QWERTYUIOPASDFGHJKLZXCVBNM123454327890!$qwdcbnjgfcft8umlb";
  $str = str_shuffle($str);
  $token = substr($str,0,30);
  $uS = "1234567890QWERTYUIOPASDFGHJKLZXCVBNM";
  $uS =str_shuffle($uS);
  $uid = microtime()*1000000 .substr($uS,0,10);
$cmd = "INSERT INTO users VALUES ('$uid','$token',0,'$fname','$lname','$dob','$gen','$add','$country','$state','$city','$zip','$phone','$email','$hash') ;";
include_once "PHPMailer/PHPMailer.php";
include_once "PHPMailer/Exception.php";
$mail = new PHPMailer();
$mail->setFrom('admin@robin.com',"admin");
$mail->addAddress($email);
$mail->Subject = "Email Verification";
$mail->isHTML(true);
$mail->Body = "<a href=\"10.30.81.126/public/confirm.php?nusr=" .$uid ."&token=" .$token ."\"> Click here </a>";


//  $sql = mysqli_query($conn,$cmd);
  if(!$mail->send()){
       echo "503 : Internal Server Error"; 
//    header("Location: /public/Verification.php");
 //  exit();
    //$msg = "Done !";
  }

    else{
      $sql = mysqli_query($conn,$cmd);
        
      echo "ok";
      
    }
//  }}
   
    
}
}
}
else{echo "<h1> Eroor 404 Page Not Found !</h1>";
}
                    




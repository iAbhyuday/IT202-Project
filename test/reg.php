<?php
/*  ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);*///   $conn = mysqli_connect('localhost','abhyuday','A8HYU04Y','users');
function encrypt($string){
  $key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");

    $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);

$s =  mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key,
                                 $string, MCRYPT_MODE_CBC, $iv);
$s = $iv . $s;
    
    # encode the resulting cipher text so it can be represented by a string
    return base64_encode($s);
}

function decrypt($cipher){
  $key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");

    $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $dec = base64_decode($cipher);
    $iv_dec = substr($dec, 0, $iv_size);
    $dec = substr($dec, $iv_size);
    return mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key,
                                    $dec, MCRYPT_MODE_CBC, $iv_dec);

}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 $key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");

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
  $token = 'burlw!k6fhzcg813ti5jo4snp9e@70';

$e = encrypt($email);
$cmd = "SELECT Email FROM test WHERE cast(aes_decrypt(Email,'burlw!k6fhzcg813ti5jo4snp9e@70') as char(100))='$email';";
$sql = mysqli_query($conn,$cmd);
if(mysqli_num_rows($sql)>0){
  echo "Email is already registered with us !";
}
else{
  $p = encrypt($phone);
  $cmd = "SELECT Phone  FROM test WHERE cast(aes_decrypt(Phone,'$token') as char(100)) = '$phone';";
  $sql = mysqli_query($conn,$cmd);
  if(mysqli_num_rows($sql)>0){
    echo "Contact Number Already Registered !";
  }
  else{
  $hash = password_hash($pass,PASSWORD_BCRYPT);
  $str = "1234567890qwertyuiopasdfghjklzxcvbnm@!$QWERTYUIOPASDFGHJKLZXCVBNM123454327890!$qwdcbnjgfcft8umlb";
  $str = str_shuffle($str);
  $uS = "1234567890QWERTYUIOPASDFGHJKLZXCVBNM";
  $uS =str_shuffle($uS);
  $uid = microtime()*1000000 .substr($uS,0,10);
$cmd = "INSERT INTO test VALUES (aes_encrypt('$uid','$token'),'$token',0,aes_encrypt('$fname','$token'),aes_encrypt('$lname','$token'),'$dob',aes_encrypt('$gen','$token'),aes_encrypt('$add','$token'),aes_encrypt('$country','$token'),aes_encrypt('$state','$token'),aes_encrypt('$city','$token'),aes_encrypt('$zip','$token'),aes_encrypt('$phone','$token'),aes_encrypt('$email','$token'),'$hash');";
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
      if($sql)  
      echo "ok";
    else
      echo "err";
      
    }
//  }}
   
    
}
}}
else{
 $en =  encrypt("abhyuday");
 echo $en ; 
 $dec = decrypt($en);
 echo $dec ; }

                    




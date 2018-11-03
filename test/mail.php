<?php
  ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);//   $conn = mysqli_connect('localhost','abhyuday','A8HYU04Y','users');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
include_once "PHPMailer/PHPMailer.php";
include_once "PHPMailer/Exception.php";

$mail = new PHPMailer();
$mail->setFrom("w@robin.com","admin");
$mail->addAddress("abhyuday964808@gmail.com","Abhyuday");
$mail->Subject = "Verification !";
$mail->isHTML(true);
//$mail->isSMTP(true);
$mail->Body = "<a href=\"robin.com/public/confirm.php?email=" .2 ."&token=" .3 ."\"> Click here </a>";


if(!$mail->send()){
       $msg = $mail->ErrorInfo;
//    header("Location: /public/Verification.php");
 //  exit();
    //$msg = "Done !";
  }

    else{
      echo"Something went wrong !!!";
    }
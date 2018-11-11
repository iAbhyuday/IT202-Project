<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['mail'])){
	$conn = mysqli_connect('localhost','abhyuday','A8HYU04Y','users');

	$fmail = trim($_POST['mail']);
	$cmd = "SELECT * FROM users WHERE Email = '$fmail';";
	$sql = mysqli_query($conn,$cmd);
	if(mysqli_num_rows($sql)>0){
		$row = mysqli_fetch_array($sql);
		$uid = $row['uid'];
		//$hash = password_hash($uid,PASSWORD_BCRYPT);
		include_once "PHPMailer/PHPMailer.php";
		include_once "PHPMailer/Exception.php";
		$mail = new PHPMailer();
		$mail->setFrom('admin@robin.com',"admin");
		$mail->addAddress($fmail);
		$mail->Subject = "Password Reset";
		$mail->isHTML(true);
		$mail->Body = "<a href=\"10.30.81.126/public/passwordReset.php?nusr=" .$uid ."&email=" .$fmail ."\"> Click here </a>";
	

   if(!$mail->send()){
    echo "Something went wrong !";
  }

    else{
  echo "Reset link has been sent !";
    }








	}

	
	else{
		echo "Something went wrong !";
	}	
}


	


	else{
		echo "<h3> LOST ? </h3>";
	}

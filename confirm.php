<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$conn = mysqli_connect('localhost','abhyuday','A8HYU04Y','users');

if(isset($_GET['nusr'])){
 $uid = $_GET['nusr'];
 $token = $_GET['token'];
// $msg = false; 
 $cmd = "SELECT * FROM users WHERE token = '$token' AND uid = '$uid' ;";
 $sql = mysqli_query($conn,$cmd);
 if(mysqli_num_rows($sql)>0){
 	$cmd = "UPDATE users SET verified = 1 WHERE uid = '$uid';";
 	$sql = mysqli_query($conn,$cmd);
 	if($sql){
 		$msg  = true;
 	}
 	else
 		$msg = false;
 }
 else{
 	$msg = false;
 }

}
else{
	echo "<h2> Method Not Allowed !";
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Verification</title>
</head>
<body>
<?php
if($msg)
echo "<p style=\"color:green\">Verified !!!</p>";
else
	echo "<p style=\"color:red\">Error !!!</p>";
echo $token;

?>
</body>
</html>
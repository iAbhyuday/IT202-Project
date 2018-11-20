<?php
     $conn = mysqli_connect('localhost','abhyuday','A8HYU04Y','users');

if(isset($_POST['submit'])){
	$uS = "1234567890QWERTYUIOPASDFGHJKLZXCVBNM";
    $uS =str_shuffle($uS);
    $gid = microtime()*1000000 .substr($uS,0,10);
    //$cmd = "INSERT INTO Grienvances ('')"
    $uid = $_POST['uid'];
    $date = $_POST['date'];
    $title = $_POST['title'];
    $content = $_POST['desc'];
    $dept = $_POST['dept'];
    $cmd = "INSERT INTO Grievances VALUES ('$gid','$uid','$content','$dept','$date',NULL,0,'$title');";
    $sql = mysqli_query($conn,$cmd);
    if($sql)
    	echo "ok";
    else
    	echo "error";
    }

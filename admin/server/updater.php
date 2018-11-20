<?php


    $conn = mysqli_connect('localhost','abhyuday','A8HYU04Y','users');
    
    if(isset($_POST['method'])){

     $method = $_POST['method'];
     $gid = $_POST['gid'];
     $uid = $_POST['uid'];
     $setter = $_POST['setter'];  
     if($method =="delete"){
       $cmd = "UPDATE Grievances SET status = -1 where gid ='$gid' ;";
       $sql = mysqli_query($conn,$cmd);
       if($sql){
       $msg->data = "Rejected";
       $res = json_encode($msg);
       echo $res;}
       else{
       	$msg->data = "Server Error1";
       $res = json_encode($msg);
       echo $res;
       }
}
    elseif($method=="update"){

    	$cmd = "UPDATE Grievances SET status = 1 WHERE gid = '$gid';";
    	$sql = mysqli_query($conn,$cmd);
    	if($sql){
    		$msg->data = "Resolved";
       $res = json_encode($msg);
       echo $res;
    	}
    	else{
    		$msg->data = "Server Error2";
       $res = json_encode($msg);
       echo $res;
    	}
    }
       




    }

    else{
    	echo "<h3>Not Found </h3>";
    }
    



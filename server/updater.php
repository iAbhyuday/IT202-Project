<?php


    $conn = mysqli_connect('localhost','abhyuday','A8HYU04Y','users');
    
    if(isset($_POST['method'])){

     $method = $_POST['method'];
     $gid = $_POST['gid'];
     $uid = $_POST['uid'];
     $setter = $_POST['setter'];  
     if($method =="delete"){
       $cmd = "DELETE FROM Grievances where gid = '$gid' AND uid = '$uid';";
       $sql = mysqli_query($conn,$cmd);
       if($sql){
       $msg->data = "Deleted";
       $res = json_encode($msg);
       echo $res;}
       else{
       	$msg->data = "Server Error1";
       $res = json_encode($msg);
       echo $res;
       }
}
    if($method=='update'){

    	$cmd = "UPDATE Grievances SET content = '$set' WHERE gid = '$gid' AND uid = '$uid';";
    	$sql = mysqli_query($conn,$cmd);
    	if($sql){
    		$msg->data = "Updated";
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
    



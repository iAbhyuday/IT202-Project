<?php

if(isset($_POST['gid'])){
     $conn = mysqli_connect('localhost','abhyuday','A8HYU04Y','users');
     $gid = mysqli_escape_string($conn,trim($_POST['gid']));
     $uid = mysqli_escape_string($conn,trim($_POST['uid']));

     $cmd = "SELECT * FROM Grievances WHERE gid = '$gid' AND uid = '$uid';";
     $sql = mysqli_query($conn,$cmd);
     if(mysqli_num_rows($sql)>0){
         
     	$res = mysqli_fetch_array($sql) ; 

         $Gstatus = $res['status'];
         $msg->status = 1;
         $msg->data = $Gstatus;
         $msg->date = $res['published'];
         $msg->title = $res['title'];
         $msg->content = $res['content'];
         $msg = json_encode($msg);
         echo $msg ; 

     }
     else{
     	$msg->status = -1;
     	$msg = json_encode($msg);
     	echo $msg ; 
     }

}

else{

	echo "<H3> LOST ? </H3>";
}


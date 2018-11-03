<?php

  // if(isset($_POST['request'])){
      $conn = mysqli_connect('localhost','abhyuday','A8HYU04Y','users');

     // $token = $_POST['token'];
     // $req = $_POST['req'];
      if(isset($_POST['user'])){     
      $uid = mysqli_escape_string($conn,trim($_POST['user']));
      //$uid = "276523RP3JO6S0XM";
      $cmd = "SELECT * FROM Grievances where uid = '$uid';";
      $sql = mysqli_query($conn,$cmd);
      $numRes = mysqli_num_rows($sql);
      if($numRes==0){
      	$msg->num=0;
      	$res = json_encode($msg);
      	echo $res;
      }
      else{
      $a  = array();
      $res->num = $numRes;
      
      
      while($row=mysqli_fetch_array($sql)){
      	$msg->date = $row['published'];
      	$msg->data = $row['content'];
      	$msg->dept = $row['dept.'];
      	$msg->title = $row['title'];
      	$msg->id = $row['gid'];
      	$msg->image = $row['image'];
      	$msg->status = $row['status'];
      	$n = json_encode($msg);
      	array_push($a, $n);
      	
      }
      $res->results = $a;
      $res = json_encode($res);
      echo $res;

      }
}
else{

	echo "<h3>Not Found</h3>";
}

   //}


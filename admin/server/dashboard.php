<?php
session_start();

if(isset($_POST['Get']) && isset($_SESSION['id'])){
    $conn = mysqli_connect('localhost','abhyuday','A8HYU04Y','users');
    $id = $_SESSION['id'] ; 
    $cmd = "SELECT * FROM Grievances where status = 0 ; " ; 
    $sql = mysqli_query($conn,$cmd) ; 
    $num = mysqli_num_rows($sql) ; 
    if($num==0){
    	$res->num = 0;
    	$res = json_encode($res) ; 
    	echo $res ; 
    }
    else{
    $arr = array();

    while($row = mysqli_fetch_array($sql)){
    	$msg->uid = $row['uid'] ;
    	$msg->gid = $row['gid'] ;  
    	$msg->date = $row['published'] ; 
    	$msg->title = $row['title'] ; 
    	$msg->dept = $row['dept.'] ; 
    	$msg->content = $row['content'] ; 
    	$n = json_encode($msg) ; 
    	array_push($arr, $n) ; 

    }
	
	$res->num = $num ;
	
	$res->results = $arr ;    
	$cmd = "SELECT * FROM Grievances where status = 1 ; " ;
	$sql = mysqli_query($conn,$cmd) ; 
	$succ = mysqli_num_rows($sql) ; 
	$res->succ = $succ ;

	$res = json_encode($res) ; 
	echo $res ; 




}
}
else{
	echo "<h3> Method not allowed !!! </h3>";

}
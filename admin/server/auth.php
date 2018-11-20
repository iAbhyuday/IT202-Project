<?php
session_start();

if(isset($_POST['id'])){
	$conn = mysqli_connect('localhost','abhyuday','A8HYU04Y','users');
	$id = mysqli_escape_string($conn,trim($_POST['id'])) ;
	$pass = mysqli_escape_string($conn,trim($_POST['pass'])) ;
	$cmd = "SELECT * FROM Admins Where id ='$id' ; " ;
	$sql = mysqli_query($conn,$cmd) ;
	if(mysqli_num_rows($sql)>0){
		$arr = mysqli_fetch_array($sql) ; 
		if($pass==$arr['password']){

				$res->success = 1;
				$res = json_encode($res) ; 
				
				$_SESSION['id'] = $arr['id'] ; 
				$_SESSION['name'] = $arr['name'] ; 
				echo $res ; 




		}
			else{
		//		err 
				$res->success = 0;
				$res = json_encode($res) ; 
				echo $res ; 

			}
	}
else{
	//err
				$res->success = 0;
				$res = json_encode($res) ; 
				echo $res ; 

}


}

else{
	echo "<h3> Method not allowed !!! </h3>" ;  
}
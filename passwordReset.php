<?php
if(isset($_GET['nusr'])){
	$conn = mysqli_connect('localhost','abhyuday','A8HYU04Y','users');
	$token = $_GET['nusr'];
	$mail = $_GET['email'];
	$cmd = "SELECT * FROM users WHERE Email = '$mail';";
	$sql = mysqli_query($conn,$cmd);
	if(mysqli_num_rows($sql)>0){
		$row = mysqli_fetch_array($sql);
		if($row['uid']==$token){
			$res = true;
		}
          else{
			header("location: LoginNew.php");
	        exit();	}	
		}
		else{
			header("location: LoginNew.php");
	        exit();
		}
}
elseif(isset($_POST['pass'])){
	$conn = mysqli_connect('localhost','abhyuday','A8HYU04Y','users');
    $pass = mysqli_escape_string($conn,trim($_POST['pass']));
    $uid = mysqli_escape_string($conn,trim($_POST['uid']));
    $hash = password_hash($pass,PASSWORD_BCRYPT);
    $cmd = "UPDATE users SET Password = '$hash' WHERE uid = '$uid';";
    $sql = mysqli_query($conn,$cmd);
    if($sql){
    	echo "Password has been Reset";
    }
    else{
    	echo "Somethong went wrong !";
    }
 exit();
}
else{
	header("location: LoginNew.php");
	exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
      <script
        src="js/Jquery.js"></script>
         <script src="js/materialize.min.js"></script>
  <link rel="stylesheet" href="css/lazyLoad.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet"> 
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="css/materialize.min.css">

  







	<title>Reset Password</title>
</head>
<body>
<div class="container" id="main">

  <div class="row ">

   <div class="col s12 m6 offset-m3 z-depth-1" style="padding: 30px;margin-top: 50px;background-color: white">
    <p style="display: hidden ; color: white" id="ui"><?php echo $token ;?></p>
    <p id="info" class="center"style="border-radius: 8px;background-color:#80ff80;width: 100% ; padding: 5px;color: #006600;display:none"></p>
     <form style="margin-top: 10px" id="form" method="POST" enctype='application/x-www-form-urlencoded' >
       <div class="row">
          <div class=" input-field col s12 ">
            <i class="material-icons prefix">vpn_key</i>
            <input type="password" name="password" id="password" class="validate" required="true">
            <label for="password" class="truncate">New Password</label>
        <!--span class="helper-text" data-error="Field is Required" data-success=""></span-->
          </div>
          </div>
          <div class="row">
          <div class=" input-field col s12 ">
            <i class="material-icons prefix">vpn_key</i>
            <input type="password" name="cpass" id="cpass" class="validate" required="true">
            <label for="cpass" class="truncate">Confirm Password</label>
        <!--span class="helper-text" data-error="Field is Required" data-success=""></span-->
          </div>
          </div>
          
          


          
           <div class="row center" style="margin-top: 15px">
     <button class="waves-effect btn-large red " style="" name="submit" type="submit">Reset</button>
         </div>
     </form>
   </div> 
  </div>
	</div>


<script type="text/javascript">
	$(document).ready(function(){
        
         $('#form').submit(function(e){
         	e.preventDefault();
         	pass = $('#password').val();
         	uid = $('#ui').html();
         	$.ajax({
         		type : 'post',
         		url : 'passwordReset.php',
         		data : {pass : pass,uid:uid},
         		processData : true,
         		beforeSend : function(){},
         		success : function(resp){
         			$('#info').fadeIn();
              $('#info').html("Password has been reset");
         			setTimeout(function(){window.location.replace("LoginNew.php");},4000);
         		}
         	})
         })
 


	})
</script>






</body>
</html>
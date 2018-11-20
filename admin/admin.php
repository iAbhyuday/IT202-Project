<?php 
session_start();
if (!isset($_SESSION['id'])) {
  header("location: adminLogin.php");
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
        src="../js/Jquery.js"></script>
         <script src="../js/materialize.min.js"></script>
  <link rel="stylesheet" href="../css/lazyLoad.css">
  <link href="https://fonts.googleapis.com/css?family=KoHo:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet"> 

    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet"> 
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="../css/materialize.min.css">

  

    <!-- Compiled and minified JavaScript -->
   

  <title>Dashboard</title>
	<style type="text/css">
		 .hilight{
      color: #1565c0;
      border-bottom: 2px solid #1565c0;
     }
     ul.right > li {
      font-family: 'Bitter';
      font-size: 19px;
     }

     .collapsible-body{
      font-family: 'EB Garamond', serif;
      font-size: 20px;
     }
     .collapsible-header{
      padding: 0;
      font-size: 1.2rem;
      font-family: 'Libre Baskerville', serif;
     }
     

@media only screen and (min-width: 993px) {
  #main {
    width: 70%;
  }
}

@media only screen and (min-width: 601px) {
   #main {
    width: 90%;
  }

}


	</style>
</head>
<body style="background-color: #F2F3F8">
       <div class="progress" style="display: block; width: 200px ; position: fixed;
  top: 50%;
  left: 50%;
  margin-top: -50px;
  margin-left: -100px;">
      <div class="indeterminate"></div>
  </div>

	<div class="navbar-fixed z-depth-3">  
  <nav class="nav-wrapper fixed" style="display: none ;background-color: #1565c0">
    
      
        
      <a href="#" class="" id="logo" style="font-size: 25px ; color: white ; margin-left: 10px;font-family: 'KoHo', serif;">Admin Dashboard</a>
      
      <a href="#" class="sidenav-trigger" data-target="side-links" style="width: 10%">
        <i class="material-icons">menu</i>
      </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        
        <li class=""><a href="#">Help</a></li>
    <li ><a href="logout.php">Logout</a></li>
   </ul>
</nav>

</div>

  <ul  class="sidenav" id="side-links">
    
   
    <li class=""><a href="#" >Help</a></li>
    <li ><a href="logout.php">Logout</a></li>
   

  </ul>
<div class="container" id="main">
	<div class="row">
		
    <div class="col s12 m8 z-depth-1" style="background-color: #ffff ; margin-top: 40px;padding: 40px ;" id="dashboard">
	   <p id="response"style="width:100%; background-color: #c2f0c2; border-radius: 8px ; padding: 5px;display: none" class="center" ></p>
	
  <ul class="collapsible expandable" style="border: 0!important;box-shadow: none!important;" id="list">
  </ul>
        
  

    </div>
            
  <div class="col hide-on-med-and-down m3 offset-m1 z-depth-1" style="background-color: #e8eaf6; margin-top: 40px;padding: 40px">
    <div class="row">
      <div class="col s12">
        <img src="../icons/husband.svg"style="height: 150px;width: 150px;margin:auto;margin-left: 40px;border:1px solid;border-radius: 50%">
      </div>


    </div>
    <div class="row">
      <div class="col s12"> <p><b>AdminID  :    </b>&nbsp &nbsp<span id="id"><?php echo $_SESSION['id'];?></span></p></div>
      <div class="col s12"> <p><b>Name  :    </b>&nbsp &nbsp<?php echo $_SESSION['name'];?></p></div>
            <div class="col s12"> <p><b>Resolved issues :</b>  <span id="resolve"></span></span></p></div>

  </div>
  </div>
		</div>

		
	</div>
<!-- Create Button --->



<!--form modal -->










<div class="fixed-action-btn" style="display: none" id="setting">
  <a class="btn-floating btn-large red">
    <i class="large material-icons">settings</i>
  </a>
  <ul>
    <li id="delete"><a class="btn-floating red"><i class="material-icons">cancel</i></a></li>
    <li id="reso"><a class="btn-floating green"><i class="material-icons">mode_edit</i></a></li>
  
  </ul>

<!--MODAL -->
</div>

  
 <div id="pallete" class="modal bottom-sheet">
    <div class="modal-content" id="delmsg">
     
    </div>
    <div class="modal-footer ">
     <a class="btn-small green" id="delConfirm" ><i class="material-icons left" >cloud</i>Yes</a>
    <a class="waves-effect waves-light btn-small red" id="noDel"><i class="material-icons right">cloud</i>No</a>
    </div>
  </div>


  <script type="text/javascript">
  
$(document).ready(function (){
  $('#pulse').click(function(){
      $('.placeholder').removeClass('wave').addClass('pulse');
  })
  
  $('#wave').click(function(){
      $('.placeholder').removeClass('pulse').addClass('wave');
  })
});
</script>
<script src="../js/materialize.js"></script>
<script src="js/load.js"></script>

       </body>
</html> 
<?php 
session_start();
if (!isset($_SESSION['uid'])) {
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

  

    <!-- Compiled and minified JavaScript -->
   

  <title>Dashboard</title>
	<style type="text/css">
		 .collapsible-body{
      font-family: 'EB Garamond', serif;
      font-size: 20px;
     }
     .collapsible-header{
      padding: 0;
      font-size: 1.2rem;
      font-family: 'Libre Baskerville', serif;
     }
     
     #main {
               margin: 0 auto;
               max-width: 1280px;
                width: 90%;
                    }

@media only screen and (min-width: 993px) {
  #main {
    width: 70%;
  }
}

@media only screen and (min-width: 601px) {
   #main {
    width: 75%;
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

	<div class="navbar-fixed">  
  <nav class="nav-wrapper fixed" style="display: none ;background-color: black">
    
      
        
      <a href="#" class="" id="logo" style="font-size: 19px ; color: #efbd09 ; margin-left: 10px">Dashboard</a>
      
      <a href="#" class="sidenav-trigger" data-target="side-links" style="width: 10%">
        <i class="material-icons">menu</i>
      </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#" id="uid"><?php echo $_SESSION['uid']?></a></li>
        <li class=""><a href="#">Help</a></li>
    <li ><a href="logout.php">Logout</a></li>
   </ul>
</nav>

</div>

  <ul  class="sidenav" id="side-links">
    
    <li><p class="uid"><?php echo $_SESSION['uid']?></p></li>
    <li class=""><a href="#" >Help</a></li>
    <li ><a href="logout.php">Logout</a></li>
   

  </ul>
<div class="container" id="main">
	<div class="row">
		
    <div class="col s12 m9 z-depth-1" style="background-color: #ffff ; margin-top: 40px;padding: 40px" id="dashboard">
	   <p id="response"style="width:100%; background-color: #c2f0c2; border-radius: 8px ; padding: 5px;display: none" class="center" ></p>
	
  <ul class="collapsible expandable" style="border: 0!important;box-shadow: none!important;" id="list">
  </ul>
        
  

    </div>
            
  
		</div>

		
	</div>
<!-- Create Button --->



 <div class="fixed-action-btn click-to-toggle" style="display: block" id="create">
  <a class="btn-floating btn-large red">
    <i class="large material-icons">mode_edit</i>
  </a>
  
</div>
<!--form modal -->








  <div id="form-modal" class="modal">
    <div class="modal-content">
     <div class="row">
       <div class="col s12 m12">
          <form id="form" method="post">
        <div class="row">
          <div class=" input-field col s12 ">
            <i class="material-icons prefix">bookmark</i>
            <input type="text" name="title" id="fname" class="validate" required="true">
            <label for="fname" class="truncate">Subject</label>
        <!--span class="helper-text" data-error="Field is Required" data-success=""></span-->

          

        </div>
      </div>
          <div class="row">
            
            
            <div class="input-field col s12 ">
              <i class="material-icons prefix">location_city</i>
               <select name="dept" class="validate" required="true">
      <option value="" disabled selected>Concerned Authority</option>
      <option value="Administrative Reforms and PG">Administrative Reforms and PG    </option> 

<option value="Agriculture and Cooperation">Agriculture and Cooperation</option>

<option value="Agriculture Research and Education ">Agriculture Research and Education </option> 

<option value="Animal Husbandry, Dairying and Fisheries">Animal Husbandry, Dairying and Fisheries</option>

<option value="Atomic Energy">Atomic Energy   </option>

<option value="Bio Technology ">Bio Technology  </option>

<option value="Central Board of Direct Taxes (Income Tax)">Central Board of Direct Taxes (Income Tax)</option>

<option value="Central Board of Excise and Customs">Central Board of Excise and Customs   </option>

<option value="Chemicals and Petrochemicals ">Chemicals and Petrochemicals  </option>

<option value="Civil Aviation ">Civil Aviation  </option>

<option value="Coal">Coal   </option>

<option value="Consumer Affairs ">Consumer Affairs  </option>

<option value="Corporate Affairs ">Corporate Affairs</option>  

<option value="Culture">Culture   </option>


<option value="Defence">Defence</option>

    </select>
    <label>Concerned Authority</label>
                </div>
      </div>

      <div class="row">
          <div class="input-field col s11 ">
           <i class="material-icons prefix">description</i>
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Description</label>
        </div>
        </div>
        <div class="row">
       
         <div class="file-field input-field col s11 ">
      <div class="btn">
        <span>File</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input id="imgFile"class="file-path validate" type="text" placeholder="Releted Image (Optional)">
      
      </div>
    </div>



          </div>
            

        
        
     
     <button  name="sub" type="submit">Agree</button> 
</form>

</div>
</div>
   

  </div>
   
</div>




<div class="fixed-action-btn" style="display: none" id="setting">
  <a class="btn-floating btn-large red">
    <i class="large material-icons">settings</i>
  </a>
  <ul>
    <li id="delete"><a class="btn-floating red"><i class="material-icons">delete</i></a></li>
    <li id="edit"><a class="btn-floating yellow"><i class="material-icons">mode_edit</i></a></li>
  
  </ul>

<!--MODAL -->
</div>

  
 <div id="pallete" class="modal bottom-sheet">
    <div class="modal-content">
     
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
<script src="js/materialize.js"></script>
<script src="js/dashboard.js"></script>

       </body>
</html> 
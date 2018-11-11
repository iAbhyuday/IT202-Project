<?php


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
   

  <title>Current Status</title>
	<style type="text/css">
		 

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
  margin-left: -100px;" id="loader">
      <div class="indeterminate"></div>
  </div>
      <div class="navbar-fixed" id="nav">  
  <nav class="nav-wrapper fixed" style="display: none ;background-color: #ff6d00">
    
      
        
      <a href="#" class="" id="logo" style="font-size: 19px ; color: black ; margin-left: 10px">Grievance Redressal Portal</a>
      
      <a href="#" class="sidenav-trigger" data-target="side-links" style="width: 10%">
        <i class="material-icons">menu</i>
      </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class=""><a href="index.php">Register</a></li>
    <li><a href="#">View Status</a></li>
    <li  class="active"><a href="#">Login</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Process</a></li>
    <li><a href="#">FAQ</a></li>
    <li><a href="#">Help</a></li>
      </ul>

  
  </nav>
    
</div>
  <ul class="sidenav" id="side-links">
    <li class="active"><a href="index.php" >Register</a></li>
    <li><a href="#">View Status</a></li>
    <li><a href="#">Login</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Process</a></li>
    <li><a href="#">FAQ</a></li>
    <li><a href="#">Help</a></li>


  </ul>
  <div class="progress" style="display: none;position: fixed;margin-top: 0" id="sender">
      <div class="indeterminate"></div>
  </div>
<div class="container" id="main">

  <div class="row ">

   <div class="col s12 m6 offset-m3 z-depth-1" style="padding: 30px;margin-top: 50px;background-color: white">
    <img src="icons/energy.svg" style="height: 80px;width: 80px;margin-left: 40%">
    <p id="info" class="center"style="border-radius: 8px;background-color:#ff9999;width: 100% ; padding: 5px;color:red;display:none"></p>
     <form style="margin-top: 10px" id="form" method="POST" enctype='application/x-www-form-urlencoded' >
       <div class="row">
          <div class=" input-field col s12 ">
            <i class="material-icons prefix">email</i>
            <input type="text" name="gid" id="gid" class="validate" required="true">
            <label for="gid" class="truncate">Grievance ID</label>
        <!--span class="helper-text" data-error="Field is Required" data-success=""></span-->
          </div>
          </div>
          <div class="row">
          <div class=" input-field col s12 ">
            <i class="material-icons prefix">vpn_key</i>
            <input type="text" name="uid" id="uid" class="validate" required="true">
            <label for="password" class="truncate">User ID</label>
        <!--span class="helper-text" data-error="Field is Required" data-success=""></span-->
          </div>
          </div>
          
            

          
           <div class="row center" style="margin-top: 15px">
     <button class="waves-effect btn-large blue " style="" name="submit" type="submit">View Status</button>
         </div>
     </form>
   </div> 
  </div>
	</div>

<!--Modal -->



<div class="modal" id="modal">
   

  <div class="modal-content">
    

        <div id="msg" class="col s8 offset-s3 m8 offset-m2  " style="align:center" >
              <div class="col s7 m7 ">
              <h6 style="font-family: 'Oswald', sans-serif; height: 1px font-size:1rem" >Grivence Redressal Portal</h6>
             
             <div class="row">
               <ul id="list" class="collapsible">
                 
               </ul>
           
          </div>            
            
            

            </div>
           

         </div>
      
    </div>
  </div>







<!---d-->  
<script src="js/materialize.js"></script>
<script type="text/javascript">
 
  $(document).ready(function(){
    
    $('.progress').hide();
   $('nav').fadeIn();
   $('.sidenav').sidenav();
   $('footer').fadeIn();
$('.modal').modal();
$('.collapsible').collapsible();
   $('#form').submit(function(e){
    var data = $(this).serialize();
    //console.log(data);
    e.preventDefault();
    $.ajax({
      type :'post',
      url : 'server/status.php',
      data : data,
      processData : false,
      beforeSend : function(){
        $('#sender').fadeIn();

      },
      success: function(resp){
          x =  JSON.parse(resp);
          console.log(x);
          if(x.status==-1){
            $('#info').fadeIn().html("Check your Inputs !");
          }
          else{
            if(x.data==-1){
              $('#modal').modal('open');
               $('#list').prepend(`<li name="${x.title}"><div class=\"collapsible-header \"><p class="inner"style="width:100%">${x.title}</p> <abbr title="Rejected"><p class="btn-floating red pulse right"style="height:30px;width:30px;margin-top:15px" ></p></abbr></div><div class=\"collapsible-body\"><span>${x.content}</span><p style="width: 100%;border-top: solid 1px lightgrey">Submitted on :${x.date}</p></div></li>`);
            }
            else if(x.data==1){
              $('#modal').modal('open');
              $('#list').prepend(`<li name="${x.title}"><div class=\"collapsible-header \"><p class="inner"style="width:100%">${x.title}</p> <abbr title="Resolved"><p class="btn-floating green pulse right"style="height:30px;width:30px;margin-top:15px" ></p></abbr></div><div class=\"collapsible-body\"><span>${x.content}</span><p style="width: 100%;border-top: solid 1px lightgrey">Submitted on :${x.date}</p></div></li>`);
            }
            else{
              $('#modal').modal('open');
               $('#list').prepend(`<li name="${x.title}"><div class=\"collapsible-header \"><p class="inner"style="width:100%">${x.title}</p><abbr title="Submitted"> <p class="btn-floating yellow pulse right"style="height:30px;width:30px;margin-top:15px" ></abbr></p></div><div class=\"collapsible-body\"><span>${x.content}</span><p style="width: 100%;border-top: solid 1px lightgrey">Submitted on :${x.date}</p></div></li>`);
            }

          }
          }
          });
      });
   $('#modal').modal({
    onCloseEnd : function(){
      window.location.reload();
    }
   })
  $('#forgot').click(function(e){
    e.preventDefault();
    $('#modal').modal('open');
  })
  $('#send').click(function(e){
    e.preventDefault();

    mail = $('#fmail').val();
    $.ajax({
        type: 'post',
        url : 'server/forgotMailer.php',
        data : {mail : mail},
        processData : true,
        beforeSend: function(){

        },
        success: function(res){
          
          $('#modal').modal('close');
          alert(res);
        }
      

  })


})




    })




  

 
;
 
</script>

       </body>
</html> 
<?php
session_start();
if(isset($_SESSION['uid'])){
  header("location: dashboard.php");
  exit();
}

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
   <link href="https://fonts.googleapis.com/css?family=KoHo:500" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Dosis|Oswald" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="css/materialize.min.css">

    <script
        src="js/Jquery.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="js/materialize.min.js"></script>
    
    <title>Registration</title>
    

        <style type="text/css">
          

















          ul.right > li{
  font-family: 'Bitter', sans-serif;  
} 
          .error{
            color: red;
            margin-left: 40px;
            font-size: 12px;
          }

          .brand-logo{
            width: 50%;
            height: 100%;
          }
        label{
          font-family: 'Montserrat', bold;
        }

    
@media only screen and (min-width: 993px) {
  #main {
    width: 70%;
  }
}

@media only screen and (max-width: 601px) {
      .brand-logo{
            width: 40%;
            height: 100%;
          }     
      #formWrapper{
        padding: 15px;
        }

  img{
    height: 100px;
    width: 100px;

  }
  #reg{
    font-size: 1.5rem;
    margin-left: 10px;
    
  }
  #MainRow{
    padding: 8px;
  }
  #side{
    margin-top: 20px;
  }
}
@media only screen and (min-width: 601px) {
   #main {
    width: 75%;
  }

   img{
    height: 200px;
    width: 200px;
    
   }
    #reg{
         font-size: 1.7rem;
         margin-top: 0px;

    } 
    #MainRow{
      padding: 17px;
      }

      #formWrapper{
        padding: 20px;
        } } 

     </style>
</head>

        

<body>

    <div class="progress" style="display: block; width: 200px ; position: fixed;
  top: 50%;
  left: 50%;
  margin-top: -50px;
  margin-left: -100px;" id="loader">
      <div class="indeterminate"></div>
  </div>
       <div class="navbar-fixed z-depth-3" id="nav">  
  <nav class="nav-wrapper fixed" style="display: none ;background-color: #1565c0">
    
      
       <img class="brand-logo hide-on-med-and-down" src="icons/logo.svg" style="height:50px;width: 50px ; margin-top:7px;margin-left: 10px">    
      <a href="#" class="" id="logo" style="font-size: 25px ; color: white ; margin-left: 70px;font-family: 'KoHo', serif;">Grievance Redressal Portal</a>
      
      <a href="#" class="sidenav-trigger" data-target="side-links" style="width: 10%">
        <i class="material-icons">menu</i>
      </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="active"><a href="index.php">Register</a></li>
    <li><a href="Status.php">View Status</a></li>
    <li  class=""><a href="LoginNew.php">Login</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Process</a></li>
    <li><a href="#">FAQ</a></li>
    <li><a href="#">Help</a></li>
      </ul>

  
  </nav>
    
</div>
  <ul class="sidenav" id="side-links">
    <li class="active"><a href="#" >Register</a></li>
    <li><a href="Status.php">View Status</a></li>
    <li><a href="LoginNew.php">Login</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Process</a></li>
    <li><a href="#">FAQ</a></li>
    <li><a href="#">Help</a></li>


  </ul>
  <div class="progress" style="display: none;position: fixed;margin-top: 0" id="sender">
      <div class="indeterminate"></div>
  </div>
<div id="main"class="container"style="margin-bottom: 200px;margin-top: 40px  ;display : none" id="content">
  <div class="row "style="" >
    <div class="col s12 m7" style="background-color: white" id="formWrapper">
      <p id="info" class="center"style="border-radius: 8px;background-color:#ff9999;width: 100% ; padding: 5px;color:red;display:none"></p>
      <form id="form" method="post">
        <div class="row">
          <div class=" input-field col s12 m6">
            <i class="material-icons prefix">account_circle</i>
            <input type="text" name="FirstName" id="fname" class="validate" required="true">
            <label for="fname" class="truncate">First Name</label>
        <!--span class="helper-text" data-error="Field is Required" data-success=""></span-->

          </div>
            <div class=" input-field col s10 right m6 ">
          <input id="lname" name= "LastName" type="text" class="validate">
          <label for="lname">Last Name</label>
        </div>

        </div>
          <div class="row">
            <div class="input-field col s12 m6">
              <i class="material-icons prefix">child_care</i>
              <input type="text" name="DOB" id="DOB" class="datepicker validate" required="true">
            <label for="DOB">Date of Birth</label>
      <!--span class="helper-text" data-error="Please select a valid date" data-success=""></span-->

          </div>
            
            <div class="input-field col s12 m6">
              <i class="material-icons prefix">wc</i>
               <select name="gender" class="validate" required="true">
      <option value="" disabled selected>Select ...</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Other</option>
    </select>
    <label>Gender</label>
                <!--span class="helper-text" data-error="Select one" data-success=""></span-->



            </div>
      </div>

      <div class="row">
          <div class=" input-field col s12 ">
            <i class="material-icons prefix">person_pin_circle</i>
            <input type="text" name="Address" id="Address" class="validate" required="true">
            <label for="Address">Address</label>
          <!--span class="helper-text" data-error="Enter a valid Address !" data-success=""></span-->
          </div>
        </div>
        <div class="row">
            <div class=" input-field col s12 m6">
            <i class="material-icons prefix">public</i>
            <input type="text" name="country" id="country" class="validate" required="true">
            <label for="country">Country</label>
          <!--span class="helper-text" data-error="Enter your Country's name" data-success=""></span-->
          </div>

           <div class=" input-field col s12 m6">
            <i class="material-icons prefix">room</i>
            <input type="text" name="state" id="state" class="validate" required="true">
            <label for="state">State</label>
          <!--span class="helper-text" data-error="Enter your State's name" data-success=""></span-->
          </div>
            

        </div>
          
             <div class="row">
            <div class=" input-field col s12 m6">
            <i class="material-icons prefix">domain</i>
            <input type="text" name="city" id="city" class="validate" required="true">
            <label for="city">City</label>
            <!--span class="helper-text" data-error="Enter your City's name" data-success=""></span-->
          </div>

           <div class=" input-field col s12 m6">
            <i class="material-icons prefix">directions</i>
            <input type="text" name="ZipCode" id="zcode" class="validate" required="true">
            <label for="zcode">Zip Code</label>
          <!--span class="helper-text" data-error="Enter a valid ZipCode" data-success=""></span-->

          </div>
            

        </div>

        <div class="row">
            <div class=" input-field col s12 m6">
            <i class="material-icons prefix">call</i>
            <input type="text" name="phone" id="phone" class="validate" required="true">
            <label for="phone">Contact Number</label>
            <!--span class="helper-text" data-error="Enter a valid Contact Number" data-success=""></span-->
          </div>

           <div class=" input-field col s12 m6">
            <i class="material-icons prefix">email</i>
            <input type="email" name="email" id="email" class="validate">
            <label for="email">Email</label>
            <!--span class="helper-text" data-error="Invalid Email Address" data-success=""></span-->
          </div>
            

        </div>

         <div class="row">
            <div class=" input-field col s12 m6">
            <i class="material-icons prefix">vpn_key</i>
            <input type="password" name="password" id="password" class="validate">
            <label for="password">Create Password</label>
          <!--span class="helper-text" data-error="Minimum 5 characters required" data-success=""></span-->
          </div>

           <div class=" input-field col s12 m6">
            <i class="material-icons prefix">priority_high</i>
            <input type="password" name="cpass" id="cpass" class="validate">
            <label for="cpass" class="truncate">Confirm Password</label>
          <!--span class="helper-text" data-error="Password does'nt match" data-success="" id="cpasst"></span-->
          </div>
            

        </div>
<div class="row center">
  <button class="btn-large  blue darken-4" type="submit" name="submit" id="submit">Register
    <i class="material-icons right">beenhere</i>
  </button>
        </div>
</form>


</div>
  <div class="col m4 offset-m1 center hide-on-med-and-down "  id="side" style="background-color: white">
    <div class="row " style="padding: 10%">
      <img src="icons/approve.svg" class="center" style="display: none;margin-top: 75px" >
    </div>
    <div class="row" style="padding: 10%">
      <p id="reg" style=" font-family: 'Bitter', sans-serif ;color: grey" class="flow-text" c>Register to lodge your first Grievance.</p>
    </div>
  </div>    
  </div>
</div>  
<!--Modal -->

<div class="modal" id="modal">
   

  <div class="modal-content">
    

        <div id="msg" class="col s8 offset-s3 m8 offset-m2  " style="align:center" >
              <div class="col s7 m7 ">
              <h6 style="font-family: 'Oswald', sans-serif; height: 1px font-size:1rem" >Grivence Redressal Portal</h6>
              
            
            <div class="col s12  m12" style="padding:0px ">
              <h4 style="font-family: 'Oswald', sans-serif;">Please Verify Your Email</h4>  
            </div>
            <div class="col s12  m12" style="padding:0px" >
              <h5 style=" font-family: 'Oswald', sans-serif; font-family: 'Dosis', sans-serif;"> Your account has been created ! go to your inbox to verify your Email Address </h5>
            </div>
            </div>
            <div class="col s12 m5 center" style="padding:25px">
           <img src="icons/email.svg" alt="pic" />
          </div>
         </div>
      
    </div>
  </div>

 <footer class="page-footer" style="background-color:#0277bd ; display : none" id="foot">
         
          <div class="footer-copyright"style="background-color: #01579b">
            <div class="container">
            © Grievance Redressal Portal
            <a class="grey-text text-lighten-4 right" href="#!"></a>
            </div>
        
        </footer>
            


<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>


<script src="js/materialize.js"></script>
  
  
<script src="js/registration.js"></script>
 </body>

</html>
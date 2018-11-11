<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">
    <!-- Compiled and minified CSS -->
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="js/materialize.min.js"></script>
            
<script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
  
    
    
    <title>DepartmentLogin</title>
    

        <style type="text/css">
          .brand-logo{
            width: 50%;
            height: 100%;
          }
        label{
          font-family: 'Montserrat', bold;
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




    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    body {
      background: #fff;
    }

    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
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
  <nav class="nav-wrapper fixed" style="display: none ;background-color: #ff6d00">
    
      
        
      <a href="#" class="" id="logo"style="font-size: 24px ; color: black ; margin-left: 10px">Grievance Redressal Portal</a>
      
      <a href="#" class="sidenav-trigger" data-target="side-links" style="width: 10%">
        <i class="material-icons">menu</i>
      </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li ><a href="index.php">Register</a></li>
    <li><a href="#">View Status</a></li>
    <li class="active"><a href="#">Login</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Process</a></li>
    <li><a href="FAQ.php">FAQ</a></li>
    <li><a href="#">Help</a></li>
      </ul>

  
  </nav>
</div>
  <ul class="sidenav" id="side-links">
    <li ><a href="index.php" >Register</a></li>
    <li><a href="#">View Status</a></li>
    <li class="active"><a href="#">Login</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Process</a></li>
    <li><a href="FAQ.php">FAQ</a></li>
    <li><a href="#">Help</a></li>
</ul>


<div id="main"class="container" style="margin-bottom: 70px; margin-top: 70px ; width:400px; background-color: white ;display : none" id="content">
    <div class="z-depth-3 teal lighten-2" style="padding-top: 10px; padding-bottom: 50px; padding-right: 30px; padding-left: 30px;" id="formWrapper">
       <h5 class="center" style="margin-bottom: 20px;">Login(Admin)</h5>
     
     
    <div  style="background-color: white" id="formWrapper">
      <p id="info" class="center"style="border-radius: 8px;background-color:#ff9999;width: 100% ; padding: 5px;color:red;display:none"></p>
      <form id="form" method="post">
        <div class=" input-field col s12 m6">
            <i class="material-icons prefix">account_balance</i>
            <select name="department" class="validate" required="true">
      <option value="" disabled selected>Select ...</option>
      <option value="Banking">Banking</option>
      <option value="CGHS">CGHS</option>
      <option value="Civil Aviation">Civil Aviation</option>
      <option value="Education">Education</option>
      <option value="ESI Corporation">ESI Corporation</option>
      <option value="Insurance">Insurance</option>
      <option value="National Saving Scheme">National Saving Scheme </option>
      <option value="Passport Authority">Passport Authority</option>
      <option value="Petroleum and Netural Gas">Petroleum and Netural Gas</option>
      <option value="Posts">Posts</option>
      <option value="Provident Fund">Provident Fund</option>
      <option value="Railways">Railways</option>
      <option value="Road Transport & Highways">Road Transport & Highways</option>
      <option value="Shipping">Shipping</option>
      <option value="Telecommunication">Telecommunication</option>
      <option value="Tourism">Tourism</option>
      <option value="Urban Affairs & Employment">Urban Affairs & Employment</option>
      <option value="Youth Affairs">Youth Affairs</option>
    </select>
        <!--span class="helper-text" data-error="Field is Required" data-success=""></span-->

          </div>
           <div class=" input-field col s12 m6">
            <i class="material-icons prefix">email</i>
            <input type="email" name="email" id="email" class="validate" required="true">
            <label for="email" >Email</label>
        <!--span class="helper-text" data-error="Field is Required" data-success=""></span-->

          </div>
         <div class=" input-field col s12 m6">
            <i class="material-icons prefix">vpn_key</i>
            <input type="password" name="password" id="password" class="validate" required="true">
            <label for="password" >Password</label>
        <!--span class="helper-text" data-error="Field is Required" data-success=""></span-->

          </div>
          <div class="row center">
  <button class="btn" type="submit" name="submit" id="submit">Login
    <i class="material-icons left">lock_open</i>
  </button>
        </div>
</form>


</div>

</div> 
  
</div>  
    
    <div align="right" style="padding-right: 30px; padding-bottom: 10px;">
 <a class="btn-floating pulse " onclick="topFunction()" id="myBtn"><i class="material-icons">arrow_upward</i></a>
      </div>
 <footer class="page-footer" style="background-color: #ff6d00 ; display : none" id="foot">
          <div class="container" >
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright"style="background-color: #e65100">
            <div class="container">
            © 2014 Copyright Text

          <!-- <button onclick="topFunction()" id="myBtn" class="btn right" title="Go to top">Top</button>-->
            </div>
          </div>
        </footer>


<!--script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script-->

 <script src="js/materialize.min.js"></script>
  
  <!--script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script-->


<script type="text/javascript">
 
  $(document).ready(function(){
    $('.progress').hide();
    //$('.datepicker').datepicker();
    $('select').formSelect();
    $('nav').fadeIn();
    $('#main').fadeIn();
    $('img').fadeIn(3000);
    $('#foot').fadeIn();

  
    $('.sidenav').sidenav();
    
 

    
 });
     
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    //document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}



    

  // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
  // var collapsibleElem = document.querySelector('.collapsible');
  // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

  // Or with jQuery

 
</script>


       
</body>

</html>

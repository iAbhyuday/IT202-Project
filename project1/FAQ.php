<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet">
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
    <li><a href="departlogin.php">Login</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Process</a></li>
    <li class="active"> <a href="#">FAQ</a></li>
    <li><a href="#">Help</a></li>
      </ul>

  
  </nav>
</div>
  <ul class="sidenav" id="side-links">
    <li ><a href="index.php" >Register</a></li>
    <li><a href="#">View Status</a></li>
    <li><a href="departlogin.php">Login</a></li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Process</a></li>
    <li class="active"><a href="#">FAQ</a></li>
    <li><a href="#">Help</a></li>
</ul>


<div id="main"class="container" style="margin-top: 50px; margin-bottom: 50px;">
    
    
     
 <ul class="collapsible" style="font-family: 'EB Garamond', serif; font-size:20px;">
  <h5 class=" purple-text text-darken-1 center">FAQ</h5>
  <p class="center blue-text text-darken-1">Frequently Asked Questions on Grievance Redress Mechanism in Government of India and the Role of Department of Administrative Reforms and Public Grievance</p>
    <li class="active">
      <div class="collapsible-header purple-text text-darken-1">1.How do I lodge the grievance?</div>
      <div class="collapsible-body blue-text text-darken-1"><span>The grievances can be lodged online on . In cases where internet facility is not available or even otherwise, the citizen is free to send her/his grievance by Post. There is no prescribed format.<br>

The grievance may be written on any plain sheet of paper or on a Postcard / Inland letter and addressed to the Department.</span></div>
    </li>
    <li>
      <div class="collapsible-header purple-text text-darken-1">2.What happens when I lodge the grievance?</div>
      <div class="collapsible-body blue-text text-darken-1"><span>The grievance is acknowledged online or by post. A unique registration number is given to each grievance.</span></div>
    </li>
    <li>
      <div class="collapsible-header purple-text text-darken-1">3.What is the time limit for redress of grievance?</div>
      <div class="collapsible-body blue-text text-darken-1"><span>Sixty (60) days. In case of delay an interim reply with reasons for delay is required to be given.</span></div>
    </li>
    <li>
      <div class="collapsible-header purple-text text-darken-1">3.What is the time limit for redress of grievance?</div>
      <div class="collapsible-body blue-text text-darken-1"><span>Sixty (60) days. In case of delay an interim reply with reasons for delay is required to be given.</span></div>
    </li>
    <li>
      <div class="collapsible-header purple-text text-darken-1">3.What is the time limit for redress of grievance?</div>
      <div class="collapsible-body blue-text text-darken-1"><span>Sixty (60) days. In case of delay an interim reply with reasons for delay is required to be given.</span></div>
    </li>
  </ul>


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
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
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
    $('.collapsible').collapsible();
    //$('select').formSelect();
    $('nav').fadeIn();
    $('#main').fadeIn();
   // $('img').fadeIn(3000);
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

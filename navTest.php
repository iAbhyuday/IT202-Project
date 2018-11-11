<!DOCTYPE html>
<html>
<head>
	    <link rel="stylesheet" href="css/materialize.min.css">

	<style type="text/css">
		
.green
{
    background: #4caf50;
}




		div.container
{
    font-family: Raleway;
    margin: 0 auto;
	padding: 10em 3em;
	text-align: center;
}

ul.yala li
{
    color: #FFF;
    text-decoration: none;
    font: 20px Raleway;
    margin: 0px 10px;
    padding: 10px 10px;
    position: relative;
    z-index: 0;
    cursor: pointer;
}



		ul.yala li:before, ul.yala li:after
{
    position: absolute;
    opacity: 0;
    width: 0%;
    height: 2px;
    content: '';
    background: #FFF;
    transition: all 0.3s;
}

ul.yala li:before
{
    left: 0px;
    top: 0px;
}

ul.yala li:after
{
    right: 0px;
    bottom: 0px;
}

ul.yala li:hover:before, ul.yala li:hover:after
{
    opacity: 1;
    width: 100%;
}

	</style>

	<title></title>
</head>
<body>

 


	<div class="navbar-fixed">  
  <nav class="nav-wrapper fixed" style="display: none ;background-color: black">
    
      
        
      <a href="#" class="" id="logo" style="font-size: 19px ; color: #efbd09 ; margin-left: 10px">Dashboard</a>
      
      <a href="#" class="sidenav-trigger" data-target="side-links" style="width: 10%">
        <i class="material-icons">menu</i>
      </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down yala">
        <li><a href="#" id="uid"></a></li>
        <li class=""><a href="#">Help</a></li>
    <li ><a href="server/logout.php">Logout</a></li>
   </ul>
</nav>

</div>

  <ul  class="sidenav" id="side-links">
    
    <li><p class="uid"></p></li>
    <li class=""><a href="#" >Help</a></li>
    <li ><a href="#">Logout</a></li>
   

  </ul>
</body>
</html>
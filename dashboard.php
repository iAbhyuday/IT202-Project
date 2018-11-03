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
  <nav class="nav-wrapper fixed" style="display: none ;background-color: #ff6d00">
    
      
        
      <a href="#" class="" id="logo" style="font-size: 19px ; color: black ; margin-left: 10px">Dashboard</a>
      
      <a href="#" class="sidenav-trigger" data-target="side-links" style="width: 10%">
        <i class="material-icons">menu</i>
      </a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class=""><a href="#">Help</a></li>
    <li><a href="#">Logout</a></li>
   </ul>
</nav>

</div>

  <ul  class="sidenav" id="side-links">
    <li class=""><a href="#" >Help</a></li>
    <li><a href="#">Logout</a></li>
   

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

<!-- Button -->
  <div class="fixed-action-btn" style="display: none" id="action">
  <a class="btn-floating btn-large red">
    <i class="large material-icons">settings</i>
  </a>
  <ul>
    <li id="delete"><a class="btn-floating red"><i class="material-icons">delete</i></a></li>
    <li id="edit"><a class="btn-floating yellow"><i class="material-icons">mode_edit</i></a></li>
  
  </ul>

<!--MODAL -->
</div>
 <div id="modal1" class="modal bottom-sheet">
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
<script type="text/javascript">
 
  $(document).ready(function(){
    
    $('.progress').hide();
   $('.modal').modal();
     $('#list').collapsible({
    onOpenEnd: function(){
      $('#action').fadeIn();
    },
    onCloseEnd  :function(){
      $('#action').fadeOut();
    }
   });
      $('.fixed-action-btn').floatingActionButton();
     $('.modal').modal({onCloseEnd:function(){
      $('#list .active').css('background-color','white');
     }})
   
    $('nav').fadeIn();

    $('.sidenav').sidenav();

$.ajax({
    type: 'post',
    url: 'server/dataLoad.php',
    data: {user:"276523RP3JO6S0XM"},
    processData:true,
    beforeSend:function(){
      $('#list').append("<li class=\"placeholder wave\"><div class=\"line\"></div><div class=\"line\"></div><div class=\"line\"></div></li>");

    },
    success: function(resp){
     //$('li').remove();
     var data = JSON.parse(resp);
     console.log(data);
     for(i=0;i<data.num;i++){
      x = JSON.parse(data.results[i]);
      //console.log(x);
      if(x.status==-1){
      $('#list').prepend(`<li name="${x.id}"><div class=\"collapsible-header \"><p class="inner"style="width:100%">${x.title}</p> <abbr title="Rejected"><p class="btn-floating red pulse right"style="height:30px;width:30px;margin-top:15px" ></p></abbr></div><div class=\"collapsible-body\"><span>${x.data}</span><p style="width: 100%;border-top: solid 1px lightgrey">Submitted on :${x.date}  <span class="right">GID : ${x.id}</span></p></div></li>`);
    }
      else if(x.status==1){

        $('#list').prepend(`<li name="${x.id}"><div class=\"collapsible-header \"><p class="inner"style="width:100%">${x.title}</p> <abbr title="Resolved"><p class="btn-floating green pulse right"style="height:30px;width:30px;margin-top:15px" ></p></abbr></div><div class=\"collapsible-body\"><span>${x.data}</span><p style="width: 100%;border-top: solid 1px lightgrey">Submitted on :${x.date}  <span class="right">GID : ${x.id}</span></p></div></li>`);
      }
       
       else{

        $('#list').prepend(`<li name="${x.id}"><div class=\"collapsible-header \"><p class="inner"style="width:100%">${x.title}</p><abbr title="Submitted"> <p class="btn-floating yellow pulse right"style="height:30px;width:30px;margin-top:15px" ></abbr></p></div><div class=\"collapsible-body\"><span>${x.data}</span><p style="width: 100%;border-top: solid 1px lightgrey">Submitted on :${x.date}  <span class="right">GID : ${x.id}</span></p></div></li>`);


       }

     }
     $('.placeholder').remove();

    }



    
   });


    $('#delete').click(function(){
      var title = $('ul .active .collapsible-header .inner').html();
        $('#list .active ').css('background-color','lightgrey');
        
        $('.modal-content h5').remove();
        $('.modal-content').append(`<h5 class="center">Do you want to Delete ${title} ?</h5>`);
     


           $('.modal').modal('open');
      name = $('#list .active').attr('name');
      console.log(name);
      
    });


    $("#delConfirm").click(function(){
          var name = $('#list .active').attr('name');
          console.log(name);
          $.ajax({
            type: 'post',
            url :'server/updater.php',
            data: {gid:name,method:"delete",uid:"276523RP3JO6S0XM"},
            processData: true,
            beforeSend: function(){
              $('.modal').modal('close');
             // $('#sender').fadeIn();
            },
            success: function(resp){
                $('#list active').hide().remove();
                $('#response').fadeIn()
                .html(JSON.parse(resp).data);

            }

          });
          



    });

   $('#noDel').click(function(){
    $('.modal').modal('close');
   })
 
   





 
});
 
</script>

       </body>
</html> 
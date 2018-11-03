<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	    <link rel="stylesheet" href="../css/materialize.min.css">
	     <link rel="stylesheet" href="../css/lazyLoad.css">
    <script
        src="../js/Jquery.js"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="../js/materialize.min.js"></script>


	<title>test</title>
</head>
<body>
<ul class="collapsible"id="list">
    <li name="yala">
      <div class="collapsible-header"><p class="inner"style="width: 100%;height:40%;margin-top: 0px">First</p><p class="btn-floating yellow pulse right"style="height:30px;width:30px;margin-top:5px" >
      	
      </p>
  
</div>

      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span> <br><p style="width: 100%;border-top: solid 1px lightgrey">date</p>

</div>
    </li>
    <li>
      <div class="collapsible-header">Second</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header">Third</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>

  </ul>
  <div class="fixed-action-btn" style="display: none" id="action">
  <a class="btn-floating btn-large red">
    <i class="large material-icons">settings</i>
  </a>
  <ul>
    <li id="delete"><a class="btn-floating red"><i class="material-icons">delete</i></a></li>
    <li id="edit"><a class="btn-floating yellow"><i class="material-icons">mode_edit</i></a></li>
  
  </ul>
</div>
 <div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
     
    </div>
    <div class="modal-footer ">
     
    </div>
  </div>
<!--ADD MODAL -->
 <a class="waves-effect waves-light btn modal-trigger" href="#modal">Modal</a>

  <!-- Modal Structure -->
  <div id="modal" class="modal">
    <div class="modal-content">
     <div class="row">
       <div class="col s12 m12">
          <form id="form" method="post">
        <div class="row">
          <div class=" input-field col s12 ">
            <i class="material-icons prefix">bookmark</i>
            <input type="text" name="FirstName" id="fname" class="validate" required="true">
            <label for="fname" class="truncate">Subject</label>
        <!--span class="helper-text" data-error="Field is Required" data-success=""></span-->

          

        </div>
          <div class="row">
            
            
            <div class="input-field col s12 ">
              <i class="material-icons prefix">location_city</i>
               <select name="dept" class="validate" required="true">
      <option value="" disabled selected>Concerned Authority</option>
      <option value="Male">Male</option>
      <option value="Female">Female</option>
      <option value="Other">Other</option>
    </select>
    <label>Concerned Authority</label>
                <!--span class="helper-text" data-error="Select one" data-success=""></span-->



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
            

        
       
</form>

       </div>
     </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>



          <script src="../js/materialize.min.js"></script>

<script type="text/javascript">
	
$(document).ready(function (){
   $('.modal').modal();
    $('select').formSelect();
   $('#list').collapsible({
   	onOpenEnd: function(){
   		$('#action').fadeIn();
   	},
   	onCloseEnd 	:function(){
   		$('#action').fadeOut();
   	}
   });
    $('.fixed-action-btn').floatingActionButton();
     $('.modal').modal({onCloseEnd:function(){
     	$('ul .active').css('background-color','white');
     }})
    $('#delete').click(function(){
    	var	title = $('ul .active .collapsible-header .inner').html();
    		$('ul .active ').css('background-color','lightgrey');
    		$('.modal-footer #delConfirm').remove();
    		$('.modal-footer #noDel').remove();
    		$('.modal-content h5').remove();
    		



           $('.modal').modal('open');
    	name = $('ul .active').attr('name');
    	console.log(name);
    	
    });
});
</script>
</body>
</html>
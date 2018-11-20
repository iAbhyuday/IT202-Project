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
            

        
        
      <button  name="sub">Agree</button>
    
</form>

       </div>
     </div>
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

   function date(){
    var today = new Date();
var dd = today.getDate();

var mm = today.getMonth()+1; 
var yyyy = today.getFullYear();
if(dd<10) 
{
    dd='0'+dd;
} 

if(mm<10) 
{
    mm='0'+mm;
} 

today = yyyy+'-'+mm+'-'+dd;
return today;

   }
    $('.fixed-action-btn').floatingActionButton();
     $('.modal').modal({onCloseEnd:function(){
     	$('ul .active').css('background-color','white');
     }})
    $('#delete').click(function(){
    	$('.modal').modal('open');
    	name = $('ul .active').attr('name');
    	//console.log(name);
  
    	
    });
    $('sub').click(function(){
      data = new FormData($('form'));
      data.append('uid','1234567ggtt');
      data.append('date',date());
      $.ajax({
         type: 'post',
         url : 'server/lodgeGr.php',
         data = data,
         beforeSend: function(){

         },
         success: function(resp){
           alert(resp);
         }

      })
    });


});
</script>
</body>
</html>
$(document).ready(function(){
    
    $('.progress').hide();
   $('.modal').modal();
     $('select').formSelect();
     $('#list').collapsible({
    onOpenEnd: function(){
      $('#setting').fadeIn();
      $('#create').fadeOut();
      $('.active .collapsible-header').addClass('hilight');
      
    },
    onCloseEnd  :function(){
      $('#setting').fadeOut();
      $('#create').fadeIn();
       $('.collapsible-header').removeClass('hilight');
    }
   });
      $('.fixed-action-btn').floatingActionButton();
     $('#pallete').modal({onCloseEnd:function(){
      $('#list .active').css('background-color','white');
     }})
   
    $('nav').fadeIn();

    $('.sidenav').sidenav();

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



   (function ($) {
    $.fn.serializeFormJSON = function () {

        var o = {};
        var a = this.serializeArray();
        $.each(a, function () {
            if (o[this.name]) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };
})(jQuery);




$('form').submit(function(e){
  e.preventDefault();
  data =$('#form').serializeFormJSON();
   data['desc'] =document.querySelector('textarea').value ;
   data['date'] = date();
   data['uid'] = $('#uid').html();
   data['submit'] = true;
   console.log(data);
   $.ajax({
    type: 'post',
    url: "server/lodgeGr.php",
    data:data,
    //processData : true,
    beforeSend: function(){
      $('#form-modal').css('opacity','0.5');

    },
    success: function(resp){
      
      $('#form-modal').modal('close');
      window.location.reload();

    }
    
   })
})    





$('#create').floatingActionButton({hoverEnabled: false});
$('#create').click(function(e){
  console.log("yala");
  $('#form-modal').modal('open');
      //name = $('ul .active').attr('name');
      console.log(date());
})

function load(){
uid = $('#uid').html();
$.ajax({
    type: 'post',
    url: 'server/dataLoad.php',
    data: {user:uid},
    processData:true,
    beforeSend:function(){
      $('#list').append("<li class=\"placeholder wave\"><div class=\"line\"></div><div class=\"line\"></div><div class=\"line\"></div></li>");

    },
    success: function(resp){
     //$('li').remove();
     var data = JSON.parse(resp);
     console.log(data);
     if(data.num==0){
      $('#list').append(`<li class="center"><p style="color: lightgrey;font-size:19px"> No Grievances yet !<p></li> `);
     }
     else{
     for(i=0;i<data.num;i++){
      x = JSON.parse(data.results[i]);
      //console.log(x);
      if(x.status==-1){
        $('#list').prepend(`<li name="${x.id}"><div class=\"collapsible-header \"><p class="inner"style="width:100%"><b>${x.title}</b></p><abbr title="Rejected"> <p class="btn-floating red pulse right"style="height:30px;width:30px;margin-top:15px" ></abbr></p></div><div class=\"collapsible-body\"><span>${x.data}</span>
          <p style="width: 100%;border-top: solid 1px lightgrey"><B>Submitted on :</b>${x.date} </p><p class=""><b>GID :</b> ${x.id}</p><p><b>Concerned Dept . :</b> ${x.dept}</div></li>`);

    }
      else if(x.status==1){

        $('#list').prepend(`<li name="${x.id}"><div class=\"collapsible-header \"><p class="inner"style="width:100%"><b>${x.title}</b></p><abbr title="Resolved"> <p class="btn-floating green pulse right"style="height:30px;width:30px;margin-top:15px" ></abbr></p></div><div class=\"collapsible-body\"><span>${x.data}</span>
          <p style="width: 100%;border-top: solid 1px lightgrey"><B>Submitted on :</b>${x.date} </p><p class=""><b>GID :</b> ${x.id}</p><p><b>Concerned Dept . :</b> ${x.dept}</div></li>`);

      }
       
       else{

        $('#list').prepend(`<li name="${x.id}"><div class=\"collapsible-header \"><p class="inner"style="width:100%"><b>${x.title}</b></p><abbr title="Submitted"> <p class="btn-floating yellow pulse right"style="height:30px;width:30px;margin-top:15px" ></abbr></p></div><div class=\"collapsible-body\"><span>${x.data}</span>
          <p style="width: 100%;border-top: solid 1px lightgrey"><B>Submitted on :</b>${x.date} </p><p class=""><b>GID :</b> ${x.id}</p><p><b>Concerned Dept . :</b> ${x.dept}</div></li>`);


       }

     }}
     $('.placeholder').remove();

    }



    
   });}
load();


    $('#delete').click(function(){
      var title = $('ul .active .collapsible-header .inner').html();
        $('#list .active ').css('background-color','lightgrey');
        
        $('.modal-content h5').remove();
        $('#delmsg').append(`<h5 class="center">Do you want to Delete ${title} ?</h5>`);
     


           $('#pallete').modal('open');
      name = $('#list .active').attr('name');
      console.log(name);
      
    });


    $("#delConfirm").click(function(){
          var name = $('#list .active').attr('name');
          uid = $('#uid').html();
          console.log(name);
          $.ajax({
            type: 'post',
            url :'server/updater.php',
            data: {gid:name,method:"delete",uid:uid},
            processData: true,
            beforeSend: function(){
              $('.modal').modal('close');
             // $('#sender').fadeIn();
            },
            success: function(resp){
                window.location.reload();
                $('#list active').hide().remove();
                
                $('#response').fadeIn()
                .html(JSON.parse(resp).data);

            }

          });
          
 });

   $('#noDel').click(function(){
    $('#pallete').modal('close');
   });


 });
 
   


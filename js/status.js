 
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

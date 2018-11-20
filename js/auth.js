
  $(document).ready(function(){
    
    $('.progress').hide();
   $('nav').fadeIn();
  $('.sidenav').sidenav();
  $('footer').fadeIn();
$('.modal').modal();
   $('#form').submit(function(e){
    var data = $(this).serialize();
    //console.log(data);
    e.preventDefault();
    $.ajax({
      type :'post',
      url : 'server/authentication.php',
      data : data,
      processData : false,
      beforeSend : function(){
        $('#sender').fadeIn();

      },
      success: function(resp){
          resp =  JSON.parse(resp);
          console.log(resp);
          $("#sender").hide();
          if(resp.success==-1){
            $('#info').fadeIn();
            $('#info').html("Email or Password is incorrect !");}
          else if(resp.success==0){
             $('#info').fadeIn();
            $('#info').html("Verify your Email !");
          }
          else
            window.location.replace("dashboard.php"); 
          }
          });
      });

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

});

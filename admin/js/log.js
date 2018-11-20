
  $(document).ready(function(){
    
    $('.progress').hide();
   $('nav').fadeIn();
  $('.sidenav').sidenav();
  $('footer').fadeIn();
   $('#form').submit(function(e){
        e.preventDefault();

    var data = $('#form').serialize();
    console.log(data);
    $.ajax({
      type :'post',
      url : 'server/auth.php',
      data : data,
      processData : false,
      beforeSend : function(){
        $('#sender').fadeIn();

      },
      success: function(resp){
          resp =  JSON.parse(resp);
          console.log(resp);
          $("#sender").hide();
          if(resp.success==0){
            $('#info').fadeIn();
            $('#info').html("Email or Password is incorrect !");}
          
          else
            window.location.replace("admin.php"); 
          }
          });
      });

});

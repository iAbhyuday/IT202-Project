$(document).ready(function(){
    
    $('.progress').hide();
   	$('nav').fadeIn();
   	$('.sidenav').sidenav();
   	$('footer').fadeIn();
	$('.modal').modal();
	$('.collapsible').collapsible();
	
$('#form').submit(function(e){
	e.preventDefault();
	data = $(this).serialize();

	$.ajax({
		type : 'post',
		url : 'server/authentication.php',
		data: data,
		beforeSend: function(){
			$('#sender').fadeIn();
		},
		success : function(response){
          x = JSON.parse(response);
          if(x.success==-1){
          	$('#info').html("Email or Password is incorrect !!!");
          	$('#sender').hide();
          }
          
          else if(x.success==0){
          	$('#info').html("Verify your Email ! ");
          }
          

          else{
               window.location.replace('dashboard.php');
          }


		}

	})});


	
	$('#send').click(function(e){
		e.preventDefault();
		mail = $('#fmail').val();

		$.ajax({
          type: 'post',
          url : 'server/forgotMailer.php',
          data: {mail : mail},
          processData : true,
          beforeSend : function(){

          },
          success : function(response){
          	alert(response);
          }

		})
	})


	$('#modal').modal({
		onCloseEnd : function(){
			window.location.reload();
		}
	})

$('#forgot').click(function(e){
		console.log("clicked");
		e.preventDefault();
		$('.modal').modal('open');
	});
	
})
 





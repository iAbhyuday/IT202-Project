
  $(document).ready(function(){
    $('#loader').hide();
    //M.AutoInit();
    $('#modal').modal();
    $('.datepicker').datepicker({format :"yyyy-mm-dd",
       yearRange:10

        });
    $('select').formSelect();
    $('nav').fadeIn();
    $('#main').fadeIn();
    $('img').fadeIn(3000);
    $('#foot').fadeIn();

      
    $('.sidenav').sidenav();
    if($(window).width() <601){
      $('label').addClass('truncate');
    }
   $(function()
  {
 var validator = $('#form').validate(
      {
        rules:
        {
         password:{
                    required:true,
                    minlength:5

                  },
                  cpass:{
                    required:true,
                    minlength:5,
                    equalTo:"#password"
                  },
          phone: {required:true,
                      regex:true,
                      minlength:10,
                      maxlength:10
                  }
        },
        messages:
        { password:{
                      required:"Create a password !",
                      minlength:"Password should be of minimum 5 characters !"

                    },

                    cpass:{
                      required:"Confirm password",
                      minlength:"Password does'nt match !",
                      equalTo:"Password does'nt match !"

                    },
          phone: {required:"Please provide a contact number !",
                      regex: "Invalid Contact Number",
                      minlength:"Invalid Contact Number",
                      maxlength:"Invalid Contact Number"

                  }          
        },submitHandler: function(){

             var x = $('#form').serialize();
   
          console.log(x);
// AJAX CALL
    $.ajax({
        
         type: "post",
         url: "server/register.php",
         data: x,
         beforeSend: function(){
          $('#modal').modal('close');
          $('#sender').fadeIn();
         },
         processData:false,
         success: function(resp){
          if(resp=="ok"){
            $('#sender').fadeOut();
            $('#modal').modal('open');
            $('input').val("");
            $('#info').hide();
          }
          else{
            $('#sender').fadeOut();
            $('#info').fadeIn();
            $('#info').html(resp);
                $('html, body').animate({
        scrollTop: $("#nav").offset().top
    }, 1000);


          }
         },
         error:function(){
          $('#info').html('Nope');
         }

    });


        },
                          errorElement : 'div',
        errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if (placement) {
            $(placement).append(error)
          } else {
            error.insertAfter(element);
          }

                }   
      });
    
    $.validator.addMethod(
        "regex",
        function(value, element, regexp) {
            var re = new RegExp(regexp);
            return this.optional(element) || re.test(value);
        },
        "Please check your input."
);
    
    $("#phone").rules("add", { regex: "^\\d{1,10}$" })
    
    $('#phone').keyup(function(){
      validator.submitted["phone"]="Please enter only numbers upto 10 digits";
    });
  });



 function validateForm() {
        return Phone();
    }
    function Phone() {
        var phone = document.forms["myForm"]["phone"].value;
var phone = phone.replace(/[^\d]/g, '');
           if(phone.length > 6 && phone.length < 11)
            {  return true;  }

   
            else {
                document.getElementById("phone").className = document.getElementById("phone").className + " error";
                return false;
            }
        }

 });
     

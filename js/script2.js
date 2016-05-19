/*<script src="js/jquery.min.js"></script>*/
$('document').ready(function()
{ 
     /* validation */
  $("#signup-form").validate({
      rules:
   {
    first_name: {
    required: true,
    },
    last_name: {
      required: true,
    },
    user_name: {
      required: true,
    },
   password: {
   required: true, 
   minlength: 8
   },
   password_confirmation: {
    required: true,
    minlength: 8,
   equalTo: '#password'
   },
   user_email: {
            required: true,
            email: true
            },
    },
       messages:
    {
            first_name:{
                      required: "please enter your first name"
                     },
            last_name:{
                      required: "please enter your last name"
                     },
            user_name:{
                      required: "please enter your user name"
                     },
            password:{
                      required: "please enter your password"
                     },
            password_confirmation:{
                      required: "please enter your confirm password"
                     },
            user_email: "please enter your email address",
       },
    submitHandler: submitForm 
       });  
    /* validation */
    
    /* login submit */
    function submitForm()
    {  
   var data = $("#signup-form").serialize();
    
   $.ajax({
    
   type : 'POST',
   url  : 'registration_process.php',
   data : data,
   beforeSend: function()
   { 
    $("#error").fadeOut();
    $("#btn-signup").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; registering ...');
   },
   success :  function(response)
      {      
     if(response=="ok"){
         
      $("#btn-signup").html('<img src="btn-ajax-loader.gif" height="50" width="50"/> &nbsp; Signing In ...');
      window.location.href = "index.php?info=login";
     }
     else{
         
      $("#error").fadeIn(1000, function(){      
    $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
           $("#btn-signup").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
         });
     }
     }
   });
    return false;
  }
    /* login submit */
});
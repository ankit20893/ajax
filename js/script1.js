/*<script src="js/jquery.min.js"></script>*/
$('document').ready(function()
{ 
     /* validation */
  $("#login-form").validate({
      rules:
   {
   password: {
   required: true,
   },
   user_email: {
            required: true,
            email: true
            },
    },
       messages:
    {
            password:{
                      required: "please enter your password"
                     },
            user_email:{required: "please enter your email address"} ,
       },
    submitHandler: submitForm 
       });  
    /* validation */
    
    /* login submit */
    function submitForm()
    {  
   var data = $("#login-form").serialize();
    
   $.ajax({
    
   type : 'POST',
   url  : 'login_process.php',
   data : data,
   beforeSend: function()
   { 
    $("#error").fadeOut();
    $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
   },
   success :  function(response)
      {      
     if(response=="ok"){
         
      $("#btn-login").html('<img src="btn-ajax-loader.gif" height="50" width="50"/> &nbsp; Signing In ...');
      window.location.href = "index.php?info=home";
     }
     else{
         
      $("#error").fadeIn(1000, function(){      
    $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
           $("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
         });
     }
     }
   });
    return false;
  }
    /* login submit */
});
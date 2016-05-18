/**
 * Created by admin on 28-04-2016.
 */
function check_blank(){
   // var fname=document.getElementById(id).value;
    var fname=document.regis.fname.value;
    var lname=document.regis.lname.value;
    var address=document.regis.address.value;
    var mobile=document.regis.mobile.value;
    var password=document.regis.password.value;
    var email=document.regis.email.value;
    
    if(fname==""){
        alert("enter your first name");
        document.regis.fname.focus();
        return false;
    }
    else if(lname==""){
        alert("enter your last name");
        document.regis.lname.focus();
        return false;
    }
    else if(email==""){
        alert("enter your email id");
        document.regis.email.focus();
        return false;
    }
    else if(password==""){
        alert("enter your password");
        document.regis.password.focus();
        return false;
    }

    else if(mobile==""){
        alert("enter your mobile number");
        document.regis.mobile.focus();
        return false;
    }
    else if(address==""){
        alert("enter your address");
        document.regis.address.focus();
        return false;
    }
    return true;

}
function validateEmail()
{
    var emailID = document.regis.email.value;
    atpos = emailID.indexOf("@");
    dotpos = emailID.lastIndexOf(".");
    if (emailID=="") {
        alert("email id can not be blank");
        document.regis.email.focus() ;
        return false;
    }
    else if (atpos<4 || dotpos<atpos+3)
    {
        alert("Please enter correct email ID");
        document.regis.email.focus() ;
        return false;
    }
else if (emailID.length < 11){
    alert("length of id is too short");
    document.regis.email.focus() ;
    return false;
}

    return( true );
}
function chkascii(id1) {
    var x=document.getElementById(id1).value;
   // var fname = document.regis.fname.value;
    if (!((event.which >= 65 && event.which <= 90) || (event.which >= 97 && event.which <= 122) || event.which == 0 || event.which == 8)) {
        alert("wrong name format");
        document.getElementById(id1).focus();
        //document.regis.fname.focus();
        return false;
    }
}
function chkpassword(id1){
    var x=document.getElementById(id1).value;
    if(x.length < 8){
        alert("password must be 8 digits atleast");
        document.getElementById(id1).focus();
        //document.regis.fname.focus();
        return false;
    }
}
function chkmobile(id1){
    var x=document.getElementById(id1).value;
    if ((event.which < 48 || event.which > 57)) {
        alert("wrong format");
        document.getElementById(id1).focus();
        //document.regis.fname.focus();
        return false;
    }
    else if(x.length > 9 ) {
        alert("mobile number should be 10 digits long");
        document.getElementById(id1).focus();
        //document.regis.fname.focus();
        return false;
    }
}
function chkmobilelength(id1) {
    var x=document.getElementById(id1).value;
    if (x.length <= 9) {
        alert("plz enter valid mobile number");
        document.getElementById(id1).focus();
        return false;
    }
}
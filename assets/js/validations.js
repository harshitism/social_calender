// JavaScript Document
var nameCheck=1;
var ageCheck=1;
var emailCheck=1;
var dateofbirthcheck=1
var contactCheck=1;
var passwordcheck=1;

function nameValidate(name)
{

	var str=name.value;
	 var textOnly = RegExp("^([a-zA-Z]| )+$");

	 if(name.id=="username")
	 {
	 	
	 	if(str=="")
	 	{	
	 		$("#span_user_name").html("*Username must be filled");
	 		nameCheck=0;
	 	}
	 	else
	 		$("#span_user_name").html("");

	 }
	  else if(name.id=="middlename")
	 {
 		 if (str=="") 
 		 {
 		 	$("#span_middle_name").html("");
 		 	nameCheck=0;
 		 }     
        else if (!textOnly.test(str)) 
         {
         	$("#span_middle_name").html("*Middle name must be characters only");
         	nameCheck=0;
         }
         else
         $("#span_middle_name").html("");

	 }
	 else if(name.id=="firstname")
	 {
 		 if (str=="") 
 		 {
 		 	$("#span_first_name").html("*First name must be filled");     
 		 	nameCheck=0;
 		 }
         else if (!textOnly.test(str)) 
         {
         	$("#span_first_name").html("*First name must be characters only");
         	nameCheck=0;
         }
         else
         $("#span_first_name").html("");

	 }
	 else if(name.id=="lastname")
	 {
 		 if (str=="") 
 		 {
 		 	$("#span_last_name").html("*Last name must be filled");     
 		 	nameCheck=0;
 		 }
         else if (!textOnly.test(str)) 
         {
         	$("#span_last_name").html("*Last name must be characters only");
         	nameCheck=0;
         }
         else
         $("#span_last_name").html("");

	 }
	 
            
}


function check(state)
    {
      if(state.id=="gender_female")
       document.getElementById("gender_male").checked=false;
      if(state.id=="gender_male")
        document.getElementById("gender_female").checked=false;
 }

function ageValidate(value)
{
	var length=value.length;
	ageCheck=1;
	if(value<23)
	{
		ageCheck=0;
	}
	if(length==0)
	{
		ageCheck=0;
	}
	if(ageCheck==0)
	{
		document.getElementById("ageCheck").innerHTML='<span class="alert-danger"><i class="icon-remove"></i>Age must be greater than 23</span>';
	}
	
	if(ageCheck==1)
	{
		document.getElementById("ageCheck").innerHTML='<span class="alert-success"><i class="icon-ok "></i></span>';
		
	}
}

function emailValidate(val)
{
	//alert("hi");
	emailCheck=1;
var x=val.value;
var length=x.length;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  	{
  	emailCheck=0;
  	}
	if(length==0)
	{
		emailCheck=0;
	}
	
  if(emailCheck==0)
	{
		 $("#span_email").html("*Invalid email");     
	}
	
	if(emailCheck==1)
	{
		
	 $("#span_email").html("");     	
	}
  
}

function contactValidate(val)
{	
	var textOnly = RegExp("^([0-9])+$");
	var y=val.value;
	var x=y.length;
	contactCheck=1;
	if(x<10|| x>10||x==0 || !textOnly.test(y)) 
	{
		contactCheck=0;
	}
	
	if(contactCheck==0)
	{
			 $("#span_contact").html("*Invalid contact No.");     	
	}
	
	if(contactCheck==1)
	{
	 $("#span_contact").html("");     	
		
	}
}

function passwordValidate(password)
{

	if(password.id=="userpassword_signup")
	{
		if(password.value.length==0)
		 {
		 	$("#span_userpassword_signup").html("*Password must be filled");
		 	passwordcheck=0;
		 }
		else if(password.value.length<=6)
		 {
		 	$("#span_userpassword_signup").html("*Password length must be greater than 6");
		 	passwordcheck=0;
		 }
		else
		 $("#span_userpassword_signup").html("");	
	}
	if(password.id=="confirmpassword")
	{
		
		if(password.value.length==0)
		 {
		 	$("#span_confirm_password").html("*Password must be filled");
		 	$("#span_confirm_password").css("color","red");
		 	passwordcheck=0;
		 }
		else if(password.value==document.getElementById("userpassword_signup").value)
		 {
		 	$("#span_confirm_password").html("*Password match");
		 	$("#span_confirm_password").css("color","green");
		 	passwordcheck=0;
		 }

		else if(password.value!=document.getElementById("userpassword_signup").value)
		 {
		 	
		 	$("#span_confirm_password").html("*Password does not match");
		 	$("#span_confirm_password").css("color","red");
		 	passwordcheck=0;
		 }
		 else if(password.value.length<6)
		 {
		 	$("#span_confirm_password").html("*Password length must be greater than 6");
		 	passwordcheck=0;
		 }
		else
		 $("#span_confirm_password").html("");
	}
	if(password.id=="userpassword")
	{
		
		 if(password.value.length==0)
		 {
		 	$("#span_userpassword").html("*Password must be filled");
		 	passwordcheck=0;
		 }
		else
		 $("#span_userpassword").html("");
	}
}



function formValidate()
{
	if(nameCheck  && emailCheck && contactCheck )
	{
		return true;
	}
	else
	return false;
}
















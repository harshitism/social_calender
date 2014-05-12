// JavaScript Document
var nameCheck=1;
var ageCheck=1;
var emailCheck=1;
var contactCheck=1;





function nameValidate(value)
{
	var val=value;
	var iChars = "!`#$%^&*+=-[]\\\';,/{}|\":<>?~"; 
	nameCheck=1;
	for (var i = 0; i < val.length; i++)
	{
		if (iChars.indexOf(val.charAt(i)) != -1)
		nameCheck=0;
		
		
		
	}
	if(val.length==0)
	{
		nameCheck=0;
	}
	if(nameCheck==0)
	{
		document.getElementById("nameCheck").innerHTML='<span class="alert-danger"><i class="icon-remove "></i>Not allowed</span>';
	}
	
	if(nameCheck==1)
	{
		document.getElementById("nameCheck").innerHTML='<span class="alert-success"><i class="fa fa-check "></i></span>';
		
	}
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
function emailValidate(value)
{
	emailCheck=1;
var x=value;
var length=value.length;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
  if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length )
  	{
  	emailCheck=0;
  	}
	if(length==0)
	{
		emailCheck=0;
	}
	
  if(emailCheck==0)
	{
		document.getElementById("emailCheck").innerHTML='<span class="alert-danger"><i class="icon-remove"></i>Not a valid Email</span>';
	}
	
	if(emailCheck==1)
	{
		document.getElementById("emailCheck").innerHTML='<span class="alert-success"><i class="icon-ok "></i></span>';
		
	}
  
}

function contactValidate(value)
{	
	var x=value.length;
	contactCheck=1;
	if(x!=10||x==0)
	{
		contactCheck=0;
	}
	if(contactCheck==0)
	{
		document.getElementById("contactCheck").innerHTML='<span class="alert-danger"><i class="icon-remove"></i>Not Valid</span>';
	}
	
	if(contactCheck==1)
	{
		document.getElementById("contactCheck").innerHTML='<span class="alert-success"><i class="icon-ok "></i></span>';
		
	}
}


function formValidate()
{
	if(nameCheck && ageCheck && emailCheck && contactCheck )
	{
		return true;
	}
	else
	return false;
}
















var flag=0;
var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
$(function () 
{
	
	
	var checkin = $('#dp3').datepicker({
    onRender: function(date) {
    return date.valueOf() < now.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
		
				
	var newDate = new Date(ev.date)
	newDate.setDate(newDate.getDate());
	if(flag==0 || ev.date.valueOf() >= checkout.date.valueOf())
	{
		checkout.setValue(newDate);
		flag=1;
	}
	else
	{
	checkout.setValue(checkout.date);
	}

	
	
checkin.hide();
$('#dp4').focus();
}).data('datepicker');
	 
 

	
	var checkout= $('#dp4').datepicker({
    onRender: function(date) {
    return date.valueOf() < checkin.date.valueOf() ? 'disabled' : '';
    }
    }).on('changeDate', function(ev) {
checkout.hide();
}).data('datepicker');
	 
 
}); 
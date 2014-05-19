var inputBox="<input type='text' class='form-control width200 input-sm' placeholder='Enter Name' name='patient_name'/><select class='form-control width100 input-sm' name='gender'><option value='M'>Male</option><option value='F'>Female</option></select><div class='pull-left input-group'><input class='form-control input-sm' style='width:40px;' placeholder='DD' name='dob_day' maxlength='2'/><input class='form-control input-sm' style='width:40px;' placeholder='MM' name='dob_month' maxlength='2'/><input class='form-control input-sm' style='width:80px;' placeholder='YYYY' name='dob_year' maxlength='4'/></div>";

function checkbox()
  {
	  if(document.getElementById("checkBox").checked==true)
  			document.getElementById("fees").innerHTML="<strong>Rs</strong>&nbsp;&nbsp;50";
  
	 if(document.getElementById("checkBox").checked==true)
  			document.getElementById("myCheck").checked=false;
  }
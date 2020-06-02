function validForm(){
if(document.forms["form1"]["fname"].value == ""){
alert("Enter your First Name");
return false;
}else if(document.forms["form1"]["lname"].value == ""){
alert("Enter your Last Name");
return false;
}else if(document.forms["form1"]["dob"].value == ""){
alert("Enter your Date of Birth");
return false;
}else if(document.forms["form1"]["gender"].value == ""){
alert("Enter your gender");
return false;
}else if(document.forms["form1"]["email"].value == ""){
alert("Enter your email");
return false;
}else if(document.forms["form1"]["pnum"].value == ""){
alert("Enter your phone number");
return false;
}else if(document.forms["form1"]["user"].value == ""){
alert("Enter your username");
return false;
}else if(document.forms["form1"]["pass"].value == ""){
alert("Enter your password");
return false;
}else if(document.forms["form1"]["cpass"].value == ""){
alert("Please re-enter your password");
return false;
}
if(document.forms["form1"]["pass"].value != document.forms["form1"]["cpass"].value){
	alert("Passwords do not match");
	return false;
}
if(document.forms["form1"]["pass"].value.length <6){
	alert("Password too short!!");
	return false;
}
if(document.forms["form1"]["pnum"].value.length != 10){
	alert("Enter a valid phone number");
	return false;
}
if(Math.floor(document.forms["form1"]["pnum"].value/1000000000) <=5){
	alert("Enter a valid number");
	return false;
}
return true;
}

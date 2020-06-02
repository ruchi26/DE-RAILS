function validForm(){
if(document.forms["form1"]["email"].value == ""){
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

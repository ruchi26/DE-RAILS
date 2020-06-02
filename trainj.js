function validForm(){
if(document.forms["form1"]["tno"].value == ""){
alert("Enter Train No.");
return false;
}else if(document.forms["form1"]["tname"].value == ""){
alert("Enter Train Name");
return false;
}else if(document.forms["form1"]["source"].value == ""){
alert("Enter Source");
return false;
}else if(document.forms["form1"]["destination"].value == ""){
alert("Enter Destination");
return false;
}else if(document.forms["form1"]["departure"].value == ""){
alert("Enter departure time");
return false;
}else if(document.forms["form1"]["arrival"].value == ""){
alert("Enter arrival time");
return false;
}else if(document.forms["form1"]["seats"].value == ""){
alert("Enter total seats");
return false;
}else if(document.forms["form1"]["fare"].value == ""){
alert("Enter fare per seat");
return false;
}
return true;
}

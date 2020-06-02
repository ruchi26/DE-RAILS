function validForm(){
if(document.forms["form3"]["ph"].value == ""){
	alert("Enter a valid number");
	return false;
}else if(Math.floor(document.forms["form3"]['ph'].value/1000000000) <6){
	alert("Number Invalid");
	return false;
}else return true;
	
}
function  validForm(){
	if(document.forms["form"]["pa2"].value == ""){
		alert("Empty field");
		return false;
	}
	if(document.forms["form"]["pa2"].value.length < 6){
		alert("Password too short!!");
		return false;
	}	
}
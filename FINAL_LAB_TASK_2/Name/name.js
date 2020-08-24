






function validate(){

	var username = document.getElementById('username').value;
	var password = document.getElementById('password').value;
	
	//document.write('hbsdsabd');

	if(username == ""){
		document.getElementById('userMsg').innerHTML = "username can't left empty";
		return false;

	}
	 else if(username.split(" ").length<2){
   
    document.getElementById('userMsg').innerHTML="At least two characters are needed";
    return false;

  }
  else if(username.split(" ").length<2 && username>='0' && username<='9')
    {   
         document.getElementById("userMsg").innerHTML="Must be starts with letter ";  
        return false;

    }

	if(password == ""){
		document.getElementById('passMsg').innerHTML = "password can't left empty";
		return false;
	}else{
		return true;
	}


}

function remover(){
	document.getElementById('userMsg').innerHTML = "";
}

function xyz(){

	if(document.getElementById('username').value == ""){
		document.getElementById('userMsg').innerHTML = "this field is required!";
	}
}
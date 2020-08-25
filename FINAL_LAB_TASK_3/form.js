function validate(){

	var username = document.getElementById('username').value;
	


	if(username == ""){
		document.getElementById('userMsg').innerHTML = "username can't left empty";
		return false;

	}

	 


var email = document.getElementById('email').value;
	
	
	

	if(email == ""){
		document.getElementById('emailMsg').innerHTML = "Email can't left empty";
		return false;

	}


   var a=false;

	for (i=0;i<gender.length;i++) 
	{
		document.getElementById('genderMsg').innerHTML="req";
		if (gender[i].checked==true) 
		{
			a true;
		}
	}
	
	
}

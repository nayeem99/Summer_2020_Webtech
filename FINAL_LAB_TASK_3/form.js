function validate(){
    var nameval=false;
	var username = document.getElementById('username').value;
	


	if(username == ""){
		document.getElementById('userMsg').innerHTML = "username can't left empty";
		nameval=false;

	}


	 

var emailval=false;
var email = document.getElementById('email').value;
	
	
	

	if(email == ""){
		document.getElementById('emailMsg').innerHTML = "Email can't left empty";
		emailval=false;

	}

 


	if(nameval && emailval)
	{
		return true;
	}
	else
	{
		return false;
	}


	function removername()
	{
		var username=document.getElementById('name').value;
		if(username!='')
		{
		  document.getElementById('nameMsg').innerHTML="";	
		}
	}

	function removeremail()
	{
		var username=document.getElementById('email').value;
		if(email!='')
		{
		  document.getElementById('emailMsg').innerHTML="";	
		}
	}
}

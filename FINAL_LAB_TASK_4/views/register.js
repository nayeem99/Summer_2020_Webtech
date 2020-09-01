var nameval=false;
var name = document.getElementById('name').value;

function nempty()
{
	if(name=="")
	{
		document.getElementById("nameMsg").innerHTML="field can't be empty";
		nameval=false;
	}
	else
	{
		nameval= true;

	}
}

function nameRemover()
{
    document.getElementById('nameMsg').innerHTML = "";
    
}

var emailval=false;
var email = document.getElementById('email').value;

function emailempty()
{
	if(email=="")
	{
		document.getElementById("emailMsg").innerHTML="field can't be empty";
		emailval=false;
	}
	else{
		nameval= true;
	}

}

function emailRemover()
{
    document.getElementById('emailMsg').innerHTML = "";
    
}

var passval=false;
var password = document.getElementById('password').value;

function passempty()
{
	if(password=="")
	{
		document.getElementById("passMsg").innerHTML="field can't be empty";
		passval=false;
	}
	else{
		passval= true;
	}
}



function passRemover()
{
    document.getElementById('passMsg').innerHTML = "";
    
}

function f1(){
			document.getElementsByTagNames('a')[0].style.display='inline';
		}

if(nameval && emailval && passval )
	{
		return true;
	}
	else
	{
		return false;
	}
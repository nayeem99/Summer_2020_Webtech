var nameval=false;
var name = document.getElementById('name').value;

function nempty()
{
	if(name="")
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


function validate()
{
	var day=document.getElementById('day').value;
	var month=document.getElementById('month').value;
	var year=document.getElementById('year').value;
	if (day!="" && month!="" && year!="") 
	{
		if(day>0 && day<32 && month>0 && month<13 && year>1700 && year<2500)
		{
			return true;
		}
		else
		{
			document.getElementById('dobMsg').innerHTML="range exceeds";
			return false;
		}
	}
	else
	{
		document.getElementById('dobMsg').innerHTML="Date/Month/Year can not be empty";
		return false;
	}
	
}
function remover()
{
	document.getElementById('dobMsg').innerHTML="";
}
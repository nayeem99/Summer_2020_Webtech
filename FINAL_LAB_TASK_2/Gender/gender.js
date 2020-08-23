function validate()
{
	var a=document.g.gender;
	for (i=0;i<a.length;i++) 
	{
		if (a[i].checked==true) 
		{
			return true;
		}
	}
	document.getElementById('genderMsg').innerHTML="req";
	return false;
}
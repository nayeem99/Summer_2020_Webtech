
function validate()
{
	var a=document.bg.bg;
	if (a.value == "") 
	{
		document.getElementById('bgmsg').innerHTML="Select A Blood Group";
		return false;
	}
	else
	{
		return true;
	}
}
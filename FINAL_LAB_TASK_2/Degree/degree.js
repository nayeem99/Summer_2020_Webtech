function validate()
{
	var d1=document.getElementById('d1').value;
	var d2=document.getElementById('d2').value;
	var d3=document.getElementById('d3').value;

	if (d1.value!="" || d2.value!="" || d3.value!="") 
	{
		return true;
	
	}
else
{
	document.getElementById('degreeMsg').innerHTML=" can not be empty";
		return false;

}

function remover()
{
	document.getElementById('degreeMsg').innerHTML="";
}
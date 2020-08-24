function validate()
{
	var id =document.getElementById('id').value;
	var pic =document.getElementById('pic').value;

	if(id!="" && pic!="")
	{
		if(parseInt(id,10)>0)
		{
			return true;
		}
		else
	    {

		document.getElementById('Msg').innerHTML="Select Positive Id";
		return false;

	    }

	}
	else
 
   {

	document.getElementById('Msg').innerHTML="Can not be empty";
		return false;
   }



}
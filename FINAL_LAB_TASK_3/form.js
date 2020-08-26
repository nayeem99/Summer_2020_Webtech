function validate(){
    var nameval=false;
	var username = document.getElementById('username').value;
	


	if(username == ""){
		document.getElementById('userMsg').innerHTML = "username can't left empty";
		nameval=false;

	}else 
	{
	    nameval=true;
	}


	 

var emailval=false;
var email = document.getElementById('email').value;
	
	
	

	if(email == ""){
		document.getElementById('emailMsg').innerHTML = "Email can't left empty";
		emailval=false;

	}
	else
		{
			emailval=true;

		}
 var genderval=false;
 var a =document.form.gender;
	for (i=0;i<a.length;i++) 
	{
		if (a[i].checked==true) 
		{
			genderval =  true;
			break;
		}else
	{
		document.getElementById('genderMsg').innerHTML="Select one";
			genderval =  false;
	}

	}

    var dobval=false;
	var day=document.getElementById('day').value;
	var month=document.getElementById('month').value;
	var year=document.getElementById('year').value;
	if (day!="" && month!="" && year!="") 
	{
		if(day>0 && day<32 && month>0 && month<13 && year>1700 && year<2500)
		{
			dobval= true;
		}
		else
		{
			document.getElementById('dobMsg').innerHTML="range exceeds";
			dobval= false;
		}
	}
	else
	{
		document.getElementById('dobMsg').innerHTML="Date/Month/Year can not be empty";
		dobval= false;
	}

    var bgval=false;
	var a=document.form.bg;
	if (a.value == "") 
	{
		document.getElementById('bgmsg').innerHTML="Select A Blood Group";
		bgval= false;
	}
	else
	{
		bgval= true;
	}


    //var degreeval=false;
  // var d1=document.getElementById('d1').value;
	//var d2=document.getElementById('d2').value;
	//var d3=document.getElementById('d3').value;

	var degreeValid=false;
	if(document.getElementById('d1').checked || document.getElementById('d2').checked || document.getElementById('d3').checked)
	{
		document.getElementById('degreeMsg').innerHTML="";
		degreeValid=true;
	}
	else
	{
		document.getElementById('degreeMsg').innerHTML="Please choose an option";
		degreeValid=false;
	}



	//alert(genderval);

	if(nameval && emailval && genderval && dobval && bgval && degreeValid)
	{
		return true;
	}
	else
	{
		return false;
	}

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

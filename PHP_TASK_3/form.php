

<?php
if(isset($_GET['Name']))
{
	$Name=$_GET['Name'];
	if(strlen($Name)>0)
	{
		if(str_word_count($Name)>=2)
		{
			if(($Name[0]>='A' && $Name[0]<='Z') || ($Name[0]>='a' && $Name[0]<='z'))
			{
				//echo "pokpok";
				$i=0;
				while($i<strlen($Name))
				{
					if($Name[$i]<'A' && $Name[$i]!=' ' && $Name[$i]!='.' && $Name[$i]!='-')
					{
						echo "Invalid Name";
						break;
					}
					elseif ($Name[$i]>'Z') 
					{
						if($Name[$i]<'a')
						{
							echo "Invalid Name";
							break;
						}
						elseif ($Name[$i]>'z') {
							echo "Invalid Name";
							break;
						}
					}
					$i=$i+1;
				
				}
			
			}
			else
			{
				echo "Invalid Name";
			}
		}
		else
		{
			echo "Invalid Name";
		}
	
	}
	else
	{
		echo "Invalid Name";
	}

}

//email
if(isset($_GET['Text']))
{
	$email=$_GET['Text'];
	if($email=="")
	{
		echo "Invalid";
	}
	else
	{
		echo $email;
	}

}

//gender
if (isset($_GET['Dot'])) {
	$a=$_GET['Dot'];
	echo $a;
}
if(isset($_GET['submit']) && !isset($_GET['Dot']))
	{
		echo "please select a gender";
	}


//date of birth
$flag=true;

if (isset($_GET['day'])) {
	
	$a=(int)$_GET['day'];
	
		
		if ($a>0 && $a<=31) {
			
			
		}
		else
		{
			$flag=false;
		}
	
}

if (isset($_GET['month'])) {

	$a=(int)$_GET['month'];

		if ($a>0 && $a<=12) {
			
			
		}
		else
		{
			$flag=false;
		}
	
}
if (isset($_GET['year'])) {

	$a=(int)$_GET['year'];

	
		if ($a>=1900 && $a<=2020) {
		
			
		}
		else
		{
			$flag=false;
		}
	
}
if ($flag==false) {
	
	echo "invalid";
}	

//degree

if (isset($_GET['d1']) || isset($_GET['d2']) || isset($_GET['d3'])) 
	{
		if (isset($_GET['d1'])) 
		{
			echo "valid";
		}
		if (isset($_GET['d2'])) 
		{
			echo "valid";
		}
		if (isset($_GET['d3'])) 
		{
			echo "valid";
		}
	
	}
else
{
	if (isset($_GET['submit'])) {
		
		echo "Need to select at least one";
	}
}


//blood group
if(isset($_GET['submit']))
	{
		echo "select a blood group ";
	}
	

if (isset($_GET['bg'])) {
	$a=$_GET['bg'];
	echo $a;
}
else
{
	}

//
$flag=true;
if(isset($_GET['id']))
{
	$a=(int)($_GET['id']);
	if ($a<=0) {

		$flag=false;
	}
}
if (isset($_GET['pic'])) {

	$a=$_GET['pic'];
	if ($a=="") {
	
		$flag=false;
	}
}
if ($flag==false) {
	
	echo "invalid";
}


?>




<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" width="480px" height="400px">
			<tr>
				<td colspan="3" height="70px" align="center">
					
					<h1>PERSON PROFILE</h1>
				
				</td>
				
				
				
			</tr>
			<tr>
				<td width="100">Name</td>
				<td width="250">
				<input type="text" name="Name" value="" placeholder="">
			</td>
				<td width="30"></td>
			
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="Email" name="Text" value="" placeholder=""></td>
				<td></td>
			
				
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="Dot" value="" placeholder="">  male
		 <input type="radio" name="Dot" value="" placeholder="">  female
		 <input type="radio" name="Dot" value="" placeholder="">  others <br>
				</td>
				<td></td>
			
				
			</tr>

<tr>
				<td>Date Of Birth</td>
				<td>
					<input type="text" name="day" value="" placeholder="" size="1px">
					/
					<input type="text" name="month" value="" placeholder="" size="1px">
					/
					<input type="text" name="year" value="" placeholder="" size="1px">
					<input type="date" name="DOB" value="" placeholder="" size="2px">
				</td>
				<td></td>
			
				
			</tr>

<tr>
				<td>Blood Group</td>
				<td>
				<select name="bg">
			<option> </option>
			<option>A+ </option>
		 	<option> A- </option>
		 	<option> AB+ </option>
		 	<option> AB- </option>
		 	<option> O+ </option>
		 	<option> O- </option>
		 	<option> B+ </option>
		 	<option> B- </option>
		 	
		 	
		 </select> <br>
				</td>
				<td></td>
			
				
			</tr>

<tr>
				<td>Degree</td>
				<td>
					<input type="checkbox" name="d1" value="" placeholder="">SSC
					<input type="checkbox" name="d2" value="" placeholder="">HSC
					<input type="checkbox" name="d3" value="" placeholder="">BSc.
					
				</td>
				<td></td>
			
				
			</tr>

<tr>
				<td>Photo</td>
				<td colspan="2">
					<input type="file" name="pic" value="Browse">
					
				</td>
				
			
				
			</tr>
<tr>
				<td colspan="3"> <br> </td>
				
			
				
			</tr>
<tr>
				<td colspan="3" align="right"> 
					<input type="Submit" name="submit" value="submit"> &ensp;
		 <input type="Button" name="" value="Reset">&emsp;
		 
		
				</td>
				
			
				
			</tr>



		

	</table>

</body>
</html>
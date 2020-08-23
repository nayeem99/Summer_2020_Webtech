<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Degree</legend>
			<input type="checkbox" name="d1" value="SSC"> SSC
			<input type="checkbox" name="d2" value="HSC"> HSC
			<input type="checkbox" name="d3" value="BSc"> BSc<br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>


<?php

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

?>



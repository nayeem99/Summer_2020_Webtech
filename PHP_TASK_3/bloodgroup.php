<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<h2>Blood Group</h2> 
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
				</select>
			<br>
			<br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>


<?php
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
?>






<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Gender</legend>
			<input type="radio" name="Dot" value="Male"> Male
			<input type="radio" name="gender" value="Female"> Female
			<input type="radio" name="gender" value="Other"> Other<br>
	        <input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>

<?php

if (isset($_GET['Dot'])) {
	$a=$_GET['Dot'];
	echo $a;
}
if(isset($_GET['submit']) && !isset($_GET['Dot']))
	{
		echo "please select a gender";
	}
?>





<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Date of Birth</legend>
			<pre class="tab">dd        mm      yyyy</pre><br>
			<input type="text" name="day" size="1%">/
			<input type="text" name="month" size="1%">/
			<input type="text" name="year" size="2%"><br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>

<?php
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

?>






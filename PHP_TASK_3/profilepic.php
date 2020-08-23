<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<fieldset>
			<legend>Profile Picture</legend>
			User Id<input type="text" name="id"><br>
			Picture<input type="file" name="pic"><br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
</body>
</html>


<?php

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

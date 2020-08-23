<html>
<head>
	<title></title>
</head>
<body>
	<form>
		Email <br>
		<input type="email" name="Text" placeholder="example@any.com"><br>
		<input type="submit" name="submit">
	
	</form>

</body>
</html>
<?php
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
?>


<?php
session_start();
echo "<h1> WELCOME".$_SESSION['name']."</h1>";
//echo $_SESSION['type'];

?>

<html>
<head>
	<title></title>
</head>
<body>
  <a href="profile.html">Profile</a>
  <a href="changepassword.html">Change Password</a>
  <a href="logout.html">Logout</a>
</body>
</html>

<?php
}
else
{


<?php
if(isset($_POST['submit'])){
	echo"as";
	if(!empty($_POST['password'])&&!empty($_POST['newpassword']))
	{
		echo"as";
		if($_POST['password']==$_POST['newpassword'])
	    {
	    	echo"as";
	    	setcookie('password',$_POST['password'], time()+3600,'/');

			header('location: login.html');
			if($_POST["currentpassword"]==$_COOKIE["password"])
			{
				setcookie('password'.$_POST['password'],time()+3600,'/');
				header('location: dashboard.php');

			}
	    }
	}
}
?>
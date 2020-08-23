<?php
echo"as";
if(isset($_POST['submit'])){
	echo"as";
	if(!empty($_POST['email'])){
		if($_COOKIE['email']==$_POST['email'])
	    {
			header('location: passreset.html');
	    }

      }

}



?>
<?php
	

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$uname = $_POST['userName'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		$gender = $_POST['gender'];
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		echo "test";
		if(empty($uname) || empty($password) || empty($email))
		{
			echo "null ";
		}else 
		{
			if($confirmPassword==$password)
			{
				setcookie('username',$uname, time()+3600,'/');
				setcookie('uname',$name, time()+3600,'/');
				setcookie('password',$password, time()+3600,'/');
				setcookie('email',$email, time()+3600,'/');
				setcookie('gender',$gender, time()+3600,'/');
				setcookie('day',$day, time()+3600,'/');
				setcookie('month',$month, time()+3600,'/');
				setcookie('year',$year, time()+3600,'/');
				header('location: login.html');


			}
			else
			{
				echo"match ur pass";
			}



        // setcookie('username',$uname, time()+3600,'/');


			
		}

	}else{
		header("location: login.html");
	}


?>
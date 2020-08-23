<?php
	

	if(isset($_POST['submit'])){

		
		$name = $_POST['name'];
		$email = $_POST['email'];

		$gender = $_POST['gender'];
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		echo "test";
		if(empty($name) ||  empty($email))
		{
			echo "null ".'<a href="editprofile.php"><u>
			go back </a>';
		}else 
		{
			
				
				setcookie('name',$name, time()+3600,'/');
				
				setcookie('email',$email, time()+3600,'/');
				setcookie('gender',$gender, time()+3600,'/');
				setcookie('day',$day, time()+3600,'/');
				setcookie('month',$month, time()+3600,'/');
				setcookie('year',$year, time()+3600,'/');
				header('location: dashboard.php');


		


        // setcookie('username',$uname, time()+3600,'/');


			
		}

	}else{
		header("not set");
	}


?>
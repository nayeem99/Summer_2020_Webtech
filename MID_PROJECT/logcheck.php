<?php
	session_start();

	if(isset($_POST['LogIn'])){

		$username 	= $_POST['uname'];
		$password 	= $_POST['password'];

		if(empty($username) || empty($password)){
			echo "null submission";

		}else{
			
			$conn = mysqli_connect('localhost', 'root', '', 'system');
			$sql = "select * from user where username='".$username."' and password='".$password."'";
			$result = mysqli_query($conn, $sql);
			$user 	= mysqli_fetch_assoc($result);
			
			if(!empty($user)){
				$_SESSION['status']  = "Ok";
				setcookie('uname',$username, time()+3600, '/');
				header('location: main.php');
			}else{
				echo "Invalid information";
			}
		}

	}else{
		header("location: login.html");
	}

?>
<?php
	session_start();

	if(isset($_POST['submit'])){

		$id = $_POST['id'];
	    $password = $_POST['password'];
		$conpassword = $_POST['conpassword'];
		$name = $_POST['name'];
		$email = $_POST['email'];

		if(empty($uname) || empty($password) || empty($email)){
			echo "null submission";
		}else {

		
			//$_SESSION['id'] 		= $id;
			//$_SESSION['email'] 		= $email;
			//$_SESSION['password'] 	= $password;
			//$_SESSION['user'] 		= $user;



			$file = fopen('user.txt', 'a');
			fwrite($file,  $id.'|'.$password.'|'.$conpassword.'|'.$name.'|'.$email.'|'.$usertype."/r/n");
			fclose($file);



			header('location: login.html');
		}

	}else{
		header("location: login.html");
	}


?>
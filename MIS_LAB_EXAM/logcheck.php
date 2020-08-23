<?php
	if(isset($_POST['submit'])){

		$id 		= $_POST['id'];
		$password 	= $_POST['password'];

		if(empty($id) || empty($password)){
			echo "null submission";

		}else{
			
			$file = fopen('user.txt', 'r');
			$data = fread($file, filesize('user.txt'));
			$user = explode('|', $data);


			/*while(!feof($data)){
				$user = fgets($data);
				$user = explode('|', $data);
			}*/

			//print_r($user);

			if(trim($user[0]) == $id && trim($user[1]) == $password){
				$_SESSION['status']  = "Ok";
				$_SESSION['status']  = "Ok";
				$_SESSION['uname'] 	= $user[0];
				$_SESSION['type'] 	= $user[4];
				header('location: home.php');
			}else{
				echo "Invalid username/password";
			}
		}

	}else{
		header("location: login.html");
	}


?>
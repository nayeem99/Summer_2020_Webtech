
<?php 
require_once('../service/userService.php');
$name=$_POST['name'];
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$user = [
				'name'=> $name,
				'email'=> $email,
				'username'=> $username,
				'password'=> $password,
				
				
			];
//echo $password;
//var_dump($user);			
$status = insert($user);
echo $status;
header('location: ../views/login.php');
?>
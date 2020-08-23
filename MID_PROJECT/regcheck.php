<?php

	if (isset($_POST['submit'])) 
	{
		//echo"prblm";
		
		$conn = mysqli_connect('localhost', 'root', '', 'system');
		$sql= 'select * from user where username="'.$_POST['username'].'"';
		$result = mysqli_query($conn,$sql);
		$data = mysqli_fetch_assoc($result);

		if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['confirmpassword']) && !empty($_POST['usertype']) && !empty($_POST['username']))
			{
		if (empty($data)) 
		{
			

			if ($_POST['password'] == $_POST['confirmpassword'])
			{
				//if(empty($uname) || empty($password) || empty($email))
		         //{
			     //  echo "null ";
		            //   }else 
		            //  {
				
			    
			    	echo"asd";
					$sql1="INSERT INTO user (name, email, username, password, gender, dateofbirth, usertype) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['username']."', '".$_POST['password']."', '".$_POST['gender']."', '".$_POST['date']."', '".$_POST['usertype']."')";
					mysqli_query($conn,$sql1);
					//echo "done";
					header('location: login.html');
			        

			
			}
			else
			{
				echo"wrong pass";
			}
			mysqli_close($conn);
		}
	}
	else
	{
		echo "invalid";
	}
}
	

?>


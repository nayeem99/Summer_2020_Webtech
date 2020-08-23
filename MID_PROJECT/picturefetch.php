<?php 
		if(isset($_POST['submit']))
			{
				$filedir=$_COOKIE['uname'].".png";
					if(move_uploaded_file($_FILES['picture']['tmp_name'], $filedir)){
					echo "Done";
						
					}
					else
					{
						echo "error";
					}
					header("location: addpicture.php");
			}

				
?>
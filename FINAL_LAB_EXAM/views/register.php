<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>

	<title>SignUp</title>
</head>
<body>

	<form action="../php/regCheck.php" method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>Name</td>
					 <td><input type="text" id="name" name="name"   ></td>
                    <td id="nameMsg"></td>
				</tr>
				<tr>
					<td>Password</td>
					 <td><input type="text" id="password" name="password" ></td>
                    <td id="nameMsg"></td>
				</tr>
				<tr>
					<td>Username</td>
					 <td><input type="text" id="username" name="username" onkeyup="f2()"  ></td>
                    <td id="nameMsg"></td>
				</tr>
				<tr>
					<td>Contact No</td>
					 <td><input type="text" id="contact" name="contact"  ></td>
                    <td id="nameMsg"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit" onclick="f1()"></td>
				</tr>
			</table>
		</fieldset>
	</form>
<script type="text/javascript">
	function f1(){

					var name = document.getElementById('name').value;
					var email = document.getElementById('contact').value;
					var password = document.getElementById('password').value;
					var username = document.getElementById('username').value;
					//alert('name='+name+'&password='+password+'&email='+email);
					var emailmsg=document.getElementById('emailMsg').innerHTML;
					if(name!=""&& email!="" && password!=""&&username!="")
						{

							var xhttp = new XMLHttpRequest();
							//xhttp.open('GET', 'abc.php?name='+name, true);
							xhttp.open('POST', '../php/regCheck.php', true);
							xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
							xhttp.send('name='+name+'&password='+password+'&email='+email+'&username='+username);
							//alert('name='+name+'&password='+password+'&email='+email);


							xhttp.onreadystatechange = function (){

									if(this.responseText != ""){
										document.getElementById('nameMsg').innerHTML = this.responseText;
										
									}
									else
									{
										document.getElementById('nameMsg').innerHTML = "";
									}
								}

							
					}
				}

			
				</script>

</body>
</html>
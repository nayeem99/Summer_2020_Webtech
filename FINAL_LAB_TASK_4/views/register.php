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
	<script type="text/javascript" src="../asset/register.js"></script>
	<title>SignUp</title>
</head>
<body>

	<form action="../php/regCheck.php" method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" onkeyup="nameRemover()" onblur="nempty()"></td>
					 <td id="nameMsg"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" onkeyup="emailRemover()" onblur="emailempty()"></td>
					 <td id="emailMsg"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" onkeyup="passRemover()" onblur="passempty()"></td>
					 <td id="passMsg"></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit" onclick='f1()'>
                    <a href="login.php" style="display: none">Login</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
	<script type="text/javascript">
	function f1(){

				var name = document.getElementById('name').value;
				var email = document.getElementById('email').value;
				var password = document.getElementById('password').value;
				if(name!=""&& email!="" && password!="")
				{

				var xhttp = new XMLHttpRequest();
				//xhttp.open('GET', 'abc.php?name='+name, true);
				xhttp.open('POST', 'regCheck.php', true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send('name='+name+'&password='+password+'&email='+email+);

				xhttp.onreadystatechange = function (){
					if(this.readyState == 4 && this.status == 200){

						if(this.responseText != ""){
							document.getElementById('searchdata').innerHTML = this.responseText;
						}else{
							document.getElementById('searchdata').innerHTML = "";
						}
						
					
				}

				}
				document.getElementsByTagNames('a')[0].style.display='inline';
			}
			}
			</script>

</body>
</html>

		
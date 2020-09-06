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

	<form>
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" id="name" name="username" ></td>
					 <td id="nameMsg"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" id="email"name="email" onkeyup="f2()" ></td>
					 <td id="emailMsg"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" id="password" name="password" ></td>
					 <td id="passMsg"></td>
				</tr>
				
				<tr>
					<td></td>
					<td><input type="button" name="submit" value="Submit" onclick='f1()'>
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
					//alert('name='+name+'&password='+password+'&email='+email);
					var emailmsg=document.getElementById('emailMsg').innerHTML;
					//alert(emailmsg);
					alert(emailmsg=="ok");
					if(emailmsg=="")
					{
						if(name!=""&& email!="" && password!="")
						{

							var xhttp = new XMLHttpRequest();
							//xhttp.open('GET', 'abc.php?name='+name, true);
							xhttp.open('POST', '../php/regCheck.php', true);
							xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
							xhttp.send('name='+name+'&password='+password+'&email='+email);
							//alert('name='+name+'&password='+password+'&email='+email);


							xhttp.onreadystatechange = function (){

									if(this.responseText != ""){
										document.getElementById('nameMsg').innerHTML = this.responseText;
										document.getElementsByTagName('a')[0].style.display='inline';
									}
									else
									{
										document.getElementById('nameMsg').innerHTML = "";
									}
								}

							
					}
				}

			}

	function f2() {

		var email = document.getElementById('email').value;
		if (email!="")
		{
			var xhttp = new XMLHttpRequest();
						//xhttp.open('GET', 'abc.php?name='+name, true);
						xhttp.open('POST', '../php/emailcheck.php', true);
						xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
						xhttp.send('email='+email);
						xhttp.onreadystatechange = function (){

								if(this.responseText != ""){
									document.getElementById('emailMsg').innerHTML = this.responseText;
									//document.getElementsByTagNames('a')[0].style.display='inline';
								}
								else
								{
									document.getElementById('emailMsg').innerHTML = "";
								}
							}

						

		}

		
	}
		
			</script>

</body>
</html>

		
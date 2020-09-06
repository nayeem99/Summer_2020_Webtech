<!DOCTYPE html>
<html>
<head>
	<title>Ajax Example</title>
</head>
<body>

		<h1 id="abc">Search Blogger</h1>
		<a href="all_users.php">Back</a>

		<form>
			<input type="text" id="name" name="name" onkeyup="load()" /> 
			<input type="button" id="button" name="button" value="Click" /> 
		</form>

		<div id="searchdata"></div>

		<script>
			function load(){

				var name = document.getElementById('name').value;
				var xhttp = new XMLHttpRequest();
				//xhttp.open('GET', 'abc.php?name='+name, true);
				xhttp.open('POST', '../php/search.php', true);
				xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				xhttp.send('name='+name);

				xhttp.onreadystatechange = function (){
					if(this.readyState == 4 && this.status == 200){

						if(this.responseText != ""){
							document.getElementById('searchdata').innerHTML = this.responseText;
						}else{
							document.getElementById('searchdata').innerHTML = "";
						}
						
					}	
				}
			}
		</script>
</body>
</html>
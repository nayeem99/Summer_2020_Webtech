<?php
	require_once('../php/session_header.php');
	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add company info</title>
</head>
<body>

	<form action="../php/companyadd.php" method="post">
		<fieldset>
			<legend>Insert Company Information</legend>
			<table>
			<tr>
				<td>ID</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="company_name"></td>
			</tr>
			<tr>
				<td>Description</td>
				<td><input type="text" name="profile_description"></td>
			</tr>
			<tr>
				<td>Industry</td>
				<td><input type="text" name="industry"></td>
			</tr>
			<tr>
				<td>Website</td>
				<td><input type="text" name="company_website"></td>
			</tr>
			<tr>
				<td>Logo</td>
				<td><input type="file" name="company_logo"></td>
			</tr>
			<tr>
				<td><input type="submit" name="createt" value="Add"></td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>
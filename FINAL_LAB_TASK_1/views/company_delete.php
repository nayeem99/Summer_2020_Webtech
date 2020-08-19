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
	<title>Delete</title>
</head>
<body>

	<form action="../php/companyadd.php" method="post" enctype="multipart/form-data">
		<fieldset>
			<legend>Delete Information</legend>
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
				<td colspan="2" align="right"><input type="submit" name="create" value="Create"></td>
			</tr>
		</table>
		</fieldset>
	</form>
</body>
</html>
<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['id'])) {
		$user = getByIDCompany($_GET['id']);	
	}else{
		header('location: company_info.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Company info</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Delete User</legend>
			<table>
				<tr>
					<td>ID: </td>
					<td><?=$user['id']?></td>
				</tr>
				<tr>
					<td>Name: </td>
					<td><?=$user['company_name']?></td>
				</tr>
				<tr>
					<td>
						            Delete this company info?
						
					</td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?=$user['id']?>">
						<input type="submit" name="deletecompany" value="Delete"> 
						<a href="company_info.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>
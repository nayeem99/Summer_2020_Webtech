<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="home.php">Back</a> |
	<a href="../php/logout.php">Logout</a> 
	
	<h3>Company Information</h3>

	<a href="../views/company_create.php">Add_Company_INFO</a><br><br>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Company Name</td>
			<td>Profile Description</td>
			<td>Industry</td>
			<td>Company Website</td>
			<td>Company Logo</td>
			<td>User Account Id</td>
			<td>Action</td>
		</tr>

		<?php  
			$users = getAllCompany();
			for ($i=0; $i != count($users); $i++) {  ?>
		<tr>
			<td><?=$users[$i]['id']?></td>
			<td><?=$users[$i]['company_name']?></td>
			<td><?=$users[$i]['profile_description']?></td>
			<td><?=$users[$i]['industry']?></td>
			<td><?=$users[$i]['company_website']?></td>
			<td><img src=<?='"'.$users[$i]['company_logo'].'"'?>height="200px" width="200px"></td>
			<td><?=$users[$i]['user_account_id']?></td>
			<td>
				<a href="company_edit.php?id=<?=$users[$i]['id']?>">Edit</a> |
				<a href="company_delete.php?id=<?=$users[$i]['id']?>">Delete</a> 
				
			</td>
		</tr>

		<?php } ?>
		
	</table>

</body>
</html>
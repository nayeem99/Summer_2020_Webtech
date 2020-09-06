<?php

	$name = $_POST['name'];

	$conn = mysqli_connect('localhost', 'root', '', 'lab');
	$sql= "select * from users where username like '%{$name}%'";
	$result = mysqli_query($conn, $sql);

	$data="<table>
	<tr>
	      <td>name</td>
	      <td>email</td>
	      <td>username</td>
	      <td>password</td>
	      </tr>";

while ($row = mysqli_fetch_assoc($result)) {
			$data .= "<tr>

		  <td>{$row['name']}</td>
		  <td>{$row['email']}</td>
		  <td>{$row['username']}</td>
		  <td>{$row['password']}</td>
	      
	      </tr>";
	  }

	  $data.="</table>";
	  echo $data;

	?>
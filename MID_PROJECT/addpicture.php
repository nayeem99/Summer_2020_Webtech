<html>
<head>
    <title></title>
</head>
<body>
<form action="picturefetch.php" method="post" enctype="multipart/form-data">
			<h2> View Profile Picture</h2> <input type="file" name="picture">
			<br>
			<input type="submit" name="submit">
			<img src=<?php
			
			 echo '"'.$_COOKIE['uname'].".png".'"'; ?> width="200" height="200">
</form>

</body>
</html>		
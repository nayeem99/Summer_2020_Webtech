<html>
<head>
    <title></title>
</head>
<body>
	<right>
	<br>
	<a href="home.php"> <img src="home.png" width="100" height="60"></a>
	<br>
	<legend><b>Food Delivery System</b></legend>
WELCOME Rstaurant Owner <br>
User:<?php
session_start();
if ($_SESSION['status']=="Ok") 
{
echo $_COOKIE['uname'];
}
?>

<img src=<?php
			
			 echo '"'.$_COOKIE['uname'].".png".'"'; ?> width="200" height="200">
</right>
		<hr>
		<right>
			<hr>
		
			<a href="addpicture.php"><u>View Profile pic</u></a>
			<hr>

			<a href="pendingorder.html"><u>Pending Order</u></a>
	
		<hr>
		
			<a href="order.html"><u>Order status</u></a>
		

		<hr>
	
			<a href="item.html"><u>Add item</u></a>

	
		<hr>
		
			<a href="contact.html"><u>Contact</u></a>
		
		<hr>
	
			<a href="discount.html"><u>Add Discount</u></a>

			<hr>
	
			<a href="sales.html"><u>Sales</u></a>

			<hr>
	
			<a href="salesreport.html"><u>Sales Report</u></a>

			<hr>
	
			<a href="deliver.html"><u>Request Deliver</u></a>

	
		
		<hr>
	
			<a href="reviews.html"><u>Reviews</u></a>

			<hr>
	
			
	
			<a href="logout.php"> <input type="submit" name="logout" value="logout"> </a>
		</right>
</body>
</html>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Shanna's Sporting Goods</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Welcome to Shanna's Sporting Goods</h1>
<h2>Our Customers</h2>
<form action="getproducts.php" method="post">
<?php
   include 'getdata100.php';
?>
<input type="submit" value="Get Products">
</form>
<?php
mysqli_close($connection);
?> 
</body>
</html> 

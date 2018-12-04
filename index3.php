<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Shanna's Sporting Goods</title>
</head>
<body>
<script src="product.js"></script>
<?php
include 'connectdb.php';
?>
<h1>Welcome to Shanna's Sporting Goods</h1>
<h2>Our Customers</h2>
<form action="getproducts.php" method="post">
<?php
   include 'getdata.php';
?>
<input type="submit" value="Get Products">
</form>

<h1>Sort the Table Your Way</h1>
<form action="sortdata1.php" method="post">
<input type="radio" name="sort" value="sortdescriptionasc">sort description by ascending order</br>
<input type="radio" name="sort" value="sortdescriptiondesc">sort description by descending order</br>
<input type="radio" name="sort" value="sortpriceasc">sort price by ascending order</br>
<input type="radio" name="sort" value="sortpricedesc">sort price by descending order</br>
<input type="submit" name="submit" value="Sort This Way"/>
<?php
//if(isset($_POST['sort'])){
//   include "connectdb.php";
//   include "sortdata1.php";
//}
?>
</form>

<h2> ADD A NEW PURCHASE:</h2>
<form action="addnewpurchase.php" method="post">
customerid: <input type="integer" name="customerid"><br>
productid:<input type="integer" name="productid"><br>
quantity:<input type="integer" name="quantity"><br>
<input type="submit" value="Add New Purchase">
</form>

<p>
<hr>
<p>
<h2> ADD A NEW CUSTOMER:</h2>
<form action="addnewcustomer.php" method="post">
Your ID: <input type="text" name="customerid"><br>
Your First Name:<input type="text" name="firstname"><br>
Your Last Name:<input type="text" name="lastname"><br>
Your City:<input type="text" name="city"><br>
Your Phone Number:<input type="number" name="phonenumber"><br>
Your Agent ID:<input type="text" name="agentid"><br>
<input type="submit" value="Add New Customer">
</form>

<p>
<hr>
<p>
<h2> Updating Phone Number:</h2>
<form action="updatephonenum.php" method="post">
Your customer id:<input type="text" name="custid"><br>
<input type="submit" value="Get Current Phone Number">
</form>

<p>
<hr>
<p>
<h2> Deleting a customer:</h2>
<form action="deletecustomer.php" method="post">
Your customer id:<input type="text" name="customerid2"><br>
<input type="submit" value="Delete the Customer">
</form>

<p>
<hr>
<P>
<h2> Our Loyal Customers and Best Selling Products:</h2>
<form action="loyalcustandbestsellpro.php" method="post">
Quantity:<input type="number" name="quantity"><br>
<input type="submit" value="Show Customer Name,Product Description and Quantity">
</form>

<p>
<hr>
<p>
<h2> Products that have never been purchased: </h2>
<form action="notpurch.php" method="post">
<input type="submit" value="Show Products Not Purchased">
</form>

<p>
<hr>
<p>
<h2>Money Made On the Following Product:</h2>
<form action="moneymade.php" method="post">
Product ID:<input type="text" name="productid"><br>
<input type="submit" value="money made on this product">
</form>

<?php
mysqli_close($connection);
?> 
</body>
</html> 

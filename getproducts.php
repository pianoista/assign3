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
<h1>Here are the customer's products:</h1>
<ol>
<?php
  $whichCustomer=$_POST["customername"];
  $query = 'SELECT * FROM customer, purchase, product WHERE purchase.customerid=customer.customerid AND purchase.productid=product.productid AND customer.customerid="' . $whichCustomer . '"';
  $result=mysqli_query($connection,$query);
  if(!$result){
     die("database query2 failed.");
     }
    while ($row=mysqli_fetch_assoc($result)) {
        echo '<li>';
        echo $row["description"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>

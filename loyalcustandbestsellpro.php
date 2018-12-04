
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Loyal Customers and Best Selling Products</title>
</head>
<body>
<?php
   include "connectdb.php";
?>
<ol>
<?php
  $quantity=$_POST["quantity"];
  $query='SELECT * FROM purchase,customer WHERE purchase.quantity > "' . $quantity . '" && purchase.customerid=customer.customerid';
  $query1='SELECT * FROM purchase,product WHERE purchase.quantity > "' . $quantity . '" && purchase.productid=product.productid';
  $result=mysqli_query($connection,$query);  
  $result1=mysqli_query($connection,$query1);
  if(!$result){
     die("Database query on customer failed");
  }
  if(!$result){
     die("Database query on product failed");
  }
     while($row=mysqli_fetch_assoc($result)){
         echo '<li>';
         echo $row["firstname"];
         echo $row["lastname"];
     }
     while($row=mysqli_fetch_assoc($result1)){
         echo '<li>';
         echo $row["description"];
         echo $row["quantity"];
     }
     mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Shanna's Sporting Goods-Your Purchase</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Here are your purchases:</h1>
<ol>
<?php
   $whichCustomer= $_POST["customerid"];
   $whichProduct = $_POST["productid"];
   $quantity =$_POST["quantity"];
   $query='SELECT * FROM purchase WHERE purchase.customerid='.$whichCustomer.' AND purchase.productid='.$whichProduct.''; 
   echo $query."<br>";
   $result=mysqli_query($connection,$query);
   if(mysqli_num_rows($result)==0){
    $query3 = 'INSERT INTO purchase values('.$whichCustomer.','.$whichProduct.','.$quantity.')';}
   if(mysqli_num_rows($result)==1){
    $query4 = 'UPDATE purchase SET purchase.quantity=purchase.quantity+'.$quantity.' WHERE purchase.customerid=='.whichCustomer.'';}
   if (!result) {
        die("Error: query failed" . mysqli_error($connection));}
   echo "Your purchase was added!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>

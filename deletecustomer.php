<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Delete a Customer</title>
</head>
<body>
<?php 
  include 'connectdb.php';
?>
<?php
  $whichCustomer=$_POST["customerid2"];
  $query='DELETE FROM customer WHERE customer.customerid="' . $whichCustomer . '"';
  if (!mysqli_query($connection,$query)){
     die("Error: delete failed" . mysqli_error($connection));
}
  echo "Your customer information is deleted!";
  mysqli_close($connection);
?>
</body>
</html>


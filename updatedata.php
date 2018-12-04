<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Updating phone number </title>
</head>
<body>
<?php
   include "connectdb.php";
$phoneNumber=$_POST["currentphonenum"];
$whichCustomer=$_POST["custid"];
$query='UPDATE customer SET phonenumber=' . $phoneNumber . ' WHERE customerid="' . $whichCustomer . '"';
echo $query;
if (!mysqli_query($connection, $query)){
     die("Error: insert failed" . mysqli_error($connection));}
echo "Your phone number is updated!";
?>
</body>
</html> 
    

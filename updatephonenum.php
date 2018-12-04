<!DOCTYPE html>
<html>
<head>
<media charset="utf-8">
<title>Your previous phone number:</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<ol>
<?php
$whichCustomer=$_POST["custid"];
$query='SELECT * FROM customer WHERE customer.customerid="' . $whichCustomer . '"';
$result=mysqli_query($connection,$query);
if(!$result){
  die("database query on customer id failed");
}
while($row=mysqli_fetch_assoc($result)){
  echo '<li>';
  echo $row["phonenumber"];
}
mysqli_free_result($result);
?>
<form action="updatedata.php" method="post">
Type your current phone number:<input type="number" name="currentphonenum">
<input type="submit" value="update phone number">
<?php
  echo '<input type="hidden" name="custid" value="'.$whichCustomer.'">';
?>
</form>
</ol>
<?php
    mysqli_close($connection);
?>
</body>
</html>

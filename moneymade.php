<!DOCTYPE html>
<html>
<head>
<meta charset="itf-8">
<title>product</title>
</head>
<body>
<?php
include "connectdb.php"
?>
<ol>
<?php
  $whichProduct=$_POST["productid"];
  $query2='SELECT * FROM product WHERE product.productid=' . $whichProduct . '';
  $query3='SELECT productid, SUM(quantity) FROM purchase WHERE productid='.$whichProduct.'';
  
  $result2=mysqli_query($connection,$query2);
  $result3=mysqli_query($connection,$query3);
  if(!$result2 OR !$result3){
    die("database query failed."); }
  while($row2=mysqli_fetch_assoc($result2)){
      echo'<li>';
      echo $row2["description"]."<br>";
      while($row3=mysqli_fetch_assoc($result3)){
      echo $row3["SUM(quantity)"]."<br>";
      $money=$row3["SUM(quantity)"]*$row2["costperitem"];
      echo $money;}
  }
  mysqli_free_result($result2);
  mysqli_free_result($result3);
?>
</ol>
</php 
    mysqli_close($connection);
?>
</body>
</html>

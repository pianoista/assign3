<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Products that have not been purchased</title>
</head>
<body>
<?php
    include "connectdb.php";
    $query='SELECT * FROM product WHERE product.productid NOT IN(SELECT productid FROM  purchase)';
    $result=mysqli_query($connection,$query);
    if(!$result){
       die("database query on product failed.");}
    while($row=mysqli_fetch_assoc($result)){
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

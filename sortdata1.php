<?php
  include "connectdb.php";

$whichOrder=$_POST["sort"];
echo $whichOrder;
if($whichOrder=="sortdescriptionasc"){
$query='SELECT * FROM product ORDER BY description ASC';
} elseif($whichOrder=="sortdescriptiondesc"){
$query='SELECT * FROM product ORDER BY description DESC';
} elseif($whichOrder=="sortpriceasc"){
$query='SELECT * FROM product ORDER BY costperitem ASC';
} elseif($whichOrder=="sortpricedesc"){
$query='SELECT * FROM product ORDER BY costperitem DESC';}
  
$result=mysqli_query($connection,$query);

if(!$result){
  die("database query on product failed.");
} while($row=mysqli_fetch_assoc($result)){
        echo'<li>';
        echo $row["description"],$row["productid"],$row["costperitem"],$row["quantity"];
}
mysqli_free_result($result);
?>
</ol>
<?php
   mysqli_close($connection);
?>

<?php
   $query = "SELECT * FROM product";
   $result = mysqli_query($connection,$query);
   if (!$result) {
        die("databases query failed.");
    }
   echo "How do you want the product sorted? </br>";
echo'<input type="radio" name="sort" value="sortdescriptionasc">sort description in ascending order<br>;
<input type="radio" name="sort" value="sortdescriptiondesc">sort description in descending order<br>;
<input type="radio" name="sort" value="sortpriceasc">sort price in ascending order<br>;
<input type="radio" name="sort" value="sortpricedesc">sort price in descending order<br>';

$whichOrder=$_POST["sort"];
if($whichOrder="sortdescriptionasc"){
$query="SELECT * FROM PRODUCT ORDER BY description ASC";
} elseif($whichOrder="sortdescriptiondesc"){
$query="SELECT * FROM PRODUCT ORDER BY description DESC";
} elseif($whichOrder="sortpriceasc"){
$query="SELECT * FROM PRODUCT ORDER BY price ASC";
} elseif($whichOrder="sortpricedesc"){
$query="SELECT * FROM PRODUCT ORDER BY price DESC";}
$result=mysqli_query($connection,$query);
if(!result){
  die("database query on product failed.");
} else{
  echo "$result";
}
?>

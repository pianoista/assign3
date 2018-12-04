

function(sort(){
if(document.getElementById("sort description by ascending order").checked){
echo'SELECT * FROM PRODUCT ORDER BY description ASC';
} elseif(document.getElementById("sort description by descending order").checked){
echo'SELECT * FROM PRODUCT ORDER BY description DESC';
} elseif(document.getElementById("sort price by ascending order").checked){
echo'SELECT * FROM PRODUCT ORDER BY price ASC';
} elseif(document.getElementById("sort price by descending order").checked){
echo "1";}


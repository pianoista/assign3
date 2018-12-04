<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dr. Western's Vet Clinic-Your Pets</title>
</head>
<body>
<?php
   include 'connectdb.php';
?>
<h1>Here is your info adding status:</h1>
<ol>
<?php
   $whichCustomer= $_POST["customerid"];
   $firstName = $_POST["firstname"];
   $lastName =$_POST["lastname"];
   $city=$_POST["city"];
   $phoneNumber=$_POST["phonenumber"];
   $agentId=$_POST["agentid"];
   $query = 'INSERT INTO customer values("' . $whichCustomer . '","' . $firstName . '","' . $lastName . '","' . $city . '",' . $phoneNumber . ',"' . $agentId . '")';
   echo $query;
   if (!mysqli_query($connection, $query)) {
        die("Error: insert failed" . mysqli_error($connection));
    }
   echo "Your customer info was added!";
   mysqli_close($connection);
?>
</ol>
</body>
</html>

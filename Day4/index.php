<?php 
//include 'Backend/conn.php';
//$username="varun2";
//$password="varun123";
//$sql="INSERT INTO login(username,password) VALUES ('$username','$password')";
//$result=$conn->query($sql);
include 'Backend/getproducts.php';
$products=getallproducts();
$product=getsingleproduct(4);
//print_r($products);
print_r($product);
?>
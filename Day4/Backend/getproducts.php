<?php 
function getallproducts(){
    include 'conn.php';
//$products=array('Mobile','TV');
//$product='Fridge';
//array_push($products,$product);
//print_r($products);
$data=array();
$sql="SELECT * FROM products";
$result=$conn->query($sql);
while($row=$result->fetch_assoc()){
    array_push($data,$row);
}
return($data);

}
function getsingleproduct($id){
    include 'conn.php';
    $data=array();
    $sql="SELECT * FROM products WHERE id=$id";
    $result = $conn->query($sql);
    $row=$result->fetch_assoc();
    return $row;
    

}



?>
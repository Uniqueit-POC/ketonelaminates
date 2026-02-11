<?php
include_once __DIR__.'/../Model/product.php'; 
$jsonArray = array();
$proobj= new product();
$id=$_GET['ProductID'];
$result=$proobj->selectbypk($id); 
if($result) 
{
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $jsonArray['status'] = true;
    $jsonArray['message'] = "Successfully";
    $jsonArray['data'] = $output;
}
else
{
    $jsonArray['status'] = false;
    $jsonArray['message'] = "Server Down";
}
echo json_encode($jsonArray);

?>

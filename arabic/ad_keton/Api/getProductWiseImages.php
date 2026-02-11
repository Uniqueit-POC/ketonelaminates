<?php
include_once __DIR__.'/../Model/images.php'; 
echo __DIR__.'/../Model/images.php';
$jsonArray = array();
$proobj= new images();
$ProductID=$_GET['ProductID'];
if(!empty($_GET['ProductID']))
{
    $result=$proobj->selectbyproductid($ProductID); 
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
}
else
{
    $jsonArray['status'] = false;
    $jsonArray['message'] = "Please Pass the Product id";
}

echo json_encode($jsonArray);

?>

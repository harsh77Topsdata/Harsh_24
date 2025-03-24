<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"),true);

$id=$data['id'];
$productname = $data['pname'];
$price = $data['pprice'];

require_once "dbconfig.php";

$query = "UPDATE tbl_product set pname='".$productname."',pprice='".$price."' where id='".$id."'";
//echo json_encode($query);
if (mysqli_query($conn, $query)) 
{
    echo json_encode(array("message" => "Product update successfully", "status" => true));
} 
else 
{
    echo json_encode(array("message" => "Failed to update product", "status" => false, "error" => mysqli_error($conn)));
}

mysqli_close($conn);
?>

<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$data = json_decode(file_get_contents("php://input"),true);


$productname = $data['ppname'];
$price = $data['pprice'];

require_once "dbconfig.php";

$query = "INSERT INTO tbl_product(pname, pprice) VALUES('".$productname."', '".$price."')";
//echo json_encode($query);
if (mysqli_query($conn, $query)) 
{
    echo json_encode(array("message" => "Product added successfully", "status" => true));
} 
else 
{
    echo json_encode(array("message" => "Failed to add product", "status" => false, "error" => mysqli_error($conn)));
}

mysqli_close($conn);
?>

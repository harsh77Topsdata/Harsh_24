<?php

include_once('model.php');

class control extends model   
{
	function __construct()
	{
		
		session_start();
		
		model::__construct();  
		
		  $url = $_SERVER['PATH_INFO']; 
		
		switch($url)
		{
			case '/create' :
				$data_arr = json_decode(file_get_contents("php://input"), true);
				$pro_name = $data_arr['pro_name']; 
				$pro_price = $data_arr['pro_price'];
				
				$arr=array("pro_name"=>$pro_name,"pro_price"=>$pro_price);
				
				$res=$this->insert('pro_tbl',$arr);
				if($res or die("Insert Query Failed"))
				{
					echo json_encode(array("message" => "products added sucessfully", "status" => true));	
				}
				else
				{
					echo json_encode(array("message" => "product not added ", "status" => false));	
				}
				break;
				
			
			case '/update' :
				$data_arr = json_decode(file_get_contents("php://input"), true);
				$id=$data_arr["pro_id"];
				$pro_name = $data_arr["pro_name"]; 
				$pro_price = $data_arr["pro_price"];
				
				$arr=array("pro_name"=>$pro_name,"pro_price"=>$pro_price);
				$where=array("pro_id"=>$id);
				
				$res=$this->update_where('pro_tbl',$arr,$where);
				if($res or die("Update Query Failed"))
				{	
					echo json_encode(array("message" => "prodcuct Update Successfully", "status" => true));	
				}
				else
				{	
					echo json_encode(array("message" => "Failed prodcuct Not Update", "status" => false));	
				}
				break;
				
			case '/delete' :
				$pro_id = $_GET['pro_id'];
				$where=array("pro_id"=>$pro_id);
				$res=$this->delete('pro_tbl',$where);
				if($res or die("Delete Query Failed"))
				{	
					echo json_encode(array("message" => "product Delete Successfully", "status" => true));	
				}
				else
				{	
					echo json_encode(array("message" => "Failed  Not Deleted", "status" => false));	
				}
				break;
				
			
		}
	}
}

$obj=new control;

?>
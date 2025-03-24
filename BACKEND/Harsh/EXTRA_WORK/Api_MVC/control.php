<?php



include_once('model.php');


class control extends model{
	function __construct()
	{

		session_start();

		model::__construct();

		$url = $_SERVER['PATH_INFO'];

		switch ($url) {
			case '/create':
				$data_arr=json_decode(file_get_contents('php://input'),true);
				$pro_name=$data_arr['pro_name'];
				$pro_price=$data_arr['pro_price'];

				$arr=array("pro_name"=>$pro_name,"pro_price"=>$pro_price);
				$res=$this->insert('pro_tbl',$arr);

				if($res or die ('insert query failed'))
				{
					echo json_encode(array("message"=>"product added sucessfullty","status"=>true));
				}
				else
				{
					echo json_encode(array("message"=>"product not added","status"=>false));
				}
				break;

			case '/insert' :
				$res=$this->select('pro_tbl');
				$count=count($res);

				if($count > 0)
				{
					echo json_encode($res);
				}
				else
				{
					echo json_encode(array("message"=>"Not found","status"=>false));
				}
				break;

			case '/single_get' :
				$pro_id=$_GET['pro_id'];

				$where=array("pro_id"=>$pro_id);
				$chk=$this->select_where('pro_tbl',$where);
				$res=$chk->fetch_object();
				if($res)
				{
					echo json_encode($res);
				}
				else
				{
					echo json_encode(array("message"=>"Data Found","stutus"=>false));

				}
				break;
			
			case '/update' :
				$data_arr=json_decode(file_get_contents("php://input"),true);

				$pro_id=$data_arr["pro_id"];
				$pro_name=$data_arr["pro_name"];
				$pro_price=$data_arr["pro_price"];

				$arr=array("pro_name"=>$pro_name,"pro_price"=>$pro_price);
				$where=array("pro_id"=>$pro_id);

				$res=$this->update_where('pro_tbl',$arr,$where);
				if($res or die('query failed'))
				{
					echo json_encode(array("message"=>"update sucessfully","status"=>true));
				}
				else
				{
					echo json_encode(array("message"=>"not updated","status"=>false));
				}
				break;

			case '/delete' :
				$pro_id=$_GET['pro_id'];
				$where=array("pro_id"=>$pro_id);
				$res=$this->delete('pro_tbl',$where);
				if($res or die ('query failed'))
				{
					echo json_encode(array("message"=>"deleted  sucessfully","status"=>true));
				}
				else
				{
					echo json_encode(array("message"=>"deleted not  sucessfully","status"=>true));
				}
				break;

			
			
			


		}
	}
}


$obj = new control;

?>
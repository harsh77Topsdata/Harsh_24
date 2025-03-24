<?php

include_once('../website/model.php');

class control extends model{
		
	 function __construct()
	 {
		model::__construct();
		$path = $_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/index' :
				include_once('index.php');
				break;
				
			case '/login' :
				include_once('login.php');
				break;
			
			case '/view_stock' :
				$vieword_arr = $this->select('stock');
				include_once('view_stock.php');
				break;
			
			case '/form' :
				include_once('form.php');
				break;
			
			case '/add_pro' :
				if (isset($_REQUEST['submit'])) {
					$name = $_REQUEST['Name'];
					$types = $_REQUEST['Types'];
					$price = $_REQUEST['Price'];
					$qty= $_REQUEST['qty'];
					$file = $_FILES['image']['name'];
					echo $path = "stock/" . $file;
					$tmp_img = $_FILES['image']['tmp_name'];
					move_uploaded_file($tmp_img, $path);

					$data = array(
						"Name" => $name,
						"Types" => $types,
						"Price" => $price,
						"s_qty"=> $qty,
						"image" => $file
					);
					
					$res = $this->insert('stock', $data);
					if ($res) {
						echo "<script>
							alert('product successful !');
							window.location='view_stock';
						</script>";
					} else {
						echo "<script>
							alert('product not successful !');
						</script>";
					}

				}
				include_once('add_pro.php');
				break;
				
			case '/manage_cust' :
				$managecust_arr = $this->select('customer');
				include_once('manage_cust.php');
				break;
			
			case '/Manage_order' :
				$maorder_arr = $this->select('p_order');
				include_once('Manage_order.php');
				break;
			
			case '/signup' :
				if(isset($_REQUEST['signup']))
				{
					$name = $_REQUEST['name'];
					//$contact = $_REQUEST['contact'];
					$email = $_REQUEST['email'];
					$password = md5($_REQUEST['password']);
					$gender=$_REQUEST['gender'];

					$data=array("Name"=>$name,"Email"=>$email,"Password"=>$password,"gender"=>$gender);

					$res=$this->insert("manager",$data);
					if ($res)
					{
						echo "<script>
							alert('Add successful !');
						</script>";
					}
				}
				include_once('signup.php');
				break;
				
			case '/delete' :
				if(isset($_REQUEST['del_stock']))
				{
					$s_id=$_REQUEST['del_stock'];
					$where=array("s_id"=>$s_id);
					$res=$this->delete_where('stock',$where);
					if($res)
					{
						echo "<script>
							alert('stock deleted !!');
							window.location='view_stock';
						    </script>";
					}
					else
					{
						echo "<script>
							 alert('customer not deleted !!');
							 window.location='view_stock';
						     </script>";
					}
				}
				if(isset($_REQUEST['del_customer']))
				{
					$id=$_REQUEST['del_customer'];
					$where=array("id"=>$id);
					$res=$this->delete_where('customer',$where);
					if($res)
					{
						echo "<script>
							alert('customer deleted successfully !!');
							window.location='manage_cust';
						    </script>";
					}
					else
					{
						echo "<script>
							alert('customer not deleted !!');
							window.location='manage_cust';
						    </script>";
					}
				}
				if(isset($_REQUEST['del_order']))
				{
					$o_id=$_REQUEST['del_order'];
					$where=array("o_id"=>$o_id);
					$res=$this->delete_where('p_order',$where);
					if($res)
					{
						echo "<script>
							alert('order deleted successfully !!');
							window.location='Manage_order';
						    </script>";
					}
					else
					{
						echo "<script>
							alert('order not deleted !!');
							window.location='Manage_order';
						    </script>";
					}
				}
				break;
				
			default :
			   echo "404 page not found";
			   break;
		}
	 
	 }

}

$obj=new control;

?>
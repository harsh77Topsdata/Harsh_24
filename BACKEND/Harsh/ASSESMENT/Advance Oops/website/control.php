<?php

include_once('model.php');
session_start();
class control extends model
{

	function __construct()
	{
		model::__construct();
		$path = $_SERVER['PATH_INFO'];


		switch ($path) {
			case '/index':
				$manage_stock = $this->select('stock');
				include_once('index.php');
				break;
			case '/buy':
				if (isset($_REQUEST['buy'])) {
					$stock_id = $_REQUEST['buy'];
					$where = array("s_id" => $stock_id);
					$res = $this->select_where("stock", $where);
					$fetch = $res->fetch_object();
					$cust_id = $_SESSION['userid'];
					$date = date("Y-m-d");
					if (isset($_REQUEST['submit'])) {
						$qty = $_REQUEST['qty'];
						$address = $_REQUEST['address'];
						$data = array("cust_id" => $cust_id, "o_date" => $date, "qty" => $qty, "address" => $address, "s_id" => $stock_id);
						$res = $this->insert('p_order', $data);
						if ($res) {
							echo "<script>alert('Order Placed')
								window.location='index';</script>";
						}
					}
				}
				include_once('buy.php');
				break;
			case '/about':
				include_once('about.php');
				break;

			case '/order':
				echo $cust_id = $_SESSION['userid'];
				echo "<br>";
				$where = array("cust_id" => $cust_id);
				$profile = $this->select_where("customer", $where);
				$res = $profile->fetch_object();
				$order = $this->joins('p_order', 'customer', 'stock', 'p_order.cust_id=customer.cust_id', 'p_order.s_id=stock.s_id', 'customer.cust_id', $cust_id);
				include_once('order.php');
				break;


			case '/contact':
				include_once('contact.php');
				break;

			case '/login':
				if (isset($_REQUEST['submit'])) {
					$email = $_REQUEST['email'];
					$password = md5($_REQUEST['password']);
					$where = array("email" => $email, "password" => $password);
					$res = $this->select_where('customer', $where);

					$chk = $res->num_rows; // check cond by rows
					if ($chk===1) // 1 meanse true
					{

						$fetch = $res->fetch_object();
						
						$_SESSION['email'] = $email;
						$_SESSION['userid'] = $fetch->cust_id;


						echo "<script>
							alert('Login Success !');
							window.location='index';
							</script>";
					} else {
						echo "<script>
								  alert('inner Not Success');</script>";
					}
				}
				include_once('login.php');
				break;

			case '/register':
				if (isset($_REQUEST['register'])) {
					$name = $_REQUEST['name'];
					$contact = $_REQUEST['contact'];
					$email = $_REQUEST['email'];
					$password = md5($_REQUEST['password']);
					$gender = $_REQUEST['gender'];

					$data = array(
						"name" => $name,
						"contact" => $contact,
						"email" => $email,
						"password" => $password,
						"gender" => $gender
					);

					$res = $this->insert('customer', $data);
					if ($res) {
						echo "<script>
							alert('register successful !');
							</script>";
					} else {
						echo "<script>
							alert('wrong Creadential!!');
							</script>";
					}
				}
				include_once('register.php');
				break;

			case '/userlogout':
				if (isset($_SESSION['email']) && isset($_SESSION['userid'])) {
					unset($_SESSION['email']);
					unset($_SESSION['userid']);

					echo "<script>alert('Logout Success');
							window.location='login';</script>";
				}
				break;
			default:
				echo "404 page not found";
				break;
		}
	}
}

$obj = new control;

?>
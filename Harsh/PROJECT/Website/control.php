<?php

include_once('model.php');

class control extends model
{

	function __construct()
	{
		//session_start();
		model::__construct();

		$path = $_SERVER['PATH_INFO'];


		switch ($path) {
			case '/index':
				include_once('index.php');
				break;

			case '/about':
				include_once('about.php');
				break;

			case '/class':
				include_once('class.php');
				break;

			case '/contact':

				include_once('contact.php');
				break;

			case '/feature':
				include_once('feature.php');
				break;

			case '/login':
				if (isset($_REQUEST['submit'])) {

					$email = $_REQUEST['email'];
					$password = md5($_REQUEST['password']);

					$where = array("email" => $email, "password" => $password);

					$res = $this->select_where('customer', $where);

					$chk = $res->num_rows;
					if ($chk === 1) {

						$fetch = $res->fetch_object();
						$status = $fetch->Status;
						$userid = $fetch->Cust_id;
						if ($status == "unblock") {
							/*$_SESSION['Email']=$email;
												 $_SESSION['Userid']=$userid;*/
							echo "<script>
							alert('Login successful !');
							window.location='index'
							</script>";
						} else {
							echo "<script>
							alert('Login Failed due to Blocked Account !');
							</script>";
						}
					} else {
						echo "<script>
							alert('Login Failed due to Wrong Creadential !');
						</script>";
					}

				}
				include_once('login.php');
				break;

			case '/signup':
				if (isset($_REQUEST['signup'])) {
					$name = $_REQUEST['name'];
					$email = $_REQUEST['email'];
					$password = md5($_REQUEST['password']);
					$Mobile_No = $_REQUEST['mobile_no'];
					$address = $_REQUEST['address'];
					//$photo=$_REQUEST['file']['name'];
					$gender = $_REQUEST['gender'];

					$file = $_FILES['file']['name'];
					$path = "img/" . $file;
					$tmp_img = $_FILES['file']['tmp_name'];
					move_uploaded_file($tmp_img, $path);

					$data = array(
						"Name" => $name,
						"Email" => $email,
						"Password" => $password,
						"Mobile_No" => $Mobile_No,
						"Photo" => $file,
						"Address" => $address,
						"Gender" => $gender
					);

					$res = $this->insert('customer', $data);
					if ($res) {
						echo "<script>
							alert('Signup successful !');
						</script>";
					} else {
						echo "signup not sucessfully";
					}

				}
				include_once('signup.php');
				break;

			default:
				echo "<h1>404 page not found</h1>";
				break;
		}
	}
}

$obj = new control;


?>
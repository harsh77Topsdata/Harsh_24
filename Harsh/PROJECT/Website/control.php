<?php

include_once('model.php');

class control extends model
{

	function __construct()
	{
		session_start();
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
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['Name'];
					$email=$_REQUEST['Email'];
					$comment=$_REQUEST['Comment'];
					
					$data= array("Name"=>$name,"Email"=>$email,"Comment"=>$comment);
					
					$res=$this->insert('contactus',$data);
					if($res)
					{
						echo "<script>
							alert('contact successful !');
							</script>";
					}
					else
					{
						echo "<script>
							alert('contact not successful !');
							</script>";
					}
					
				}
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
						//$userid = $fetch->Cust_id;
						if ($status == "unblock") {
							$_SESSION['username']=$fetch->Name;
							$_SESSION['userid']=$fetch->Cust_id;
						
							echo "<script>
							alert('Login successful !');
							window.location='index';
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

					 $file = $_FILES['photo']['name'];
					$path = "img/" . $file;
					$tmp_img = $_FILES['photo']['tmp_name'];
					move_uploaded_file($tmp_img, $path);

					$data = array(
						"Name" => $name,
						"Email" => $email,
						"Password" => $password,
						"mobile_No" => $Mobile_No,
						"Photo" => $file,
						"Address" => $address,
						"Gender" => $gender
					);

					$res = $this->insert('customer', $data);
					if ($res) {
						echo "<script>
							alert('Signup successful !');
							window.location('login');
						</script>";
					} else {
						echo "signup not sucessfully";
					}

				}
				include_once('signup.php');
				break;
			
			case '/userprofile' :
				$where=array("Cust_id"=>$_SESSION['userid']);
				$res=$this->select_where('customer',$where);
				$fetch=$res->fetch_object();
				include_once('userprofile.php');
				break;
				
				
			case '/editprofile' :
				if(isset($_REQUEST['user_edit']))
				{
					$Cust_id=$_REQUEST['user_edit'];
					
					$where=array("Cust_id"=>$Cust_id);
					//print_r($where);
					$res=$this->select_where('customer',$where);
					$fetch=$res->fetch_object();
					
					$old_img=$fetch->Photo;
					
					if(isset($_REQUEST['save']))
					{
						$name=$_REQUEST['name'];
						$email=$_REQUEST['email'];
						
						//$Cust_id=$_REQUEST['Cust_id'];
						
						if($_FILES['file']['size']>0)
						{
						
							$file=$_FILES['file']['name'];
							$path="img/".$file;
							$tmp_img=$_FILES['file']['tmp_name'];
							move_uploaded_file($tmp_img,$path);
						
							$arr=array("Name"=>$name,"Email"=>$email,"Photo"=>$file);
							//	print_r($arr);
							$res=$this->update_where('customer',$arr,$where);
							if($res)
							{
								$_SESSION['username']=$name;
								unlink("website/img/".$old_img);
								echo "<script>
									alert('Update successful !');
									window.location='userprofile'
								  </script>";
							}
						}
						else
						{
							$arr=array("Name"=>$name,"Email"=>$email);
							$res=$this->update_where('customer',$arr,$where);
							if($res)
							{
								$_SESSION['username']=$name;
								echo "<script>
									alert('Update successful !');
									window.location='userprofile'
								  </script>";
							}
						}
					}
				}
				include_once('editprofile.php');
				break;
				
			case '/userlogout' :
				unset($_SESSION['username']);
				unset($_SESSION['userid']);
				echo "<script>
									alert('Logout successful !');
									window.location='login'
								  </script>";
				break;
				
			case '/feedback' :
			   if(isset($_REQUEST['submit']))
			   {
				   
				   $where=array("Cust_id"=>$_SESSION['userid']);
				   $sel=$this->select_where('customer',$where);
				   $fetch=$sel->fetch_object();
				   
				    $name=$fetch->Name;
					$coment=$_REQUEST['coment'];
					$data=array("Cust_id"=>$_SESSION['userid'],'name'=>$name,'coment'=>'coment');
				   
					$res=$this->insert('feedback',$data);
					if($res)
					{
						echo "<script>
						alert('feddback add sucessfully');
						window.location='userprofile';
						</script>";
					}
					else
					{
						echo "<script>
						alert('feddback not added');
						</script>";
					}
					
			   }
			   include_once('feedback.php');
			   break;
				
			default:
				echo "<h1>404 page not found</h1>";
				break;
		}
	}
}

$obj = new control;


?>
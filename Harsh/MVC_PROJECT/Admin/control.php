<?php

include_once('../Website/model.php');

class control extends model
{

	function __construct()
	{
		model::__construct();
		$path = $_SERVER['PATH_INFO'];
		session_start();
		switch ($path) {
			case '/login':
				if(isset($_REQUEST['submit']))
				{
					$email=$_REQUEST['email'];
					$password=md5($_REQUEST['password']);
					$where=array("email"=>$email,"password"=>$password);
					$res=$this->select_where('admin',$where);
					if($res)
					{
						$_SESSION['email']=$email;
						echo "<script>
						alert('Login Success');
						window.location='dashboard';</script>";
					}
					else
					{
					
						echo "<script>
						alert('inner Not Success');</script>";
					
					}
					
				}
				
				include_once("index.php");
				break;

			case '/dashboard':
				include_once("dashboard.php");
				break;

			case '/Manage_contact':
				$contact_arr = $this->select('contactus');
				include_once("Manage_contact.php");
				break;

			case '/Manage_dietplan':
				$diet_arr = $this->select('diet');
				include_once('Manage_dietplan.php');
				break;
			
			case '/Manage_trainer':
				$mtrainer_arr = $this->select('trainer');
				include_once('Manage_Trainer.php');
				break;

			case '/Add_Trainer':
				if(isset($_REQUEST['submit']))
				{
					$name=$_REQUEST['name'];
					$email=$_REQUEST['email'];
					$password=md5($_REQUEST['password']);
					$gender=$_REQUEST['gender'];
					$lag_arr=$_REQUEST['lag']; 
						$lag=implode(",",$lag_arr); 
					
					$file = $_FILES['file']['name'];
					$path = "assets/img/" . $file;
					$tmp_img = $_FILES['file']['tmp_name'];
					move_uploaded_file($tmp_img, $path);
					
					$data=array(
					'name'=>$name,
					'email'=>$email,
					'password'=>$password,
					'gender'=>$gender,
					'language'=>$lag,
					'file'=>$file,
					);
					
					$res=$this->insert('trainer',$data);
					if($res)
					{
						echo"<switch>
							echo'Trainer add sucessfully !!'
							</switch>";
					}
					else
					{
						echo"<switch>
							echo'Trainer not add '
							</switch>";
					}
					
				}
				
				include_once('Add_Trainer.php');
				break;

			case '/View_feedback':
				$feedback_arr = $this->select('feedback');
				include_once('View_feedback.php');
				break;

			case '/Manage_schedule':
				$schedule_arr = $this->select('schedule');
				include_once('Manage_schedule.php');
				break;

			case '/delete':
				if (isset($_REQUEST['Manage_contacts'])) {
					$id = $_REQUEST['Manage_contacts'];
					$where = array("c_id" => $id);
					$res = $this->delete_where('contactus', $where);
					if($res) 
					{
						echo "<script>
							alert('Contact Deleted successful !');
							window.location='Manage_contact';
						</script>";
					} else {
						echo "<script>
							alert('Contact not Deleted !');
							window.location='Manage_contact';
						</script>";
					}
				}
				if(isset($_REQUEST['View_feedback']))
				{
					$v_id=$_REQUEST['View_feedback'];
					$where=array("v_id"=>$v_id);
					$res=$this->delete_where('feedback',$where);
					if($res) 
					{
						echo "<script>
							alert('feedback Deleted successful !');
							window.location='View_feedback';
						</script>";
					} else {
						echo "<script>
							alert('feedback not Deleted !');
							window.location='View_feedback';
						</script>";
					}
				}
				
				
				if(isset($_REQUEST['Manage_schedule']))
				{
					$m_id=$_REQUEST["Manage_schedule"];
					$where=array("m_id"=> $m_id);
					$res=$this->delete_where('schedule',$where);
					if($res)
					{
						echo "<script>
								alert('schedule delete Sucessfully!!')
								window.location='Manage_schedule'
							</script>";
					}
					else
					{
						echo "<script>
								alert('schedule not delete!!')
							</script>";
					}
				}
				
		
				if(isset($_REQUEST['Manage_dietplan']))
				{
					$d_id=$_REQUEST["Manage_dietplan"];
					$where=array("d_id"=> $d_id);
					$res=$this->delete_where('diet',$where);
					if($res)
					{
						echo "<script>
								alert('diet delete Sucessfully!!')
								window.location='Manage_dietplan'
							</script>";
					}
					else
					{
						echo "<script>
								alert('diet not delete!!')
							</script>";
					}
				}
				

				break;
				
			case '/register' :
			   if(isset($_REQUEST['register']))
			   {
				  
				   $name=$_REQUEST['name'];
				   $email=$_REQUEST['email'];
				   $password=md5($_REQUEST['password']);
				   $contact=$_REQUEST['contact'];
				   
				   $data=array(
				  	
					'name'=>$name,
					'email'=>$email,
					'Password'=>$password,
					'contact'=>$contact);
					
					$res = $this->insert('admin',$data);
					if($res)
					{
						echo "<script>
							alert('Register Sucessfully!!')
							window.location='dashboard'
							</script>";
					}
					else
					{
						echo "<script>
							alert('Wrong craditional')
							</script>";
					}
			   }
				include_once('register.php');
				break;

			case '/button':
				if(isset($_REQUEST['logout']))
				{	
					unset($_SESSION['email']);
					echo "<script>
						alert('Logout successful !');
						window.location='login'
					</script>";
				}
				break;
			default:
				echo "<h1>404 page not found </h1>";
				break;

		}
	}
}

$obj = new control;
?>
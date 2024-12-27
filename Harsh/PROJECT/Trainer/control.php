<?php

include_once('../website/model.php');

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
					$res=$this->select_where('trainer',$where);
					if($res)
					{
						$_SESSION['trainer_email']=$email;
						echo "<script>
						alert('Login Success');
						window.location='dashboard';</script>";
					}
					else
					{
					
						echo "<script>
						alert('login required');
						window.location='index'
						</script>";
					
					}
					
				}
				include_once('index.php');
				break;
				
			case '/userlogout' :
				if(isset($_SESSION['trainer_email']))
				{
					unset($_SESSION['trainer_email']);
				
					echo "<script>
					window.location='login';</script>";
				}
				break;

			case '/dashboard':
				include_once('dashboard.php');
				break;

			case '/Manage_contact':
				$contact_arr = $this->select('contactus');
				include_once('Manage_contact.php');
				break;

			case '/Manage_dietplan':
				$diet_arr = $this->select('diet');
				include_once('Manage_dietplan.php');
				break;

			case '/View_feedback':
				$feedback_arr = $this->select('feedback');
				include_once('View_feedback.php');
				break;

			case '/Manage_schedule':
				$schedule_arr = $this->select('schedule');
				include_once('Manage_schedule.php');
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
							window.location='index'
							</script>";
					}
			   }
				include_once('register.php');
				break;
				
			case '/button' :
				if(isset($_REQUEST['logout']))
				{	
					unset($_SESSION['trainer_email']);
					echo "<script>
						alert('Logout successful !');
						window.location='index'
					</script>";
				}
				break;

			
			default :
				echo "<h1>404 page not found </h1>";
				break;


		}
	}
}

$obj = new control;
?>
<?php

include_once('../Website/model.php');

class control extends model
{

	function __construct()
	{
		model::__construct();
		$path = $_SERVER['PATH_INFO'];

		switch ($path) {
			case '/index':
				include_once("dashboard.php");
				break;

			case '/dashboard':
				include_once("index.php");
				break;

			case '/Manage_contact':
				$contact_arr = $this->select('contactus');
				include_once("Manage_contact.php");
				break;

			case '/Manage_dietplan':
				$diet_arr = $this->select('diet');
				include_once('Manage_dietplan.php');
				break;

			case '/Add_Trainer':
				$trainer_arr = $this->select('trainer');
				include_once('Add_Trainer.php');
				break;

			case '/View_feedback':
				$feedback_arr = $this->select('feedback');
				include_once('View_feedback.php');
				break;

			case '/login':
				include_once('login.php');
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
					if ($res) {
						echo "<script>
							alert('Contact Deleted successful !');
							window.location='Manage_contact';
						</script>";
					} else {
						echo "<script>
							alert('Contact not Deleted successful !');
							window.location='Manage_contact';
						</script>";
					}
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
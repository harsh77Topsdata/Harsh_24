<?php

include_once('../website/model.php');

class control extends model
{

	function __construct()
	{
		model::__construct();
		$path = $_SERVER['PATH_INFO'];

		switch ($path) {
			case '/index':
				include_once('dashboard.php');
				break;

			case '/dashboard':
				include_once('index.php');
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

			case '/login':
				include_once('login.php');
				break;

			case '/Manage_schedule':
				$schedule_arr = $this->select('schedule');
				include_once('Manage_schedule.php');
				break;

			default:
				echo "<h1>404 page not found </h1>";
				break;

		}
	}
}

$obj = new control;
?>
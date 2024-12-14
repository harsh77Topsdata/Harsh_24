<?php

include_once('model.php');

class control{
	
		function __construct()
		{
			model::__construct();
			$PATH=$_SERVER['PATH_INFO'];
			
			switch($PATH)
			{
				case '/index' :
					
					include_once('index.php');
					break;
				
				case '/about' :
					include_once('about.php');
					break;
				
				case '/order' :
					$order_arr=$this->select(order);
					include_once('order.php');
					break;
					
				case '/contact' :
					include_once('contact.php');
					break;
				
				case '/login' :
					include_once('login.php');
					break;
					
				case '/register' :
					include_once('register.php');
					break;
				
				default :
					echo "404 page not found";
					break;
			}
		}
}

$obj=new control;

?>
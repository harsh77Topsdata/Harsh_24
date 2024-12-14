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
			
			case '/manage_pro' :
				include_once('manage_pro.php');
				break;
				
			case '/view_stock' :
				include_once('view_stock.php');
				break;
			
			case '/form' :
				include_once('form.php');
				break;
			
			case '/add_pro' :
				if(isset($_REQUEST[submit]));
				{
					
				}
				include_once('add_pro.php');
				break;
				
			case '/manage_cust' :
				include_once('manage_cust.php');
				break;
			
			case '/signup' :
				include_once('signup.php');
				break;
				
			default :
			   echo "404 page not found";
			   break;
		}
	 
	 }

}

$obj=new control;

?>
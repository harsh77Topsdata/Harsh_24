<?php 
	/*Create a class with static properties and methods, and demonstrate their access using the scope resolution operator*/
	
	class abc
	{
		public static $static_var="I am Static Varaible";
		
		public $simple_var="I am Simple Varaible";
		
		public function display()
		{
			echo $this->simple_var."<br>";
			
			echo abc::$static_var."<br>";
		}
		
	}
	$abc=new abc;
	$abc->display();
	
	echo abc::$static_var;
?>

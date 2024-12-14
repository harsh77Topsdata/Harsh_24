<?php 
	/*Write a class that implements a destructor to perform cleanup tasks when an object is
		destroyed.*/
		
	class person
	{
		public $name;
		public $age;
		
		function __construct($name,$age)
		{
			$this->name=$name;
			$this->age=$age;
		}
		function __destruct()
		{
			echo "Object is Destruct";
		}
		
		function display()
		{
			echo "Name:	".$this->name.",	age:	".$this->age."<br>";
		}
		
		
			
	}
	
	$person = new person('Prasad',20);
	
	$person->display();
?>
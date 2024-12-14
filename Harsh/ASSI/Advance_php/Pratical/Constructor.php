<?php 
	/*Create a class with a constructor that initializes properties when an object is created*/
	
	class person
	{
		public $name;
		public $age;
		
		function __construct($name,$age)
		{
			$this->name=$name;
			$this->age=$age;
		}
		
		function display()
		{
			echo "Name:	".$this->name.",	age:	".$this->age."<br>";
		}
	}
	
	$person = new person('Prasad',20);
	
	$person->display();
?>
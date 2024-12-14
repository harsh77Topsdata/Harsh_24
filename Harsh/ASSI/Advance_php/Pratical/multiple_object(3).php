<?php
	/*Instantiate multiple objects of the "Car" class and demonstrate how to access their
		properties and methods */
		
	class car
	{
		public $make;
		public $model;
		public $year;
		
		public function display_info()
		{
			return "Car	".$this->make. " ".$this->model.", Year ".$this->year;
		}
	}
	
	$car1 = new Car();
	$car1->make = "Toyota";
	$car1->model = "Camry";
	$car1->year = 2020;
	
	//car2
	
	$car2 = new Car();
	$car2->make = "Honda";
	$car2->model = "Accord";
	$car2->year = 2019;
	
	
	echo $car1->display_info()."<br>";
	echo $car2->display_info();
?>
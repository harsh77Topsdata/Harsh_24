<?php 
	//Write a PHP script to create a class representing a "Car" with properties like make, model, and year, and a method to display the car details.
	
	class car	
	{
		public $make;
		public $model;
		public $year;
		
		public function display_car($make,$model,$year)
		{
			echo "Make:	".$this->make=$make."<br>";
			echo "Model:	".$this->model=$model."<br>";
			echo "Year:	".$this->year=$year."<br>";
			
		}
	}
	$Car = new car();
	$Car->display_car("Toyota", "Camry", 2020);	
?>
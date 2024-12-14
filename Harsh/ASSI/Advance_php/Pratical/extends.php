<?php 
	/*Create a "Vehicle" class and extend it with a "Car" class. Include properties and methods inboth classes, demonstrating inherited behavior.*/
	
	class vehicle
	{
		public $make;
		public $year;
		
		public function vehicle_info()
		{
			echo "Vehicle Make:	".$this->make.	",Year:	".$this->year."<br>";
		}
	}
	class car extends vehicle
	{
		public $model;
		
		public function car_info()
		{
			$this->vehicle_info();
			
			echo "Model:	".$this->model."<br>";
			
		}
	}
	$car =new car();
	
	$car->make = "Toyota";
	$car->year = 2020;
	$car->model = "Camry";
	
	$car->car_info();
?>
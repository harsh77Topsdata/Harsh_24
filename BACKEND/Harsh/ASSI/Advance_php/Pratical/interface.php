<?php 
	/*Define an interface named VehicleInterface with methods like start(), stop(), andimplement this interface in multiple classes*/
	
	interface VehicleInterface
	{
		function start();
		function stop();
	}
	
	class car implements VehicleInterface
	{
		function start()
		{
			echo "Car is Starting <br>";
		}
		
		function stop()
		{
			echo "Car is Stopping <br>";
		}
	}
	
	class bike implements VehicleInterface
	{
		function start()
		{
			echo "Bike is Starting <br>";
		}
		
		function stop()
		{
			echo "Bike is Stopping <br>";
		}
	}
	
	$car =new car();
	$bike= new bike();
	
	$car->start();
	$car->stop();
	
	$bike->start();
	$bike->stop();
?>
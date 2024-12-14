<?php 
	//trait method
	
	trait abc
	{
		function example()
		{
			echo "Example of ABC Class <br>";
		}
	}
	
	trait xyz 
	{
		function example1()
		{
			echo "Example of XYZ Class <br>";
		}
	}
	
	class c
	{
		use abc,xyz;
	}
	
	$obj=new c;
	$obj->example();
	$obj->example1();
?>
<?php 
	//Multi-Level Inheritance
	
	class abc 
	{
		function firstclass()
		{
			echo "This is ABC Class <br>";
		}
	}
	class def extends abc
	{
		function secondclass()
		{
			echo "This is DEF Class <br>";
		}
	}
	class xyz extends def
	{
		function thirdclass()
		{
			echo "This is XYZ Class <br>";
		}
	}
	
	$obj=new xyz;
	$obj->firstclass();
	$obj->secondclass();
	$obj->thirdclass();
	
	
?>

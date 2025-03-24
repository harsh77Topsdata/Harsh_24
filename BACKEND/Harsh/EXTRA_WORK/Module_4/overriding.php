<?php
	//Overriding Polymorphism

	class abc
	{
		function sum($a,$b)
		{
			echo $a+$b."<br>";
		}
	}
	
	class xyz extends abc
	{
		function sum($a,$b)
		{
			abc::sum(5,6);
			echo $a*$b;
		}
	}
	
	$obj=new xyz;
	$obj->sum(5,10);
?>
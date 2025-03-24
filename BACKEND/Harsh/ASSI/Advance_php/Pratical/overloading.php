<?php 
	/*Create a class that demonstrates method overloading by defining multiple methods withthesame name but different parameters.*/
	
	class abc
	{
		function sum($a,$b)
		{
			echo $a+$b;
		}
		
		function sum($a,$b,$c)
		{
			echo $a+$b+$c;
		}
	}
	
	$obj=new abc;
	
	$obj->sum(5,6);
	$obj->sum(5,6,7);
?>
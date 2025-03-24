<?php
	//Fibonacci Series
	$a=0;
	$b=1;
	$sum=0;
	echo $a."<br>";
	echo $b."<br>";
	while($sum<34)
	{
		$sum=$a+$b;
		echo $sum."<br>";
		$a=$b;
		$b=$sum;
	}
?>
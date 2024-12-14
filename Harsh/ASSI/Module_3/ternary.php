<?php 
	//Write a PHP program to find the largest of three numbers using ternary Operator
	

	// Declare three variables with values
	$num1 = 10;
	$num2 = 25;
	$num3 = 15;

	
	$number = ($num1 > $num2) ? (($num1 > $num3) ? $num1 : $num3) : (($num2 > $num3) ? $num2 : $num3);

	// Display the largest number
	echo "The largest number is: " . $number;


?>

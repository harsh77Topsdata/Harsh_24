<?php

	//Numeric Array
	echo "<h1>Numeric Array</h1>";
	$array=array("A","B","C","D");
	print_r($array);
	echo "<br>";
	echo $array[2];
	
	//Associative Arrays
	echo "<hr><h1>Associative Array</h1>";
	$ass=array("name"=>"deepak","age"=>21,"location"=>"Ahmedabad");
	print_r($ass);
	echo "<br>";
	echo $ass['name'];
	
	echo "<hr><h1>Multidimensional Array</h1>";
	$multi=array("name"=>"prasad",array("age"=>20,"mobile"=>1234567890),"location"=>"Ahmedabad");
	print_r($multi);
	echo "<br>";
	
?>

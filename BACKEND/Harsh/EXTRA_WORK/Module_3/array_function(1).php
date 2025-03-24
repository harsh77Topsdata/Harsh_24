<?php
	//Asort and Arsort
	echo "<hr><h1>Asort and Arsort</h1>";
	$a=array("a"=>"raj","b"=>"ishita","c"=>"nagar");
	
	asort($a);	//Value sort ascending order a-z
	print_r($a);
	echo "<br>";
	
	arsort($a);	//Value sort descending order z-a
	print_r($a);
	
	//Ksort and Krsort
	//This is used to sort in the key/index
	echo "<hr><h1>Ksort and Krsort</h1>";
	
	$b=array("b"=>"ishita","a"=>"raj","c"=>"nagar"); 
	ksort($b);
	print_r($b);
	echo "<br>";
	
	krsort($b);
	print_r($b);
	echo "<br>";
	
	//In Array
	echo "<hr><h1>In Array </h1>";
	$lag=array("Hindi","English","Gujarati"); // find array value by if else
	
	if(in_array("Hindi",$lag))
	{
		echo "Match";
	}
	else
	{
		echo "Not Match";
	}
	
?>
<?php 
	//Array Combine
	echo "<hr><h1>Array Combine</h1>";
	
	$a=array("a","b","c");
	$b=array("php","java","asp");
	
	print_r(array_combine($a,$b));
	
	//Array Count Value
	echo "<hr><h1>Array Count value</h1>";
	
	$a=array("a"=>"KEYUR","b"=>"KEYUR","C"=>"DEVANSH"); //Counts all the values of an array
	print_r(array_count_values($a));
	
	//Array keys
	echo "<hr><h1>Array Keys and Array Values</h1>";
	
	$b=array("name"=>"Keyur","email"=>"abc@gmail.com","mobile"=>1234567890);
	print_r($b);
	echo "<br>";
	
	$key=array_keys($b);
	
	foreach($key as $k)
	{
		echo $k."<br>";
	}
	echo "<br>";
	$values=array_values($b);
	foreach($values as $v)
	{
		echo $v."<br>";
	}
	
	//Array Merge
	echo "<hr><h1>Array Merge</h1>";
	$c=array("a"=>"TIGER","b"=>"LION"); // MERGE 2 ARRAY TO 1 ARRAY
	$d=array("a"=>"TIGER","c"=>"DOG");
	
	print_r(array_merge($c,$d));
	
	//Array Reverse
	echo "<hr><h1>Array Reverse</h1>";
	$a=array("b"=>"Cat","a"=>"Tiger","c"=>"Dog");
	print_r(array_reverse($a)); //This reverse the key and its value in array.
	
	//Array SizeOf
	echo "<hr><h1>Array Size Of</h1>";
	$e=array("a"=>"Keyur","b"=>"Jignesh","c"=>"Devansh");
	print_r(sizeof($e));
?>
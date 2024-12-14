<?php 
	//How can you declare the array (all type) in PHP?
	//Three Type of Array 1.Indexed Array,2.Associative Array,3.Multi-dimensional array
	
	//Indexed array
	echo "<h1><center>Indexed Array</center></h1>";
	$i_a=array('apple','banana','mango');
	
	foreach ($i_a as $key => $value) 
	{
		echo "$key: $value\n";  
    }
	
	echo "<hr>";
	
	//Associative array
	echo "<h1><center>Associative Array</center></h1>";
	
	$a_a=array("a"=>"apple","b"=>"banana","c"=>"mango");
	
	foreach($a_a as $key => $value)
	{
		echo "$key:$value\n";
	}
	echo "<hr>";
	
	//Multi-dimensional array
	echo "<h1><center>Multi-dimensional Array</center></h1>";
	
	$m_a=array("fruits","cars"=>array("BMW","Porche"),"Vegetable");
	
	print_r($m_a);
	echo "<hr>";
?>
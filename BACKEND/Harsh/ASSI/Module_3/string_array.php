<?php 
	//Explain with example Covert a JSON string to array. 
	
	$string='{"a":1,"b":2,"c":3,"d":4}';
	
	//Convert Json String to array.
	$array = json_decode($string, true);
	
	print_r($array);

?>
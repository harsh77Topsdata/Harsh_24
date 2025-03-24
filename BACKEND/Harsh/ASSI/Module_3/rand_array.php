<?php 
	// Get random values from array
	
	$a=array('Honda','BMW','Tesla','Porsche');
	
	//random key
	$random=array_rand($a);
	//random value
	$value=$a[$random];
	
	echo $value;
?>
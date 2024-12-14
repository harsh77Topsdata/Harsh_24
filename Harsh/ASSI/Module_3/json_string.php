<?php
	//Write a PHP script which decodes the following JSON string
	
	$string = '{
    "name": "Deepak",
    "age": 30,
    "profession": "Developer"
}';
	//conver json string in array
	$string_array=json_decode($string,true);
	print_r($string_array);
?>
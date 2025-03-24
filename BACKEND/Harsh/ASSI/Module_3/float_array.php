<?php
	//Declare a Multi Dimensioned array of floats called balances having Three rows and five columns
	
	$balances=array(
		array(50.20,10.30,40.36,45.63,10.25),
		array(15.24,42.36,240.45,52.36,45.25),
		array(15.20,45.36,52.36,45.65,15.25),
	);
	foreach($balances as $row)
	{
		foreach($row as $value)
		{
			echo $value."&nbsp ";
		}
		echo "<br>";
	}
?>
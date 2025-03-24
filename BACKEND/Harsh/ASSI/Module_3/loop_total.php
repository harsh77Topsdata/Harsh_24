<?php

$numbers = array(1,2,3,4,5);


$total = 0;

// Use a for loop to sum the elements
for ($i = 0; $i < count($numbers); $i++)
{
	print_r($numbers[$i]);
	echo "<br>";
    $total += $numbers[$i];
}

// Output the total
echo "The total is: " . $total;
?>

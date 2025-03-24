<?php 
//Function example and types of function in php
//Predefined Function
echo "<center><h1>Predefined Function</h1></center><hr>";
$name="Prasad";
echo strlen($name);

echo "<br>";

$sum=445566;
var_dump($sum);
//User Defined Function
echo "<center><h1>User-Defined Function</h1></center><hr>";
//Simple Function
echo "<h2>Simple Function</h2><br>";

function sum()	//function defined
{
	$a=20;$b=50;
	echo 'sum='.$a+$b.'<br>';
}
sum();	//call of function
//Parameter Function
echo "<h2>Parameter Function</h2><br>";

function par_sum($a,$b)
{
	echo 'sum='.$a+$b.'<br>';
}
sum(50,60);
//Parameter Default Value Function
echo "<h2>Parameter Default Function</h2><br>";

function def_sum($a=0,$b=0,$c=0)
{
	echo 'sum='.$a+$b+$c.'<br>';
}
def_sum(50,40);

//Return function
echo "<h2>Return Function</h2><br>";
function return_sum($a,$b)
{
	return $a+$b;
}
echo return_sum(50,60);
?>
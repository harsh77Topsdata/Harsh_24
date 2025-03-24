<?php
//Arithmetic Operators
$x=10;  
$y=6;

echo "<hr>";
echo"<h1>Arithmetic Operators</h1>";

echo "Addition ".$x+$y."<br>";  //Addition
echo "Substriction ".$x-$y."<br>";  //substriction
echo "multiplication ".$x*$y."<br>";  //multiplication
echo "Division ".$x/$y."<br>";  //Division

//Assignment Operators
$x=20;
echo "<hr>";
echo"<h1>Assignment Operators</h1>";  

echo $x."<br>";

$y=100;

echo "<br>".$x+=$y;
echo "<br>".$x-=10;
echo "<br>".$x*=10;
echo "<br>".$x/=10;
echo "<br>".$x%=10;

//Comparison Operators
$a=15;
$b='15';
echo "<hr>";
echo "<h1>Comparison Operators</h1>";

echo $a==$b?"A is equal to B":"A is no equal to B";
echo "<br>";
echo $a===$b?"A match with B":" A not match with B";
echo "<br>";
echo $a<=$b?"A is equal to or less then B":"A is not equal or less then B";
echo "<br>";
echo $a>=$b?"A is greater then or Equal to B":"A is not greater then or Equal to B";
echo "<br>";
echo $a!=$b?"A is Not euqal to B":"A is Equal with B";
echo "<br>";

//increment and decrement Operators 
$a=5;
$b=10;
echo "<hr>";
echo "<h1>Increment and decrement Operators</h1>";

echo "Value of A is $a before ++a  ";
echo "<br>";
echo "Value of A is after ++a: ".++$a."</br>";
//Decerement Operators
echo "Value of B is $a before --b ";
echo "<br>";
echo "Value of B after --b: ".--$b."</br>";

//logical Operators
echo "<hr>";
echo "<h1>Logical Operators</h1>";
echo "<b>Logical Operators are : && , ||, !</b>";
echo "<br>";
$k=15;
$l=20;
if($k=15 && $l=20)
{
	echo"Both number are same"."</br>";
}

$k=15;
$l=20;
if($k=15 || $l=50)
{
	echo"one number are same"."</br>";
}

if(!($k=15 && $l=20))
{
	echo"Both number are same"."</br>";
}
else
{
	echo "not operators"."<br>";
}


//String Operators
echo "<hr>";
echo "<h1>String Operators</h1>";

$n="MY Name "."Harsh"."<br>";
echo $n;

$m ="first name ";
$m.="last name";
echo $m;



?>
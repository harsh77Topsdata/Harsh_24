<?php 
echo "<center><h1>Loops type and example</h1></center><hr>";
//Loops type and example of loops

//while loop
echo "<h2>While loop </h2>";

$i=1;
while($i<=10)
{
	echo $i."<br>";
	$i++;
}
//for loop
echo "<h2>For loop </h2>";

for($i=1;$i<=10;$i++)
{
	echo $i."<br>";
}
//do-while loop
echo "<h2>Do While loop </h2>";
$i=1;
do
{
	echo $i."<br>";
	$i++;
}while($i<=10);
echo "<hr>";
//Break And Continue Example
echo "<center><h1>Break And Continue example</h1></center><hr>";
//Break Example
echo "<h2>Break Example </h2>";
for($i=1;$i<=10;$i++)
{
	if($i==7)
	{
		echo "Loop Break due to break condition";
		break;
	}
	echo $i."<br>";
}
echo "<h2>Continue Example </h2>";
for($i=1;$i<=10;$i++)
{
	if($i==4 or $i==7)
	{
		echo "Loop skip this number<br>";
		continue;
	}
	echo $i."<br>";
}
?>
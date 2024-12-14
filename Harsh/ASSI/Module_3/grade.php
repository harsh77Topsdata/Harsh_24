<?php 
/*Write a PHP program to enter marks of five subjects Physics, Chemistry,
Biology, Mathematics and Computer, calculate percentage and grade by if
else*/
function grade($physics=0,$chemistry=0,$biology=0,$math=0,$computer=0)
{
	$total=$physics+$chemistry+$biology+$math+$computer;
	return $percentage=($total/500)*100;
}
echo "Percentage of Student ".$per=grade(80,70,70,90,90)."<br>";

//echo $per;

if($per>=90)
{
	echo "Student passed with A+ Grade<br>";
}
elseif($per>=80)
{
	echo "Student passed with A Grade<br>";
}
elseif($per>=70)
{
	echo "Student passed with B+ Grade<br>";
}
elseif($per>=60)
{
	echo "Student passed with B Grade<br>";
}
elseif($per>=50)
{
	echo "Student passed with C+ Grade<br>";
}
elseif($per>=40)
{
	echo "Student passed with C Grade<br>";
}
else
{
	echo "You're Fail";
}
?>
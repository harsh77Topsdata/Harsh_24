<?php 
	$num1=1;
	$num2=1;
	$num3=0;
	for($i=1;$i<=4;$i++)
	{
		
		$num2=$num1;
		
		$num3=$num1++;
		
		if($num3==1)
		{
			echo " ";
		}
		else
		{
			echo $num3;
		}
		for($j=1;$j<3;$j++)
		{
			
			echo $num2=$num2+4;
		
		}
		echo "<br>";
		
		
		
		
	}
	
?>
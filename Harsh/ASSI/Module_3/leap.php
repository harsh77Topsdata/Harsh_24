<?php 
	$i=1901;	//starting year
	$n=1;
	
	 while($i<=2016)
	{
		
		if($i%4==0)
		{
			//echo "leap year";
			echo $n.")	".$i." It is Leap Year";
			echo "<br>";
			$n++;
			
		}
		
		$i++;
		
	}
?>
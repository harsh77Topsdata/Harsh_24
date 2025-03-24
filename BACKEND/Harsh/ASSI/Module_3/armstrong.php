<?php 
	function armstrong($number)
	{
			$sum=0;
			$x=$number;
			while($x!=0)
			{
				$rem = $x % 10;  
				
				$sum =$sum+ $rem*$rem*$rem;  
				
				$x = $x / 10;  
				//echo $x."<br>";
			}
		 if ($number == $sum)
        echo 1;
     
		// not an armstrong number    
		else
		{
			echo 0;    
		}
	}
	armstrong(407);
?>
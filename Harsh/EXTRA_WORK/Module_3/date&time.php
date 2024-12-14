<?php
    date_default_timezone_set('asia/calcutta');
    //date
        echo "<h1><center> Date Function</center></h1><hr>";

        echo"<br>";
        echo date('d/m/y')."<br>";
		echo date('D.m.y')."<br>";

		echo date('h:i:s A')."<br>";	//12-hr format 
		echo date('H:i:s')."<br>"; 		//to generate 24hr format write h in captical

    //time
        echo "<h1><center> Time Function</center></h1><hr>";
        echo time() . "<br>";



		$hours=time()+ (2 * 60 * 60);
		echo date('H:i:s ',$hours)."<br>";

		$date=time()+ (2 * 24 * 60 * 60);
		echo date('d/m/y',$date)."<br>";
		echo date('H:i:s ',$date)."<br>";
?>
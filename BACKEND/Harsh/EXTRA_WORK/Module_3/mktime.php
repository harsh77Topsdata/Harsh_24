<?php 
	date_default_timezone_set('asia/calcutta');
	
	$future_date=mktime(0,0,0,date('m')+1,date('d')+1,date('y')+1);
	$future_time=mktime(date("h")+1,date("i")+1,date("s")+1);
	
	echo "<br>" . date('d/m/y',$future_date);
	echo "<br>" . date('h:i:s a',$future_time);

	
	
?>
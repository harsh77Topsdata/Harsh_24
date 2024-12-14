<?php 
	//simple class Example	
	class abc
	{
		public $a=10;
		public $b=20;
		
		function sum()
		{
			echo $this->a+$this->b;
		}
		function multi()
		{
			echo $this->a*$this->b;
			
		}
	}
	$obj=new abc;
	$obj->sum();
	echo "<br>";
	$obj->multi();
?>
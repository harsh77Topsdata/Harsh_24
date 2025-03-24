<?php 
	//Access Modifier
	
	class abc
	{
		public $a=10;
		protected $b=20;
		private $c=30;
		
		function example()
		{
			echo $this->a."<br>";
			echo $this->b."<br>";
			echo $this->c."<br>";
		}
	}
	
	class xyz extends abc
	{
		function example1()
		{
			echo $this->a."<br>";
			//echo $this->b."<br>";
			echo $this->c."<br>";
		}
	}
	$obj=new xyz;
	echo $obj->a; // run 
	echo $obj->b;// error
	echo $obj->c;// error
?>
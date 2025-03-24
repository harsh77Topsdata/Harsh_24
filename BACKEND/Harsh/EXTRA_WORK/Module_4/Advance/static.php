<?php 
	//Static php
	
	class abc
	{
		public static $a="i m a";
		public $b="hello";
		
		public function static_fun()
		{
			echo $this->b;
			echo abc::$a;
		}
	}
	
	class xyz extends abc
	{
		public function static_bar()
		{
			echo $this->b;
			echo abc::$a;
		}
	}
	
	echo xyz::$a;
	$obj= new xyz;
	$obj->static_bar();
?>
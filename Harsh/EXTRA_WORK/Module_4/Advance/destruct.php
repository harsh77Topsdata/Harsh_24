<?php 
	//Destruct Function 
	
	class abc
	{
		public function __destruct()
		{
			echo "Destruction Function ";
		}
		
		public function body()
		{
			echo "Simple Body Function ";
		}
		
		
	}
	$obj= new abc;
	$obj->body();
?>
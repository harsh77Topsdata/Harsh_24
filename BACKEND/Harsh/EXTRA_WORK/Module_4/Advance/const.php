<?php 
	//Const Keyword
	
	class abc
	{
		public const a="fixed";
		
		function display()
		{
			echo abc::a;
		}
	}
	class xyz extends abc
	{
		public function display2()
		{
			echo abc::a;
		}		
	}
	echo abc::a;
?>
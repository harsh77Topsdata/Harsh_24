<?php 
	//Final Keyword
	
	final class a
	{
		function test()
		{
			echo "This is final method";
		}
	}
	class b extends a  // extend not possible for final class
	{
		function test()
		{
			echo "This is final method of b class";
		}
	}
	
	$obj=new b;
	$obj->test();
	
	
	/*
	Output:
	
	Fatal error: Class b cannot extend final class a in D:\Deepak Prasad\htdocs\tops\Extra Task\Module_4\Advance\final.php on line 11
	*/
?>
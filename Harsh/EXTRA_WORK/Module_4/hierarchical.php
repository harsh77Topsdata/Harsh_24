<?php 
	//Hierarchical Inheritance.
	
	class a
	{
		function method1()
		{
			echo "Class A Method";
		}
	}
	
	class b extends a
	{
		function method2()
		{
			echo "Class B Method";
		}
	}
	
	class c extends a
	{
		
		function method3()
		{
			a::method1();
			echo "Class C Method";
		}
	}
	
	$obj=new b;
	$obj1=new c;
	
	$obj->method1();
	$obj->method2();
	echo "<hr>";
	$obj1->method3();
?>
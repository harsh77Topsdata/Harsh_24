<?php 
	/*Create two traits and use them in a class to demonstrate how to include multiple behaviors.*/
	
	trait abc
	{
		function first_trait()
		{
			echo "I am First Trait \n";
		}
	}
	
	trait xyz
	{
		function second_trait()
		{
			echo "I am Second Trait";
		}
	}
	
	class example 
	{
		use abc,xyz;
	}
	
	$obj=new example;
	
	$obj->first_trait();
	$obj->second_trait();
?>
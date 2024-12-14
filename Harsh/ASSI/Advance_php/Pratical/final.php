<?php 
	// Create a class marked as final and attempt to extend it to show the restriction.

	final class final_class
	{
		public function example()
		{
			return "This is Final Class";
		}
	}

	class child_class extends final_class
	{
		public function example()
		{
			return "This is Child Class";
		}
	}

	$obj= new child_class;

	echo $obj->example();
?>
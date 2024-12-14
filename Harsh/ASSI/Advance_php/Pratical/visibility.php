<?php
	class visibility
	{
		public $public_v='Public Property';
		protected $protected_v='Protected Property';
		private $private_v='Private Property';

		//Function 

		public function public_method()
		{
			return "This is a Public Method";
		}

		protected function protected_method()
		{
			return "This is a Protected Method";
		}

		private function private_method()
		{
			return "This is a Private Method";
		}

		public function accessinclass()
		{
			return[
				$this->public_v,
				$this->protected_v,
				$this->private_v,
				$this->public_method(),
				$this->protected_method(),
				$this->private_method()
			];
		}
	}

	class subclass extends visibility
	{
		public function accessfromclass()
		{
			return[
				$this->public_v,
				$this->protected_v,
				
				$this->public_method(),
				$this->protected_method()
				
			];
		}
	}


	$obj=new subclass;
	echo "Access In visibility class<br>";
	print_r ($obj->accessinclass());
	echo "<br><br><BR>Access From visibility class<br>";
	print_r ($obj->accessfromclass());

 ?>
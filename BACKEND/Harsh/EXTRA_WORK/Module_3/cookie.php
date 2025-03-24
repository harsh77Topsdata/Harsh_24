<html>
	<head>
		<title>Cookie Example</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">
			<form action="" method="post">
				<label for="name">Create Cookie</label>
				<input type="text" name="name" class="form-control mb-3 mt-2">
				<input type="submit" name="submit" value="Create Cookie" class="btn">
			</form>
		</div>
	</body>
</html>
<?php 
	
	//cookie create
	if(isset($_REQUEST['submit']))
	{
		$name=$_REQUEST['name'];
		setcookie("user",$name,time()+15);
		
		echo "Cookie Name: ".$_COOKIE['user'];
	}
?>
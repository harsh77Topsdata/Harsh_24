<html>
	<head>
		<title>File Example</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container col-md-3 border border-2 border-dark mt-5">
			<form action="" method="post" enctype="multipart/form-data">
				<label for="name">Files Storing</label>
				<input type="text" name="name" class="form-control mb-3 mt-2">
				<input type="file" name="file1" class="form-control">
				<input type="submit" name="submit" value="Save the file" class="text-white bg-success mt-2 btn">
			</form>
		</div>
	</body>
</html>
<?php 
	if(isset($_REQUEST['submit']))
	{
		echo $name=$_REQUEST['name'];
		 $img=$_FILES['file1']['name'];
		
		//image upload
		
		//path of image
		$path="img/".$img;
		
		$tmp_img=$_FILES['file1']['tmp_name'];
		
		//upload image
		
		move_uploaded_file($tmp_img,$path);
		
		// view 
		if($_FILES['file1']['size']>0)
		{
		?>
			<img src='img/<?php echo $img?>'>
		<?php
		}
	}
?>
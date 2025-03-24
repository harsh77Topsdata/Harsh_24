<?php

if(isset($_SESSION['userid']))
{
	echo "<script>
	     window.location='index';
		</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
     
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <title>Register</title>
</head>
<body>
    
        <div class="container mt-5">
            <h1 class="text-center border-bottom mb-3">Register</h1>
            <form action="" method="post">
                <div class="form-group mt-2">
                    <label for="name">Name</label>
                    <input type="name" name="name" id="" placeholder="Enter Your name" class="form-control" required>
                </div>
                <div class="form-group mt-2">
                    <label for="contact">Contact</label>
                    <input type="contact" name="contact" id="contact" placeholder="Enter Your contact" class="form-control" required>
                </div>
                <div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter Your email" class="form-control" required>
                </div>
                <div class="form-group mt-2">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="" placeholder="Enter Your password" class="form-control" required>
                </div>
                <div class="form-group">
					<label class="form-check-label" for="flexRadioDefault2">
					Gender :
						Male  <input name="gender" type="radio" value="Male" class="form-select"/>
                        Female <input name="gender" type="radio" value="Female "  class="form-select"/>
					</label>
				</div>
                <div class="form-group mt-2">
                    <input type="submit" value="Register" name="register" class="btn btn-info btn-lg">
                    <br>
                    <a href="login" class="float-right "><h4>If you have already an* account</h4></a>
                </div>
            </form>
        </div>
    
</body>
</html>
<?php

if(isset($_SESSION['userid']))
{
	echo "<script>
	alert('login first');
		window.location='index';
		
		 </script>";
}

?>
<html>
<head>
    <meta charset="utf-8">
    <title>login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
	<link href="css/font.css" rel="stylesheet">
	
</head>

<body>
    <main>
        
        <section class="contact-section">
            <div class="col-md-6">

		<div class="container mt-5">
		   
            <h1 class="text-center border-bottom mb-3">Login</h1>
            <form action="" method="post" >
                <div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="" placeholder="Enter Your Emails" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Your Password"class="form-control">
                </div>
                <div class="form-group mt-2">
                    <input type="submit" value="Submit" name="submit" class="btn btn-danger btn-lg">
                    <br>
                    <a href="signup" class="float-right "><h4>Create An Account</h4></a>
                </div>
            </form>
        </div>
            </div>
        </section>
       
   
    </main>
</body>

</html>
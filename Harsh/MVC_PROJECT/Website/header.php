<?php
function active($currect_page)
{
    $url_array = explode('/', $_SERVER['REQUEST_URI']); // current page url
    $url = end($url_array);
    if ($currect_page == $url) 
	{
        echo 'active'; //class name in css 
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fitness</title>
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

<body class="bg-white">
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="" class="navbar-brand">
                <h1 class="m-0 display-4 font-weight-bold text-uppercase text-primary play" style="letter-spacing:5px;">Fitness Fuel</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4 bg-secondary">
                    <a href="index" class="nav-item nav-link <?php echo active('index') ?>">Home</a>
                    <a href="about" class="nav-item nav-link <?php echo active('about') ?> ">About Us</a>
                    <a href="feature" class="nav-item nav-link <?php echo active('feature') ?>">Our Features</a>
                    <a href="class" class="nav-item nav-link <?php echo active('class') ?>">Classes</a>
                    <a href="contact" class="nav-item nav-link <?php echo active('contact') ?> ">Contact</a>
					<?php
						if(isset($_SESSION['userid']))
						{
					?>
					
					
					  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Account Activity
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a href="userprofile" class="dropdown-item  <?php echo active('userprofile')?>">My Account</a>
          <a href="userlogout" class="header btn-2 dropdown-item">logout</a>
        </div>
      </li>
					<?php			
					}
					
					
					else
					{
					?>
						<a href="login" class="header btn-2">login</a>
					<?php
					}
					?>

                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5"
            style="min-height: 140px">
        </div>
    </div>
    <!-- Page Header End -->
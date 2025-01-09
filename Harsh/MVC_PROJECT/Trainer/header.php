<?php
	if(!isset($_SESSION['trainer_email']))
	{
		echo "<script>alert('Login required');
		window.location='login';</script>";
	}
	
				
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Fitness Fuel</a>
            </div>

            <div class="header-right">
			
				
				<?php if(isset($_SESSION['trainer_email'])) { ?>
								  <li><a href="userlogout"><?php echo $_SESSION['trainer_email'];?></li>
								  <?php  } 
								  else { ?>
								  <li><a href="login">Login</a></li>
								  <?php } ?>

                
                


            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php echo $_SESSION['trainer_email'];?>
                                <br />
                              
                            </div>
                        </div>

                    </li>


                    <li>
                        <a href="dashboard"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>

                 
                    <li>
                        <a href="Manage_contact"><i class="fa fa-bell "></i>Manage contact</a>
                    </li>
                    <li>
                        <a href="Manage_dietplan"><i class="fa fa-circle-o "></i>Manage dietplan</a>
                    </li>
                    <li>
                        <a href="Manage_schedule"><i class="fa fa-bug "></i>Manage_schedule</a>
                    </li>
                    <li>
                        <a href="View_feedback"><i class="fa fa-edit "></i>View feedback</a>
                    </li>
                    </li>
                </ul>
            </div>

        </nav>
    </div>
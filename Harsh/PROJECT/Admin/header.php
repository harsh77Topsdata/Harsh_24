<?php 
	//session_start();
	if(!isset($_SESSION['email']))
	{
		echo "<script>
						alert('Login Required');
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

                
                <a href="button?logout" class="btn btn-danger" text="Logout" title="Logout"><h4>Logout<span
                        class="fa fa-exclamation-circle "></span></h4></a>


            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/pictur.jpg" class="img-thumbnail" />

                            <div class="inner-text">
                                <?php echo $_SESSION['email'];?>
                                <br />
                                  </div>
                        </div>

                    </li>


                   
                    <li>

                    <li>
                        <a href="dashboard"><i class="fa fa-toggle-on"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="Manage_contact"><i class="fa fa-bell "></i>Manage Contact</a>
                    </li>
                    <li>
                        <a href="Manage_dietplan"><i class="fa fa-circle-o "></i>Manage Dietplan</a>
                    </li>
                    <li>
                        <a href="Manage_schedule"><i class="fa fa-bug "></i>Manage Schedule</a>
                    </li>
					<li>
                        <a href="Manage_trainer"><i class="fa fa-bug "></i>Manage Trainer</a>
                    </li>
                    <li>
                        <a href="View_feedback"><i class="fa fa-edit "></i>View Feedback</a>
                    </li>
                    </li>

                    <li>
                        <a href="Add_Trainer"><i class="fa fa-desktop "></i>Add Trainer </a>
                    </li>
                </ul>
            </div>

        </nav>
    </div>
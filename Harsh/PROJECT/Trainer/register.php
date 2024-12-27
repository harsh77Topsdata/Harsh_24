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
    <!-- GOOGLE FONTS-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body style="background-color: #E2E2E2;">
    <div class="container">
        <div class="row text-center " style="padding-top:100px;">
            <div class="col-md-12">
                <img src="assets/img/logo-invoice.png" />
            </div>
        </div>
        <div class="row ">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

                <div class="panel-body">
                    <form role="form" action="" method="post">
                        <hr/>
                        <h5>Trainer Register</h5>
                        <br/>
                    <div class="form-group mt-2">
					<label for="name">Name</label>
					<input type="name" name="name" id="name" placeholder="Enter Your name" class="form-control" required>
					</div>
					
					<div class="form-group mt-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter Your email" class="form-control" required>
					</div>
					
					<div class="form-group mt-2">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Your password" class="form-control" required>
					</div>
					
					<div class="form-group mt-2">
                    <label for="contact">Contact</label>
                    <input type="contact" name="contact" id="contact" placeholder="Enter Your contact" class="form-control" required>
					</div>
					<div class="form-group mt-2">
                    <input type="submit" value="Register" name="register" class="btn btn-primary">
                    <br>
                    <a href="login" class="float-right "><h4>If you have already an* account</h4></a>
					</div>
                    </form>
                </div>

            </div>


        </div>
    </div>

</body>

</html>
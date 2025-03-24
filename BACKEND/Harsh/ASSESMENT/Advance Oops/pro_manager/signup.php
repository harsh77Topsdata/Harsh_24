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
                    <input type="submit" value="signup" name="signup" class="btn btn-info btn-lg">
                    <br>
                    <a href="login" class="float-right "><h4>If you have already an account</h4></a>
                </div>
            </form>
        </div>
</body>
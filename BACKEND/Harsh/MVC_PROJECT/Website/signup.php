<?php

if(isset($_SESSION['userid']))
{
	echo "<script>
		windoe.location='index'
		 </sccript>";
}

?>

<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
  <meta charset="utf-8">
    <title>Fitness</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
	
<!--include javascript file -->
	<script src="valid.js" type="text/javascript"></script>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
</head>
<body>
   
	
	<div class="contact ">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-xs-8  border border-info">
          <div style="background-color:#198072;">
            <div class="agileits-title" style="color:#95a8ab" align="center">
              <h1><b>SIGNUP</b></h1>
            </div>
	
	<div class="agile-contact-form">

              <h4 id="msg1" align="center" style="color:#cfcf88; text-transform:capitalize"></h4>
              <br>
              <br>
			
			<form method="post" class="" onsubmit="return reg_form(this)" enctype="multipart/form-data">

			<div class="form-group ">
               <label class="control-label col-sm-2"><b>Enter your name</b><span style="color:red"></span></label>
               <div class="col-sm-10">
               <input type="text" class="form-control" placeholder="Enter your name" name="name" id="uname">
               </div>
            </div>

           <div class="form-group">
             <label class="control-label col-sm-2"><b>Enter your Password</b><span style="color:red"></span></label>
             <div class="col-sm-10">
             <input type="password" class="form-control" placeholder="Enter your Password" name="password" id="pass">
             </div>
           </div>

           <div class="form-group">
           <label class="control-label col-sm-2"><b>Enter your Email</b><span style="color:red"></span></label>
             <div class="col-sm-10">
             <input type="text" id="email" class="form-control" placeholder="Enter your Email" name="email">
            </div>
             </div>
			
			<div class="form-group">
           <label class="control-label col-sm-2"><b>Enter Mobile.no</b><span style="color:red"></span></label>
             <div class="col-sm-10">
             <input type="text" id="Mobile_no" class="form-control" placeholder="Enter your moblie.no" name="mobile_no">
            </div>
             </div>

                <div class="form-group">
                  <label class="control-label col-sm-2"><b>Gender</b><span style="color:red"></span></label>
                  <div class="col-sm-10">
                  <b>Male</b> <input type="radio" name="gender" value="m" style="width: auto; height: auto;">
                  <b>Female</b> <input type="radio" name="gender" value="f" style="width: auto; height: auto;">
                  </div>
                </div>
			
				
			<div class="form-group">
                <label class="control-label col-sm-2"><b>Adrress</b><span style="color:red"></span></label>
                <div class="col-sm-8">
                <textarea name="address" id="address" class="form-control" rows="7" placeholder="Enter Address"></textarea>
                </div>
           </div>

          <div class="form-group">
            <label class="control-label col-sm-2"><b>upload profile</b><span style="color:red"></span></label>
            <div class="col-sm-10">
            <input type="file" class="form-control" name="photo" id="photo" onChange="return check(this)">
          </div>
          </div>
		  
		  <div class="form-group">
				<div class="col-sm-8 col-sm-offset-2">
               <input href="index" type="submit" name="signup" class="btn btn-dark btn-lg" value="signup" id="submit">
				</div>
			</div>
			  <div class="form-group">
				<div class="col-sm-8 col-sm-offset-2">
				<p class="text-white border-top">If you have Already a account then login</p>
              <a href="login" class=" btn btn-primary btn-lg">Login</a>
				</div>
			</div>

            <h4 align="center"><span id="msg1" style="color:#FF0000; text-transform:capitalize"></span></h4>
            </form>

	
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Manage Institute</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{url('website/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{url('webvsite/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('website/css/style.css')}}" rel="stylesheet">
</head>

<body>

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-8">Signup Us For Students</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="contact-form bg-light rounded p-5">
                        <form method="post" name="sentMessage" action="{{url('/insert_signup')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-12 control-group">
                                    <input type="text" class="form-control p-4" name="name" id="name" placeholder="Your Name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12 control-group">
                                    <input type="email" class="form-control p-4" name="email" id="email" placeholder="Your Email"></p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12 control-group">
                                    <input type="password" class="form-control p-4" name="password" id="password" placeholder="Your password"></p>
                                </div>
                            </div>
                            <br>
                            <div class="control-group">
                               <h5>Gender : </h5> 
                                Male  <input type="radio" name="gen" value="Male" class="p-4"/>
                                Female <input type="radio" name="gen" value="Female" class="p-4"/>
                            </div>
                            <br>
                            <div class="control-group">
                               <h5>Language : </h5>
                                Hindi <input type="checkbox" name="lang[]" value="Hindi" class="p-4"/>
                                English <input type="checkbox" name="lang[]" value="English" class="p-4"/>
                                Gujarati <input type="checkbox" name="lang[]" value="Gujarati" class="p-4"/> 
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="file" class="form-control-file" name="image" id="image">plese uploade your photo</input>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="submit">submit</button>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12 control-group">
                                    <a href="login">If you alreday Registered then Login Here</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
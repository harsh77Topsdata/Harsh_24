<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title>Blog Template</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="{{url('website/images/favicon.ico')}}" type="{{url('website/image/x-icon')}}" />
<link rel="apple-touch-icon" href="{{url('website/images/apple-touch-icon.png')}}">

<!-- Design fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="{{url('website/css/bootstrap.css')}}" rel="stylesheet">

<!-- FontAwesome Icons core CSS -->
<link href="{{url('website/css/font-awesome.min.css')}}" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{ url('website/style.css')}}" rel="stylesheet">

<!-- Animate styles for this template -->
<link href="{{url('website/css/animate.css')}}" rel="stylesheet">

<!-- Responsive styles for this template -->
<link href="{{url('website/css/responsive.css')}}" rel="stylesheet">

<!-- Colors for this template -->
<link href="{{url('website/css/colors.css')}}" rel="stylesheet">

<!-- Version Marketing CSS for this template -->
<link href="{{url('website/css/version/marketing.css')}}" rel="stylesheet">

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
@include('sweetalert::alert')
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-2">Signup</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="signup-form bg-light rounded p-5">
                        <form method="post" action="{{ url('/user_signup') }}" name="sentMessage" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-12 control-group mb-2">
                                    <input type="text" class="form-control p-3" name="name" id="name" placeholder="Your Name" >
                            </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12 mb-2 control-group">
                                    <input type="email" class="form-control p-3" name="email" id="email" placeholder="Your Email">
                                </div>
                                <div class="col-sm-12 mb-2 control-group">
                                    <input type="password" class="form-control p-3" name="password" id="password" placeholder="Your password">
                                </div>
                            </div>
                            <div class="control-group">
                               <h5>Gender : </h5> 
                                Male  <input type="radio" name="gender" value="Male" class="p-4"/>
                                Female <input type="radio" name="gender" value="Female" class="p-4"/>
                            </div>
                            <br>
                            <div class="control-group">
                               <h5>Language : </h5>
                                Hindi <input type="checkbox" name="lag[]" value="Hindi" class="p-4"/>
                                English <input type="checkbox" name="lag[]" value="English" class="p-4"/>
                                Gujarati <input type="checkbox" name="lag[]" value="Gujarati" class="p-4"/>
                            </div>
                            <br>
                            <div class="form-group">
                                <input type="file" class="form-control-file" name="image" id="image" required>plese uploade your photo</input>
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
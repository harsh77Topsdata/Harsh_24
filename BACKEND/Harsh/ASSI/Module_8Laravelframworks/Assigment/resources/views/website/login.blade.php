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
    <!-- Section: Design Block -->
    <section class="text-center text-lg-start">
        <style>
            .cascading-right {
                margin-right: -50px;
            }

            @media (max-width: 991.98px) {
                .cascading-right {
                    margin-right: 0;
                }
            }
        </style>

        <!-- Jumbotron -->
        <div class="container py-4">
            <div class="row g-0 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card cascading-right bg-body-tertiary" style="backdrop-filter: blur(30px);">
                        <div class="card-body p-5 shadow-5 text-center">
                            <h2 class="fw-bold mb-5">Login Now</h2>
                            <form method="post" action="{{url('/user_auth')}}" name="sentMessage" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-12 mb-2 control-group">
                                    <input type="email" class="form-control p-2" name="email" id="email"
                                        placeholder="Your Email">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12 mb-2 control-group">
                                    <input type="password" class="form-control p-2" name="password" id="password"
                                        placeholder="Your password">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div>
                            <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-2">
                            Login
                            </button>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-8 control-group">
                                    <a href="signup">If you no any account go to signup</a>
                                </div>
                            </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg"
                        class="w-100 rounded-4 shadow-4" alt="" />
                </div>
            </div>
        </div>
        <!-- Jumbotron -->
    </section>
    <!-- Section: Design Block -->
</body>

</html>
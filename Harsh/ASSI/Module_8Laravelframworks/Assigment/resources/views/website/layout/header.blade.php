
<?php $url_array = explode('/', $_SERVER['REQUEST_URI']); // current page url
$url = end($url_array);
$title = $url;

function active($currect_page)
{
    $url_array = explode('/', $_SERVER['REQUEST_URI']); // current page url
    $url = end($url_array);
    if ($url == "") {
        $url = "index";
    }
    if ($currect_page == $url) {
        echo 'active'; //class name in css 
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title>Markedia - Marketing Blog Template</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="{{url('website/images/favicon.ico')}}" type="image/x-icon" />
<link rel="apple-touch-icon" href="{{url('website/images/apple-touch-icon.png')}}">

<!-- Design fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="{{url('website/css/bootstrap.css')}}" rel="stylesheet">

<!-- FontAwesome Icons core CSS -->
<link href="{{url('website/css/font-awesome.min.css')}}" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{url('website/style.css')}}" rel="stylesheet">

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
    <div id="wrapper">
        <header class="market-header header">
            <div class="container-fluid">
                <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                        data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand" href="marketing-index.html"><img
                            src="{{url('website/images/version/market-logo.png')}}" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item mx-2">
                                <a class="nav-link <?php echo active('index'); ?>" href="{{ url('/') }}">Home</a>
                            </li>

                            <li class="nav-item mx-2">
                                <a class="nav-link <?php echo active('Blog'); ?>" href="{{ url('/Blog') }}">Blog</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link <?php echo active('category'); ?>" href="{{ url('/category') }}">Category</a>
                            </li>
                            <li class="nav-item mx-2">
                                <a class="nav-link <?php echo active('Contact'); ?>" href="{{ url('/Contact') }}">Contact Us</a>
                            </li>
                        </ul>
                        <div >
                            @if (!session('uname'))
                                <a href="{{ url('/login') }}" class="btn btn-outline-secondary text-center text-white mt-3">Login</a>
                            @else
                            <div class="dropdown mt-2">
                            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true">
                                
                                <img src="{{url('website/customer/'.session('image'))}}" alt="Profile" width="30rm" class="rounded-circle">
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('/Profile')}}">Profile</a>
                                <a class="dropdown-item" href="{{url('/logout')}}" class="text-danger" style="color:red">Logout</a>
                            </div>
                        </div>
                            @endif

                        </div>
                    </div>
                </nav>
            </div><!-- end container-fluid -->
        </header><!-- end market-header -->
    

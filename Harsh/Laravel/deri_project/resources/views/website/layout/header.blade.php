<?php

function active($currect_page)
{
    $url_array = explode('/', $_SERVER['REQUEST_URI']);
    $url = end($url_array);
    if ($currect_page == $url) {
        echo 'active';
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DERI_PRODUCT</title>
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
    <link href="{{url('website/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{url('website/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('website/css/style.css')}}" rel="stylesheet">
</head>

<body>
    @include('sweetalert::alert')

    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3 d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="">Help</a>
                        <span class="text-white">|</span>
                        @if(session()->has('uid'))
                        <a class="text-white pr-3" href="user_logout">logout</a>
                        @else
                        <span class="text-white"></span>
                        <a class="text-white px-3" href="signup">signup</a>
                        @endif
                    </div>
                </div>
                <div class="col-md-4 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        @if(session()->has('uid'))
                            <a class="text-white pr-3" href="">Hi {{session()->get('uname')}}</a>
                            <span class="text-white">|</span>
                            <a class="text-white px-3" href="user_profile">Profile</a>
                        @endif
                    </div>
                </div>
                <div class="col-md-4 text-center text-lg right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="{{url('index')}}" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">O</span>SWEETS</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="index" class="navbar-brand mx-5 d-none d-lg-block">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">O</span>Sweets</h1>
                </a>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{url('index')}}" class="nav-item nav-link <?php echo active('Home')?>">Home</a>
                        <a href="{{url('about')}}" class="nav-item nav-link <?php echo active('About')?>">About</a>
                        <a href="{{url('catgories')}}" class="nav-item nav-link <?php echo active('Catgories')?>">Catgories</a>
                    </div>
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{url('service')}}" class="nav-item nav-link <?php echo active('Service')?>">Service</a>
                        <a href="{{url('gallery')}}" class="nav-item nav-link <?php echo active('Gallery')?>">Gallery</a>
                        <a href="{{url('contact')}}" class="nav-item nav-link <?php echo active('Contact')?>">Contact</a>
                    </div>
                    <div class="btn-group">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Small button    
                        </button>
                    <ul class="dropdown-menu">
                    </ul>
</div>
                </div>
        </div>
    </div>
    </nav>
    </div>
    </div>
    <!-- Navbar End -->
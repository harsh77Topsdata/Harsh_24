@extends('website.layout.structure')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Student Profile</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Student Profile</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- profile start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">Edit User Profile</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 py-5">
                    <h4 class="font-weight-bold mb-3">Edit User Profile</h4>
                    <h5 class="text-muted mb-3">ID : {{$data->id}}</h5>
                    <h5 class="text-muted mb-3">Name : {{$data->name}}</h5>
                    <p>Gender : {{$data->gen}}</p>
                    <p>Launguages : {{$data->lang}}</p>
                    <a href="{{ url('edit_profile/'.$data->id) }}" class="btn btn-primary mt-2">Edit Profile</a>
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="{{ url('website/upload/users/'.$data->image) }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
            </div>
    </div>
     <!-- profile ended -->

@endsection
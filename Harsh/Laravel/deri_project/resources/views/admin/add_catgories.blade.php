@extends('admin.layout.main')

@section('main_contant')
<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Categories</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <i class="fa fa-circle px-3"></i>
            <p class="m-0">catgoaries</p>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Add catgoaries</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="contact-form bg-light rounded p-5">
                        <a href="manage_catgories" class="btn btn-primary mb-3">Manage catgories</a>
                    <div id="success"></div>
                    <form name="sentMessage" action="{{url('/add_catgories')}}" id="Form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-sm-12 control-group mb-3">
                            <input type="text" class="form-control p-4" name="cat_name" id="name" placeholder="Enter catgoaries name">
                            @error('cat_name')
	                        <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-sm-12 control-group mb-3">
                                <input type="file" class="form-control p-3" name="cat_img" id="image">
                                @error('cat_img')
	                            <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                        </div>
                        <div>
                            <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
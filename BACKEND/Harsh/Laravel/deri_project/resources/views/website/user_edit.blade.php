@extends('website.layout.main')

@section('main_contant')
<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">User edit</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <i class="fa fa-circle px-3"></i>
            <p class="m-0">User edit</p>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">User Edit</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="contact-form bg-light rounded p-5">
                    <div id="success"></div>
                    <form method="post" action="{{url('/update_user/'.$data->id)}}" name="sentMessage" id="contactForm"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="col-sm-12 control-group mb-2">
                                <input type="text" class="form-control p-4" value="{{$data->name}}"   name="name" id="name" placeholder="Your Name">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6 control-group">
                                <input type="email" class="form-control p-4" value="{{$data->email}}" name="email" id="email" placeholder="Your Email">
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="control-group">
                            <h5>Gender : </h5>
                            <?php $gender=$data->gender ?>
                            Male <input type="radio" name="gender" value="Male"<?php if($gender==Male){echo "Checked"}?> class="p-4" />
                            Female <input type="radio" name="gender" value="Female" <?php if($gender==Female){echo "Checked"}?> class="p-4" />
                            @error('gender')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="control-group">
                            <h5>Language : </h5>
                            <?php 
                            $lang=$data->lang;
                            $lag_arr=explode(",",$lang);
                            ?>
                            Hindi <input type="checkbox" name="lag[]" value="Hindi" <?php if(in_array("Hindi",$lag_arr)){echo "Checked"}?> class="p-4" />
                            English <input type="checkbox" name="lag[]" value="English" <?php if(in_array("English",$lag_arr)){echo "Checked"}?> class="p-4" />
                            Gujarati <input type="checkbox" name="lag[]" value="Gujarati" <?php if(in_array("Gujarati",$lag_arr)){echo "Checked"}?> class="p-4" />
                            @error('lag[]')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="file" class="form-control-file" name="image" id="image" required>plese uploade your photo</input>
                            <img src="{{url('website/uplode/users/'.$data->img)}}" >
                            @error('img')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <button class="btn btn-primary btn-block py-3 px-5" type="submit"  id="submit">Save</button>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-12 control-group">
                                <a href="user_profile">Back</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
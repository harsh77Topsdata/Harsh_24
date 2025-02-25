@extends('website.layout.structure')

@section('content')

    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Edit Profile</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Edit Profile</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

     <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Edit profile</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="contact-form bg-light rounded p-5">
                        <form method="post" action="{{ url('/edit_profile/'.$data->id) }}" enctype="multipart/form-data" >
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-12 control-group">
                                    <input type="text" name="name" value="{{$data->name}}" class="form-control p-4" id="email" placeholder="Your Name"  />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12 control-group">
                                    <input type="email" name="email" value="{{$data->email}}" class="form-control p-4" id="email" placeholder="Your Email"  />
                                    <p class="help-block text-danger"></p>
                                </div>
                             
                            </div>
                            <div class="control-group">
                            <?php $gender=$data->gender;?>
                                Gender :<br> 
                                Male :<input type="radio" name="gen" value="Male" <?php if($gen=="Male"){ echo "checked";}?> class="p-4" />
                                Female<input type="radio" name="gen" value="Female" <?php if($gen=="Female"){ echo "checked";}?> class="p-4" />
                                <br> <br> 
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12 control-group">
                                    <input type="file" name="image" class="form-control p-4" id="email" placeholder="Your Image" />
                                    <img src="{{ url('website/upload/users/'.$data->image)}}" style="width:50px;object-fit: cover;">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Save</button>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12 control-group">
                                    <a href="{{url('student_profile')}}">Back</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
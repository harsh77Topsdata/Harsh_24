@extends('admin.layout.main')

@section('contant')


    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Teacher</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Teacher</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Add Teacher</h5>
                <h1>Teachers For Any Query</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form name="sentMessage" action="{{ url('/add_teacher') }}" method="post"  enctype="multipart/form-data">
                            @csrf
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" name="name" id="name" placeholder="Your Name"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" name="email" id="email" placeholder="Your Email"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="password" class="form-control border-0 p-4" name="password" id="password" placeholder="Your password"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                Gender :<br> 
                                Male :<input type="radio" name="gender" value="Male" class="p-4" />
                                Female<input type="radio" name="gender" value="Female" class="p-4" />
                                <br> <br> 
                            </div>
                            <div class="control-group">
                                Lag :<br> 
                                Hindi :<input type="checkbox" name="lag[]" value="Hindi" class="p-4" />
                                English<input type="checkbox" name="lag[]" value="English" class="p-4" />
                                Gujarati<input type="checkbox" name="lag[]" value="Gujarati" class="p-4" />
                                <br> <br> 
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" name="subject" value="subject"  id="subject" placeholder="Subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control-file" name="image" value="image"  id="image">plese uploade your photo</input>
                            </div>
                            
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
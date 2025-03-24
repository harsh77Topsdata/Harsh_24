@extends('website.layout.main')

@section('main_contant')
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Contact</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Contact</p>
            </div>
        </div>
    </div>
    <!-- Header End -->
     
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Contact Us For Any Query</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="contact-form bg-light rounded p-5">
                        <div id="success"></div>
                        <form name="sentMessage" method="post" action="{{url('/user_contact')}}">
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-6 control-group mb-2">
                                    <input type="text" class="form-control p-4" name="name" id="name" placeholder="Your Name">
                                    @error('name')
	                                <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-6 control-group mb-2">
                                    <input type="email" class="form-control p-4" name="email" id="email" placeholder="Your Email">
                                    @error('email')
	                                <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="control-group mb-2">
                                <input type="text" class="form-control p-4" name="mobile" id="mobile" placeholder="mobile">
                                @error('mmobile')
	                            <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="control-group mb-2">
                                <textarea class="form-control p-4" rows="6" name="comment" id="comment" placeholder="comment"></textarea>
                                @error('comment')
	                            <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection
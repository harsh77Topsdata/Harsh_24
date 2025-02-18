@extends('website.layout.main')

@section('content')


        <div class="page-title db">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2>Contact <small class="hidden-xs-down hidden-sm-down">Nulla felis eros, varius sit amet volutpat non. </small></h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item active">Contact</li>
                        </ol>
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section lb">
        <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="contact-form bg-light rounded p-5">
                        <div id="success"></div>
                        <form name="sentMessage" method="post" action="{{url('/user_contact')}}">
                            @csrf
                            <div class="form-row">
                                <div class="col-sm-12 control-group mb-2">
                                    <input type="text" class="form-control p-4" name="name" id="name" placeholder="Your Name">
                                    @error('name')
	                                <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-12 control-group mb-2">
                                    <input type="email" class="form-control p-4" name="email" id="email" placeholder="Your Email">
                                    @error('email')
	                                <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12 control-group mb-2">
                                <input type="text" class="form-control p-4" name="phone" id="phone" placeholder="phone">
                                @error('phone')
	                            <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-12 control-group mb-2">
                                <textarea class="form-control p-4" rows="2" name="subject" id="subject" placeholder="subject"></textarea>
                                @error('message')
	                            <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-12 control-group mb-2">
                                <textarea class="form-control p-4" rows="2" name="message" id="message" placeholder="message"></textarea>
                                @error('message')
	                            <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-2 px-3" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
            

        </section>

@endsection
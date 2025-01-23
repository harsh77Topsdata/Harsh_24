@extends('website.layout.main')

@section('main_contant')
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Signup</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Signup</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Signup Us For Any Query</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="contact-form bg-light rounded p-5">
                        <div id="success"></div>
                        <form method="post" name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="col-sm-12 control-group">
                                    <input type="text" class="form-control p-4" name="name" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-6 control-group">
                                    <input type="email" class="form-control p-4" name="email" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="col-sm-6 control-group">
                                    <input type="password" class="form-control p-4" name="password" id="password" placeholder="Your password" required="required" data-validation-required-message="Please enter your password" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="radio">
                               <h5> Gender :</h5> 
                                 <label><input type="radio" name="gen" checked="Male">Male</label>
                                 <label><input type="radio" name="gen" checked="Female">Female</label>
                            </div>
                            
                            <div class="checkbox">
                               <h5> language :</h5> 
                                 <label><input type="checkbox" name="lang" checked="English">English</label>
                                 <label><input type="checkbox" name="lang" checked="Hindi">Hindi</label>
                                 <label><input type="checkbox" name="lang" checked="Guj">Gujarati</label>
                            </div>
                            <div class="form-group">
                                <input type="file" class="form-control-file" name="image" id="image" required>plese uploade your photo</input>
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="submit">submit</button>
                            </div>
                            <div class="form-row">
                                <div class="col-sm-12 control-group">
                                    <a href="login">If you alreday Registered then Login Here</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
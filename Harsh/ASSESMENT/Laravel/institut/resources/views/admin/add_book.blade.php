@extends('admin.layout.main')

@section('contant')


    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Book</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Book</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Add Book</h5>
                <h1>Book For Any Query</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                <a href="manage_book" class="btn btn-primary mb-2"> Manage Book</a>
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form name="sentMessage" action="{{ url('/add_book') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" name="book_name" id="book_name" placeholder="Book Name"/>
                                <p class="help-block text-danger"></p>
                            </div>  
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" name="subject" id="subject" placeholder="Subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control border-0 py-3 px-4" rows="5" name="description" id="description" placeholder="description"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
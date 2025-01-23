@extends('admin.layout.main')

@section('main_contant')
<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">product</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <i class="fa fa-circle px-3"></i>
            <p class="m-0">product</p>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Add product</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="contact-form bg-light rounded p-5">
                <div class="float-right border">
                        <a href="manage_product" class="btn btn-primary mb-2">Manage product</a>
                    </div>
                    <div id="success"></div>
                    <form name="sentMessage" id="Form" method="post" novalidate="novalidate">
                        
                            <div class="col-sm-12 control-group">
                                <input type="text" class="form-control p-4" id="name"
                                    placeholder="Enter product name" required="required" data-validation-required-message="Please enter product name"/>
                                <p class="help-block text-danger"></p>
                            </div>
                        
                        
                        <div class="form-group">
                            <label for="File">Plese uploade product image</label>
                            <input type="file" class="form-control-file" id="image">
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
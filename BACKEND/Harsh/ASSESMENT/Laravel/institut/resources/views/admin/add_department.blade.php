@extends('admin.layout.main')

@section('contant')


    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Department</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Department</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Add Department</h5>
                <h1>Department For Any Query</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <a href="manage_department" class="btn btn-primary mb-2"> Manage Department</a>
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form name="sentMessage" action="{{ url('/add_department') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" name='dept_name' id="dept_name" placeholder="department Name"/>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" name='head_name' id="head_name" placeholder="head Name"/>
                                <p class="help-block text-danger"></p>
                            </div>
                           
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit" id="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection
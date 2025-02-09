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
            <a href="manage_product" class="btn btn-primary text-left mb-2">Manage Product</a>
                    <div id="success"></div>
                    <form name="sentMessage" action="{{url('/add_product')}}" id="Form" method="post"  enctype="multipart/form-data">
                        @csrf
                        <div class="col-sm-12 control-group p-2">
                                    <select class="form-control" name="cat_id">
                                        <option value="" style="color:black">Select Categories</option>
                                        @foreach($data as $d)
                                        <option value="{{$d->id}}">{{$d->cat_name}}</option>
                                        @endforeach
                                    </select>
                                    <p class="help-block text-danger"></p>
                        </div>

                            <div class="col-sm-12 control-group p-2">
                                <input type="text" class="form-control p-4" name ="pro_name" id="pro_name" placeholder="Enter product name">
                                @error('pro_name')
	                            <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-12 control-group p-2">
                                <input type="file" class="form-control p-4" name="pro_image" id="pro_image"></input>
                                @error('pro_image')
	                            <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-12 control-group p-2">
                                <input type="text" class="form-control p-4" name ="pro_price" id="pro_price" placeholder="Enter product price"/>
                                @error('pro_price')
	                            <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-12 control-group p-2">
                                <input type="text" class="form-control p-4" name ="qty" id="qty" placeholder="Enter product quntity">
                                @error('qty')
	                            <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                             </div>
                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" name="description" id="description" placeholder="description"></textarea>
                                @error('description')
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

@endsection
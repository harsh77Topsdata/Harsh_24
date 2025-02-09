@extends('admin.layout.main')

@section('main_contant')
<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Categories</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <i class="fa fa-circle px-3"></i>
            <p class="m-0">Categories</p>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Manage Categories</h1>
            </div>
        </div>
        <div class="container">
        <a href="add_catgories" class="btn btn-primary mb-2">Add catgories</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>cat_name</th>
                        <th>cat_image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->cat_name}}</td>
                        <td><img src="{{url('admin/upload/catgory/'.$d->cat_img)}}" width="50px"> </td>
                        <td>
                            <a href="edit_catgoaries" class="btn btn-primary">Edit</a>
                            <a href="{{url('manage_catgories/'.$d->id)}}" class="btn btn-primary">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>

    </div>
</div>




@endsection
@extends('admin.layout.main')

@section('main_contant')
<!-- Header Start -->
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
    <div class="container text-center py-5">
        <h1 class="text-white display-3 mt-lg-5">Manage Order</h1>
        <div class="d-inline-flex align-items-center text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <i class="fa fa-circle px-3"></i>
            <p class="m-0">Manage Order</p>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h1 class="section-title position-relative text-center mb-5">Manage Order</h1>
            </div>
        </div>
        <div class="container">
            <table class="table table-striped">
            <thead>
                    <tr>
                        <th>id</th>
                        <th>pro_id</th>
                        <th>user_id</th>
                        <th>quantity</th>
                        <th>Total Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->pro_id}}</td>
                        <td>{{$d->user_id}}</td>
                        <td>{{$d->quantity}}</td>
                        <td>{{$d->totalamount}}</td>
                        <td>
                            <a href="edit_order" class="btn btn-primary">Edit</a>
                            <a href="delete_order" class="btn btn-primary">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>

    </div>
</div>



@endsection
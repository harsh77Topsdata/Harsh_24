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
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Manage Book</h5>
            <h1>Book For Any Query</h1>
        </div>
        <div class="container">
        <a href="add_book" class="btn btn-primary mb-2">Add Book</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>Book Id</th>
                        <th>Book name</th>
                        <th>Subject</th>
                        <th>description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->book_name}}</td>
                        <td>{{$d->subject}}</td>
                        <td>{{$d->description}}</td>
                        
                        <td>
                            <a href="edit_book" class="btn btn-primary">Edit</a>
                            <a href="{{url('manage_book/'.$d->id)}}" class="btn btn-primary">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>



    </div>
</div>
@endsection
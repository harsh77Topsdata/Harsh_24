@extends('admin.layout.main')

@section('contant')


<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Club</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Club</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Manage Club</h5>
            <h1>club For Any Query</h1>
        </div>
        <div class="container">
        <a href="add_club" class="btn btn-primary mb-2">Add Club</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Club name</th>
                        <th>Student detail</th>
                        <th>Club head</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($data as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->c_name}}</td>
                        <td>{{$d->s_detail}}</td>
                        <td>{{$d->c_head}}</td>
                        
                        <td>
                            <a href="edit_club" class="btn btn-primary">Edit</a>
                            <a href="{{url('manage_club/'.$d->id)}}" class="btn btn-primary">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>



    </div>
</div>
@endsection
@extends('website.layout.main');

@section('main_contant');

   <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12">
            <div class="container">
            <a href="/" class="btn btn-primary float-right mb-2">Add product</a>
            <table class="table table-striped">
            <thead>
                    <tr>
                        <th>id</th>
                        <th>pro_name</th>
                        <th>pro_price</th>
                        <th>pro_image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->pro_name}}</td>
                        <td>{{$d->pro_price}}</td>
                        <td><img src="{{url('website/upload/product/'.$d->pro_image)}}" width="50px"></td>
                        <td>
                            <a href="{{ url('/edit_product/'.$d->id) }}" class="btn btn-primary">Edit</a>
                            <a href="{{ url('/manage_product/'.$d->id) }}" class="btn btn-primary">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>

            </div>
        </div>
    </div>


@endsection
@extends('website.layout.main');

@section('main_contant');

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12">
            <form method="post" action="{{url('/edit_product/'.$d->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="col-sm-8 control-group p-2">
                    <input type="text" class="form-control p-2" value="{{ $d->pro_name }}" name ="pro_name" id="pro_name" placeholder="Enter product name">
                </div>
                <div class="col-sm-8 control-group p-2">
                    <input type="text" class="form-control p-2" value="{{ $d->pro_price }}" name ="pro_price" id="pro_price" placeholder="Enter product price">
                </div>
                <div class="col-sm-8 control-group p-2">
                    <input type="file" class="form-control p-2" value="{{ $d->pro_image }}" name="pro_image" id="pro_image"></input>
                </div>
                <div>
                    <button class="btn btn-primary btn-block py-2 px-3" type="submit" id="sendMessageButton">Save</button>
                </div>
            </form>
            </div>
        </div>
    </div>


@endsection
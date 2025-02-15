@extends('website.layout.main')

@section('main_contant')
     <!-- Header Start -->
     <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Product</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Product</p>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">we offer best product sweets here</h1>
                </div>
            </div>
            <div class="row">
            @foreach($data as $d)
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0">$99</h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3"
                            style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="{{url('admin/upload/product/'.$d->pro_image)}}"
                                style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4">{{$d->pro_name}}<</h5>
                        <h5 class="font-weight-bold mb-4">{{$d->pro_price}}<</h5>
                        <h5 class="font-weight-bold mb-4">{{$d->description}}<</h5>
                        <a href="{{ url('/order/'.$d->id) }}" class="btn btn-sm btn-secondary">Order Now</a>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    <!-- Products End -->


@endsection
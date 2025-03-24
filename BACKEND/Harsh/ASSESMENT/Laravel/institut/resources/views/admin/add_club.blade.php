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
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Add Club</h5>
                <h1>club For Any Query</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                <a href="manage_club" class="btn btn-primary mb-2"> Manage Club</a>
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>
                        <form name="sentMessage" action="{{ url('/add_club') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" name="c_name" id="c_name" placeholder="Club Name"/>
                                <p class="help-block text-danger"></p>
                            </div>  
                            <div class="control-group mb-3 ">
                                <label for="s_detail" class="border-0 pt-3">Student Name</label>
                                <select name="s_detail" id="s_detail" class="form-control ">
                                    @foreach ($student as $st)
                                        <option value="{{ $st->id }}">{{ $st->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="control-group mb-3 ">
                                <label for="c_head" class="border-0 pt-3">Club Head</label>
                                <select name="c_head" id="c_head" class="form-control ">
                                    @foreach ($student as $st)
                                        <option value="{{ $st->id }}">{{ $st->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
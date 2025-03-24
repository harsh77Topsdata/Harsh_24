@extends('website.layout.main')
@section('content')
    <div class="page-title db">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2>Contact <small class="hidden-xs-down hidden-sm-down">Nulla felis eros, varius sit amet volutpat non.
                        </small></h2>
                </div><!-- end col -->
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </div><!-- end col -->
            </div>
            <!-- end row -->

        </div>

    </div>
    <div class="container mt-5">
        <h2 class="text-center ">Create a New Blog Post</h2>
    </div>

    <div class="container">
        <form action="{{url('/CreateBlog')}}" method="POST" enctype="multipart/form-data" class="form-control mt-5">
            @csrf
            <div class="form-group p-3 mb-3">
                <label for="category" class="form-label">Category</label>
                <select name="category" class="form-control">

                    @foreach ($data as $c)
                        <option value="{{$c->id}}">{{$c->category_name}}</option>
                    @endforeach
                </select>
                @error('category')
                    <div class="alert alert-danger" role="alert">
                        <p>{{$message}}</p>
                    </div>
                @enderror

            </div>
            <div class="form-group p-3 mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control">
                @error('title')
                    <div class="alert alert-danger mb-3" role="alert">

                        <p>{{$message}}</p>
                    </div>
                @enderror

            </div>

            <div class="form-group  p-3 mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" rows="5" class="form-control"></textarea>
                @error('content')
                    <div class="alert alert-danger  mb-3" role="alert">

                        <p>{{$message}}</p>
                    </div>
                @enderror

            </div>
            <div class="form-group p-3 mb-3">
                <label for="blog_image" class="form-label">Upload Image:</label>
                <input type="file" name="blog_image" class="form-control">
                @error('blog_image')
                    <div class="alert alert-danger mb-3" role="alert">
                        <p>{{$message}}</p>
                    </div>
                @enderror
            </div>
            <div class="form-group p-3 mb-3">
                <div class="d-grid gap-2">
                    <button class="btn btn-outline-primary btn-lg" type="submit">Publish</button>
                </div>
            </div>
        </form>
    </div>
@endsection
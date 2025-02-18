
@extends('website.layout.main')
@section('content')
    <section class="h-100 gradient-custom-2">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center">
                <div class="col col-lg-9 col-xl-8">
                    <div class="card">
                        <div class="rounded-top text-light d-flex flex-row" style="background-color: #000d; height:200px;">
                            <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                                <img src="{{ url('website/upload/users/' . $data->image) }}" alt="Generic placeholder image"
                                    class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1">
                                <button type="button" data-mdb-button-init data-mdb-ripple-init
                                    class="btn btn-outline-secondary " data-mdb-ripple-color="dark" style="z-index: 1;">
                                    Edit profile
                                </button>
                            </div>
                            <div class="ms-5 float-right " style="margin-top: 100px; margin-left: 130px;">
                                <h3 class="text-white">Name: {{ $data->name }}</h3>
                                
                            </div>
                        </div>
                        <div class="p-4 text-black bg-body-tertiary">
                            <div class="d-flex justify-content-end text-center py-1 text-body">
                                <div>
                                    <p class="mb-1 h5">253</p>
                                    <p class="small text-muted mb-0">Photos</p>
                                </div>
                                <div class="px-3">
                                    <p class="mb-1 h5">1026</p>
                                    <p class="small text-muted mb-0">Followers</p>
                                </div>
                                <div>
                                    <p class="mb-1 h5">478</p>
                                    <p class="small text-muted mb-0">Following</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-4 text-black">
                            <div class="mb-5  text-body">
                                <p class="lead fw-normal mb-1">About</p>
                                <div class="p-4 bg-body-tertiary">
                                    <p class="font-italic mb-1">{{ $data->email }}</p>
                                    <p class="font-italic mb-1">{{ $data->mobile }}</p>
                                    <p class="font-italic mb-0">{{ $data->gender }}</p>
                                </div>
                            </div>
                            <!---->
                            <div class="mb-5">
                                <a href="{{ url('/creat_blog') }}"
                                    class="btn btn-outline-info btn-block rounded-pill">Create Post</a>
                            </div>
                            <div class="d-flex justify-content-between align-items-center mb-4 text-body">
                                <p class="lead fw-normal mb-0">Your All Post</p>
                                <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
                            </div>
                            <div>
                                <table class="table table-hover table-responsive">
                                    <thead>
                                        <th>No</th>
                                        <th>Category Name</th>
                                        <th>Post Title</th>
                                        <th  style="width: 150px;">Post Descp</th>
                                        <th>Post Status</th>
                                        <th colspan="3" class="text-center">Action</th>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 0;
                                        @endphp
                                        @foreach ($post as $p)
                                            <tr>
                                                <td>{{ ++$no }}</td>
                                                <td>{{ $p->cat_name}}</td>
                                                <td>{{ $p->title}}</td>
                                                <td style="width: 50%;">{{  Str::limit($p->content, 50)}}</td>
                                            
                                                <td>{{ $p->status }}</td>
                                                <td>
                                                    <a href="{{ url(path: '/Edit/'.$p->id) }}" class="btn btn-outline-primary">Edit Post</a>
                                                </td>
                                                <td> <a href="{{ url(path: '/Delete/'.$p->id) }}" class="btn btn-outline-danger">Delete</a></td>
                                                <td><a href="{{ url('/Publish/'.$p->id) }}" class="btn btn-outline-success">Publish</a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

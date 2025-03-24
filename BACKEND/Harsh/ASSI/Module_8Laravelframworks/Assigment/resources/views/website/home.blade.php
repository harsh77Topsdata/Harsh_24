@extends('website.layout.main')
@section('content')

<section id="cta" class="section">
        
        </section>

    <section class="section lb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-custom-build">
                            @foreach ($data as $d)
                                <div class="blog-box wow fadeIn">
                                    <div class="post-media">
                                        <a href="{{url('/Post/' . $d->title)}}" title="">
                                            <img src="{{url('website/upload/blog/' . $d->blog_image)}}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div>
                                            <!-- end hover -->
                                        </a>
                                    </div>
                                    <!-- end media -->
                                    <div class="blog-meta big-meta text-center">
                                        <h4>{{ $d->title }}</h4>
                                        <p>{{  Str::limit($d->content, 100)}}....
                                            <a href="{{url('/Post/' . $d->title)}}" title="">Load More</a>
                                        </p>
                                        <small>{{ $d->cat_name }}</small>
                                        <small>{{ $d->created_at }}</small>
                            

                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">
                            @endforeach

                            <hr class="invis">

                        </div>
                    </div>

                    <hr class="invis">

                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->

                
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection

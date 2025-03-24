@extends('website.layout.main')
@section('content')

    <div class="page-title db">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2> Blog <small class="hidden-xs-down hidden-sm-down">Nulla felis eros, varius sit amet volutpat non.
                        </small></h2>
                </div><!-- end col -->
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end page-title -->

    <section class="section lb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-custom-build">
                            <!--Blog-->
                            @foreach ($data as $d )
                            <div class="blog-box wow fadeIn">
                                <div class="post-media">
                                    <a href="{{url('/Post/'.$d->title)}}" title="">
                                        <img src="{{url('website/upload/blogs/'.$d->blog_image)}}" alt="" class="img-fluid">
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
                                    <a href="{{url('/Post/'.$d->title)}}" title="">Load More</a>
                                    </p>
                                    <small>{{ $d->category_name }}</small>
                                    <small>{{ $d->created_at }}</small>
                                    <small>by {{ $d->firstname }}{{ $d->lastname }}</small>
                                    
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">
                            @endforeach
                         
                           
                          
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

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget-no-style">
                            <div class="newsletter-widget text-center align-self-center">
                                <h3>Subscribe Today!</h3>
                                <p>Subscribe to our weekly Newsletter and receive updates via email.</p>
                                <form class="form-inline" method="post">
                                    <input type="text" name="email" placeholder="Add your email here.." required
                                        class="form-control" />
                                    <input type="submit" value="Subscribe" class="btn btn-default btn-block" />
                                </form>
                            </div><!-- end newsletter -->
                        </div>

                        <div class="widget">
                            <h2 class="widget-title">Recent Posts</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    <a href="marketing-single.html"
                                        class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="w-100 justify-content-between">
                                            <img src="upload/small_07.jpg" alt="" class="img-fluid float-left">
                                            <h5 class="mb-1">5 Beautiful buildings you need to before dying</h5>
                                            <small>12 Jan, 2016</small>
                                        </div>
                                    </a>

                                  
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->

                        <div id="" class="widget">
                            <h2 class="widget-title">Advertising</h2>
                            <div class="banner-spot clearfix">
                                <div class="banner-img">
                                    <img src="upload/banner_03.jpg" alt="" class="img-fluid">
                                </div><!-- end banner-img -->
                            </div><!-- end banner -->
                        </div><!-- end widget -->

                        <div class="widget">
                            <h2 class="widget-title">Popular Categories</h2>
                            <div class="link-widget">
                                <ul>
                                    <li><a href="#">Marketing <span>(21)</span></a></li>
                                    <li><a href="#">SEO Service <span>(15)</span></a></li>
                                    <li><a href="#">Digital Agency <span>(31)</span></a></li>
                                    <li><a href="#">Make Money <span>(22)</span></a></li>
                                    <li><a href="#">Blogging <span>(66)</span></a></li>
                                    <li><a href="#">Entertaintment <span>(11)</span></a></li>
                                    <li><a href="#">Video Tuts <span>(87)</span></a></li>
                                </ul>
                            </div><!-- end link-widget -->
                        </div><!-- end widget -->
                    </div><!-- end sidebar -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>

@endsection
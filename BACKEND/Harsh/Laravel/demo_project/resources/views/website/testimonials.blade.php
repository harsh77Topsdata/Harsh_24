 @extends('website.layout.main')
 
 @section('main_contant')
 <div id="testimonials" class="section lb">
        <div class="container-fluid">
            <div class="section-title text-center">
                <h3>Testimonials</h3>
                <p>We thanks for all our awesome testimonials! There are hundreds of our happy customers! </p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="testi-carousel owl-carousel owl-theme">
                        <div class="testimonial align-items-center clearfix">
							<div class="testi-meta">
                                <img src="{{url('website/uploads/img-1.jpg')}}" alt="" class="img-fluid">
                                <h4>James Fernando </h4>
                            </div>
                            <!-- end testi-meta -->
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial align-items-center clearfix">
							<div class="testi-meta">
                                <img src="{{url('website/uploads/img-2.jpg')}}" alt="" class="img-fluid">
                                <h4>Jacques Philips </h4>
                            </div>
                            <!-- end testi-meta -->
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial align-items-center clearfix">
							<div class="testi-meta">
                                <img src="{{url('website/uploads/img-3.jpg')}}" alt="" class="img-fluid">
                                <h4>Venanda Mercy </h4>
                            </div>
                            <!-- end testi-meta -->
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team. </p>
                            </div>
                        </div>
                        <!-- end testimonial -->
                        <div class="testimonial align-items-center clearfix">
							<div class="testi-meta">
                                <img src="{{url('website/uploads/img-1.jpg')}}" alt="" class="img-fluid">
                                <h4>James Fernando </h4>
                            </div>
                            <!-- end testi-meta -->
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Wonderful Support!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial align-items-center clearfix">
							<div class="testi-meta">
                                <img src="{{url('website/uploads/img-2.jpg')}}" alt="" class="img-fluid">
                                <h4>Jacques Philips </h4>
                            </div>
                            <!-- end testi-meta -->
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Awesome Services!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team.</p>
                            </div>
                        </div>
                        <!-- end testimonial -->

                        <div class="testimonial align-items-center clearfix">
							<div class="testi-meta">
                                <img src="{{url('website/uploads/img-3.jpg')}}" alt="" class="img-fluid">
                                <h4>Venanda Mercy <small>- Newyork City</small></h4>
                            </div>
                            <!-- end testi-meta -->
                            <div class="desc">
                                <h3><i class="fa fa-quote-left"></i> Great & Talented Team!</h3>
                                <p class="lead">They have got my project on time with the competition with a sed highly skilled, and experienced & professional team. </p>
                            </div>
                        </div><!-- end testimonial -->
                    </div><!-- end carousel -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section ----->
@endsection
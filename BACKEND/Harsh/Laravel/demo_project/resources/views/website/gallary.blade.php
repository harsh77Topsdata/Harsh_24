@extends('website.layout.main')

@section('main_contant')
<div id="gallery" class="section wb">
		<div class="container-fluid">
			<div class="section-title text-center">
                <h3>Gallery</h3>
                <p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.</p>
            </div><!-- end title -->
			
			<div class="gallery-menu text-center row">
				<div class="col-md-12">
					<div class="button-group filter-button-group">
						<button class="hvr-radial-in active" data-filter="*">All</button>
						<button class="hvr-radial-in" data-filter=".gal_a">Starters</button>
						<button class="hvr-radial-in" data-filter=".gal_b">Shops</button>
						<button class="hvr-radial-in" data-filter=".gal_c">Main Course </button>
						<button class="hvr-radial-in" data-filter=".gal_d">Desserts</button>
					</div>
				</div>
			</div>
			
			<div class="gallery-list row">
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_b">
					<div class="gallery-single fix">
						<img src="{{url('website/uploads/gallery_img-01.jpg')}}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h3>Vegetable Food</h3>
							<a href="{{url('website/uploads/gallery_img-01.jpg')}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_a gal_b">
					<div class="gallery-single fix">
						<img src="{{url('website/uploads/gallery_img-02.jpg')}}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h3>Vegetable Food</h3>
							<a href="{{url('website/uploads/gallery_img-02.jpg')}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_b gal_c">
					<div class="gallery-single fix">
						<img src="{{url('website/uploads/gallery_img-03.jpg')}}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h3>Vegetable Food</h3>
							<a href="{{url('website/uploads/gallery_img-03.jpg')}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_b gal_a">
					<div class="gallery-single fix">
						<img src="{{url('website/uploads/gallery_img-04.jpg')}}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h3>Vegetable Food</h3>
							<a href="{{url('website/uploads/gallery_img-04.jpg')}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_d">
					<div class="gallery-single fix">
						<img src="{{url('website/uploads/gallery_img-05.jpg')}}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h3>Vegetable Food </h3>
							<a href="{{url('website/uploads/gallery_img-05.jpg')}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_d">
					<div class="gallery-single fix">
						<img src="{{url('website/uploads/gallery_img-06.jpg')}}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h3>Vegetable Food </h3>
							<a href="{{url('website/uploads/gallery_img-06.jpg')}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_c gal_b">
					<div class="gallery-single fix">
						<img src="{{url('website/uploads/gallery_img-07.jpg')}}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h3>Vegetable Food </h3>
							<a href="{{url('website/uploads/gallery_img-07.jpg')}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_d gal_c">
					<div class="gallery-single fix">
						<img src="{{url('website/uploads/gallery_img-08.jpg')}}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h3>Vegetable Food </h3>
							<a href="{{url('website/uploads/gallery_img-08.jpg')}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 col-sm-6 gallery-grid gal_d gal_a">
					<div class="gallery-single fix">
						<img src="{{url('website/uploads/gallery_img-09.jpg')}}" class="img-fluid" alt="Image">
						<div class="img-overlay">
							<h3>Vegetable Food </h3>
							<a href="{{url('website/uploads/gallery_img-09.jpg')}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
@endsection
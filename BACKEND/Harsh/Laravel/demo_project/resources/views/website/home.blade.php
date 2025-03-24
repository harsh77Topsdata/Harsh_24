@extends('website.layout.main')

@section('main_contant')
<section id="home" class="main-banner">
		
		<div class="slider-new-2 owl-carousel owl-theme">
				
			<div class="item slider-screen">
				<div class="slider-img-full">
					<img src="{{url('website/uploads/slider-01.jpg')}}" alt="" />
				</div>
				<div class="container">
					<div class="slider-content text-white">
						<div class="in-box">
							<h2>Awesome Restaurant, Best Recipes for Dinner </h2>
							<p>Specialized in design and coding graphics and websites.</p>
							<a class="btn-slider hvr-radial-in" href="#">Learn More</a>
						</div>
					</div>
				</div>
			</div>	
			
			<div class="item slider-screen">
				<div class="slider-img-full">
					<img src="{{url('website/uploads/slider-02.jpg')}}" alt="" />
				</div>
				<div class="container">
					<div class="slider-content text-white">
						<div class="in-box">
							<h2>Awesome Restaurant, Best Recipes for Dinner</h2>
							<p>Specialized in design and coding graphics and websites.</p>
							<a class="btn-slider hvr-radial-in" href="#">Learn More</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="item slider-screen">
				<div class="slider-img-full">
					<img src="{{url('website/uploads/slider-03.jpg')}}" alt="" />
				</div>
				<div class="container">
					<div class="slider-content text-white">
						<div class="in-box">
							<h2>Awesome Restaurant, Best Recipes for Dinner</h2>
							<p>Specialized in design and coding graphics and websites.</p>
							<a class="btn-slider hvr-radial-in" href="#">Learn More</a>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
	</section>
@endsection
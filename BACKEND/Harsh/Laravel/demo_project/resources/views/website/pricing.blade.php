@extends('website.layout.main')

@section('main_contant')
<div id="pricing" class="section lb">
		<div class="container-fluid">
			<div class="section-title text-center">
                <h3>Our Pricing</h3>
                <p>We thanks for all our awesome testimonials! There are hundreds of our happy customers! </p>
            </div><!-- end title -->
			
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="pricingTable pri-bg-a">
						<div class="pricingTable-header">
							<h3 class="title">Basic</h3>
							<div class="price-value">
								<div class="value">
									<span class="amount">$10.00</span>
									<span class="month">per Month</span>
								</div>
							</div>
						</div>
						<ul class="pricing-content">
							<li>50GB Disk Space</li>
							<li>50 Email Accounts</li>
							<li>50GB Monthly Bandwidth</li>
							<li>10 Subdomains</li>
							<li>15 Domains</li>
						</ul>
						<a href="#" class="hvr-radial-in pricingTable-signup"><i class="fa fa-dot-circle-o"></i>Buy Now</a>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="pricingTable pri-bg-b">
						<div class="pricingTable-header">
							<h3 class="title">Standard</h3>
							<div class="price-value">
								<div class="value">
									<span class="amount">$20.00</span>
									<span class="month">per Month</span>
								</div>
							</div>
						</div>
						<ul class="pricing-content">
							<li>60GB Disk Space</li>
							<li>60 Email Accounts</li>
							<li>60GB Monthly Bandwidth</li>
							<li>15 Subdomains</li>
							<li>20 Domains</li>
						</ul>
						<a href="#" class="hvr-radial-in pricingTable-signup"><i class="fa fa-dot-circle-o"></i>Buy Now</a>
					</div>
				</div>

				<div class="col-md-4 col-sm-6">
					<div class="pricingTable pri-bg-c">
						<div class="pricingTable-header">
							<h3 class="title">Premium</h3>
							<div class="price-value">
								<div class="value">
									<span class="amount">$30.00</span>
									<span class="month">per Month</span>
								</div>
							</div>
						</div>
						<ul class="pricing-content">
							<li>70GB Disk Space</li>
							<li>70 Email Accounts</li>
							<li>70GB Monthly Bandwidth</li>
							<li>20 Subdomains</li>
							<li>25 Domains</li>
						</ul>
						<a href="#" class="hvr-radial-in pricingTable-signup"><i class="fa fa-dot-circle-o"></i>Buy Now</a>
					</div>
				</div>
			</div>
			
		</div>
	</div>
@endsection
@extends('site.layouts.home')

@section('content')

    <div class="wrapper white-wrapper">
		<div class="container inner pt-100">
			<h2 class="title-color color-gray text-center">What We Do?</h2>
			<h3 class="display-3 text-center">The full service we are offering is specifically <br class="d-none d-lg-block" />designed to meet your business needs.</h3>
	        <div class="space40"></div>
			<div class="row text-center gutter-60">
				<div class="col-md-6 col-lg-3">
					<div class="icon icon-blob icon-blob-rose color-rose mb-20"> <i class="jam jam-search"></i> </div>
					<h5>SEO Services</h5>
					<p>We help your company succeed in Search Engine Optimization like Google and Bing results.</p>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="icon icon-blob icon-blob-blue color-blue mb-20"> <i class="jam jam-layout"></i> </div>
					<h5>Web Development</h5>
					<p>We create, configure and customize websites to best represent your business.</p>
				</div>
				<div class="space30 d-none d-md-block d-lg-none"></div>
				<div class="col-md-6 col-lg-3">
					<div class="icon icon-blob icon-blob-green color-green mb-20"> <i class="jam jam-shield-check"></i> </div>
					<h5>Modern and Security</h5>
					<p>We use the best development and hosting technologies for your website.</p>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="icon icon-blob icon-blob-purple color-purple mb-20"> <i class="jam jam-database"></i> </div>
					<h5>Systems</h5>
					<p>Financial systems, management controls, schedules, contact emails and more.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="wrapper bg-opacity-default">
		<div class="container inner">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<figure><img src="#" srcset="style/images/concept/concept8.png 1x, style/images/concept/concept8@2x.png 2x" alt="" /></figure>
				</div>
				<div class="space50 d-none d-md-block d-lg-none"></div>
				<div class="space10 d-md-none"></div>
				<div class="col-lg-6 pl-60 pl-md-15">
					<h2 class="title-color color-gray">Why Choose Us?</h2>
					<h3 class="display-3">Why is Search Engine Optimization important for your business?</h3>
					<div class="space20"></div>
					<p>With SEO Services, your business wants to increase its visibility in search results on search engines like Google and Bing.</p>
					<ul class="icon-list bullet-default">
						<li><i class="icofont-verification-check"></i>More people will find your business;</li>
						<li><i class="icofont-verification-check"></i>Your earnings will increase considerably;</li>
						<li><i class="icofont-verification-check"></i>Partnering in our clients’ success;</li>
						<li><i class="icofont-verification-check"></i>Building lasting relationships.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

    <div class="wrapper white-wrapper">
		<div class="container inner">
			<div class="row align-items-center">
				<div class="col-lg-6 order-lg-2">
					<figure><img src="#" srcset="style/images/concept/concept26.png 1x, style/images/concept/concept26@2x.png 2x" alt="" /></figure>
				</div>
				<div class="space20 d-md-none"></div>
				<div class="space50 d-none d-md-block d-lg-none"></div>
				<div class="col-lg-6 pr-60 pr-md-15">
					<h2 class="title-color color-gray">Our Process</h2>
					<h3 class="display-3">We bring solutions to make life easier for our customers</h3>
					<div class="space30"></div>
					<div class="d-flex flex-row justify-content-center">
						<div>
						<span class="icon icon-blob icon-blob-blue color-blue mr-25"><i class="jam jam-lightbulb"></i><span class="step bg-blue">1</span></span>
						</div>
						<div>
						<h5>Collect Ideas</h5>
						<p class="mb-0">We care about your needs and help you find better solutions for your business.</p>
						</div>
					</div>
					<div class="space30"></div>
					<div class="d-flex flex-row justify-content-center">
						<div>
						<span class="icon icon-blob icon-blob-teal color-teal mr-25"><i class="jam jam-search-folder"></i><span class="step bg-teal">2</span></span>
						</div>
						<div>
						<h5>Data Analysis</h5>
						<p class="mb-0">We analyze all information and create automations to streamline your routine.</p>
						</div>
					</div>
					<div class="space30"></div>
					<div class="d-flex flex-row justify-content-center">
						<div>
						<span class="icon icon-blob icon-blob-yellow color-yellow mr-25"><i class="jam jam-heart"></i><span class="step bg-yellow">3</span></span>
						</div>
						<div>
						<h5>Magic Touch</h5>
						<p class="mb-0">We place complex digital solutions on easy and beautiful websites.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="wrapper bg-opacity-default">
		<div class="container inner">
			{{-- <div class="space140"></div> --}}
			<div class="row align-items-center">
				<div class="col-lg-6">
					<figure><img src="#" srcset="style/images/concept/concept12.png 1x, style/images/concept/concept12@2x.png 2x" alt="" /></figure>
				</div>
				<div class="space50 d-none d-md-block d-lg-none"></div>
				<div class="space10 d-md-none"></div>
				<div class="col-lg-6 pl-60 pl-md-15">
					<h2 class="title-color color-gray">Let's Talk</h2>
					<h3 class="display-3">Let's make something great together. If you got any questions, don't hesitate to get in touch with us.</h3>
					<div class="space20"></div>
					<p>Send your question and we will contact you as soon as possible. <br /> If you need budgets we can schedule a personal conversation.</p>
					<div class="space10"></div>
					<a href="#" class="btn btn-default">Contact Us</a>
				</div>
			</div>
		</div>
	</div>

	{{-- SCROLL PART --}}
    <a href="#" id="scroll" class="icon icon-blob icon-blob-cobalt color-cobalt mr-25"><span><i class="jam jam-arrow-circle-up-f"></i></span></a>
    {{-- SCROLL PART --}}
@stop

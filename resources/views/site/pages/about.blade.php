@extends('site.layouts.pages')

@section('subtitle', ' - ' . trans('pages/about.title'))

@section('content')

    {{-- BREADCRUMB --}}
	<div class="wrapper image-wrapper bg-image page-title-wrapper inverse-text" data-image-src="style/images/art/slider-bg7.jpg">
		<div class="container inner text-center">
			<div class="space140"></div>
			<h1 class="page-title">{!! trans('pages/about.title') !!}</h1>
			<p class="lead">{!! trans('pages/about.legend') !!}</p>
		</div>
	</div>
    {{-- BREADCRUMB --}}

	{{-- BOCK 01 --}}
    <div class="wrapper white-wrapper">
		<div class="container inner">
			<h3 class="display-3">{!! trans('pages/about.subtitle') !!}</h3>
			<p class="lead">
				{!! trans('pages/about.blocks.01.text01') !!} <br />
				{!! trans('pages/about.blocks.01.text02') !!} <br />
				{!! trans('pages/about.blocks.01.text03') !!} <br />
				{!! trans('pages/about.blocks.01.text04') !!}
			</p>
			<p class="lead text-center">{!! trans('pages/about.blocks.01.text05') !!}</p>
		</div>
	</div>
	{{-- BOCK 01 --}}

	{{-- BOCK 02 --}}
    <div class="wrapper light-wrapper">
		<div class="container inner">
			<div class="row align-items-center">
				<div class="col-lg-6 order-lg-2">
					<figure><img src="#" srcset="style/images/concept/concept9.png 1x, style/images/concept/concept9@2x.png 2x" alt="" /></figure>
				</div>
				<div class="space20 d-md-none"></div>
				<div class="space50 d-none d-md-block d-lg-none"></div>
				<div class="col-lg-6 pr-60 pr-md-15">
					<h3 class="display-2">{!! trans('pages/about.blocks.02.title') !!}</h3>
					<div class="space20"></div>
					<p>{!! trans('pages/about.blocks.02.text01') !!}</p>
					<p>{!! trans('pages/about.blocks.02.text02') !!}</p>
					<p>{!! trans('pages/about.blocks.02.text03') !!}</p>
					<p>{!! trans('pages/about.blocks.02.text04') !!}</p>
					<div class="space10"></div>
					<a href="{!! route('contact.index') !!}" class="btn btn-yellow">{!! trans('pages/about.blocks.02.button') !!}</a>
				</div>
			</div>
		</div>
	</div>
	{{-- BOCK 02 --}}

	{{-- BOCK 03 --}}
	<div class="wrapper white-wrapper">
		<div class="container inner">
			<h2 class="section-title larger text-center">{!! trans('pages/about.blocks.03.title') !!}</h2>
			<h3 class="display-4 text-center">{!! trans('pages/about.blocks.03.legend') !!}</h3>
			<div class="row align-items-center">
				<div class="col-lg-7">
					<figure><img src="#" srcset="style/images/concept/concept25.png 1x, style/images/concept/concept25@2x.png 2x" alt="" /></figure>
				</div>
				<div class="space20 d-md-none"></div>
				<div class="space50 d-none d-md-block d-lg-none"></div>
				<div class="col-lg-5 pl-60 pl-md-15">

					<div class="space30"></div>
					<div class="d-flex flex-row justify-content-center">
						<div>
							<div class="icon icon-bg icon-bg-teal color-teal mr-25"><span class="number">1</span></div>
						</div>
						<div>
							<h4 class="mb-10">{!! trans('pages/about.blocks.03.topic01') !!}</h4>
							<p>{!! trans('pages/about.blocks.03.text01') !!}</p>
						</div>
					</div>
					<div class="space10 d-none d-md-block"></div>
					<div class="d-flex flex-row justify-content-center">
						<div>
							<div class="icon icon-bg icon-bg-teal color-teal mr-25"><span class="number">2</span></div>
						</div>
						<div>
							<h4 class="mb-10">{!! trans('pages/about.blocks.03.topic02') !!}</h4>
							<p>{!! trans('pages/about.blocks.03.text02') !!}</p>
						</div>
					</div>
					<div class="space10 d-none d-md-block"></div>
					<div class="d-flex flex-row justify-content-center">
						<div>
							<div class="icon icon-bg icon-bg-teal color-teal mr-25"><span class="number">3</span></div>
						</div>
						<div>
							<h4 class="mb-10">{!! trans('pages/about.blocks.03.topic03') !!}</h4>
							<p>{!! trans('pages/about.blocks.03.text03') !!}</p>
						</div>
					</div>
					<div class="space10 d-none d-md-block"></div>
					<div class="d-flex flex-row justify-content-center">
						<div>
							<div class="icon icon-bg icon-bg-teal color-teal mr-25"><span class="number">3</span></div>
						</div>
						<div>
							<h4 class="mb-10">{!! trans('pages/about.blocks.03.topic04') !!}</h4>
							<p>{!! trans('pages/about.blocks.03.text04') !!}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{-- BOCK 03 --}}

	{{-- BOCK 04 --}}
    <div class="wrapper light-wrapper">
		<div class="container inner">
			<div class="row align-items-center">
				<div class="col-lg-6 order-lg-2">
					<figure><img src="#" srcset="style/images/concept/concept2.png 1x, style/images/concept/concept2@2x.png 2x" alt="" /></figure>
				</div>
				<div class="space20 d-md-none"></div>
				<div class="space50 d-none d-md-block d-lg-none"></div>
				<div class="col-lg-6 pr-60 pr-md-15">
					<h3 class="display-3">{!! trans('pages/about.blocks.04.title') !!}</h3>
					<div class="space20"></div>
					<p>{!! trans('pages/about.blocks.04.text01') !!}</p>
					<p>{!! trans('pages/about.blocks.04.text02') !!}</p>
					<p>{!! trans('pages/about.blocks.04.text03') !!}</p>
					<p>{!! trans('pages/about.blocks.04.text04') !!}</p>
					<div class="space10"></div>
					<a href="{!! route('contact.index') !!}" class="btn btn-sky">{!! trans('pages/about.blocks.04.button') !!}</a>
				</div>
			</div>
		</div>
	</div>
	{{-- BOCK 04 --}}

@stop

@extends('site.layouts.home')

@section('content')

    <div class="wrapper white-wrapper">
		<div class="container inner pt-100">
			<h2 class="title-color color-gray text-center">{!! trans('pages/home.wrapper.01.legend') !!}</h2>
			<h3 class="display-3 text-center">{!! trans('pages/home.wrapper.01.title') !!}</h3>
	        <div class="space40"></div>
			<div class="row text-center gutter-60">
				<div class="col-md-6 col-lg-3">
					<div class="icon icon-blob icon-blob-rose color-rose mb-20"> <i class="jam jam-search"></i> </div>
					<h5>{!! trans('pages/home.wrapper.01.block.01.title') !!}</h5>
					<p>{!! trans('pages/home.wrapper.01.block.01.text') !!}</p>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="icon icon-blob icon-blob-blue color-blue mb-20"> <i class="jam jam-layout"></i> </div>
					<h5>{!! trans('pages/home.wrapper.01.block.02.title') !!}</h5>
					<p>{!! trans('pages/home.wrapper.01.block.02.text') !!}</p>
				</div>
				<div class="space30 d-none d-md-block d-lg-none"></div>
				<div class="col-md-6 col-lg-3">
					<div class="icon icon-blob icon-blob-green color-green mb-20"> <i class="jam jam-shield-check"></i> </div>
					<h5>{!! trans('pages/home.wrapper.01.block.03.title') !!}</h5>
					<p>{!! trans('pages/home.wrapper.01.block.03.text') !!}</p>
				</div>
				<div class="col-md-6 col-lg-3">
					<div class="icon icon-blob icon-blob-purple color-purple mb-20"> <i class="jam jam-database"></i> </div>
					<h5>{!! trans('pages/home.wrapper.01.block.04.title') !!}</h5>
					<p>{!! trans('pages/home.wrapper.01.block.04.text') !!}</p>
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
					<h2 class="title-color color-gray">{!! trans('pages/home.wrapper.02.legend') !!}</h2>
					<h3 class="display-3">{!! trans('pages/home.wrapper.02.title') !!}</h3>
					<div class="space20"></div>
					<p>{!! trans('pages/home.wrapper.02.context.text') !!}</p>
					<ul class="icon-list bullet-default">
						<li><i class="icofont-verification-check"></i>{!! trans('pages/home.wrapper.02.context.topics.01') !!}</li>
						<li><i class="icofont-verification-check"></i>{!! trans('pages/home.wrapper.02.context.topics.02') !!}</li>
						<li><i class="icofont-verification-check"></i>{!! trans('pages/home.wrapper.02.context.topics.03') !!}</li>
						<li><i class="icofont-verification-check"></i>{!! trans('pages/home.wrapper.02.context.topics.04') !!}</li>
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
					<h2 class="title-color color-gray">{!! trans('pages/home.wrapper.03.legend') !!}</h2>
					<h3 class="display-3">{!! trans('pages/home.wrapper.03.title') !!}</h3>
					<div class="space30"></div>
					<div class="d-flex flex-row justify-content-center">
						<div>
							<span class="icon icon-blob icon-blob-blue color-blue mr-25"><i class="jam jam-lightbulb"></i><span class="step bg-blue">1</span></span>
						</div>
						<div>
							<h5>{!! trans('pages/home.wrapper.03.block.01.title') !!}</h5>
							<p class="mb-0">{!! trans('pages/home.wrapper.03.block.01.text') !!}</p>
						</div>
					</div>
					<div class="space30"></div>
					<div class="d-flex flex-row justify-content-center">
						<div>
							<span class="icon icon-blob icon-blob-teal color-teal mr-25"><i class="jam jam-search-folder"></i><span class="step bg-teal">2</span></span>
						</div>
						<div>
							<h5>{!! trans('pages/home.wrapper.03.block.02.title') !!}</h5>
							<p class="mb-0">{!! trans('pages/home.wrapper.03.block.02.text') !!}</p>
						</div>
					</div>
					<div class="space30"></div>
					<div class="d-flex flex-row justify-content-center">
						<div>
							<span class="icon icon-blob icon-blob-yellow color-yellow mr-25"><i class="jam jam-heart"></i><span class="step bg-yellow">3</span></span>
						</div>
						<div>
							<h5>{!! trans('pages/home.wrapper.03.block.03.title') !!}</h5>
							<p class="mb-0">{!! trans('pages/home.wrapper.03.block.03.text') !!}</p>
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
					<h2 class="title-color color-gray">{!! trans('pages/home.wrapper.04.legend') !!}</h2>
					<h3 class="display-3">{!! trans('pages/home.wrapper.04.title') !!}</h3>
					<div class="space20"></div>
					<p>{!! trans('pages/home.wrapper.04.context.text') !!}</p>
					<div class="space10"></div>
					<a href="#" class="btn btn-default">{!! trans('pages/home.wrapper.04.context.button') !!}</a>
				</div>
			</div>
		</div>
	</div>

	{{-- SCROLL PART --}}
    <a href="#" id="scroll" class="icon icon-blob icon-blob-cobalt color-cobalt mr-25"><span><i class="jam jam-arrow-circle-up-f"></i></span></a>
    {{-- SCROLL PART --}}
@stop

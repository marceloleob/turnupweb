@extends('site.layouts.pages')

@section('subtitle', ' - ' . trans('pages/contact.title'))

@section('js-custom')
    {!! Html::script('https://www.google.com/recaptcha/api.js?render=' . env('CAPTCHA_WEBSITE_KEY')) !!}
    {!! Html::script('js/forms/jquery.validate.min.js', ['defer' => 'defer']) !!}
    {!! Html::script('js/forms/jquery.validate.' . $locale . '.js', ['defer' => 'defer']) !!}
    {!! Html::script('js/forms/jquery.maskedinput.min.js', ['defer' => 'defer']) !!}
    {!! Html::script('js/forms/validations.js', ['defer' => 'defer']) !!}
    {!! Html::script('js/forms/masks.' . $locale . '.js', ['defer' => 'defer']) !!}
    {!! Html::script('js/libs/recaptcha-v3.js', ['defer' => 'defer']) !!}
@stop

@section('content')

    {{-- BREADCRUMB --}}
	<div class="wrapper image-wrapper bg-image page-title-wrapper inverse-text" data-image-src="style/images/art/bg15.jpg">
		<div class="container inner text-center">
			<div class="space140"></div>
			<h1 class="page-title">{!! trans('pages/contact.title') !!}</h1>
			<p class="lead">{!! trans('pages/contact.title.text') !!}</p>
		</div>
	</div>
    {{-- BREADCRUMB --}}

	{{-- CONTACT --}}
    <div class="wrapper light-wrapper">
		<div class="container inner">
			<h3 class="display-3">{!! trans('pages/contact.subtitle') !!}</h3>
			<p class="lead">{!! trans('pages/contact.subtitle.text') !!}</p>
	        <div class="space40"></div>
			<div class="row">
				<div class="col-lg-12">
					{!! Form::boxMessage($errors) !!}
				</div>
			</div>
			<div class="row">
				<div class="col-lg-7">
					{!! Form::open(['id' => 'form-contact', 'route' => 'contact', 'method' => 'POST', 'role' => 'form', 'class' => 'form fields-white']) !!}
						<div class="controls">
							<div class="form-row">
								<div class="col-lg-12 col-xl-12">
									<div class="form-group">
										{!! Form::text('name', old('name'), ['class' => 'form-control text', 'placeholder' => trans('pages/contact.placeholder.name')]) !!}
                                    	{!! Form::errorField('name', $errors) !!}
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-lg-12 col-xl-6">
									<div class="form-group">
										{!! Form::text('email', old('email'), ['class' => 'form-control text', 'placeholder' => trans('pages/contact.placeholder.email')]) !!}
										{!! Form::errorField('email', $errors) !!}
									</div>
								</div>
								<div class="col-lg-12 col-xl-6">
									<div class="form-group">
										{!! Form::text('phone', old('phone'), ['class' => 'form-control phone phoneOnly', 'placeholder' => trans('pages/contact.placeholder.phone')]) !!}
										{!! Form::errorField('phone', $errors) !!}
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-lg-12 col-xl-12">
									<div class="form-group">
										{!! Form::text('subject', old('subject'), ['class' => 'form-control text', 'placeholder' => trans('pages/contact.placeholder.subject')]) !!}
										{!! Form::errorField('subject', $errors) !!}
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-lg-12 col-xl-12">
									<div class="form-group">
										{!! Form::textarea('text', old('text'), ['class' => 'form-control textarea', 'placeholder' => trans('pages/contact.placeholder.text'), 'rows' => '5']) !!}
										{!! Form::errorField('text', $errors) !!}
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-lg-12 col-xl-12">
									<div class="form-group">
										{!! Form::hidden('site_key', env('CAPTCHA_WEBSITE_KEY'), ['id' => 'site_key']) !!}
										{!! Form::hidden('recaptcha', '', ['id' => 'recaptcha']) !!}
										{!! Form::button(trans('pages/contact.send'), ['type' => 'submit', 'class' => 'submit btn btn_primary']) !!}
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-lg-12 col-xl-12">
									<p class="text-muted"><strong>*</strong> {!! trans('pages/contact.warning') !!}</p>
								</div>
							</div>
						</div>
					{!! Form::close() !!}
				</div>
				<div class="space30 d-none d-md-block d-lg-none"></div>
				<div class="col-lg-4 offset-lg-1">
					<div class="d-flex flex-row">
						<div>
							<div class="icon color-default fs-34 mr-25"> <i class="icofont-location-pin"></i> </div>
						</div>
						<div>
							<h6 class="mb-5">{!! trans('pages/contact.infos.address.title') !!}</h6>
							<address>{!! trans('pages/contact.infos.address.01') !!} <br class="d-none d-md-block" />{!! trans('pages/contact.infos.address.02') !!}</address>
						</div>
					</div>
					<div class="d-flex flex-row">
						<div>
							<div class="icon color-default fs-34 mr-25"> <i class="icofont-telephone"></i> </div>
						</div>
						<div>
							<h6 class="mb-5">{!! trans('pages/contact.infos.phone.title') !!}</h6>
							<p>{!! trans('pages/contact.infos.phone.01') !!} <br class="d-none d-md-block" />{!! trans('pages/contact.infos.phone.02') !!}</p>
						</div>
					</div>
					<div class="d-flex flex-row">
						<div>
							<div class="icon color-default fs-34 mr-25"> <i class="icofont-mail-box"></i> </div>
						</div>
						<div>
							<h6 class="mb-5">{!! trans('pages/contact.infos.email.title') !!}</h6>
							<p>{!! trans('pages/contact.infos.email.01') !!} <br class="d-none d-md-block" />{!! trans('pages/contact.infos.email.02') !!}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    {{-- CONTACT --}}

@stop

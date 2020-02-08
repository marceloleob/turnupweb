@extends('site.layouts.pages')

@section('title-page', ' - Contato')

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
			<p class="lead">Aenean lacinia bibendum nulla sed consectetur</p>
		</div>
	</div>
    {{-- BREADCRUMB --}}

	{{-- CONTACT --}}
    <div class="wrapper light-wrapper">
		<div class="container inner">
			<h3 class="display-3">Get in Touch</h3>
			<p class="lead">Have any questions? Reach out to us from our contact form and we will get back to you shortly.</p>
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
										{!! Form::text('name', old('name'), ['class' => 'form-control text', 'placeholder' => 'Nome completo']) !!}
                                    	{!! Form::errorField('name', $errors) !!}
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-lg-12 col-xl-6">
									<div class="form-group">
										{!! Form::text('email', old('email'), ['class' => 'form-control text', 'placeholder' => 'E-mail']) !!}
										{!! Form::errorField('email', $errors) !!}
									</div>
								</div>
								<div class="col-lg-12 col-xl-6">
									<div class="form-group">
										{!! Form::text('phone', old('phone'), ['class' => 'form-control phone phoneOnly', 'placeholder' => 'Telefone']) !!}
										{!! Form::errorField('phone', $errors) !!}
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-lg-12 col-xl-12">
									<div class="form-group">
										{!! Form::text('subject', old('subject'), ['class' => 'form-control text', 'placeholder' => 'Assunto']) !!}
										{!! Form::errorField('subject', $errors) !!}
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-lg-12 col-xl-12">
									<div class="form-group">
										{!! Form::textarea('text', old('text'), ['class' => 'form-control textarea', 'placeholder' => 'Seu texto', 'rows' => '5']) !!}
										{!! Form::errorField('text', $errors) !!}
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-lg-12 col-xl-12">
									<div class="form-group">
										{!! Form::hidden('site_key', env('CAPTCHA_WEBSITE_KEY'), ['id' => 'site_key']) !!}
										{!! Form::hidden('recaptcha', '', ['id' => 'recaptcha']) !!}
										{!! Form::button(' Enviar ', ['type' => 'submit', 'class' => 'submit btn btn_primary']) !!}
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-lg-12 col-xl-12">
									<p class="text-muted"><strong>*</strong> These fields are required.</p>
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
							<h6 class="mb-5">Address</h6>
							<address>Greater Boston, <br class="d-none d-md-block" />Massachusetts, US</address>
						</div>
					</div>
					<div class="d-flex flex-row">
						<div>
							<div class="icon color-default fs-34 mr-25"> <i class="icofont-telephone"></i> </div>
						</div>
						<div>
							<h6 class="mb-5">Phone</h6>
							<p>(727) 238-4933 <br class="d-none d-md-block" />&nbsp;</p>
						</div>
					</div>
					<div class="d-flex flex-row">
						<div>
							<div class="icon color-default fs-34 mr-25"> <i class="icofont-mail-box"></i> </div>
						</div>
						<div>
							<h6 class="mb-5">E-mail</h6>
							<p>contact@marceloleodev.com <br class="d-none d-md-block" />marceloleodev@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    {{-- CONTACT --}}

@stop


<meta charset="UTF-8" />
{{-- RESPONSIVE TAG --}}
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{!! Config::get('app.name') !!} @yield('subtitle')</title>

{{-- METAS TAG --}}
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="author" content="{!! config('constants.DEVELOPER_NAME') . ' <' . config('constants.DEVELOPER_EMAIL') . '>' !!}" />
<meta name="copyright" content="{!! config('constants.COMPANY_NAME') !!}" />
<meta name="csrf-token" content="{!! csrf_token() !!}" />

{{-- ICO --}}
<link rel="shortcut icon" href="{!! asset('favicon.ico') !!}" type="image/x-icon">
<link rel="icon" href="{!! asset('favicon.ico') !!}" type="image/x-icon">

{{-- Reseta CSS --}}
{!! Html::style('css/reset.css') !!}

{{-- CSS LIBS --}}
{!! Html::style('css/libs/bootstrap.min.css') !!}
{!! Html::style('css/libs/fontawesome.min.css') !!}
{!! Html::style('css/libs/plugins.css') !!}
{!! Html::style('style/revolution/css/settings.css') !!}
{!! Html::style('style/revolution/css/layers.css') !!}
{!! Html::style('style/revolution/css/navigation.css') !!}
{!! Html::style('style/type/type.css') !!}
{!! Html::style('css/style.css') !!}
{!! Html::style('style/css/color/blue.css') !!}
{!! Html::style('style/css/font/font2.css') !!}

{{-- CSS CUSTOM --}}
{!! Html::style('css/custom.css') !!}

{{-- CSS PAGE CUSTOM --}}
@yield('css-custom')

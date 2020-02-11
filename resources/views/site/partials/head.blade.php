
<meta charset="UTF-8" />
{{-- RESPONSIVE TAG --}}
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<title>{!! Config::get('app.name') !!} @yield('subtitle')</title>

{{-- METAS TAG --}}
<meta name="keywords" content="developer, website developer, websites, websites, web developer, PHP programmer, programmer, JavaScript, CSS, HTML, bootstrap, responsive, responsive layout, I want a website, how to have a website, how much does a website cost, Boston, Boston PHP programmer , online store, e-commerce, create my website, i need a website, PHP developer Boston, Marcelo Leopold, turn up web, seo services, desenvolvedor, desenvolvedor de websites, websites, sites, desenvolvedor web, programador PHP, programador, JavaScript, CSS, HTML, bootstrap, responsivo, layout responsivo, quero um site, como ter um site, quanto custa um site, Boston, programador Boston PHP, loja virtual, e-commerce, criar meu site, estou precisando de um site, desenvolvedor PHP Boston, Marcelo Leopold, turn up web, serviços de seo" />
<meta name="description" content="TurnUP Web develops its website using modern technologies and always with attention to the minimum aesthetic and safety details, please contact us. Let's create your website! - A TurnUP Web desenvolve seu website utilizando tecnologias modernas e sempre com atenção aos mínimos detalhes estéticos e de segurança, entre em contato com a gente. Vamos criar o seu site!" />
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
{!! Html::style('css/libs/plugins.css') !!}
{!! Html::style('style/revolution/css/settings.css') !!}
{!! Html::style('style/revolution/css/layers.css') !!}
{!! Html::style('style/revolution/css/navigation.css') !!}
{!! Html::style('style/type/type.css') !!}
{!! Html::style('css/style.css') !!}
{!! Html::style('style/css/color/blue.css') !!}
{!! Html::style('css/font/font4.css') !!}

{{-- CSS CUSTOM --}}
{!! Html::style('css/custom.css') !!}

{{-- CSS PAGE CUSTOM --}}
@yield('css-custom')


<div class="container flex-row justify-content-center">
	{{-- LOGO --}}
	<div class="navbar-brand">
		<a href="{!! route('home') !!}">
			<img src="#" srcset="style/images/logo.png 1x, style/images/logo@2x.png 2x" alt="{!! Config::get('app.name') !!}" />
		</a>
	</div>

	{{-- MOBILE MODE --}}
	<div class="navbar-other ml-auto order-lg-3">
		<ul class="navbar-nav flex-row align-items-center" data-sm-skip="true">
			<li class="nav-item">
				<div class="navbar-hamburger d-lg-none d-xl-none ml-auto"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
			</li>
			{{-- TRANSLATE OPTIONS --}}
			<li class="nav-item">
				<button class="btn language {{ ($locale == 'en') ? 'btn-red active' : '' }}">
					<a href="{!! url('locale', 'en') !!}"><img src="images/{{ ($locale == 'en') ? 'en' : 'en-fade' }}.png" title="English Version" class="hover has-tooltip" data-placement="bottom" /></a>
				</button>
				<button class="btn language {{ ($locale == 'pt-br') ? 'btn-green active' : '' }}">
					<a href="{!! url('locale', 'pt-br') !!}"><img src="images/{{ ($locale == 'pt-br') ? 'pt-br' : 'pt-br-fade' }}.png" title="Versão em Português" class="hover has-tooltip" data-placement="bottom" /></a>
				</button>
			</li>
		</ul>
	</div>

	{{-- DESKTOP MODE --}}
	<div class="navbar-collapse offcanvas-nav">
		{{-- LOGO DARK MOBILE MODE --}}
		<div class="offcanvas-header d-lg-none d-xl-none">
			<a href="{!! route('home') !!}">
				<img src="#" srcset="style/images/logo-light.png 1x, style/images/logo-light@2x.png 2x" alt="{!! Config::get('app.name') !!}" />
			</a>
			<button class="plain offcanvas-close offcanvas-nav-close"><i class="jam jam-close"></i></button>
		</div>
		{{-- LINKS --}}
		<ul class="navbar-nav mx-auto">
			<li class="nav-item"><a class="nav-link" href="{!! route('home') !!}">{!! trans('pages/menu.home') !!}</a></li>
			{{-- <li class="nav-item"><a class="nav-link" href="#">{!! trans('pages/menu.projects') !!}</a></li> --}}
			<li class="nav-item"><a class="nav-link" href="{!! route('about') !!}">{!! trans('pages/menu.about') !!}</a></li>
			<li class="nav-item"><a class="nav-link" href="{!! route('contact.index') !!}">{!! trans('pages/menu.contact') !!}</a></li>
		</ul>
	</div>
</div>

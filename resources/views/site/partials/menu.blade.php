
<div class="container flex-row justify-content-center">
	<div class="navbar-brand">
		<a href="{!! route('home') !!}">
			<img src="#" srcset="style/images/logo.png 1x, style/images/logo@2x.png 2x" alt="{!! Config::get('app.name') !!}" />
		</a>
	</div>

	<div class="navbar-other ml-auto order-lg-3">
		<ul class="navbar-nav flex-row align-items-center" data-sm-skip="true">
			<li class="nav-item">
				<div class="navbar-hamburger d-lg-none d-xl-none ml-auto">
					<a href="#" class="btn btn-meander m-0"><img src="images/en.png" alt="English" /></a>
					<a href="#" class="btn btn-white m-0"><img src="images/pt-br.png" alt="Português" /></a>
				</div>
			</li>
			<li class="nav-item d-none d-lg-block pl-0 btn-icon-left">
				<a href="{!! url('locale', 'en') !!}" class="btn {{ ($locale == 'en') ? 'btn-meander' : 'btn-white' }} m-0"><img src="images/en.png" alt="English" /></a>
			</li>
			<li class="nav-item d-none d-lg-block pl-0">
				<a href="{!! url('locale', 'pt-br') !!}" class="btn {{ ($locale == 'pt-br') ? 'btn-meander' : 'btn-white' }} m-0"><img src="images/pt-br.png" alt="Português" /></a>
			</li>
		</ul>
	</div>

	<div class="navbar-collapse offcanvas-nav">
		<ul class="navbar-nav mx-auto">
			<li class="nav-item"><a class="nav-link" href="{!! route('home') !!}">{!! trans('pages/menu.home') !!}</a></li>
			<li class="nav-item"><a class="nav-link" href="#">{!! trans('pages/menu.projects') !!}</a></li>
			<li class="nav-item"><a class="nav-link" href="#">{!! trans('pages/menu.about') !!}</a></li>
			<li class="nav-item"><a class="nav-link" href="#">{!! trans('pages/menu.contact') !!}</a></li>
		</ul>
	</div>
</div>

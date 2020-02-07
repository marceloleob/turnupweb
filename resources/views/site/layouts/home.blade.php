<!DOCTYPE html>
<html lang="{{ $locale }}">

<head>
	@include('site.partials.head')
</head>

<body>

	<div class="content-wrapper">
		{{-- MENU --}}
		<nav class="navbar absolute transparent navbar-expand-lg nav-uppercase">
			@include('site.partials.menu')
		</nav>

		{{-- INFO --}}
		<div class="offcanvas-info inverse-text">
			@include('site.partials.info')
		</div>

		{{-- HEADER --}}
		<div class="wrapper bg-opacity-default">
			@include('site.partials.header')
		</div>

		{{-- CONTENT --}}
		@yield('content')

		{{-- FOOTER --}}
		<footer class="dark-wrapper inverse-text text-center">
			@include('site.partials.footer')
		</footer>
	</div>

	{{-- SCRIPTS --}}
	@include('site.partials.scripts')

</body>
</html>

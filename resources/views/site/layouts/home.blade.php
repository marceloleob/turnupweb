<!DOCTYPE html>
<html lang="{{ $locale }}">

<head>
	@include('site.partials.head')
</head>

<body>

	<div class="content-wrapper">
		{{-- MENU --}}
		{{-- <nav class="navbar absolute navbar-fancy navbar-expand-lg nav-uppercase"> --}}
		<nav class="navbar absolute navbar-fancy navbar-expand-lg nav-uppercase flex-column">
			@include('site.partials.menu')
		</nav>

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

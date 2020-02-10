<!DOCTYPE html>
<html lang="{{ $locale }}">

<head>
	@include('site.partials.head')
</head>

<body>

	<div class="content-wrapper">
		{{-- MENU --}}
		<nav class="navbar absolute navbar-fancy navbar-expand-lg nav-uppercase">
			@include('site.partials.menu')
		</nav>

		{{-- CONTENT --}}
		@yield('content')

		{{-- FOOTER --}}
		<footer class="dark-wrapper inverse-text text-center">
			@include('site.partials.footer')
		</footer>
	</div>

</body>
</html>

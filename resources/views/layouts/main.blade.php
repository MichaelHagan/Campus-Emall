<!DOCTYPE html>
<html lang="en">
<head>
<title>Colo Shop</title>

@include('partials.head')
@yield('styles')
</head>

<body>

<div class="super_container">

	
	@include('partials.nav')

	@yield('content')
	
	<!-- Footer -->

	@include('partials.footer')

</div>

@include('partials.scripts')
@yield('script')
</body>

</html>

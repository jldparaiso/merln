<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	@include('header') <!-- this is called directives -->
</head>
<body>

	@include('nav')

	@yield('admin_body') <!-- user defined ('body') -->

	@yield('user_body')
	
</body>
</html>

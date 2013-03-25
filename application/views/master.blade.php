<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>My Code</title>

	<link rel="shortcut icon" href="favicon.png" />

	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/style.css') }}

	@yield('styles')

	{{ HTML::script('js/jquery/1-8-3/jquery-1.8.3.min.js') }}
</head>

<body>
	@yield('container')

	@yield('scripts')
</body>
</html>

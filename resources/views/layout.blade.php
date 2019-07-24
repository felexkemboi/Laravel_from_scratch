<!DOCTYPE html>
<html>
<head>
	<title>@yield('title','Laravel')</title>
	<link rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
	<style>
		.is_complete {
			text-decoration: line-through; 
		}
	</style>
</head>
<body style="text-align: center; padding-top: 40px; margin-left: 30%; margin-left: 30%;">
	@yield('content')	
</body>
</html>
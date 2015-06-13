<!DOCTYPE html>
<html>
<head>
	<title>@if( isset($title) && $title != "" && $title != null )  {{ $title }} @else Laravel 5 @endif </title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
<header>
	<div class="container">
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/song/"> Song List </a></li>
		</ul>
	</div>
</header>



@yield('content')


@yield('footer')

</body>
</html>

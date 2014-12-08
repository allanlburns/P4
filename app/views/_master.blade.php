<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Online Comic Subscription Interface!')</title>
</head>
<body>
	<h1>Welcome to the Comic Online Subscription Interface!</h1>
	<ul>
		@if(Auth::check())
			<li><a href='/logout'>Log out {{ Auth::user()->email; }}</a></li>
			
		@else
			<li><a href='/signup'>Sign up</a> or <a href='/login'>Log in</a></li>
		@endif
		</ul>
	@yield('content')
</body>
</html>
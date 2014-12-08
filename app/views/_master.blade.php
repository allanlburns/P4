<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'Online Comic Subscription Interface!')</title>
</head>
<body>
	<h1>Allan's Online Comic Subscription Interface!</h1>
		@if(Auth::check())
			<a href='/logout'>Log out {{ Auth::user()->email; }}</a>
			
		@else
			<a href='/signup'>Sign up</a> or <a href='/login'>Log in</a>
		@endif
 
	@yield('content')
</body>
</html>
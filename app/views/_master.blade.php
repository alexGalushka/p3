<!doctype html>
<html>
<head>

<style>

.logo {
	width:150px;
	margin-bottom:20px;
	display:block;
}
h2 {
	margin-left:25px;
}
a:link {
    text-decoration: underline;
}

.text-input {
  width:25px;
}

</style>


	<title>@yield('title','DevFriend')</title>

	
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	
	@yield('head')
	
</head>

<body>

	<img border="0" src="/images/discover-devtools.png" alt="DevTools">

	@yield('content')
	
	@yield('body')
		
</body>

</html>
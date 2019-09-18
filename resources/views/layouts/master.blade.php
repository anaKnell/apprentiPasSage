<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<html>
<head>
	<title>ApprentiPasSages - @yield('title')</title>
	@include('layouts.link')
</head>
<body style="width:100%;">
	
	@include('layouts.header')
	@yield('content')
	@include('layouts.footer')

	@include('layouts.script')

</body>
</html>

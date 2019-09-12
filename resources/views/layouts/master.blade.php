<!DOCTYPE html>
<html>
<head>
	<title>ApprentiPasSages - @yield('title')</title>
	@include('layouts.link')
</head>
<body>
	
	@include('layouts.header')
	@yield('content')
	@include('layouts.footer')

	@include('layouts.script')
	
	<script src="js/thrombinoscopeGroupe.js"></script>
</body>
</html>

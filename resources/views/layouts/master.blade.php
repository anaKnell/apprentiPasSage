<!DOCTYPE html>
<html>
<head>
	<title>ApprentiPasSages - @yield('title')</title>
	@include('layouts.link')
</head>
<body>
	<div class="container-fluid m-0 p-0">
		@include('layouts.header')
		@yield('content')
		@include('layouts.footer')
	</div>
	@include('layouts.script')
</body>
</html>

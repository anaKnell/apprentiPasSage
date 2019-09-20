<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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

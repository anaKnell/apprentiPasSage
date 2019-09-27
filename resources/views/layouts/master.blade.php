<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="ApprentiPasSages" content="association apprentipassages">
		<title>ApprentiPasSages - @yield('title')</title>
			
		@include('layouts.link')
	</head>
<body>
	
	@include('layouts.header')
	@yield('content')
	@include('layouts.footer')

	@include('layouts.script')

</body>
</html>

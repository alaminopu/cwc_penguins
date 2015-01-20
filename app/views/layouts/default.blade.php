<!DOCTYPE html>
<html>
<head>
	<title>Penguin Shop - {{ $title }}</title>
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/ripples.css') }}
	{{ HTML::style('css/material.css') }}
	{{ HTML::style('css/font-awesome.css') }}
	{{ HTML::style('css/bootstrap-social.css') }}
	{{ HTML::style('css/app.css') }}
</head>
<body>
	@include('layouts.header')

	@yield('content')

	@include('layouts.footer')
	
	{{ HTML::script('js/jquery-1.11.2.js') }}
	{{ HTML::script('js/bootstrap.js') }}
	{{ HTML::script('js/ripples.js') }}
	{{ HTML::script('js/material.js') }}
	{{ HTML::script('js/app.js') }}
	<script>
		$(document).ready(function() {
		    $.material.init();
		});
	</script>
</body>
</html>
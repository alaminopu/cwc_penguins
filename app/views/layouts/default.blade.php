<!DOCTYPE html>
<html>
<head>
	<title>Penguin Shop - {{ $title }}</title>
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/ripples.min.css') }}
	{{ HTML::style('css/material-wfont.min.css') }}
	{{ HTML::style('css/font-awesome.min.css') }}
	{{ HTML::style('css/bootstrap-social.css') }}
	{{ HTML::style('css/app.css') }}
</head>
<body>
	@include('layouts.header')

	@yield('content')

	@include('layouts.footer')
	
	{{ HTML::script('js/jquery.min.js') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	{{ HTML::script('js/ripples.min.js') }}
	{{ HTML::script('js/material.min.js') }}
	{{ HTML::script('js/app.js') }}
	<script>
		$(document).ready(function() {
		    $.material.init();
		});
	</script>
</body>
</html>
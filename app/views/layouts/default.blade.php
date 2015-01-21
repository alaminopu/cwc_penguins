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
<body ng-app="penguins">
	@include('layouts.header')

	@yield('content')

	@include('layouts.footer')

	{{ HTML::script('js/lib/jquery.min.js') }}

	<!-- angular files -->
	{{ HTML::script('js/lib/angular.min.js') }}
	{{ HTML::script('js/lib/angular-route.min.js') }}
	{{ HTML::script('js/service/authService.js') }}
	{{ HTML::script('js/controller/authController.js') }}

	<!-- others -->
	{{ HTML::script('js/lib/bootstrap.min.js') }}
	{{ HTML::script('js/lib/ripples.min.js') }}
	{{ HTML::script('js/lib/material.min.js') }}
	{{ HTML::script('js/app.js') }}
	<script>
		$(document).ready(function() {
		    $.material.init();
		});
	</script>
</body>
</html>

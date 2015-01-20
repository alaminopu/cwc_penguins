<!DOCTYPE html>
<html>
<head>
	<title>Sign In/Sign Up</title>
	{{ HTML::style('css/bootstrap.css') }}
	{{ HTML::style('css/ripples.css') }}
	{{ HTML::style('css/material.css') }}
	{{ HTML::style('css/font-awesome.css') }}
	{{ HTML::style('css/bootstrap-social.css') }}
	{{ HTML::style('css/app.css') }}
</head>
<body>
	<header class="header panel col-md-12 text-center">
		<h2>Welcome to Penguin's "Buy-N-Sell" shop</h2>
	</header>

	@yield('content')

	<footer class="footer panel col-md-12 text-center">
		<h4>&copy; 2015 Penguin Shop | All RIghts Reserved</h4>
	</footer>
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
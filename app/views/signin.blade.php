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
	
	<section class="panel col-md-6 col-md-offset-3 signup-box">
		<button data-toggle="modal" data-target="#sign-in-box" class="btn btn-lg btn-raised btn-primary signin withripple" data-ripple-color="#F0F0F0"><strong>Sign In</strong></button>
		<button data-toggle="modal" data-target="#sign-up-box" class="btn btn-lg btn-raised btn-primary signup pull-right" data-ripple-color="#F0F0F0"><strong>Sign Up</strong></button>
		<div class="col-md-6 col-md-offset-3 social-login-box text-center">
			<h4>Login with social Networks</h4>
			<a href="javascript:void(0)" class="btn btn-block btn-social btn-facebook">
				<i class="fa fa-facebook"></i>
				Sign in with Facebook
			</a>
			<a href="javascript:void(0)" class="btn btn-block btn-social btn-google-plus">
				<i class="fa fa-google-plus"></i>
				Sign in with Google+
			</a>
			<a href="javascript:void(0)" class="btn btn-block btn-social btn-twitter">
				<i class="fa fa-twitter"></i>
				Sign in with Twitter
			</a>
		</div>

		<div id="sign-in-box" class="col-md-6 col-md-offset-3 modal fade in" tabindex="-1">
			<div class="modal-dialogue">
				<div class="modal-content">
					<div class="modal-body">
						<div class="form-control-wrapper">
							<input type="text" class="form-control empty" placeholder="Username/Email">
						</div>
						<div class="form-control-wrapper">
							<input type="password" class="form-control empty" placeholder="Password">
						</div>
						
						<div class="checkbox primary">
						    <label>
						        <input type="checkbox">
						        Remember me
						    </label>
						</div>
						
						<button class="btn btn-primary">Sign In</button>
					</div>
				</div>
			</div>
		</div>

		<div id="sign-up-box" class="col-md-6 col-md-offset-3 modal fade in" tabindex="-1">
			<div class="modal-dialogue">
				<div class="modal-content">
					<div class="modal-body">
						<div class="form-control-wrapper">
							<input type="text" class="form-control empty" placeholder="Username">
						</div>
						<div class="form-control-wrapper">
							<input type="email" class="form-control empty" placeholder="Email">
						</div>
						<div class="form-control-wrapper">
							<input type="password" class="form-control empty" placeholder="Password">
						</div>
						
						<button class="btn btn-primary">Sign Up</button>
					</div>
				</div>
			</div>
		</div>
	</section>


	<footer class="footer panel col-md-12 text-center">
		<h4>&copy; 2015 Penguin Shop | All RIghts Reserved</h4>
	</footer>
	{{ HTML::script('js/jquery-1.11.2.js') }}
	{{ HTML::script('js/bootstrap.js') }}
	{{ HTML::script('js/ripples.js') }}
	{{ HTML::script('js/material.js') }}
	<script>
		$(document).ready(function() {
		    $.material.init();
		});
	</script>
</body>
</html>
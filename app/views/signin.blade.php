@extends('layouts.default', ['title' => 'Sign In / Sign Up'])

@section('content')
	<div class="panel col-md-6 col-md-offset-3 signup-box">
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
	</div>
@stop
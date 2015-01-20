@extends('layouts.default', ['title' => 'User Profile'])

@section('content')
	<div class="panel col-md-12 profile-box">
		<section class="user-identity center-block text-center">
			{{ HTML::image('imgs/kowalski.jpg', $alt="Profile Photo", array('class' => 'center-block img-responsive img-thumbnail img-circle')) }}
			<strong class="center-block user-name">Kowalski</strong>
			<span class="center-block user-location">
				<i class="fa fa-location-arrow"></i> Madagascar
			</span>
		</section>

		<ul id="user-profile-navigator" class="nav nav-tabs">
			<li role="presentation" class="col-md-4 text-center active">
				<a  href="#general-user-info">General Info</a>
			</li>
			<li role="presentation" class="col-md-4 text-center">
				<a  href="#seller-user-info">Seller Profile</a>
			</li>
			<li role="presentation" class="col-md-4 text-center">
				<a  href="#buyer-user-info">Buyer Profile</a>
			</li>
		</ul>
		<section id="user-profile-content" class="tab-content">
			<div role="tabpanel" class="tab-pane fade active in" id="general-user-info">
				<h2 class="text-center">General Info</h2>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="seller-user-info">
				<h2 class="text-center">Seller Profile</h2>
			</div>
			<div role="tabpanel" class="tab-pane fade" id="buyer-user-info" >
				<h2 class="text-center">Buyer Profile</h2>
			</div>
		</section>
	</div>
@stop
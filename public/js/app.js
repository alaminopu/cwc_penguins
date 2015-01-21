// Tab group functionality
$('#user-profile-navigator a').click( function (e) {
	e.preventDefault();
	$(this).tab('show');
});


var app = angular.module('penguins',
		['authController','profileController','authService','ngRoute']
);

app.config(['$routeProvider', '$httpProvider', function($routeProvider, $httpProvider){
		$routeProvider.
		when('/', {
			templateUrl: 'public/partials/signin.html',
			controller: 'authentication'
		}).
		when('/profile', {
			templateUrl: 'public/partials/profile.html',
			controller: 'profileCtrl'
		}).
		when('/thanks', {
			templateUrl: 'public/partials/thanks.html',
		}).
		otherwise({
			redirectTo: '/'
		});

}]);

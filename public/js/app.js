// Tab group functionality
$('#user-profile-navigator a').click( function (e) {
	e.preventDefault();
	$(this).tab('show');
});


var app = angular.module('penguins',
		['authController','authService','ngRoute'],
		function($interpolateProvider){
			$interpolateProvider.startSymbol('<@');
			$interpolateProvider.endSymbol('@>');
		}
);

app.config(['$routeProvider', '$httpProvider', function($routeProvider, $httpProvider){
		$routeProvider.
		when('/', {
			templateUrl: 'public/partials/signin.html',
		}).
		when('/profile', {
			templateUrl: 'public/partials/profile.html',
			controller: 'ProfileCtrl'
		}).
		otherwise({
			redirectTo: '/'
		});

}]);

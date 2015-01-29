
var app = angular.module('penguinsApp',
		['mainCtrl','homeCtrl','authCtrl','profileCtrl','authService','contentService','ngRoute', 'countrySelect']
);

app.config(['$routeProvider', '$httpProvider', function($routeProvider, $httpProvider){
		$routeProvider.
		when('/', {
			templateUrl: 'public/partials/home.html',
			controller: 'HomeController'
		}).
		when('/signin', {
			templateUrl: 'public/partials/signin.html',
			controller: 'AuthController'
		}).
		when('/profile', {
			templateUrl: 'public/partials/profile.html',
			controller: 'ProfileController'
		}).
		when('/thanks', {
			templateUrl: 'public/partials/thanks.html',
		}).
		otherwise({
			redirectTo: '/'
		});

}]);

app.directive('showtab',function(){
	return {
		link: function(scope,element,attrs){
			element.click(function(e){
				e.preventDefault();
				$(element).tab('show');
			});
		}
	}
});

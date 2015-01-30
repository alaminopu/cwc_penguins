
var app = angular.module('penguinsApp',
		['mainCtrl','homeCtrl','authCtrl','profileCtrl','productCtrl',
		'authService','contentService','ngRoute', 'countrySelect']
);

app.config(['$routeProvider', '$httpProvider', function($routeProvider, $httpProvider){
		$routeProvider.
		when('/', {
			templateUrl: 'public/partials/home.html',
			controller: 'HomeController'
		}).
		when('/profile', {
			templateUrl: 'public/partials/profile.html',
			controller: 'ProfileController'
		}).
		when('/thanks', {
			templateUrl: 'public/partials/thanks.html',
		}).
		when('/products', {
			templateUrl: 'public/partials/products.html',
			controller: 'ProductController'
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

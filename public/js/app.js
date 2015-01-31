
var app = angular.module('penguinsApp',
		['mainCtrl','homeCtrl','authCtrl','profileCtrl','productCtrl',
		'cartCtrl','ngCart',
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
		when('/product', {
			templateUrl: 'public/partials/product.html',
		}).
		when('/cart', {
			templateUrl: 'public/partials/cart.html',
			controller: 'CartController'
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

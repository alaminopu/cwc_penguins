// Tab group functionality
$('#user-profile-navigator a').click( function (e) {
	e.preventDefault();
	$(this).tab('show');
});


var app = angular.module('penguins',
		['authController','authService'],
		function($interpolateProvider){
			$interpolateProvider.startSymbol('<@');
			$interpolateProvider.endSymbol('@>');
		}
);

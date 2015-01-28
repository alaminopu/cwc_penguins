var main = angular.module('mainCtrl',[]);

main.controller('MainController', ['$scope','$window','$location','Resource','Page',
  function($scope,$window,$location,Resource,Page){
    // Golbal scope
    $scope.Page = Page;
    
  }
]);

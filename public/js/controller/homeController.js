var home = angular.module('homeCtrl',[]);

home.controller('HomeController',['$scope','$window','$location','PublicContent',
  function($scope,$window, $location,PublicContent){
    var latestProducts = PublicContent.getAllLatestProducts();
    latestProducts.success(function(data){
      $scope.latestProducts= data;
      console.log($scope.latestProducts);
    });
    latestProducts.error(function(data){
      $scope.noLatestProducts = "Nothing match in this criteria";
    });


    // for logged in user view checking
    $scope.getPartials = function(){
      if($window.localStorage.access_token != null){
        return 'public/partials/user.html';
      }
      return 'public/partials/signin.html';
    }
  }

]);

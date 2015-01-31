var profile = angular.module('productCtrl', []);

profile.controller('ProductController', ['$scope','$window','$location','$routeParams','Resource','Page',
  function($scope,$window,$location,$routeParams,Resource,Page){
      if($window.localStorage.access_token != null){
          Page.setTitle('Product page');

          console.log($routeParams.id);
          var product = Resource.getData($window.localStorage.access_token, 'products/single/'+$routeParams.id);
          product.success(function(data){
            console.log(data);
          })

      }else{
        $location.path('/');
      }


      $scope.getPartials = function(){
        if($window.localStorage.access_token != null){
          return 'public/partials/user.html';
        }
        return 'public/partials/signin.html';
      }
}]);

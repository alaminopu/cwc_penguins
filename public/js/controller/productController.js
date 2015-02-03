var profile = angular.module('productCtrl', []);

profile.controller('ProductController', ['$scope','$window','$location','$routeParams','PublicContent','Page',
  function($scope,$window,$location,$routeParams,PublicContent,Page){

      Page.setTitle('Product page');
      var product = PublicContent.getProductData('products/single/'+$routeParams.id);
      product.success(function(data){
        console.log(data);
      });

      $scope.getPartials = function(){
        if($window.localStorage.access_token != null){
          return 'public/partials/user.html';
        }
        return 'public/partials/signin.html';
      }
}]);

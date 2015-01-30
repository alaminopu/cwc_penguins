var profile = angular.module('productCtrl', []);

profile.controller('ProductController', ['$scope','$window','$location','Resource','Page',
  function($scope,$window,$location,Resource,Page){
      if($window.localStorage.access_token != null){
          Page.setTitle('Product page');
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

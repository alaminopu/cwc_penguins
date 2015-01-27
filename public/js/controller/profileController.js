var profile = angular.module('profileCtrl', []);

profile.controller('ProfileController', ['$scope','$window','$location','Resource',
  function($scope,$window,$location,Resource){
      if($window.localStorage.access_token != null){
          var user = Resource.getData($window.localStorage.access_token,'profile');
          user.success(function(data){
              $scope.data= data;
          });
          user.error(function(data){
              delete $window.localStorage.access_token;
              console.log(data);
              $location.path('/');
          });

          $scope.signout = function(){
              delete $window.localStorage.access_token;
              $location.path('/');
          }

      }else{
        console.log('no access token');
        $location.path('/');
      }
}]);

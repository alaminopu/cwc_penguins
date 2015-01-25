var profile = angular.module('profileController', []);

profile.controller('profileCtrl', ['$scope','$window','$location','UserProfile',
  function($scope,$window,$location,UserProfile){
      if($window.localStorage.access_token != null){
          var user = UserProfile.getUserData($window.localStorage.access_token);
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

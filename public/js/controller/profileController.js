var profile = angular.module('profileController', []);

profile.controller('profileCtrl', ['$scope','$window','$location','Verifier',
  function($scope,$window,$location,Verifier){
      if($window.localStorage.access_token != null){
          var user = Verifier.tokenVerify($window.localStorage.access_token);
          user.success(function(data){
              $scope.data= data;
              $location.path('/thanks');
          });
          user.error(function(){
              delete $window.localStorage.access_token;
              console.log("Couldn't verify user");
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

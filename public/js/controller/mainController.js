var main = angular.module('mainCtrl',[]);

main.controller('MainController', ['$scope','$window','$location','Resource','Page',
function($scope,$window,$location,Resource,Page){
  // Golbal scope
  $scope.Page = Page;

  var loggedin = false;

  if($window.localStorage.access_token != null){
    var user = Resource.getData($window.localStorage.access_token,'profile');
    user.success(function(data){
      $scope.data= data;
      // User logged in
      loggedin = true;
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
    loggedin = false;
  }

  $scope.getPartial = function(){
    if(loggedin){
      return 'public/partials/user.html';
    }else{
      return 'public/partials/signin.html';
    }
  }
}
]);

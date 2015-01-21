var auth = angular.module('authController', []);

auth.controller('authentication', ['$scope','$window','$location','SignIn','SignUp',

  function ($scope,$window,$location,SignIn,SignUp) {
      $scope.loginData = [];
      $scope.message = '';

      $scope.login = function(){
        $scope.loginData['username']=$scope.loginusername;
        $scope.loginData['password']=$scope.loginpassword;

        var auth = SignIn.auth($scope.loginData);

        auth.success(function(data, status, header, config){
          $window.localStorage.access_token = data.access_token;
          $window.localStorage.refresh_token = data.refresh_token;

          $location.path( "/profile" );
        });

        auth.error(function(){
          delete $window.localStorage.access_token;

          $scope.message = 'Error: Invalid user or password';
        });

        $scope.loginData = [];
      }

      // Registration
      $scope.registrationData = [];

      $scope.register = function(){
        $scope.registrationData['username']=$scope.regusername;
        $scope.registrationData['email']=$scope.regemail;
        $scope.registrationData['password']=$scope.regpassword;

        console.log($scope.registrationData);

        var signedUp = SignUp.registerUser($scope.registrationData);
        signedUp.success(function(response){
          console.log(response);
        });
        $scope.registrationData=[];
      };
    }
]);

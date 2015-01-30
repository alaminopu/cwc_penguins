var auth = angular.module('authCtrl', []);

auth.controller('AuthController', ['$scope','$window','$location','Authentication',

  function ($scope,$window,$location,Authentication) {
      $scope.loginData = [];
      $scope.message = '';

      $scope.login = function(){

        $scope.loginData['username']=$scope.loginusername;
        $scope.loginData['password']=$scope.loginpassword;

        var auth = Authentication.signin($scope.loginData);

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
      $scope.rmessage = '';

      $scope.register = function(){
        $scope.registrationData['first_name'] = $scope.regfirstname;
        $scope.registrationData['last_name'] = $scope.reglastname;
        $scope.registrationData['username']=$scope.regusername;
        $scope.registrationData['email']=$scope.regemail;
        $scope.registrationData['password']=$scope.regpassword;
        $scope.registrationData['mobile_no'] = $scope.regmobileno;

        //console.log($scope.registrationData);

        var signedUp = Authentication.signup($scope.registrationData);
        signedUp.success(function(response){
          console.log(response.error);
          if(response.error){
            $scope.error = response.error;
          }else{
            $location.path('/thanks');
          }
        });

        signedUp.error(function(data){
           $scope.rmessage = 'System error';
        });

        $scope.registrationData=[];
      };
    }
]);

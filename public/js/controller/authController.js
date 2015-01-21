var auth = angular.module('authController', []);

auth.controller('authentication', ['$scope','$window','SignIn','SignUp', function ($scope,$window,SignIn,SignUp) {
  $scope.loginData = [];
  $scope.message= '';

  $scope.login = function(){
    $scope.loginData['username']=$scope.loginusername;
    $scope.loginData['password']=$scope.loginpassword;

    console.log($scope.loginData);

    var auth = SignIn.auth($scope.loginData);

    auth.success(function(data, status, header, config){
      $window.sessionStorage.access_token = data.access_token;
      $window.sessionStorage.refresh_token = data.refresh_token;
    });

    auth.error(function(){
      delete $window.sessionStorage.access_token;

      $scope.message = 'Error: Invalid user or password';
    })

    $scope.loginData = [];
    console.log($scope.loginData);
  }

  // Registration
  //$scope.registrationData = [];

  // $scope.register = function(){
  //   $scope.registrationData['firstname']=$scope.customer.firstname;
  //   $scope.registrationData['lastname']=$scope.customer.lastname;
  //   $scope.registrationData['phone']=$scope.customer.countryCode + $scope.customer.phone;
  //   $scope.registrationData['email']=$scope.customer.email;
  //   $scope.registrationData['password']=$scope.customer.password;
  //   $scope.registrationData['repassword']=$scope.customer.repassword;
  //
  //   console.log($scope.registrationData);
  //
  //   var signedUp = SignUp.registerUser($scope.registrationData);
  //   signedUp.success(function(response){
  //     console.log(response);
  //   });
  //   $scope.registrationData.length=0;
  // };

}]);

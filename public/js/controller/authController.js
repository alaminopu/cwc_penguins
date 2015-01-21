var auth = angular.module('authController', []);

auth.controller('authentication', ['$scope','SignIn','SignUp', function ($scope,SignIn,SignUp) {
  $scope.loginData = [];

  $scope.login = function(){
    $scope.loginData['username']=$scope.loginusername;
    $scope.loginData['password']=$scope.loginpassword;

    console.log($scope.loginData);

    var auth = SignIn.auth($scope.loginData);
    auth.success(function(response){
      console.log(response);
    });

    $scope.loginData.length = 0;
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

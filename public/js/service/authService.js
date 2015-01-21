var access = angular.module('authService', []);

access.factory('SignIn', ['$http','$rootScope',function ($http,$rootScope) {
  return {
    auth: function(credentials){
      var authUser = $http({
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        url: 'http://local.dev/cwc_penguins/public/oauth/token',
        transformRequest: function(obj) {
          var str = [];
          for(var p in obj)
            str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
            return str.join("&");
          },
          data: {username: credentials['username'], password: credentials['password']}
      });

      return authUser;
    }
  };
}]);


access.factory('SignUp', ['$http','$rootScope', function ($http, $rootScope) {
  return {
    registerUser: function(registerData){
      var confirmation = $http({
        method:'post',
        url:'api/register',
        params: registerData
      });
      return confirmation;
    }
  };
}]);

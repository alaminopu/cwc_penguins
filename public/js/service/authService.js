var access = angular.module('authService', []);

access.factory('SignIn', ['$http','$rootScope',function ($http,$rootScope) {
  return {
    auth: function(credentials){
      var authUser = $http({
        method: 'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        url: 'public/oauth/token',
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
        method:'POST',
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        url:'public/signup',
        transformRequest: function(obj) {
          var str = [];
          for(var p in obj)
          str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
          return str.join("&");
        },
        data: {username: registerData['username'], email:registerData['email'],password: registerData['password']}
      });
      return confirmation;
    }
  };
}]);



access.factory('Resource', ['$http', '$rootScope', function($http, $rootScope){
  return {
      getData: function(access_token, uri){
        var data = $http({
          method:'GET',
          url:'public/api/'+uri,
          headers: {'Authorization': 'Bearer '+access_token}
        });

        return data;
      },
      UpdateUser: function(access_token,UserData,uri){
        var confirmation = $http({
          method:'POST',
          headers: {'Content-Type': 'application/x-www-form-urlencoded','Authorization': 'Bearer '+access_token},
          url:'public/api/'+uri,
          transformRequest: function(obj) {
            var str = [];
            for(var p in obj)
            str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
            return str.join("&");
          },
          data: UserData
        });
        return confirmation;
    }
  }

}]);

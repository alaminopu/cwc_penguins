var profile = angular.module('profileCtrl', []);

profile.controller('ProfileController', ['$scope','$window','$location','Resource','Page',
  function($scope,$window,$location,Resource,Page){
      if($window.localStorage.access_token != null){
          Page.setTitle('User Profile');

          var user = Resource.getData($window.localStorage.access_token,'profile');
          user.success(function(data){
              $scope.data= data;
              $scope.profileFname = data.first_name;
              $scope.profileLname = data.last_name;
              $scope.profileEmail = data.email;
              $scope.profileHouseNo = data.house_no;
              $scope.profileStreetName = data.street_name;
              $scope.profileRoadNo = data.road_no;
              $scope.profilePostCode = data.post_code;
              $scope.profileCity = data.city;
              $scope.selectedCountry = data.country;
          });
          user.error(function(data){
              delete $window.localStorage.access_token;
              console.log(data);
              $location.path('/');
          });

          // user update
          $scope.userData = [];
          $scope.saveuser = function(){
            $scope.userData['first_name'] = $scope.profileFname;
            $scope.userData['last_name'] = $scope.profileLname;
            $scope.userData['email'] = $scope.profileEmail;
            $scope.userData['old_password'] = $scope.profileOldPassword;
            $scope.userData['new_password'] = $scope.profileNewPassword;

          }

          $scope.signout = function(){
              delete $window.localStorage.access_token;
              $location.path('/');
          }

      }else{
        console.log('no access token');
        $location.path('/');
      }
}]);

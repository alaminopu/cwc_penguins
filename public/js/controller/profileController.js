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
              $scope.profileMobileNo = data.mobile_no;
              if(data.address){
                $scope.profileHouseNo = data.address.house_no;
                $scope.profileStreetName = data.address.street_name;
                $scope.profileRoadNo = data.address.road_no;
                $scope.profilePostCode = data.address.post_code;
                $scope.profileCity = data.address.city;
                $scope.selectedCountry = data.address.country;
              }
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
            $scope.userData['mobile_no'] = $scope.profileMobileNo;
            $scope.userData['profile_photo_link']='public/imgs/profile/kowalski.jpg';
            $scope.userData['payment']= "bkash";

            console.log($scope.userData);

            var updatedUser = Resource.UpdateUser($window.localStorage.access_token,$scope.userData, 'profile/update/personal-info');
            updatedUser.success(function(response){
              console.log(response.error);
              if(response.error){
                $scope.error = response.error;
              }else if(response.success){
                $scope.userSuccess = response.success;
              }
            });
          }

          // contact update
          $scope.contactData = [];
          $scope.savecontact = function(){
            $scope.contactData['house_no'] = $scope.profileHouseNo;
            $scope.contactData['street_name']= $scope.profileStreetName;
            $scope.contactData['road_no']= $scope.profileRoadNo;
            $scope.contactData['post_code']= $scope.profilePostCode;
            $scope.contactData['city']= $scope.profileCity;
            $scope.contactData['country']= $scope.selectedCountry;

            var updatedContact= Resource.UpdateUser($window.localStorage.access_token,$scope.contactData, 'profile/update/address');
            updatedContact.success(function(response){
              console.log(response.error);
              if(response.error){
                $scope.error = response.error;
              }else if(response.success){
                $scope.contactSuccess = response.success;
              }
            });
          }

          // Password update
          $scope.passData = [];
          $scope.updatePassword = function(){
            $scope.passErrorMsg = '';
            $scope.passData['old_password'] = $scope.profileOldPass;
            $scope.passData['new_password'] = $scope.profileNewPass;

            var updatedPass= Resource.UpdateUser($window.localStorage.access_token,$scope.passData, 'profile/update/password');
            updatedPass.success(function(response){
              console.log(response.error);
              if(response.error){
                $scope.passErrorMsg = response.error;
              }else if(response.success){
                $scope.passSuccess = response.success;
              }
            });
            updatedPass.error(function(errData){
               $scope.passErrorMsg = errData;
            })
          }

          // Seller profile data
          var sellerData = Resource.getData($window.localStorage.access_token, 'profile/seller');
          sellerData.success(function(data){
              $scope.sellerData = data;
          });
          sellerData.error(function(data){
              $scope.sellerNoData = data.error;
          });

          // Buyer profile data
          var buyerData = Resource.getData($window.localStorage.access_token, 'profile/buyer');
          buyerData.success(function(data){
              $scope.buyerData = data;
          });
          buyerData.error(function(data){
              $scope.buyerNoData = data.error;
          });



          $scope.signout = function(){
              delete $window.localStorage.access_token;
              $location.path('/');
          }

      }else{
        console.log('No access token');
        $location.path('/');
      }
}]);

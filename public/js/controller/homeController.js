var home = angular.module('homeCtrl',[]);

home.controller('HomeController',['$scope','$window','$location','PublicContent',
  function($scope,$window, $location,PublicContent){
    var items = PublicContent.getProductData('products/latest');
    items.success(function(data){
      $scope.items= data;
      //console.log($scope.items);
    });
    items.error(function(data){
      $scope.noitems = "Nothing match in this criteria";
    });

    // get iteam by category
    var categoryProductSelect = function(item){
      console.log(item);
      var items = PublicContent.getProductData('products/category/'+$scope.categorySelect);
      items.success(function(data){
        $scope.items= data;
        //console.log($scope.items);
      });
      items.error(function(data){
        $scope.noitems = "Nothing match in this criteria";
      });
    }

    // get all categories
    var category = PublicContent.getProductData('products/categories');
    category.success(function(data){
      $scope.categories= data;
      //console.log(data);
    })




    // for logged in user view checking
    $scope.getPartials = function(){
      if($window.localStorage.access_token != null){
        return 'public/partials/user.html';
      }
      return 'public/partials/signin.html';
    }
  }

]);

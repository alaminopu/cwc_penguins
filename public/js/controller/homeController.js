var home = angular.module('homeCtrl',[]);

home.controller('HomeController',['$scope','$window','$location','PublicContent',
  function($scope,$window, $location,PublicContent){
    var items = PublicContent.getProductData('products/latest');
    items.success(function(data){
      $scope.items= data;
      //console.log($scope.items);
    });
    items.error(function(data){
      console.log(data);
      $scope.noitems = "Nothing match in this criteria";
    });

    // get iteam by category
    $scope.categoryProductSelect = function(item){
      //console.log(item.category);
      $scope.subcategories = $scope.categorySelect.subcategory;
      var items = PublicContent.getProductData('products/category/'+item.category);
      items.success(function(data){
        $scope.items= data;
        //console.log($scope.items);
      });
      items.error(function(data){
        $scope.noitems = "Nothing match in this criteria";
      });
    }

    // Get item by subcategory
    $scope.subCategoryProductSelect= function(item){
      var items = PublicContent.getProductData('products/subcategory/'+item);
      items.success(function(data){
        $scope.items= data;
      });
      items.error(function(data){
        $scope.noitems = "Nothing match in this criteria";
      });
    }

    // product by price range
    $scope.getProductByPrice = function(price){
      var divider = price.split(';');
      var temp;
      if(divider[0]>divider[1]){
        temp = divider[0];
        divider[0]=divider[1];
        divider[1]=temp;
      }
      console.log(divider);
      var items = PublicContent.getProductData('products/range/'+divider[0]+'/'+divider[1]);
      items.success(function(data){
        $scope.items= data;
        console.log(data.error);
      });
      items.error(function(data){
        $scope.noitems = "Nothing match in this criteria";
      });
    }

    // product by Brand
    $scope.brands = {Sony:false, Apple: false, Microsoft:false,Asus:false,BMW:false,Aarong:false};
    $scope.getProductByBrand = function(productByBrand){
      for(var key in $scope.brands ){
        if(key == productByBrand){
          $scope.brands[key] = true;
        }else{
          $scope.brands[key] = false;
        }
      }
      var items = PublicContent.getProductData('products/brand/'+productByBrand);
      items.success(function(data){
        $scope.items= data;
      });
      items.error(function(data){
        $scope.noitems = "Nothing match in this criteria";
      });
    }


    // get data by location
    $scope.locationData=['Dhaka','Chittagong','Comilla','Sylhet','Barisal'];
    $scope.getDataBylocation = function(locationFilter){
        console.log(locationFilter);
        var items = PublicContent.getProductData('products/location/'+locationFilter);
        items.success(function(data){
          $scope.items= data;
          console.log(data.error);
        });
        items.error(function(data){
          $scope.noitems = "Nothing match in this criteria";
        });
    }

    // get most sold items
    $scope.getMostSoldProduct = function(){
      // var items = PublicContent.getProductData('products/most_sold');
      // items.success(function(data){
      //   $scope.items= data;
      //   console.log(data.error);
      // });
      // items.error(function(data){
      //   $scope.noitems = "Nothing match in this criteria";
      // });
    }

    // get sorted product by price
    var sort = 0;
    $scope.getProductSortedByPrice = function(){
     var items;
      if(sort==0){
          items = PublicContent.getProductData('products/price/DESC');
          sort=1;
      }else{
          items = PublicContent.getProductData('products/price/ASC');
          sort=0;
      }
      items.success(function(data){
        $scope.items= data;
        console.log(data.error);
      });
      items.error(function(data){
        $scope.noitems = "Nothing match in this criteria";
      });
    }

    // get product by date
    var date = 'latest';
    $scope.getProductByDate = function(){
        var items;
        if(date=='latest'){
            items = PublicContent.getProductData('products/latest');
            date="oldest";
        }else{
            items = PublicContent.getProductData('products');
            date="latest";
        }
        items.success(function(data){
          $scope.items= data;
          console.log(data.error);
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
    });




    // for logged in user view checking
    $scope.getPartials = function(){
      if($window.localStorage.access_token != null){
        return 'public/partials/user.html';
      }
      return 'public/partials/signin.html';
    }
  }

]);

var home = angular.module('cartCtrl',[]);

home.controller('CartLController',['$scope','$window','$location','Resource','ngCart',
  function($scope,$window, $location,Resource,ngCart){
    $scope.checkout = function(){
        if($window.localStorage.access_token != null){
            var orderData = ngCart.getItems();
            for(var i=0; i<orderData.length; i++){
                var data = Array();
                data['product_id'] = orderData[i]._data._id;
                data['product_title'] = orderData[i]._data.product_title;
                data['seller_username'] = orderData[i]._data.seller_username;
                data['quantity'] = orderData[i].getQuantity();
                data['total_price']= orderData[i].getTotal();
                var order = Resource.UpdateData($window.localStorage.access_token, data, 'products/order');
                order.success(function(response){
                    console.log(response);
                    ngCart.empty(true);
                    alert(response.success);
                });
                order.error(function(error){
                    console.log(error);
                });
            }
        }else{
            alert('You must need to signup to process order');
        }

    }
  }

]);

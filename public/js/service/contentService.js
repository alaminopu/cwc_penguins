var content = angular.module('contentService',[]);

content.factory('Page', function(){
  var title = 'Penguins shop';
  return {
    title: function(){ return title; },
    setTitle: function(newTitle){title = newTitle}
  };

});


content.factory('PublicContent', ['$http', '$rootScope', function($http, $rootScope){
  return {
    getAllLatestProducts: function(uri){
      var data = $http({
        method:'GET',
        url:'public/products/latest',
      });

      return data;
    },
    getCategories: function(){
      var data = $http({
        method:'GET',
        url:'public/categories',
      });

      return data;
    },

    


  }

}]);

var content = angular.module('contentService',[]);

content.factory('Page', function(){
  var title = 'Penguins shop';
  return {
    title: function(){ return title; },
    setTitle: function(newTitle){title = newTitle}
  };

});
content.filter('range', function() {
  return function(input, total) {
    total = parseInt(total);
    for (var i=0; i<total; i++)
      input.push(i);
    return input;
  };
});

content.factory('PublicContent', ['$http', '$rootScope', function($http, $rootScope){
  return {
    getProductData: function(uri){
      var data = $http({
        method:'GET',
        url:'public/'+uri,
      });

      return data;
    }

  }

}]);

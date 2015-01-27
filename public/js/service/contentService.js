var content = angular.module('contentService',[]);

content.factory('Page', function(){
  var title = 'Penguins shop';
  return {
    title: function(){ return title; },
    setTitle: function(newTitle){title = newTitle}
  };

});

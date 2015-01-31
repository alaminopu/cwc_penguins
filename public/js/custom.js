// Refresh DOM element on new load
$(document).arrive("#wrapperH", function() {
  // 'this' refers to the newly created element
  var $newElem = $(this);
});

$(document).arrive(".price-range", function() {
	var $newRange = $(this);

	$('.slider-input').jRange({
	    from: 0,
	    to: 100,
	    step: 1,
	    scale: [0,25,50,75,100],
	    format: '',
	    width: '90%',
	    isRange : true
	});
});

$(document).ready(function() {
  // Bootstrap material initialization
  $.material.init();

  // for closing success message on profile page
  $(".close").click(function(e){
      e.preventDefault();
      $(".alert").alert('close');
  });

});
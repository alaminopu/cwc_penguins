// Refresh DOM element on new load
$(document).arrive("#wrapperH", function() {
  // 'this' refers to the newly created element
  var $newElem = $(this);
});

$(document).arrive(".price-range", function() {
	var $newRange = $(this);

  $('.slider-input').jRange({
      from: 100,
      to: 50000,
      step: 100,
      scale: [100,1000,10000,50000],
      format: '',
      width: '90%',
      isRange : true
  });
});


$(document).arrive(".dang", function() {
	var $slider = $(this);
  	$("#pikame").PikaChoose();
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
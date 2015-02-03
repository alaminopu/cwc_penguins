// Refresh DOM element on new load
$(document).arrive("#wrapperH", function() {
  // 'this' refers to the newly created element
  var $newElem = $(this);
});

$(document).arrive(".price-range", function() {
	var $newRange = $(this);

    $("#range_29").ionRangeSlider({
        type: "double",
        min: 100,
        max: 10000,
        step: 500,
        grid: true,
        grid_snap: true
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

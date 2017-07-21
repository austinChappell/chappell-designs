$(document).ready(function(){
  $('#brand-logo').fadeTo(1500, 0.8);
  $('.title-opaque').fadeTo(3000, 1);

  $(window).scroll(function(){
    $('.transparent').each(function(){
      var middleOfElement = $(this).position().top + ($(this).height() / 2);
      var bottomOfWindow = $(window).scrollTop() + $(window).height();
      if(bottomOfWindow > middleOfElement) {
        $(this).fadeTo(1500, 1);
      };
    });
  });

});

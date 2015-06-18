(function ($) {
  
  $('#menu-toggle').on('click', function () {
    var menu = $('.menu');
    var left = menu.css('left').replace(/px/g, '');
    var animateTo = parseInt(left) < 0 ? '0%' : '-100%';
    
    menu.css('left', animateTo);
  });
  
})(jQuery);
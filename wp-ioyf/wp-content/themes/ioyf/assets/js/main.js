(function ($) {
  
  $('#menu-toggle').on('click', function () {
    var menu = $('#menu');
    var openClass = 'menu-open';
    
    menu.hasClass(openClass) ? menu.removeClass(openClass) : menu.addClass(openClass);
  });
  
})(jQuery);
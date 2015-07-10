(function ($) {
  
  bindDOMElements();
  
  function bindDOMElements() {
    document.querySelector('.menu-toggle').addEventListener('click', function() {
      slideout.toggle();
    });
  }
  
  var slideout = new Slideout({
    'panel': document.getElementById('content'),
    'menu': document.getElementById('menu'),
    'padding': 256,
    'tolerance': 0
  });
  
})(jQuery);
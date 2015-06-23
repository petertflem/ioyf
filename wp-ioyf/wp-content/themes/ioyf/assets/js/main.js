(function ($) {
  
  bindDOMElements();
  
  function bindDOMElements() {
    // Toggle button
    document.querySelector('.toggle-button').addEventListener('click', function() {
      slideout.toggle();
    });
  }
  
  var slideout = new Slideout({
    'panel': document.getElementById('content'),
    'menu': document.getElementById('menu'),
    'padding': 256,
    'tolerance': 70
  });
  
})(jQuery);
(function () {
  initializeMap();
  
  function initializeMap() {
    var mapCanvas = document.getElementById('map');
    var oksLatLng = new google.maps.LatLng(59.980871, 11.013361);
    var mapOptions = {
      center: oksLatLng,
      zoom: 15,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(mapCanvas, mapOptions);
    
    var marker = new google.maps.Marker({
      position: oksLatLng,
      map: map,
      title: 'Oslo Kristne Senter'
    });
  }
})();
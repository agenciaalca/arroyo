var map;
function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 16,
    center: new google.maps.LatLng(-16.7182903,-49.2720662),
    mapTypeId: 'roadmap'
  });

  var iconBase = 'http://arroyopets.com.br/img/';
  var icons = {
    arroyo: {
      icon: iconBase + 'mapa.png'
    }
  };

  var features = [
    {
      position: new google.maps.LatLng(-16.7182903,-49.2720662),
      type: 'arroyo'
    }
  ];

  // Create markers.
  features.forEach(function(feature) {
    var marker = new google.maps.Marker({
      position: feature.position,
      icon: icons[feature.type].icon,
      map: map
    });
  });
}
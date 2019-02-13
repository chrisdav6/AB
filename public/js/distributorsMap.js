// Initialize and add the map
function initMap() {

  var centerMap = { lat: 27.979513, lng: 9.831410 };

  // Center Map
  var map = new google.maps.Map(document.getElementById('distributorsMap'), { zoom: 3, center: centerMap, scrollwheel: false });

  var markers = [
    ['Austrailia, SDR Clinical Technology', -21.517270, 133.668094],
    ['Brazil, BIOProphecy', -9.931470, -50.785254],
    ['China, BIOProphecy', 35.682732, 103.662959],
    ['Czech Republic, I.T.A-Intertact s.r.o', 49.802342, 15.038014],
    ['Germany, ibidi GmbH', 51.475423, 10.377814],
    ['India, Labmate', 23.647772, 79.508199],
  ];


  // Info Window Content
  var infoWindowContent = [

    // Austrailia
    [
      '<div class="map-text">' +
      '<span>SDR Clinical Technology</span><br>' +
      '<hr>' +
      'Tel: 61-2-9882-2882<br>' +
      'Attn: Dr. Peter Kenny<br>' +
      '<p class="mt-0"><a class="map-link" href="http://www.sdr.com.au" target="_blank"><i class="fab fa-chrome"></i> Visit Website</a></p>' +
      '</div>'
    ],

    // Brazil
    [
      '<div class="map-text">' +
      '<span>BIOProphecy</span><br>' +
      '<hr>' +
      'Tel: +55 16 98206-8282<br>' +
      'Attn: Dr. Cleverson Fernandes<br>' +
      '<p><a class="map-link" href="mailto:cleverson@bioprophecy.com?subject=Inquiry from Applied Biophysics Website"><i class="fas fa-envelope"></i> Email</a></p>' +
      '<p class="mt-0"><a class="map-link" href="http://bioprophecy.com" target="_blank"><i class="fab fa-chrome"></i> Visit Website</a></p>' +
      '</div>'
    ],

    // China
    [
      '<div class="map-text">' +
      '<span>Dakewe Biotech Co</span><br>' +
      '<hr>' +
      'Tel: 0086 755 2686 946<br>' +
      'Attn: Dr. Qing Jun<br>' +
      '<p class="mt-0"><a class="map-link" href="http://www.dakewe.net" target="_blank"><i class="fab fa-chrome"></i> Visit Website</a></p>' +
      '</div>'
    ],

    // Czech Republic
    [
      '<div class="map-text">' +
      '<span>I.T.A-Intertact s.r.o</span><br>' +
      '<hr>' +
      'Tel: +420 234 760 838<br>' +
      'Attn: Lenka Kasalova<br>' +
      '<p class="mt-0"><a class="map-link" href="http://www.ita-intertact.com" target="_blank"><i class="fab fa-chrome"></i> Visit Website</a></p>' +
      '</div>'
    ],

    //Germany
    [
      '<div class="map-text">' +
      '<span>ibidi GmbH</span><br>' +
      '<hr>' +
      'Tel: 49 89 5204 617391<br>' +
      'Attn: Dr. Ulf Radler<br>' +
      '<p><a class="map-link" href="mailto:uraedler@ibidi.de?subject=Inquiry from Applied Biophysics Website"><i class="fas fa-envelope"></i> Email</a></p>' +
      '<p class="mt-0"><a class="map-link" href="http://www.ibidi.de" target="_blank"><i class="fab fa-chrome"></i> Visit Website</a></p>' +
      '</div>'
    ],

    //India
    [
      '<div class="map-text">' +
      '<span>Labmate</span><br>' +
      '<hr>' +
      'Tel: 44 2220 0066<br>' +
      'Attn: S. Viswanathan<br>' +
      '<p><a class="map-link" href="mailto:labmate@vsnl.com?subject=Inquiry from Applied Biophysics Website"><i class="fas fa-envelope"></i> Email</a></p>' +
      '<p class="mt-0"><a class="map-link" href="http://www.labmateasia.com" target="_blank"><i class="fab fa-chrome"></i> Visit Website</a></p>' +
      '</div>'
    ],




  ];

  // Display multiple markers on a map
  var infoWindow = new google.maps.InfoWindow(), marker, i;

  // Loop through our array of markers & place each one on the map  
  for (var i = 0; i < markers.length; i++) {
    var position = new google.maps.LatLng(markers[i][1], markers[i][2]);

    marker = new google.maps.Marker({
      position: position,
      map: map,
      title: markers[i][0]
    });

    // Allow each marker to have an info window    
    google.maps.event.addListener(marker, 'click', (function (marker, i) {
      return function () {
        infoWindow.setContent(infoWindowContent[i][0]);
        infoWindow.open(map, marker);
      }
    })(marker, i));
  }
}
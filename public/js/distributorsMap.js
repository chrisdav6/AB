// Initialize and add the map
function initMap() {

  var centerMap = { lat: 25.979513, lng: 9.831410 };

  // Center Map
  var map = new google.maps.Map(document.getElementById('distributorsMap'), { zoom: 3, center: centerMap, scrollwheel: false });

  var markers = [
    ['Austrailia, SDR Clinical Technology', -21.517270, 133.668094],
    // ['Brazil, BIOProphecy', -9.931470, -50.785254],
    ['China, Dakewe Biotech Co', 35.682732, 103.662959],
    ['Czech Republic, I.T.A-Intertact s.r.o', 49.802342, 15.038014],
    ['Germany, ibidi GmbH', 51.475423, 10.377814],
    ['India, Labmate', 23.647772, 79.508199],
    ['Israel, Almog Diagnostic', 31.261726, 34.953094],
    ['Italy, ORIGLIA Srl', 43.560405, 12.229838],
    ['Japan, Nepa Gene Company, Ltd.', 36.987055, 138.438764],
    ['Korea, LeeBaeg Science Co., Ltd.', 36.858338, 127.988415],
    ['Malaysia, Precision Technologies', 4.187779, 102.043109],
    ['Puerto Rico, Audio & Video Pro Caribe', 18.229927, -66.459357],
    ['Singapore, Precision Technologies', 1.363426, 103.867258],
    ['Slovakia, I.T.A-Intertact s.r.o', 48.942438, 19.254374],
    ['Taiwan, Sunpoint Scientific Instrument Co., Ltd.', 23.818453, 121.142053],
    ['Turkey, aka Biyoteknoloji', 39.523393, 35.371999],
    ['United Kingdom, ibidi GmbH', 53.791790, -2.178177]
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
    // [
    //   '<div class="map-text">' +
    //   '<span>BIOProphecy</span><br>' +
    //   '<hr>' +
    //   'Tel: +55 16 98206-8282<br>' +
    //   'Attn: Dr. Cleverson Fernandes<br>' +
    //   '<p><a class="map-link" href="mailto:cleverson@bioprophecy.com?subject=Inquiry from Applied Biophysics Website"><i class="fas fa-envelope"></i> Email</a></p>' +
    //   '<p class="mt-0"><a class="map-link" href="http://bioprophecy.com" target="_blank"><i class="fab fa-chrome"></i> Visit Website</a></p>' +
    //   '</div>'
    // ],

    // China
    [
      '<div class="map-text">' +
      '<span>Dakewe Biotech Co., Ltd</span><br>' +
      '<hr>' +
      'Tel: (86) 755-2641 0427<br>' +
      'Attn: Aling Xiao<br>' +
      '<p class="mt-0"><a class="map-link" href="http://www.dakewe.net" target="_blank"><i class="fab fa-chrome"></i> Visit Website</a></p>' +
      '</div>'
    ],

    // Czech Republic
    [
      '<div class="map-text">' +
      '<span>I.T.A-Intertact s.r.o</span><br>' +
      '<hr>' +
      'Tel: +420 234 760 838<br>' +
      'Attn: Helena Janatkova<br>' +
      '<p class="mt-0"><a class="map-link" href="http://www.ita-intertact.com" target="_blank"><i class="fab fa-chrome"></i> Visit Website</a></p>' +
      '</div>'
    ],

    //Germany
    [
      '<div class="map-text">' +
      '<span>ibidi GmbH</span><br>' +
      '<hr>' +
      'Tel: +49 89 520 46 17 391<br>' +
      'Attn: Dr. Christiane Thanisch<br>' +
      '<p><a class="map-link" href="mailto:cthansich@ibidi.de?subject=Inquiry from Applied Biophysics Website"><i class="fas fa-envelope"></i> Email</a></p>' +
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

    //Israel
    [
      '<div class="map-text">' +
      '<span>Almog Diagnostic</span><br>' +
      '<hr>' +
      'Tel: 972 3 967 3390<br>' +
      'Attn: Nitsan Levi<br>' +
      '<p><a class="map-link" href="mailto:nitsan@almog.co.il?subject=Inquiry from Applied Biophysics Website"><i class="fas fa-envelope"></i> Email</a></p>' +
      '<p class="mt-0"><a class="map-link" href="http://www.almog.co.il" target="_blank"><i class="fab fa-chrome"></i> Visit Website</a></p>' +
      '</div>'
    ],

    //Italy
    [
      '<div class="map-text">' +
      '<span>ORIGLIA Srl</span><br>' +
      '<hr>' +
      'Tel: +39 02 93503262<br>' +
      'Attn: Riccardo Sacco<br>' +
      '<p><a class="map-link" href="mailto:info@origliaservice.it?subject=Inquiry from Applied Biophysics Website"><i class="fas fa-envelope"></i> Email</a></p>' +
      '<p class="mt-0"><a class="map-link" href="http://www.origliaservice.it" target="_blank"><i class="fab fa-chrome"></i> Visit Website</a></p>' +
      '</div>'
    ],

    //Japan
    [
      '<div class="map-text">' +
      '<span>Nepa Gene Company, Ltd.</span><br>' +
      '<hr>' +
      'Tel: 81 47 306 7222<br>' +
      'Attn: Suzuki<br>' +
      '<p class="mt-0"><a class="map-link" href="http://www.nepagene.jp" target="_blank"><i class="fab fa-chrome"></i> Visit Website</a></p>' +
      '</div>'
    ],

    //Korea
    [
      '<div class="map-text">' +
      '<span>LeeBaeg Science Co., Ltd.</span><br>' +
      '<hr>' +
      '<p><a class="map-link" href="mailto:info@lbscience.com?subject=Inquiry from Applied Biophysics Website"><i class="fas fa-envelope"></i> Email</a></p>' +
      '<p class="mt-0"><a class="map-link" href="http://www.lbscience.com" target="_blank"><i class="fab fa-chrome"></i> Visit Website</a></p>' +
      '</div>'
    ],

    //Malaysia
    [
      '<div class="map-text">' +
      '<span>Precision Technologies</span><br>' +
      '<hr>' +
      'Tel: (65) 6273-4573<br>' +
      'Attn: Lim Kian Heng<br>' +
      '<p class="mt-0"><a class="map-link" href="http://www.pretech.com.sg" target="_blank"><i class="fab fa-chrome"></i> Visit Website</a></p>' +
      '</div>'
    ],

    //Puerto Rico
    [
      '<div class="map-text">' +
      '<span>Audio & Video Pro Caribe</span><br>' +
      '<hr>' +
      'Tel: 787-892-0047<br>' +
      'Attn: Julio C. Gonzalez<br>' +
      '<p><a class="map-link" href="mailto:jcgonzalez@avpcaribe.com?subject=Inquiry from Applied Biophysics Website"><i class="fas fa-envelope"></i> Email</a></p>' +
      '<p class="mt-0"><a class="map-link" href="http://www.avpcaribe.com" target="_blank"><i class="fab fa-chrome"></i> Visit Website</a></p>' +
      '</div>'
    ],

    //Singapore
    [
      '<div class="map-text">' +
      '<span>Precision Technologies</span><br>' +
      '<hr>' +
      'Tel: (65) 6273-4573<br>' +
      'Attn: Lim Kian Heng<br>' +
      '<p class="mt-0"><a class="map-link" href="http://www.pretech.com.sg" target="_blank"><i class="fab fa-chrome"></i> Visit Website</a></p>' +
      '</div>'
    ],

    // Slovakia
    [
      '<div class="map-text">' +
      '<span>I.T.A-Intertact s.r.o</span><br>' +
      '<hr>' +
      'Tel: +420 234 760 838<br>' +
      'Attn: Helena Janatkova<br>' +
      '<p class="mt-0"><a class="map-link" href="http://www.ita-intertact.com" target="_blank"><i class="fab fa-chrome"></i> Visit Website</a></p>' +
      '</div>'
    ],

    //Taiwan
    [
      '<div class="map-text">' +
      '<span>Sunpoint Scientific Instrument Co., Ltd.</span><br>' +
      '<hr>' +
      'Tel: 886 3 3273889<br>' +
      'Attn: Sunny Tsai<br>' +
      '<p><a class="map-link" href="mailto:sunny@sunpointworld.com?subject=Inquiry from Applied Biophysics Website"><i class="fas fa-envelope"></i> Email</a></p>' +
      '<p class="mt-0"><a class="map-link" href="http://www.sunpointworld.com" target="_blank"><i class="fab fa-chrome"></i> Visit Website</a></p>' +
      '</div>'
    ],

    //Turkey
    [
      '<div class="map-text">' +
      '<span>aka Biyoteknoloji</span><br>' +
      '<hr>' +
      'Tel: +90(0)212 346 2019<br>' +
      'Attn: Alp Kibaroglu<br>' +
      '<p><a class="map-link" href="mailto:alpkibaroglu@akabiotech.com?subject=Inquiry from Applied Biophysics Website"><i class="fas fa-envelope"></i> Email</a></p>' +
      '<p class="mt-0"><a class="map-link" href="http://www.akabiotech.com" target="_blank"><i class="fab fa-chrome"></i> Visit Website</a></p>' +
      '</div>'
    ],

    //United Kingdom
    [
      '<div class="map-text">' +
      '<span>ibidi GmbH</span><br>' +
      '<hr>' +
      'Tel: +49 89 520 46 17 391<br>' +
      'Attn: Dr. Christiane Thanisch<br>' +
      '<p><a class="map-link" href="mailto:cthansich@ibidi.de?subject=Inquiry from Applied Biophysics Website"><i class="fas fa-envelope"></i> Email</a></p>' +
      '<p class="mt-0"><a class="map-link" href="http://www.ibidi.de" target="_blank"><i class="fab fa-chrome"></i> Visit Website</a></p>' +
      '</div>'
    ]

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
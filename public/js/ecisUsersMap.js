// Initialize and add the map
function initMap() {

  // Get Locations
  var centerMap = { lat: 31.979513, lng: 9.831410 };
  var austrailia = { lat: -21.517270, lng: 133.668094 };
  var austria = { lat: 47.550256, lng: 14.678088 };
  var belgium = { lat: 50.808781, lng: 4.423986 };
  var brazil = { lat: -9.931470, lng: -50.785254 };
  var canada = { lat: 47.904670, lng: -80.524843 };
  var china = { lat: 35.682732, lng: 103.662959 };
  var denmark = { lat: 55.730528, lng: 10.082161 };
  var estonia = { lat: 58.807149, lng: 25.779775 };
  var finland = { lat: 60.623067, lng: 22.798652 };
  var france = { lat: 47.069497, lng: 2.387719 };
  var germany = { lat: 51.475423, lng: 10.377814 };
  var hungary = { lat: 47.237869, lng: 19.543223 };
  var india = { lat: 23.647772, lng: 79.508199 };
  var ireland = { lat: 53.547060, lng: -8.262205 };
  var israel = { lat: 31.261726, lng: 34.953094 };
  var italy = { lat: 43.560405, lng: 12.229838 };
  var japan = { lat: 36.987055, lng: 138.438764 };
  var korea = { lat: 36.858338, lng: 127.988415 };
  var malawi = { lat: -13.293379, lng: 34.240962 };
  var malaysia = { lat: 4.187779, lng: 102.043109 };
  var netherlands = { lat: 52.136104, lng: 5.697061 };
  var norway = { lat: 59.287412, lng: 6.258275 };
  var qatar = { lat: 25.397151, lng: 51.181651 };
  var russia = { lat: 54.967726, lng: 90.817416 };
  var spain = { lat: 39.985576, lng: -3.340800 };
  var sweden = { lat: 56.400385, lng: 14.074239 };
  var switzerland = { lat: 46.896614, lng: 7.924122 };
  var taiwan = { lat: 23.818453, lng: 121.142053 };
  var unitedKingdom = { lat: 53.791790, lng: -2.178177 };
  var unitedStates = { lat: 40.616486, lng: -101.610774 };

  // Center Map
  var map = new google.maps.Map(document.getElementById('ecisUsersMap'), { zoom: 3, center: centerMap, scrollwheel: false });

  // Add Markers
  var austrailiaMarker = new google.maps.Marker({ position: austrailia, map: map, title: "Austrailia" });
  var austriaMarker = new google.maps.Marker({ position: austria, map: map, title: "Austria" });
  var belgiumMarker = new google.maps.Marker({ position: belgium, map: map, title: "Belgium" });
  var brazilMarker = new google.maps.Marker({ position: brazil, map: map, title: "Brazil" });
  var canadaMarker = new google.maps.Marker({ position: canada, map: map, title: "Canada" });
  var chinaMarker = new google.maps.Marker({ position: china, map: map, title: "China" });
  var denmarkMarker = new google.maps.Marker({ position: denmark, map: map, title: "Denmark" });
  var estoniaMarker = new google.maps.Marker({ position: estonia, map: map, title: "Estonia" });
  var finlandMarker = new google.maps.Marker({ position: finland, map: map, title: "Finland" });
  var franceMarker = new google.maps.Marker({ position: france, map: map, title: "France" });
  var germanyMarker = new google.maps.Marker({ position: germany, map: map, title: "Germany" });
  var hungaryMarker = new google.maps.Marker({ position: hungary, map: map, title: "Hungary" });
  var indiaMarker = new google.maps.Marker({ position: india, map: map, title: "India" });
  var irelandMarker = new google.maps.Marker({ position: ireland, map: map, title: "Ireland" });
  var israelMarker = new google.maps.Marker({ position: israel, map: map, title: "Israel" });
  var italyMarker = new google.maps.Marker({ position: italy, map: map, title: "Italy" });
  var japanMarker = new google.maps.Marker({ position: japan, map: map, title: "Japan" });
  var koreaMarker = new google.maps.Marker({ position: korea, map: map, title: "Korea" });
  var malawiMarker = new google.maps.Marker({ position: malawi, map: map, title: "Malawi" });
  var malaysiaMarker = new google.maps.Marker({ position: malaysia, map: map, title: "Malaysia" });
  var netherlandsMarker = new google.maps.Marker({ position: netherlands, map: map, title: "Netherlands" });
  var norwayMarker = new google.maps.Marker({ position: norway, map: map, title: "Norway" });
  var qatarMarker = new google.maps.Marker({ position: qatar, map: map, title: "Qatar" });
  var russiaMarker = new google.maps.Marker({ position: russia, map: map, title: "Russia" });
  var spainMarker = new google.maps.Marker({ position: spain, map: map, title: "Spain" });
  var swedenMarker = new google.maps.Marker({ position: sweden, map: map, title: "Sweden" });
  var switzerlandMarker = new google.maps.Marker({ position: switzerland, map: map, title: "Switzerland" });
  var taiwanMarker = new google.maps.Marker({ position: taiwan, map: map, title: "Taiwan" });
  var unitedKingdomMarker = new google.maps.Marker({ position: unitedKingdom, map: map, title: "United Kingdom" });
  var unitedStatesMarker = new google.maps.Marker({ position: unitedStates, map: map, title: "United States" });

  var navigationFn = {
    goToSection: function (id) {
      $('html, body').animate({
        scrollTop: $(id).offset().top
      }, 500);
    }
  }

  // Scroll to Markers
  austrailiaMarker.addListener('click', function () {
    navigationFn.goToSection('#austrailia');
  });

  austriaMarker.addListener('click', function () {
    navigationFn.goToSection('#austria');
  });

  belgiumMarker.addListener('click', function () {
    navigationFn.goToSection('#belgium');
  });

  brazilMarker.addListener('click', function () {
    navigationFn.goToSection('#brazil');
  });

  canadaMarker.addListener('click', function () {
    navigationFn.goToSection('#canada');
  });

  chinaMarker.addListener('click', function () {
    navigationFn.goToSection('#china');
  });

  denmarkMarker.addListener('click', function () {
    navigationFn.goToSection('#denmark');
  });

  estoniaMarker.addListener('click', function () {
    navigationFn.goToSection('#estonia');
  });

  finlandMarker.addListener('click', function () {
    navigationFn.goToSection('#finland');
  });

  franceMarker.addListener('click', function () {
    navigationFn.goToSection('#france');
  });

  germanyMarker.addListener('click', function () {
    navigationFn.goToSection('#germany');
  });

  hungaryMarker.addListener('click', function () {
    navigationFn.goToSection('#hungary');
  });

  indiaMarker.addListener('click', function () {
    navigationFn.goToSection('#india');
  });

  irelandMarker.addListener('click', function () {
    navigationFn.goToSection('#ireland');
  });

  israelMarker.addListener('click', function () {
    navigationFn.goToSection('#israel');
  });

  italyMarker.addListener('click', function () {
    navigationFn.goToSection('#italy');
  });

  japanMarker.addListener('click', function () {
    navigationFn.goToSection('#japan');
  });

  koreaMarker.addListener('click', function () {
    navigationFn.goToSection('#korea');
  });

  malawiMarker.addListener('click', function () {
    navigationFn.goToSection('#malawi');
  });

  malaysiaMarker.addListener('click', function () {
    navigationFn.goToSection('#malaysia');
  });

  netherlandsMarker.addListener('click', function () {
    navigationFn.goToSection('#netherlands');
  });

  norwayMarker.addListener('click', function () {
    navigationFn.goToSection('#norway');
  });

  qatarMarker.addListener('click', function () {
    navigationFn.goToSection('#qatar');
  });

  russiaMarker.addListener('click', function () {
    navigationFn.goToSection('#russia');
  });

  spainMarker.addListener('click', function () {
    navigationFn.goToSection('#spain');
  });

  swedenMarker.addListener('click', function () {
    navigationFn.goToSection('#spain');
  });

  switzerlandMarker.addListener('click', function () {
    navigationFn.goToSection('#switzerland');
  });

  taiwanMarker.addListener('click', function () {
    navigationFn.goToSection('#taiwan');
  });

  unitedKingdomMarker.addListener('click', function () {
    navigationFn.goToSection('#unitedKingdom');
  });

  unitedStatesMarker.addListener('click', function () {
    navigationFn.goToSection('#unitedStates');
  });
}
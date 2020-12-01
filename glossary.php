<?php
  $title = "Glossary - Applied BioPhysics";
  $metaDesc = "Array Holder, Barrier Function, Capacitance, Confluence, ECIS, ECIS Cultureware, Electrode Array,
  Electrolyte, Electroporation, Impedance, Micromotion, etc.";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?php echo $metaDesc; ?>">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,600,700,900" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="public/css/bootstrap.css" type="text/css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="public/css/style.css">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="public/img/favicon.ico">
  <title><?php echo $title; ?></title>
</head>

<body class="d-flex flex-column">

  <?php include_once "includes/navbar.php";?>
  <?php include_once "includes/logo-sm.php";?>

  <section id="technologyHeading" class="text-center text-md-left">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="mb-0">Glossary</h1>
          <hr class="mt-0">
        </div>
      </div>
    </div>
  </section><!-- /technologyHeading -->

  <section id="technologyContent" class="py-4 mb-5 text-center text-md-left">
    <div class="container">

      <div class="row">
        <div class="col">

          <div class="item">
            <h4>Array Holder</h4>
            <p class="pl-0 pl-md-3">
              Base & two clamps that house two arrays. When the clamps are gently screwed down, and make contact with
              the gold pads of the array, an AC current is able to be carried through the leads to the array, and back
              to the ECIS instrument.
            </p>
          </div>

          <div class="item">
            <h4>Barrier Function</h4>
            <p class="pl-0 pl-md-3">
              The spacing between the ventral side of the cell and the substratum, and the cell membrane capacitance.
            </p>
          </div>

          <div class="item">
            <h4>Capacitance</h4>
            <p class="pl-0 pl-md-3">
              Combining the voltage and phase of the current allows ECIS to break impedance into two parts; resistance
              and reactance. The reactive part (Xc) in this case is associated with the metal surfaces in the tissue
              culture medium (the electrolyte). The capacitive reactance is measured in ohms depends upon the AC
              frequency.
            </p>
          </div>

          <div class="item">
            <h4>Confluence</h4>
            <p class="pl-0 pl-md-3">
              When cultured cells have created a monolayer covering the entire electrode and bottom of the well.
            </p>
          </div>

          <div class="item">
            <h4>ECIS</h4>
            <p class="pl-0 pl-md-3">
              Electric Cell-substrate Impedance Sensing: an automated instrument that uses AC current to monitor the
              behavior of cells in tissue culture, quantitatively and in real time.
            </p>
          </div>

          <div class="item">
            <h4>ECIS Cultureware</h4>
            <p class="pl-0 pl-md-3">
              Disposable electrode arrays consisting of gold film electrodes delineated with an insulating film and
              mounted on a 20-mil optically clear Lexan polycarbonate substrate, all measurable with ECIS.
            </p>
          </div>

          <div class="item">
            <h4>Electrode Array</h4>
            <p class="pl-0 pl-md-3">
              A slide patterned with gold, and insulating film with an upper chamber assembly containing 8 wells. At the
              base of each well there can be any combination of electrodes. The standard electrode is 250 micrometers in
              diameter.
            </p>
          </div>

          <div class="item">
            <h4>Electrolyte</h4>
            <p class="pl-0 pl-md-3">
              Metal surfaces in the tissue culture medium.
            </p>
          </div>

          <div class="item">
            <h4>Electroporation</h4>
            <p class="pl-0 pl-md-3">
              A milliampere of current resulting in voltages across the cell membranes creating pores from which the
              cells can recover.
            </p>
          </div>

          <div class="item">
            <h4>Impedance</h4>
            <p class="pl-0 pl-md-3">
              A unit of measurement by applying the AC current (I) to the electrode system and measure the resulting
              voltage (V) across the electrodes, the impedance (Z) is simply given by the AC equivalent of Ohm's law:
              Z=V/I
            </p>
          </div>

          <div class="item">
            <h4>Micromotion</h4>
            <p class="pl-0 pl-md-3">
              The intricate, unique ruffling of each cell.
            </p>
          </div>

          <div class="item">
            <h4>Time Course Measurement</h4>
            <p class="pl-0 pl-md-3">
              The total acquisition time is user controlled. Impedance can be sampled as often as several times per
              second to as slowly as desired. Each impedance reading is plotted as a point, in Ohms or nanofarads (C),
              verses time.
            </p>
          </div>

          <div class="item">
            <h4>Resistance</h4>
            <p class="pl-0 pl-md-3">
              Combining the voltage and phase of the current allows ECIS to break impedance into two parts. Pure
              resistance is one part, how much of the electrode is covered. Represented in this way: R=V(in phase) / I
            </p>
          </div>

          <div class="item">
            <h4>Well</h4>
            <p class="pl-0 pl-md-3">
              A 0.9 cm<sup>2</sup> chamber that houses both an electrode and counter electrode where cells can be
              cultured and observed. Each well holds 500 microliters of medium.
            </p>
          </div>

          <div class="item">
            <h4>Wounding</h4>
            <p class="pl-0 pl-md-3">
              When the highest current is applied for several seconds, cell death ensues due to severe electroporation
              and possible local heating effects.
            </p>
          </div>

        </div>
      </div>

    </div>
  </section><!-- /technologyContent -->

  <?php include_once "includes/footer.php";?>

  <!-- Scroll to top -->
  <button class="btn btn-outline-dark" id="scrollBtn"><i class="fas fa-angle-up fa-2x"></i></button>

  <script src="public/js/jquery.min.js"></script>
  <script src="public/js/bootstrap.bundle.min.js"></script>
  <script src="public/js/util.js"></script>
  <script src="public/js/smooth-scroll.min.js"></script>
  <script src="public/js/scripts.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108411540-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-108411540-1');
  </script>

  <!-- Engagebay -->
  <script type="text/javascript">
  var EhAPI = EhAPI || {};
  EhAPI.after_load = function() {
    EhAPI.set_account('lj2ng4pb8ricu2piqdirfbrv61', 'biophysics');
    EhAPI.execute('rules');
  };
  (function(d, s, f) {
    var sc = document.createElement(s);
    sc.type = 'text/javascript';
    sc.async = true;
    sc.src = f;
    var m = document.getElementsByTagName(s)[0];
    m.parentNode.insertBefore(sc, m);
  })(document, 'script', '//d2p078bqz5urf7.cloudfront.net/jsapi/ehform.js');
  </script>

</body>

</html>
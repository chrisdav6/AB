<?php
  $title = "What is ECIS? - Applied BioPhysics";
  $metaDesc = "The ECIS Method was developed by Applied BioPhysics and uses real-time, label-free, impedance-based
  methods to detect the morphological behaviors of cells grown in tissue culture.";
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

  <?php include_once "includes/navbar.php"; ?>
  <?php include_once "includes/logo-sm.php"; ?>

  <section id="technologyHeading" class="text-center text-md-left">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="mb-0">The ECIS Method</h1>
          <hr class="mt-0">
        </div>
      </div>
    </div>
  </section><!-- /technologyHeading -->

  <section id="technologyContent" class="py-4 mb-5 text-center text-md-left">
    <div class="container">

      <div class="row">
        <div class="col">
          <p class="mb-0">
            ECIS<sup>&reg;</sup> (Electric Cell-substrate Impedance Sensing) is a real-time, label-free, impedance-based method to study cell behaviors in tissue culture. These include monolayer barrier function, cell growth rates and viability, wound-healing migration and other behaviors directed by the cell’s cytoskeleton. The ECIS<sup>&reg;</sup> approach has been applied to numerous investigations including measurements of endothelial monolayer permeability, in vitro toxicity testing as an alternative to animal testing, the invasive nature of cancer cells, and signal transduction involving GPCR’s for modern drug discovery.
          </p>
          <img class="img-fluid py-5 d-block mx-auto" src="public/img/Z-theta-with-Current-path.png" alt="Z-theta with Current path">
        </div>
      </div>

      <div class="row pt-0 pt-md-5">
        <div class="col">
          <h2 class="mt-5 mt-md-0">How to Quantify Cell Behavior</h2>
          <p>
            ECIS<sup>&reg;</sup> uses a small non-invasive alternating current (I) that is applied across the electrode pattern at the bottom of the ECIS arrays (direct current cannot be used). This results in a potential (V) across the electrodes which is measured by the ECIS instrument. The impedance (Z) is determined by Ohm’s law Z = V/I.
          </p>
          <p>
            When cells are added to the ECIS Arrays and attach to the electrodes, they act as insulators increasing the impedance. As cells grow and cover the electrodes, the current is impeded in a manner related to the number of cells covering the electrode, the morphology of the cells and the nature of the cell attachment. When cells are stimulated to change their function, the accompanying changes in cell morphology alter the impedance. The data generated is impedance versus time.
          </p>
          <img class="img-fluid py-5 d-block mx-auto" src="public/img/Graph-Toon-ImpedanceCtl-vs-treatment.png" alt="Impedance -Ctl-vs-treatment">
        </div>
      </div>

      <div class="row pt-0 pt-md-5">
        <div class="col">
          <h2 class="mt-5 mt-md-0">How Frequencies Reveal Cell Behavior</h2>
          <p>
            Why are multiple AC frequencies important? To understand why AC frequency is important in ECIS<sup>&reg;</sup> we have to consider how frequency affects the current paths with cell-covered electrodes. The measured impedance is made up of two components: capacitance and resistance. At relatively high AC frequencies (&#62; 32,000 Hz) more current capacitively couples directly through the insulating cell membranes. At relatively low frequencies (&#8804; 4,000 Hz) most of the current flows in the solution channels under and between adjacent cells. The high frequency impedance is more affected by cell-coverage making it useful for measuring cell growth rates and cytotoxicity, whereas the low frequency responds more strongly to changes in the spaces either under or between the cells allowing for barrier function and attachment quantification. </p>

          <div class="row pt-5 text-center">
            <div class="col-md-6">
              <h2>CELL-SUBSTRATE COVERAGE</h2>
              <h3>High AC Frequency (&#62; 32,000 Hz)</h3>
              <img class="img-fluid py-5 d-block mx-auto" src="public/img/CGraph.png" alt="Capacitance Graph">
            </div>
            <div class="col-md-6">
              <h2 class="mt-5 mt-md-0">CELL-CELL CONTACTS</h2>
              <h3>Low AC Frequency (&#8804; 4000 Hz)</h3>
              <img class="img-fluid py-5 d-block mx-auto" src="public/img/RGraph.png" alt="Resistance Graph">
            </div>
          </div>
        </div>
      </div>

    </div>
  </section><!-- /technologyContent -->

  <?php include_once "includes/footer.php"; ?>

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
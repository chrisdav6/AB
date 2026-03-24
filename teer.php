<?php
  $title = "TEER with ECIS - Applied BioPhysics";
  $metaDesc = "ECIS® instruments provide a novel way of measuring cell layer permeability using transepithelial/-endothelial electrical resistance (TEER) continuously in real-time while incubated.";
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

  <section id="applicationHeading" class="text-center text-md-left">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="mb-0">TEER - Filter Substrate</h1>
          <hr class="mt-0">
        </div>
      </div>
    </div>
  </section><!-- /applicationHeading -->

  <section id="applicationContent" class="py-4 text-center text-md-left">
    <div class="container">

      <h3 class="font-weight-bold mb-2">Monitoring Transepithelial Electrical Resistance<br class="d-none d-lg-block">(TEER) on Cell Culture Inserts using ECIS<sup>®</sup></h3>

      <div class="row align-items-center mb-4 mb-xl-0">
        <div class="col-md-6">
          <p>
            Measure TEER continuously—without pulling inserts out of the incubator. ECIS TEER products collect continuous, real-time TEER with fixed electrode positioning for consistent, repeatable measurements.
          </p>

          <ul class="list-inline">
            <li class="ml-3">• Continuous, real-time measurements</li>
            <li class="ml-3 mt-2">• Monitor cells while incubated</li>
            <li class="ml-3 mt-2">• Fixed electrodes</li>
          </ul>
        </div>
        <div class="col-md-6">
          <img class='img-fluid d-block mx-auto' src='public/img/teerGraph2.gif' alt='TEER Graph' />
        </div>
      </div>

      <a href="/requestDemo.php" class="btn blueBtn mr-2 mb-2" role="button">Request a Demo</a>
      <a href="public/pdf/RealtimeMonitoringofTransepithelialElectricalResistanceTEER.pdf" target="_blank" class="btn ecisDarkBtn mb-2" role="button">Download Application Note</a>

      <h3 class="font-weight-bold mt-5 mb-5">Why Researchers Move Beyond Traditional TEER</h3>

      <div class="row align-items-start">
        <!-- Left Column -->
        <div class="col-md-6 pr-md-5">
          <h5 class="font-weight-bold">Traditional TEER Methods</h5>
          <p>Common pain points with handheld or manual insert workflows:</p>
          <ul class='list-inline'>
            <li class="ml-3">• Single, non-continuous timepoint measurements</li>
            <li class="ml-3 mt-2">• Measurements taken outside of incubated conditions</li>
            <li class="ml-3 mt-2">• Moveable electrodes that can introduce inconsistency</li>
          </ul>
        </div>
        <!-- Right Column -->
        <div class="col-md-6 pl-md-5 position-relative">
          <div class="teer-divider d-none d-md-block"></div>
          <div class="teer-divider-mobile mx-auto w-75 d-md-none mt-3 mb-5"></div>

          <h5 class="font-weight-bold">ECIS TEER Methods</h5>
          <p>Designed for long-term, reproducible TEER data capture:</p>
          <ul class='list-inline'>
            <li class="ml-3">• Real-time TEER data collection</li>
            <li class="ml-3 mt-2">• Measurements taken inside of incubated conditions</li>
            <li class="ml-3 mt-2">• Fixed electrodes support consistent, reliable data collection</li>
          </ul>
        </div>
      </div>

      <h3 class="font-weight-bold mt-5 mb-4">Measure TEER Continuously</h3>

      <div class="row mb-4 mb-xl-0">
        <div class="col-md-7">
          <p>
            Continuous TEER monitoring with ECIS transforms TEER from a static measurement into a real-time assay of barrier biology-revealing kinetics, transient effects, and reproducibility that single timepoint measurements simply cannot capture.
          </p>

          <ul class="list-inline">
            <li class="ml-3">• Monitor complex barrier dynamics</li>
            <li class="ml-3 mt-2">• Captures fast-acting barrier disruptions</li>
            <li class="ml-3 mt-2">• Identify mature barrier formation</li>
          </ul>
        </div>
        <div class="col-md-5 mt-4 mt-md-0">
          <img class='img-fluid d-block mx-auto' src='public/img/TEERZScreenWithLaptop.png' alt='TEERZ Screen With Laptop' />
        </div>
      </div>

      <h3 class="font-weight-bold mt-5 mb-4">Monitor Cells While Incubated</h3>

      <p>Continuous TEER measurement allows real-time tracking of barrier formation and disruption under incubated conditions, capturing transient or reversible changes that single timepoint measurements often miss. This approach reduces handling-induced variability and provides a more accurate, physiologically relevant view of barrier dynamics over time.
      </p>

      <div class="mt-5">
        <div class="row d-flex align-items-start">
          <div class="col-lg-4">
            <div class="p-3 border border-dark my-0 mx-0 rounded-xxl">
              <h5 class="font-weight-bold">Incubated conditions</h5>
              <p class="m-0">Monitor the formation, strengthening, and disruption of cell-cell junctions while cells remain under a more natural environment.
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-3 border border-dark my-0 mx-0 rounded-xxl mt-3 mt-lg-0">
              <h5 class="font-weight-bold">Cell barrier dynamics</h5>
              <p class="m-0">Monitor the variability of constantly changing cell barriers over time.
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-3 border border-dark my-0 mx-0 rounded-xxl mt-3 mt-lg-0">
              <h5 class="font-weight-bold">Fixed Electrodes</h5>
              <p class="m-0">Electrodes don’t move while measurements are being taken, allowing for accurate, steady data.
              </p>
            </div>
          </div>
        </div>
      </div>

      <h3 class="font-weight-bold mb-4 mt-5">Using Resistance for TEER Measurements</h3>

      <p>ECIS<sup>®</sup> impedance measurements normally report resistance and capacitance as a series circuit. When the TEER value is relatively low, this series resistance at low AC frequency can be used as an effective measure of the barrier. However, when TEER values become much higher, as for many epithelial cells, some current will “sneak” capacitively through the cells, resulting in an incorrect low TEER measurement.
      </p>

      <p>ECIS can take this into account and report the true TEER value. To do this, software converts the series RC circuit to a parallel one. This is not only a better representation of the cell (see diagram below), but also allows one to compensate for the sneak path and report the true barrier function.</p>

      <div class="row justify-content-center mt-5 mb-5 mb-md-0">
        <div class="col-12 col-md-6">
          <img class='img-fluid d-block mx-auto' src='public/img/cells-on-filter-with-circuit.png' alt='Cells On Filter with Circuit.png' />
        </div>
      </div>

      <a href="/whatIsECIS.php" class="btn ecisDarkBtn mb-5" role="button">What Is ECIS?</a>

      <h3 class="font-weight-bold mt-5 mt-lg-2 mb-4">Products Related to TEER</h3>

      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-md-6">
          <a class="text-dark link text-decoration-none" href="teerZ.php">
            <div class="card product-card mb-3 rounded-xxl border-dark">
              <div class="card-body text-center pb-1">
                <h4>ECIS<sup>®</sup> TEERZ</h4>
              </div>
              <img class="card-img-top img-fluid w-50 mx-auto d-block" src="public/img/TEERZunit-with-tray.png" alt="TEERZ Unit with Tray">
            </div>
          </a>
        </div>

        <div class="col-md-6">
          <a class="text-dark link text-decoration-none" href="8wTFA.php">
            <div class="card product-card mb-3 rounded-xxl border-dark">
              <div class="card-body text-center pb-1">
                <h4>ECIS<sup>®</sup> 8wTFA</h4>
              </div>
              <img class="card-img-top img-fluid w-50 mx-auto d-block" src="public/img/8wtfa-1.jpg" alt="8wTFA">
            </div>
          </a>
        </div>
      </div>

      <h3 class="font-weight-bold mt-5 mb-4">Other Related Topics</h3>

      <div class="mb-5">
        <a href="/cellProliferation.php" class="btn ecisDarkBtn mb-2 mr-1" role="button">Cell Proliferation</a>
        <a href="/teer.php" class="btn ecisDarkBtn mb-2 mr-1" role="button">TEER</a>
        <a href="/cytotoxicity.php" class="btn ecisDarkBtn mb-2 mr-1" role="button">Cytotoxicity</a>
        <a href="/cellMigration.php" class="btn ecisDarkBtn mb-2 mr-1" role="button">Cell Migration</a>
      </div>

    </div><!-- /container -->
  </section><!-- /applicationContent -->

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
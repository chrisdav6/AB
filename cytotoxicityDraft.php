<?php
  $title = "Cytotoxicity with ECIS - Applied BioPhysics";
  $metaDesc = "Cytotoxicity effects on cells have been notoriously difficult to measure simply because the methods have been qualitative in nature rather than quantitative. With ECIS® technology, cell toxicology and viability can be quantitatively measured in real-time, continuously and label free, all while under incubated conditions.";
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
          <h1 class="mb-0">Cytotoxicity</h1>
          <hr class="mt-0">
        </div>
      </div>
    </div>
  </section><!-- /applicationHeading -->

  <section id="applicationContent" class="py-4 text-center text-md-left">
    <div class="container">

      <h3 class="font-weight-bold mb-3">Quantitative Analysis of Cytotoxicity using ECIS<sup>®</sup></h3>

      <div class="row align-items-center mb-4 mb-xl-0">
        <div class="col-md-6">
          <p>
            Cytotoxicity and viability can be challenging to measure with traditional qualitative assays. ECIS<sup>®</sup> enables <strong>quantitative, real-time, continuous, label-free </strong>monitoring of cytotoxic responses, while cells remain under incubated conditions.
          </p>

          <ul class="list-inline">
            <li class="ml-3">• Continuous, real-time measurements</li>
            <li class="ml-3 mt-2">• Label-free and non-invasive</li>
            <li class="ml-3 mt-2">• Capacitance-based quantification of electrode coverage</li>
          </ul>
        </div>
        <div class="col-md-6">
          <img class='img-fluid d-block mx-auto' src='public/img/barrierFunctionGraph.gif' alt='Barrier Function Graph' />
        </div>
      </div>

      <a href="/requestDemo.php" class="btn blueBtn mr-2 mb-2" role="button">Request a Demo</a>
      <a href="public/pdf/ContinuousQuantificationofCellMonolayerBarrierFunctionwithECIS.pdf" target="_blank" class="btn ecisDarkBtn mb-2" role="button">Download Application Note</a>

    </div><!-- /container -->
  </section><!-- /applicationContent -->

  <section id="applicationReferences" class="py-4 text-center text-md-left mb-5">
    <div class="container">

      <div class="row">
        <div class="col mb-4">
          <h4 class="mt-4 mb-0">Key References</h4>
          <hr class="mt-0 mb-4">
          <p>
            <strong>An evaluation of the impact of clinical bacterial isolates on epithelial cell monolayer integrity by the electric Cell-Substrate Impedance Sensing (ECIS) method.</strong>, Nahid, Md A.,Campbell, Carmen E.,Fong, Keith S.K.,Barnhill, Jason C.,Washington, Michael A. (2020). Journal of Microbiological Methods 169 105833 doi:10.1016/j.mimet.2020.105833 [Abstract]
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <h4 class="mt-4 mb-0">Related Cytotoxicity ECIS Publications</h4>

          <hr class="mt-0 mb-4">

          <p>To view publications in cytotoxicity please visit our <a class="link text-dark" href="publications.php">publications page</a></p>
        </div>
      </div>

    </div>
  </section><!-- /applicationReferences -->

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
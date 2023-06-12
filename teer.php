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
          <h1 class="mb-0">TEER</h1>
          <hr class="mt-0">
        </div>
      </div>
    </div>
  </section><!-- /applicationHeading -->

  <section id="applicationContent" class="py-4 text-center text-md-left">
    <div class="container">

      <p>
        Trans-epithelial/endothelial electrical resistance (TEER) is an extremely useful method for studying in vitro barrier integrity. Applied BioPhysics offers TEER technology to be used with ECIS<sup>®</sup> instrumentation to provide continuous barrier resistance measurements in real-time while under incubated conditions, all the while being completely non-invasive to the cell layer.
      </p>

      <div class="row">
        <div class="col">
          <h4 class="mt-4 mb-3 secondary-title">Overview</h4>

          <div class="row">
            <div class="col-lg-7 col-md-6">
              <p>
                When epithelial and endothelial cells grow into monolayers, barriers are formed by various junctional proteins to regulate the passage of certain molecules. When these barriers are compromised, diseases and inflammation can arise. Many in vitro methods used to study molecular transport across these barrier layers remain very subjective in nature. TEER is a unique way to non-invasively quantify barrier function of cell monolayers, and when coupled with ECIS<sup>®</sup> instrumentation, the measurements can be carried out continuously in real-time under incubated conditions.
              </p>
            </div>
            <div class="col-lg-5 col-md-6">
              <img class="img-fluid my-3 my-md-0" src="public/img/teer24Application.jpg" alt="TEER">
            </div>
          </div>

          <h4 class="mt-4 mb-3 secondary-title">ECIS<sup>®</sup> TEER Measurements</h4>
          <p>
            TEER measurements are conducted by sending weak AC signals from the base of a special ECIS well, through a cell monolayer on a transwell filters insert, to a dipping electrode above the filter to complete the circuit. From this, the electrical resistance of the barriers is measured and, when multiplied by the filter area, gives the intrinsic TEER value of the monolayer in ohm-cm<sup>2</sup>.
          </p>
          <p>
            TEER filter measurements are especially relevant due to the in vivo-like nature that is produced by culturing cells on porous supports. This allows the cells to be fed by culture medium from both the apical and basal side often resulting in polarized cell layer. Since the AC signal that is used to detect the barrier resistance of the cell monolayers is very weak, the cells experience no invasive effects from the electrical current.
          </p>

          <h4 class="mt-4 mb-3 secondary-title">TEER on Filter Membranes</h4>

          <div class="row">
            <div class="col-lg-8 col-md-7 pr-5">
              <p>Monitoring cell barriers upon membrane filter inserts with ECIS<sup>®</sup> Electrode arrays</p>
              <ul class="application-list list-unstyled mt-5">
                <li>- Available with ECIS<sup>®</sup> TEER24 systems</li>
                <li>- Cells are cultured on standard transwell filter inserts that fit 24-well ECIS<sup>®</sup> arrays</li>
                <li>- Measurements are continuous, in real-time, under incubated conditions</li>
                <li>- Easy to use software presents TEER values (ohm-cm<sup>2</sup>) in graphical format</li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-5">
              <img class="img-fluid w-100 my-3 my-md-0" src="public/img/Cell-Dish-Small.jpg" alt="Cell Dish">
            </div>
          </div>

          <h4 class="mt-5 mb-3 secondary-title">ECIS<sup>®</sup> TEER24</h4>
          <h5 class="third-title mt-3"><a href="/teer24.php#dataSheets" class="text-dark link">ECIS TEER24
              Literature</a></h5>
          <hr>
          <p>
            We now offer a single purpose instrument designed to only work with membrane filter inserts. The ECIS TEER24 uses a 75 Hz AC frequency to determine TEER value. The measurement consists of three steps; a zero-set phase to flat-field the microplate array, setting a reference well to monitor any incubator changes which may occur during the measurement, and the data collection phase. The flat-fielding takes into account the resistance of the electrodes in the microplate, solution and filter. During data collection the resistance is measured, and the TEER is calculated by subtracting the flat field zero values and reference well changes and scaling for the surface area of the filter.
          </p>
          <img class="img-fluid py-5 d-block mx-auto" src="public/img/teer24ApplicationData.jpg" alt="TEER Data">


          <!-- <div class="row mt-5">

            <div class="col-md-4 mx-auto">
              <a class="text-dark link" href="teer24.php">
                <div class="card mb-3">
                  <img class="card-img-top px-3 pt-3" src="public/img/teer24Station.jpg" alt="ECIS TEER24">
                  <div class="card-body text-center">
                    <h3>ECIS TEER24</h3>
                    <p class="card-text">Barrier Function Monitor</p>
                  </div>
                </div>
              </a>
            </div>

          </div> -->

        </div><!-- /col -->
      </div><!-- /row -->

    </div><!-- /container -->
  </section><!-- /applicationContent -->

  <section id="applicationReferences" class="py-4 text-center text-md-left mb-5">
    <div class="container">

      <div class="row">
        <div class="col">
          <h4 class="mt-4 mb-0">Related TEER of Cell Layers ECIS Publications</h4>

          <hr class="mt-0 mb-4">

          <p>To view publications in TEER please visit our <a class="link text-dark" href="publications.php">publications page</a></p>

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
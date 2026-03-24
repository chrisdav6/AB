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
          <h1 class="mb-0">What Is ECIS?</h1>
          <hr class="mt-0">
        </div>
      </div>
    </div>
  </section><!-- /technologyHeading -->

  <section id="technologyContent" class="py-4 text-center text-md-left">
    <div class="container">

      <h3 class="font-weight-bold mb-4">The ECIS<sup>®</sup> Method: Label-free, Real-time Cell Behavior In Tissue Culture</h3>

      <div class="row align-items-start mb-4 mb-xl-0">
        <div class="col-md-6">
          <p>
            ECIS<sup>®</sup> (Electric Cell-substrate Impedance Sensing) is a real-time, label-free, impedance-based method to study cell behaviors in tissue culture including <strong>barrier function/TEER, growth/viability, migration, and more</strong> - behaviors driven by the cytoskeleton.
          </p>

          <div class="d-flex flex-wrap justify-content-between my-4">

            <div class="feature-box d-flex align-items-center justify-content-center text-center">
              Complex<br>Impedance
            </div>

            <div class="feature-box d-flex align-items-center justify-content-center text-center">
              Label-free
            </div>

            <div class="feature-box d-flex align-items-center justify-content-center text-center">
              Real-time
            </div>

            <div class="feature-box d-flex align-items-center justify-content-center text-center">
              Incubated
            </div>

            <div class="feature-box d-flex align-items-center justify-content-center text-center">
              Non-invasive<br>AC
            </div>

            <div class="feature-box d-flex align-items-center justify-content-center text-center">
              Impedance vs<br>Time
            </div>

          </div>
        </div>
        <div class="col-md-6">
          <iframe class="mt-2" width="100%" height="315" src="https://www.youtube.com/embed/dndCB8RvmlI?si=F67Irml8urfGB9mZ" title="What Is ECIS?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </div>

      <a href="/requestDemo.php" class="btn blueBtn mr-2 mb-2" role="button">Request a Demo</a>
      <a href="public/pdf/ElectricCellsubstrateImpedanceSensingALabelfreeMethodtoContinuouslyMonitorCellBehaviorsInVitro101723.pdf" target="_blank" class="btn ecisDarkBtn mb-2" role="button">Download Application Note</a>

      <h3 class="font-weight-bold mt-5 mb-4">How ECIS<sup>®</sup> Quantifies Cell Behavior</h3>

      <p>
        ECIS<sup>®</sup> uses a small non-invasive alternating current (I) that is applied across the gold-film electrode pattern at the bottom of ECIS arrays. This results in a potential (V) across the electrodes which is measured by the ECIS instrument. The cell membranes insulate the incoming current resulting in an increase in impedance. The impedance (Z) is determined by Ohm’s law Z = V/I.
      </p>

      <div class="row align-items-center mt-5 mb-4 mb-xl-0">
        <div class="col-lg-5">
          <div>
            <h5 class='font-weight-bold'>Cells behave like insulators</h5>
            <p>When cells attach and cover the electrode, they impede current flow and increase measured impedance.</p>
          </div>
          <div class='my-4'>
            <h5 class='font-weight-bold'>Morphology changes the signal</h5>
            <p>As cell morphology or junctional complexes change, the impedance of the current will also change</p>
          </div>
          <div>
            <h5 class='font-weight-bold'>Output: impedance vs time</h5>
            <p>Time-course data allows monitoring of the dynamics of the cell behaviors from attachment to confluence to barrier formation.</p>
          </div>
        </div>
        <div class="col-lg-7 mt-4 mt-md-0">
          <img class='img-fluid d-block mx-auto' src='public/img/impedanceGraphModel.png' alt='Impedance Graph Model' />
        </div>
      </div>

      <h3 class="font-weight-bold mt-5 mb-4">How Frequencies Reveal Different Behaviors</h3>

      <p>Frequency of the alternating current changes how current travels around or through cell layers on gold electrodes, so different frequencies emphasize different cell behaviors. Low AC frequency causes the majority of the current to travel the resistive pathway around the cells and through the cell-cell junctions, whereas high AC frequency causes the majority of the current to flow the capacitive pathway through the cell.
      </p>

      <div class="row justify-content-center mt-5 mb-5 mb-md-0">
        <div class="col-12 col-md-10">
          <img class='img-fluid d-block mx-auto' src='public/img/CellToonswithFrequencyPathways.png' alt='Cell Toons with Frequency Pathways' />
        </div>
      </div>

      <h3 class="font-weight-bold mt-5 mb-4">Complex Impedance Provides A Clearer Picture</h3>

      <p>Cellular impedance contains two components-resistance and capacitance which are largely dictated by AC frequency. ECIS<sup>®</sup> measures complex impedance which isolates these two pathways so they can be viewed separately without the interfering contribution of the other pathway.
      </p>

      <h4 class="font-weight-bold mt-5 mb-4">Low AC Frequency (&lt; 4,000 Hz): Cell Attachment & Barrier</h4>

      <p>At lower frequencies, most current flows under and between adjacent cells. This makes measurements highly sensitive to cell-cell junction dynamics and attachment-related changes.
      </p>

      <div class="row align-items-center mt-4 mb-4 mb-xl-0">
        <div class="col-lg-6">
          <div class="info-box">

            <div class="info-row d-flex">
              <div class="info-label font-weight-bold">
                Best for
              </div>
              <div class="info-value">
                Barrier function, attachment
              </div>
            </div>

            <div class="info-row d-flex">
              <div class="info-label font-weight-bold">
                Signal Emphasized
              </div>
              <div class="info-value">
                Resistance pathway
              </div>
            </div>

            <div class="info-row d-flex">
              <div class="info-label font-weight-bold">
                Output
              </div>
              <div class="info-value">
                Impedance/Resistance vs time
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-6 mt-5 mt-md-0">
          <img class='img-fluid d-block mx-auto' src='public/img/ResistanceWhatIsECIS3.png' alt='Resistance What Is ECIS' />
        </div>
      </div>

      <h4 class="font-weight-bold mt-5 mb-4">High AC Frequency (&gt; 32,000 Hz): Cell-Substrate Coverage</h4>

      <p>At higher frequencies, more current couples capacitively through cell membranes, making measurements more sensitive to how much the electrode is covered (useful for growth rate, viability, and migration).
      </p>

      <div class="row align-items-center mt-4 mb-4 mb-xl-0">
        <div class="col-lg-6">
          <div class="info-box">

            <div class="info-row d-flex">
              <div class="info-label font-weight-bold">
                Best for
              </div>
              <div class="info-value">
                Growth rate, viability, migration
              </div>
            </div>

            <div class="info-row d-flex">
              <div class="info-label font-weight-bold">
                Signal Emphasized
              </div>
              <div class="info-value">
                Capacitive pathway
              </div>
            </div>

            <div class="info-row d-flex">
              <div class="info-label font-weight-bold">
                Output
              </div>
              <div class="info-value">
                Impedance/Capacitance vs time
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-6 mt-5 mt-md-0">
          <img class='img-fluid d-block mx-auto' src='public/img/CapacitanceWhatIsECIS.png' alt='Capacitance What Is ECIS' />
        </div>
      </div>

      <a href="/contactABP.php" class="btn ecisDarkBtn mb-5" role="button">Talk to an Expert</a>

      <h3 class="font-weight-bold mt-3 mt-lg-2 mb-3">ECIS Instruments</h3>

      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-md-4">
          <a class="text-dark link text-decoration-none" href="ztheta.php">
            <div class="card product-card mb-3 rounded-xxl border-dark">
              <div class="card-body text-center pb-1">
                <h4>ECIS<sup>®</sup> Z-Theta w/16-well Array Station</h4>
              </div>
              <img class="card-img-top img-fluid w-50 mx-auto d-block" src="public/img/zTheta16.jpg" alt="ECIS zTheta">
            </div>
          </a>
        </div>

        <div class="col-md-4">
          <a class="text-dark link text-decoration-none" href="ztheta.php">
            <div class="card product-card mb-3 rounded-xxl border-dark">
              <div class="card-body text-center pb-1">
                <h4>ECIS<sup>®</sup> Z-Theta w/96-well Array Station</h4>
              </div>
              <img class="card-img-top img-fluid w-50 mx-auto d-block" src="public/img/zTheta96.jpg" alt="ECIS zTheta">
            </div>
          </a>
        </div>

        <div class="col-md-4">
          <a class="text-dark link text-decoration-none" href="ztheta.php">
            <div class="card product-card mb-3 rounded-xxl border-dark">
              <div class="card-body text-center pb-1">
                <h4>ECIS<sup>®</sup> Z-Theta w/TEERZ Array Station</h4>
              </div>
              <img class="card-img-top img-fluid w-50 mx-auto d-block" src="public/img/zThetaTEERZ.png" alt="ECIS zTheta TEERZ">
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
        <a href="/teerBarrierFunction.php" class="btn ecisDarkBtn mb-2 mr-1" role="button">Barrier Function</a>
      </div>

    </div><!-- /container -->
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
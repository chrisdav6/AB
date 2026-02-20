<?php
  $title = "Barrier Function with ECIS - Applied BioPhysics";
  $metaDesc = "ECIS® instruments provide real-time continuous barrier resistant measurements ideal for measuring permeability of epithelial and endothelial cell layers in real-time while incubated.";
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
          <h1 class="mb-0">Barrier Function</h1>
          <hr class="mt-0">
        </div>
      </div>
    </div>
  </section><!-- /applicationHeading -->

  <section id="applicationContent" class="py-4 text-center text-md-left">
    <div class="container">

      <h3 class="font-weight-bold mb-3">Monitoring the Barrier Function of Cell Monolayers using ECIS<sup>®</sup></h3>

      <div class="row align-items-center">
        <div class="col-md-6">
          <p>
            Epithelial and endothelial monolayers regulate molecular passage across tissues. ECIS<sup>®</sup> provides highly sensitive, real-time, continuous measurements of barrier resistance to support in vitro permeability and junction dynamics studies.
          </p>

          <ul class="list-inline">
            <li class="ml-3">• Continuous, real-time measurements</li>
            <li class="ml-3 mt-2">• Label-free and non-invasive</li>
            <li class="ml-3 mt-2">• Resistance-based quantification</li>
          </ul>
        </div>
        <div class="col-md-6">
          <img class='img-fluid d-block mx-auto' src='public/img/barrierFunctionGraph.gif' alt='Barrier Function Graph' />
        </div>
      </div>

      <a href="/requestDemo.php" class="btn blueBtn mr-2 mb-2" role="button">Request a Demo</a>
      <a href="public/pdf/ContinuousQuantificationofCellMonolayerBarrierFunctionwithECIS.pdf" target="_blank" class="btn ecisDarkBtn mb-2" role="button">Download Application Note</a>

      <h3 class="font-weight-bold mt-5 mb-3">Why Barrier Function Matters</h3>

      <p>
        In vivo, barriers are provided by monolayers of epithelial or endothelial cells. These cell layers play a key role regulating the free movement of molecules between different tissues and/or interstitial compartments. In many diseases, as well as in inflammation, these barriers become compromised, and hence, measuring their permeability is of considerable interest to cell biologists and the health community in general.
      </p>

      <div class="mt-5">
        <div class="row d-flex align-items-center">
          <div class="col-lg-4">
            <div class="p-3 border border-dark my-0 mx-0 rounded-lg">
              <h5 class="font-weight-bold">Junction dynamics over time</h5>
              <p class="m-0">Monitor the formation, strengthening, and disruption of cell-cell junctions continuously.
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-3 border border-dark my-0 mx-0 rounded-lg mt-3 mt-lg-0">
              <h5 class="font-weight-bold">Sensitive barrier resistance</h5>
              <p class="m-0">Use low-frequency resistance to track monolayer tightness as conditions change.
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-3 border border-dark my-0 mx-0 rounded-lg mt-3 mt-lg-0">
              <h5 class="font-weight-bold">Designed for in vitro permeability</h5>
              <p class="m-0">Quantify barrier behavior in epithelial and endothelial cultures without the need for labels.
              </p>
            </div>
          </div>
        </div>
      </div>

      <h3 class="font-weight-bold mb-4 mt-5">Using Resistance for Barrier Function Measurements</h3>

      <div class="d-flex align-items-start row">
        <div class="col-lg-8">
          <p>
            ECIS<sup>®</sup> Z-theta measures complex impedance across multiple AC frequencies and separates impedance into resistance (R) and capacitance (C). For barrier function studies, isolating low-frequency resistance provides a practical way to monitor cell-cell junctional barrier formation over time.
          </p>

          <h5 class="font-weight-bold">Key Idea</h5>

          <p>At lower frequencies, membrane impedance is high and current preferentially follows solution paths under cells and between cells—making resistance sensitive to junctional tightness.
          </p>

          <ul class="list-inline">
            <li class="ml-3">
              • <span class="font-weight-bold">High frequency: </span>Membrane reactance is low → current couples through cell membranes → useful for confluence/spreading.
            </li>
            <li class="ml-3 my-3">
              • <span class="font-weight-bold">Low frequency: </span>Membrane impedance is high → current flows around/under cells → sensitive to junctional barrier formation.
            </li>
            <li class="ml-3">
              • <span class="font-weight-bold">Same experiment: </span>Use multi-frequency measurements to interpret time of confluence, and barrier tightening together.
            </li>
          </ul>
        </div>
        <div class="col-lg-4 mt-4 mt-md-0">
          <img class='img-fluid d-block mx-auto' src='public/img/resistanceBarrierFunction.png' alt='Barrier Function Resistance' />
        </div>
      </div>

      <h3 class="font-weight-bold mb-4 mt-5">Giaever-Keese Modeling</h3>

      <p>
        In many epithelial layers, current resistance under cells is small relative to the paracellular path. For weaker barriers (e.g., some endothelial layers), under-cell resistance can complicate interpretation.
      </p>

      <p class="mb-0 mb-md-5">
        With the ECIS<sup>®</sup> Giaever-Keese mathematical modeling, time-course changes in barrier function resistance (Rb) and under-cell resistance (alpha) can be separated and presented independently.
      </p>

      <div class="d-flex justify-content-center row mt-4 md-mt-5">
        <div class="col-md-5 mt-5 mt-md-0">
          <img class='img-fluid d-block mx-auto' src='public/img/ECISTheoryModeling2.png' alt='ECIS Theory Modeling' />
        </div>
        <div class="col-md-5">
          <img class='img-fluid d-block mx-auto' src='public/img/ECISTheoryModeling1.png' alt='ECIS Theory Modeling' />
        </div>
      </div>

      <a href="public/pdf/UsingtheECISModeltoIsolateCellularBarrierFunction.pdf" target="_blank" class="btn ecisDarkBtn mt-5 mb-5" role="button">Learn About Modeling</a>


      <h3 class="font-weight-bold mt-5 mb-3">Recommended Arrays for Barrier Function Studies</h3>

      <div class="row">
        <div class="col-md-6">
          <p class="mb-4">
            Barrier function experiments often benefit from larger electrode sampling area, especially when inoculation density varies across a well.
          </p>

          <a href="https://applied-biophysics-inc.myshopify.com" target="_blank" class="btn blueBtn mr-2 mb-2" role="button">Order Arrays</a>
          <a href="public/pdf/ContinuousQuantificationofCellMonolayerBarrierFunctionwithECIS.pdf" target="_blank" class="btn ecisDarkBtn mb-2" role="button">Download Application Note</a>
        </div>
        <div class="col-md-6">
          <img class='img-fluid d-block mx-auto' src='public/img/arraysLoop.gif' alt='Barrier Function Arrays' />
        </div>
      </div>

      <h3 class="font-weight-bold mt-5 mb-3">Key Publications</h3>

      <div class="mb-5">
        <h6><span class="font-weight-bold">Glyceraldehyde-3-phosphate dehydrogenase/1,3-bisphosphoglycerate-NADH as key determinants in controlling human retinal endothelial cellular functions: Insights from glycolytic screening.,</span> Oska, Nicole,Awad, Ahmed M.,Eltanani, Shaimaa,Shawky, Mohamed,Naghdi, Armaan,Yumnamcha, Thangal,Singh, Lalit Pukhrambam,Ibrahim, Ahmed S. (2025). Journal of Biological Chemistry 301 (5) : 108472<a class="link" href="https://www.jbc.org/article/S0021-9258(25)00321-7/fulltext" target="_blank"> doi:10.1016/j.jbc.2025.108472</a>
        </h6>

        <h6><span class="font-weight-bold">Endothelial cell Nrf2 controls neuroinflammation following a systemic insult.,</span> Zou, Haoyu,Leah, Tom,Huang, Zhuochun,He, Xin,Mameli, Eleonora,Caporali, Andrea,Dando, Owen,Qiu, Jing (2025). iScience 28 (6) : 112630 <a class="link" href="https://www.cell.com/iscience/fulltext/S2589-0042(25)00891-0?_returnURL=https%3A%2F%2Flinkinghub.elsevier.com%2Fretrieve%2Fpii%2FS2589004225008910%3Fshowall%3Dtrue" target="_blank">doi:10.1016/j.isci.2025.112630</a>
        </h6>

        <h6><span class="font-weight-bold">TRPV2 channels facilitate pulmonary endothelial barrier recovery after ROS-induced permeability.,</span> Schaller, Lena,Kiefmann, Martina,Gudermann, Thomas,Dietrich, Alexander (2025). Redox Biology 85 (June) : 103720 <a class="link" href="https://doi.org/10.1016/j.redox.2025.103720" target="_blank">doi:10.1016/j.redox.2025.103720</a>
        </h6>

        <p class="font-weight-bold mt-4">*See our <a class="orangelink" href="/publications.php">publications</a> page to explore more publications with ECIS<sup>®</sup></p>
      </div>

      <h3 class="font-weight-bold mt-5 mb-3">Other Related Topics</h3>

      <div class="mb-5">
        <a href="/cellProliferation.php" class="btn ecisDarkBtn mb-2 mr-1" role="button">Proliferation</a>
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
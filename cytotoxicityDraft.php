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
          <img class='img-fluid d-block mx-auto' src='public/img/cytotoxicityGraph.gif' alt='Cytotoxicity Graph' />
        </div>
      </div>

      <a href="/requestDemo.php" class="btn blueBtn mr-2 mb-2" role="button">Request a Demo</a>
      <a href="public/pdf/ProliferationandCytotoxicityMonitoringwithECIS.pdf" target="_blank" class="btn ecisDarkBtn mb-2" role="button">Download Application Note</a>

      <h3 class="font-weight-bold mt-5 mb-3">Quantitative Cytotoxicity Analysis with ECIS<sup>®</sup></h3>

      <p>
        ECIS<sup>®</sup> technology measures electrical impedance changes as cells attach and spread over gold film electrodes. As cultures grow toward confluence, impedance typically rises (and capacitance falls) and plateaus. When a cytotoxic substance is introduced—such as a compound or pathogen—cells lose adhesion and detach, producing a measurable drop in impedance that tracks the cytotoxic response over time.
      </p>

      <div class="mt-5">
        <div class="row d-flex align-items-top">
          <div class="col-lg-4">
            <div class="p-3 border border-dark my-0 mx-0 rounded-xxl">
              <h5 class="font-weight-bold">See onset & kinetics</h5>
              <p class="m-0">Capture when toxicity begins and how rapidly the response progresses.
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-3 border border-dark my-0 mx-0 rounded-xxl mt-3 mt-lg-0">
              <h5 class="font-weight-bold">Compare Conditions</h5>
              <p class="m-0">Quantitatively compare dose, exposure time, and recovery across experimental groups.
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-3 border border-dark my-0 mx-0 rounded-xxl mt-3 mt-lg-0">
              <h5 class="font-weight-bold">No labels required</h5>
              <p class="m-0">Monitor continuously without fluorescent or colorimetric endpoints.
              </p>
            </div>
          </div>
        </div>
      </div>

      <h3 class="font-weight-bold mt-5 mb-3">Using Capacitance for Viability</h3>

      <div class="row align-items-center mb-4 mb-xl-0">
        <div class="col-md-6">
          <p>
            Standard impedance works well for many cytotoxicity assays, but the impedance subcomponent <strong>capacitance</strong> can be especially useful for measuring cell death.
          </p>

          <p>At higher AC frequencies (e.g., >32,000 Hz), most current capacitively couples through cell membranes rather than taking resistive pathways around cells. This makes high-frequency capacitance ideal for cell coverage and viability assays.</p>
        </div>
        <div class="col-md-6">
          <img class='img-fluid d-block mx-auto' src='public/img/cytotoxicityGraphWithDoseResponseModel.jpg' alt='Cytotoxicity Graph With Dose Response Model' />
        </div>
      </div>

      <p class="font-weight-bold mb-2">
        Practical interpretation:
      </p>

      <p>Capacitance decreases in an approximately linear manner with electrode coverage—0% coverage for cell-free electrodes, falling to a plateau at 100% coverage or confluence—then increasing again as cells detach during cytotoxicity.
      </p>

      <a href="/whatIsECIS.php" class="btn ecisDarkBtn mt-4 mb-5 mb-lg-0" role="button">What Is ECIS?</a>

      <h3 class="font-weight-bold mt-5 mb-3">ECIS<sup>®</sup> Cytotoxicity Arrays</h3>

      <div class="row">
        <div class="col-md-6">
          <p class="mb-4">
            Cytotoxicity measurements often benefit from increased sampling size to reduce variability, especially with uneven cell distribution across the well.
          </p>

          <a href="https://applied-biophysics-inc.myshopify.com" target="_blank" class="btn blueBtn mr-2 mb-2" role="button">Order Arrays</a>
          <a href="/contactABP.php" class="btn ecisDarkBtn mb-2" role="button">Talk to an Expert</a>
        </div>
        <div class="col-md-6">
          <img class='img-fluid d-block mx-auto' src='public/img/arraysLoop.gif' alt='Barrier Function Arrays' />
        </div>
      </div>

      <h3 class="font-weight-bold mt-5 mt-lg-2 mb-3">Products Related to Cytotoxicity</h3>

      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-md-6">
          <a class="text-dark link text-decoration-none" href="ztheta.php">
            <div class="card product-card mb-3 rounded-xxl border-dark">
              <div class="card-body text-center pb-1">
                <h4>ECIS<sup>®</sup> Z-Theta w/16-well Array Station</h4>
              </div>
              <img class="card-img-top img-fluid w-50 mx-auto d-block" src="public/img/zTheta16.jpg" alt="ECIS zTheta">
            </div>
          </a>
        </div>

        <div class="col-md-6">
          <a class="text-dark link text-decoration-none" href="ztheta.php">
            <div class="card product-card mb-3 rounded-xxl border-dark">
              <div class="card-body text-center pb-1">
                <h4>ECIS<sup>®</sup> Z-Theta w/96-well Array Station</h4>
              </div>
              <img class="card-img-top img-fluid w-50 mx-auto d-block" src="public/img/zTheta96.jpg" alt="ECIS zTheta">
            </div>
          </a>
        </div>
      </div>

      <h3 class="font-weight-bold mt-5 mb-3">Key Publications</h3>

      <div class="mb-5">
        <h6><span class="font-weight-bold">Real-Time Monitoring of the Cytotoxic Effect of Oxygen-Sensitive Fluorescent Poly ( styrene-maleic anhydride ) Nanoparticles Using Electrical-Substrate Impedance Sensing.,</span> Torres, Fernando Pesantez,Feret, Elijah C,Xie, Yubing,Sharfstein, Susan T (2025). ACS Applied Biomaterials October <a class="link" href="https://pubs.acs.org/doi/10.1021/acsabm.5c01443" target="_blank"> doi:10.1021/acsabm.5c01443</a>
        </h6>

        <h6><span class="font-weight-bold">Isoform-specific vs. pan-histone deacetylase inhibition as approaches for countering glioblastoma: an in vitro study.,</span> Joshi, Ameya,Ratnapradipa, Natasha,Hughes, Jayce,Moore, Erik,Ekpenyong, Andrew,Shukla, Surabhi (2025). Frontiers in Oncology 15 (November) : 1-14 <a class="link" href="https://www.frontiersin.org/journals/oncology/articles/10.3389/fonc.2025.1695552/full" target="_blank">doi:10.3389/fonc.2025.1695552</a>
        </h6>

        <h6><span class="font-weight-bold">Mitochondrial damage drives T-cell immunometabolic paralysis after major surgery.,</span> Hirschberger, Simon,Müller, Martin B.,Mascolo, Hannah,Seitz, Melissa,Nibler, Stefan,Effinger, David,Lu, Kun,Büch, Joscha,Bender, Martin,Kammerer, Tobias,Peterß, Sven,Kleigrewe, Karin,Abele, Miriam,Barth, Teresa,Kushnir, Olga,Imhof, Axel,Dietzel, Steffen,Wegener, Bernd,Sowa, Ralf,Vogel, Frank,Lamm, Peter,Tomasi, Roland,Unger, Kristian,Sperandio, Markus,Kilger, Erich,Kreth, Simone,Hübner, Max (2025). EMBO Molecular Medicine 17 (December) : 3329-3354 <a class="link" href="https://link.springer.com/article/10.1038/s44321-025-00324-1" target="_blank">doi:10.1038/s44321-025-00324-1</a>
        </h6>

        <p class="font-weight-bold mt-4">*See our <a class="orangelink" href="/publications.php">publications</a> page to explore more publications with ECIS<sup>®</sup></p>
      </div>

      <h3 class="font-weight-bold mt-5 mb-3">Other Related Topics</h3>

      <div class="mb-5">
        <a href="/cellProliferation.php" class="btn ecisDarkBtn mb-2 mr-1" role="button">Proliferation</a>
        <a href="/teer.php" class="btn ecisDarkBtn mb-2 mr-1" role="button">TEER</a>
        <a href="/teerBarrierFunction.php" class="btn ecisDarkBtn mb-2 mr-1" role="button">Barrier Function</a>
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
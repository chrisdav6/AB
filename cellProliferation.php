<?php
  $title = "Cell Proliferation with ECIS - Applied BioPhysics";
  $metaDesc = "As cells proliferate, ECIS instruments use impedance to detect rates of cell proliferation continuously
  and in real-time, all while the cells are under incubated conditions.";
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
          <h1 class="mb-0">Cell Proliferation</h1>
          <hr class="mt-0">
        </div>
      </div>
    </div>
  </section><!-- /applicationsHeading -->

  <section id="applicationContent" class="py-4 text-center text-md-left">
    <div class="container">

      <h3 class="font-weight-bold mb-2">Real-Time, Label-Free Cell Proliferation Monitoring</h3>

      <div class="row align-items-center mb-4 mb-xl-0">
        <div class="col-md-6">
          <p>
            Quantitatively track cell growth from seeding to confluence using ECIS<sup>®</sup> Z-theta. Multi-frequency impedance and high-frequency capacitance provide a clearer, more direct readout of proliferation.
          </p>

          <ul class="list-inline">
            <li class="ml-3">• Continuous, real-time measurements</li>
            <li class="ml-3 mt-2">• Label-free and non-invasive</li>
            <li class="ml-3 mt-2">• Capacitance-based quantification of electrode coverage</li>
          </ul>
        </div>
        <div class="col-md-6">
          <img class='img-fluid d-block mx-auto' src='public/img/cellProliferationGraph.gif' alt='Cell Proliferation Graph' />
        </div>
      </div>

      <a href="/requestDemo.php" class="btn blueBtn mr-2 mb-2" role="button">Request a Demo</a>
      <a href="public/pdf/ProliferationandCytotoxicityMonitoringwithECIS.pdf" target="_blank" class="btn ecisDarkBtn mb-2" role="button">Download Application Note</a>

      <h3 class="font-weight-bold mt-5 mb-4">Why Use ECIS<sup>®</sup> for Proliferation?</h3>

      <p>
        As cells proliferate, changes in cell number and morphology alter the electrical properties at the electrode surface. ECIS<sup>®</sup> captures these changes continuously, revealing growth dynamics that are difficult to observe with endpoint assays.
      </p>

      <div class="mt-5">
        <div class="row d-flex align-items-center">
          <div class="col-lg-4">
            <div class="p-3 border border-dark my-0 mx-0 rounded-xxl">
              <h5 class="font-weight-bold">Real-time growth curves</h5>
              <p class="m-0">Observe proliferation continuously instead of relying on single time points.
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-3 border border-dark my-0 mx-0 rounded-xxl mt-3 mt-lg-0">
              <h5 class="font-weight-bold">Sub-confluent to confluent</h5>
              <p class="m-0">Track the full progression of cell coverage across the electrode.
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-3 border border-dark my-0 mx-0 rounded-xxl mt-3 mt-lg-0">
              <h5 class="font-weight-bold">Condition comparisons</h5>
              <p class="m-0">Quantitatively compare growth rates across treatments and environments.
              </p>
            </div>
          </div>
        </div>
      </div>

      <h3 class="font-weight-bold mt-5 mb-2">The Advantage of Capacitance</h3>

      <div class="row align-items-center mb-4 mb-xl-0">
        <div class="col-md-6">
          <p>
            Total or simple impedance measurements can be ambiguous, as multiple cellular behaviors may produce similar responses. ECIS<sup>®</sup> Z-theta resolves this by using complex impedance and separates impedance into resistance and capacitance across multiple frequencies.
          </p>

          <p>At higher AC frequencies, capacitance decreases in proportion to the fraction of the electrode covered by cells, making it a highly sensitive and quantitative indicator of proliferation.</p>
        </div>
        <div class="col-md-6">
          <img class='img-fluid d-block mx-auto' src='public/img/AISimulatedProliferationGraph.jpg' alt='AI Simulated Proliferation Graph' />
        </div>
      </div>

      <a href="/whatIsECIS.php" class="btn ecisDarkBtn mt-2 mb-5" role="button">What Is ECIS?</a>

      <h3 class="font-weight-bold mt-5 mb-4">Recommended Arrays for Proliferation Studies</h3>

      <div class="row">
        <div class="col-md-6">
          <p class="mb-4">
            Some experimental protocols, such as cell proliferation, require sparse inoculations leading to a variance of cell density at the bottom of the well. Large electrodes (20idf Array) or a large collection of small electrodes (10E+ Array) increases the sampling size resulting in less variability.
          </p>

          <a href="https://applied-biophysics-inc.myshopify.com" target="_blank" class="btn blueBtn mr-2 mb-2" role="button">Order Arrays</a>
          <a href="/contactABP.php" class="btn ecisDarkBtn mb-2" role="button">Talk to an Expert</a>
        </div>
        <div class="col-md-6">
          <img class='img-fluid d-block mx-auto' src='public/img/arraysLoopProliferation.gif' alt='Proliferation Arrays' />
        </div>
      </div>

      <h3 class="font-weight-bold mt-5 mt-lg-2 mb-4">Products Related to Proliferation</h3>

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

      <h3 class="font-weight-bold mt-5 mb-4">Key Publications</h3>

      <div class="mb-5">
        <h6><span class="font-weight-bold">N6-methyladenosine-modified GPX2 impacts cancer cell stemness and TKI resistance through regulating of redox metabolism.,</span> Yang, Xu,Yu, Long,Shao, Miaomiao,Yang, Huiling,Qi, Kangwei,He, Gaofei,Wang, Lanxin,Kong, Di,Gu, Jianxin,Xu, Xiaolin,Wang, Lan (2025). Cell Death and Disease 16 (1) :<a class="link" href="https://www.nature.com/articles/s41419-025-07764-0" target="_blank"> doi:10.1038/s41419-025-07764-0</a>
        </h6>

        <h6><span class="font-weight-bold">Aurintricarboxylic acid inhibits the malignant phenotypes of drug-resistant cells via translation regulation.,</span> Shang, Keke,Chen, Yang,Jin, Jingjie,Wang, Tong,Zhang, Gong (2025). Frontiers in Oncology 15 (May) : 1-10 <a class="link" href="https://www.frontiersin.org/journals/oncology/articles/10.3389/fonc.2025.1576685/full" target="_blank">doi:10.3389/fonc.2025.1576685</a>
        </h6>

        <h6><span class="font-weight-bold">EPLIN, a prospective oncogenic molecule with contribution to growth, migration and drug resistance in pancreatic cancer.,</span> Zeng, Jianyuan,Wang, Cai,Ruge, Fiona,Ji, Edison Ke,Martin, Tracey A.,Sanders, Andrew J.,Jia, Shuqin,Hao, Chunyi,Jiang, Wen G. (2024). Scientific Reports 14 (1) : 1-21 <a class="link" href="https://www.nature.com/articles/s41598-024-81485-w" target="_blank">doi:10.1038/s41598-024-81485-w</a>
        </h6>

        <p class="font-weight-bold mt-4">*See our <a class="orangelink" href="/publications.php">publications</a> page to explore more publications with ECIS<sup>®</sup></p>
      </div>

      <h3 class="font-weight-bold mt-5 mb-4">Other Related Topics</h3>

      <div class="mb-5">
        <a href="/teerBarrierFunction.php" class="btn ecisDarkBtn mb-2 mr-1" role="button">Barrier Function</a>
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
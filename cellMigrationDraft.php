<?php
  $title = "Cell Migration/Wound Healing with ECIS - Applied BioPhysics";
  $metaDesc = "ECIS® instruments include an elevated field mode allowing for electroporation and wounding followed by
  continuous, real-time measurements of migration as cells grow in to fill the wound.";
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
  <title>
    <?php echo $title; ?>
  </title>
</head>

<body class="d-flex flex-column">

  <?php include_once "includes/navbar.php";?>
  <?php include_once "includes/logo-sm.php";?>

  <section id="applicationHeading" class="text-center text-md-left">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="mb-0">Wound Healing/Cell-Migration</h1>
          <hr class="mt-0">
        </div>
      </div>
    </div>
  </section><!-- /applicationHeading -->

  <section id="applicationContent" class="py-4 text-center text-md-left">
    <div class="container">

      <h3 class="font-weight-bold mb-3">Automated Wounding and Migration Quantification with ECIS<sup>®</sup></h3>

      <div class="row align-items-center mb-4 mb-xl-0">
        <div class="col-md-6">
          <p>
            Traditional scratch assays often suffer from poor reproducibility and damage to the extracellular matrix. ECIS<sup>®</sup> replaces mechanical scratching with a precisely defined <strong>electrical wound</strong> and monitors closure <strong>in real time</strong> using impedance.
          </p>

          <ul class="list-inline">
            <li class="ml-3">• Automated Wounding</li>
            <li class="ml-3 mt-2">• Real Time Monitoring</li>
            <li class="ml-3 mt-2">• High Reproducibility</li>
          </ul>
        </div>
        <div class="col-md-6">
          <img class='img-fluid d-block mx-auto' src='public/img/migrationGraph.gif' alt='Migration Graph' />
        </div>
      </div>

      <a href="/requestDemo.php" class="btn blueBtn mr-2 mb-2" role="button">Request a Demo</a>
      <a href="public/pdf/AutomatedWoundhealingCellMigrationAssaywithECIS.pdf" target="_blank" class="btn ecisDarkBtn mb-2" role="button">Download Application Note</a>

      <h3 class="font-weight-bold mt-5 mb-3">Still starting from “scratch”?</h3>

      <p>
        Conventional wound healing assays typically begin with a confluent monolayer that is mechanically scraped with a pipette tip or needle to create a gap — often disrupting adsorbed proteins and extracellular matrix. The gap is then inspected microscopically over hours to days as cells migrate to fill the wound.
      </p>

      <table class="table text-center scratchTable">
        <thead class="thead-color">
          <tr>
            <th scope="col"></th>
            <th scope="col">Traditional Scratch Assay</th>
            <th scope="col">ECIS Wound Healing Assay</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Measure Cell Migration</th>
            <td><i class="fas fa-check fa-2x text-success"></i></td>
            <td><i class="fas fa-check fa-2x text-success"></i></td>
          </tr>
          <tr>
            <th scope="row">Precise Wounding</th>
            <td></td>
            <td><i class="fas fa-check fa-2x text-success"></i></td>
          </tr>
          <tr>
            <th scope="row">Real-Time Data</th>
            <td></td>
            <td><i class="fas fa-check fa-2x text-success"></i></td>
          </tr>
          <tr>
            <th scope="row">Automated</th>
            <td></td>
            <td><i class="fas fa-check fa-2x text-success"></i></td>
          </tr>
          <tr>
            <th scope="row">Highly Reproducable</th>
            <td></td>
            <td><i class="fas fa-check fa-2x text-success"></i></td>
          </tr>
          <tr>
            <th scope="row">Matrix Preservation</th>
            <td></td>
            <td><i class="fas fa-check fa-2x text-success"></i></td>
          </tr>
        </tbody>
      </table>

      <h3 class="font-weight-bold mt-5 mb-3">ECIS<sup>®</sup> Wound-Healing Assay</h3>

      <p>
        The ECIS<sup>®</sup> Wound Healing Assay replaces the traditional "scratch" assay. Instead of disrupting the cell layer mechanically to form a gap and following the migration of cells to "heal" the wound with a microscope, we employ electric signals to both wound and monitor the healing process. ECIS<sup>®</sup> electrical wounding is only directed at the small population of cells in contact with the active 250 micrometer diameter ECIS<sup>®</sup> electrode, producing a precise 250 micrometer wound that can be verified both with the ECIS<sup>®</sup> measurement and vital staining. Unlike the traditional scratch method, the ECIS<sup>®</sup> Wound Healing Assay will not affect the extracellular matrix and protein coating.
      </p>

      <div class="d-flex justify-content-center align-items-center row mt-lg-5 mb-lg-5">
        <div class="col-md-4 mt-5 mt-md-0">
          <img class='img-fluid d-block mx-auto' src='public/img/NRKWoundedLabeled1.jpg' alt='NRK Wounded Labeled' />
        </div>
        <div class="col-md-6 mt-3 mt-md-0">
          <img class='img-fluid d-block mx-auto' src='public/img/NRKWoundedLabeled2.jpg' alt='NRK Wounded Labeled1 Graph' />
        </div>
      </div>

      <h3 class="font-weight-bold mt-5 mb-3">Resistance vs. Capacitance: Capture Three Recovery Phases</h3>

      <p>
        After lethal electroporation, ECIS<sup>®</sup> migration assays typically show three recovery phases: lag, fast recovery, and slow recovery. These correspond to cell transition, cell migration, and reestablishment (annealing) of cell-cell interactions.
      </p>

      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-6">
            <div class="row d-flex flex-column align-items-top">
              <div>
                <div class="p-3 border border-dark my-0 mx-0 rounded-xxl">
                  <h5 class="font-weight-bold">Transition + Migration</h5>
                  <p class="m-0">High-frequency capacitance/impedance (&gt;32,000 Hz) reflects electrode coverage and migration dynamics.
                  </p>
                </div>
              </div>
              <div class='my-2 my-md-3 my-lg-4'>
                <div class="p-3 border border-dark my-0 mx-0 rounded-xxl mt-3 mt-lg-0">
                  <h5 class="font-weight-bold">Annealing</h5>
                  <p class="m-0">Low-frequency resistance (&lt;4,000 Hz) reveals rebuilding of cell–cell connections often missed by microscopy.
                  </p>
                </div>
              </div>
              <div>
                <div class="p-3 border border-dark my-0 mx-0 rounded-xxl mt-3 mt-lg-0">
                  <h5 class="font-weight-bold">More insight than imaging alone</h5>
                  <p class="m-0">Microscopy typically captures transition and migration; ECIS<sup>®</sup> adds the annealing phase.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6 mt-5">
            <img class='img-fluid d-block mx-auto w-75' src='public/img/WoundingTransitionMigrationAnnealing.jpg' alt='Wounding Transition Migration Annealing' />
          </div>
        </div>

        <a href="/whatIsECIS.php" class="btn ecisDarkBtn mb-5" role="button">What Is ECIS?</a>

      </div>


      <h3 class="font-weight-bold mt-5 mb-5">ECIS<sup>®</sup> Electric Fence</h3>

      <div class="row align-items-start mb-4 mb-xl-0">
        <div class="col-md-6">
          <p>
            The ECIS<sup>®</sup> Electric Fence is a novel impedance-based technique to measure migration rates by preventing cells from attaching and spreading onto the measurement electrode while a confluent layer develops around it. When the fence is turned off, cells migrate into the open space left by the fence.
          </p>
        </div>

        <div class="col-md-6 mt-4 mt-md-0">
          <img class=' img-fluid d-block mx-auto' src='public/img/AIElectricFenceSimulationGraph.jpg' alt='AI Electric Fence Simulation Graph' />
        </div>
      </div>

      <h3 class="font-weight-bold mt-5 mb-5">ECIS<sup>®</sup> Wound-Healing/Migration Arrays</h3>

      <div class="row align-items-start">
        <div class="col-lg-6">
          <p class="mb-4">
            Using a small area of electrodes in ECIS<sup>®</sup> migration wounding assays creates a highly localized, reproducible wound by concentrating the electric field to a precise area. This improves consistency and sensitivity, enabling more accurate measurement of cell migration during wound closure. We recommend the 8w1E or 96w1E+ arrays for wound-healing migration assays.
          </p>

          <a href="https://applied-biophysics-inc.myshopify.com" target="_blank" class="btn blueBtn mr-2 mb-2" role="button">Order Arrays</a>
          <a href="/contactABP.php" class="btn ecisDarkBtn mb-2" role="button">Talk to an Expert</a>
        </div>
        <div class="col-lg-6">
          <img class='img-fluid d-block mx-auto' src='public/img/arraysLoopMigration.gif' alt='Migration Arrays' />
        </div>
      </div>

      <h3 class="font-weight-bold mt-5 mb-3">Products related to Wound Healing/Migration</h3>

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
        <h6><span class="font-weight-bold">Stabilizing milk-derived extracellular vesicles (mEVs) through lyophilization : a novel trehalose and tryptophan formulation for maintaining structure and Bioactivity during long-term storage.,</span> Dogan, Alan B,Marsh, Spencer R,Tschetter, Rachel J,Beard, Claire E,Amin, R,Jourdan, L Jane,Gourdie, Robert G (2025). Journal of Biological Engineering 19 (4) : <a class="link" href="https://link.springer.com/article/10.1186/s13036-024-00470-z" target="_blank"> doi:10.1186/s13036-024-00470-z</a>
        </h6>

        <h6><span class="font-weight-bold">EPLIN, a prospective oncogenic molecule with contribution to growth, migration and drug resistance in pancreatic cancer.,</span> Zeng, Jianyuan,Wang, Cai,Ruge, Fiona,Ji, Edison Ke,Martin, Tracey A.,Sanders, Andrew J.,Jia, Shuqin,Hao, Chunyi,Jiang, Wen G. (2024). Scientific Reports 14 (1) : 1-21 <a class="link" href="https://www.nature.com/articles/s41598-024-81485-w" target="_blank">doi:10.1038/s41598-024-81485-w</a>
        </h6>

        <h6><span class="font-weight-bold">DRIM modulates Src activation and regulates angiogenic functions in vascular endothelial cells.,</span> Tong, Jia,Jiang, Wen G,Dong, Xuefei,Martin, Tracey A,Yang, Yiming,Dong, Bo (2024). Cell Biology International (September) : <a class="link" href="https://onlinelibrary.wiley.com/doi/10.1002/cbin.12265" target="_blank">doi:10.1002/cbin.12265</a>
        </h6>

        <p class="font-weight-bold mt-4">*See our <a class="orangelink" href="/publications.php">publications</a> page to explore more publications with ECIS<sup>®</sup></p>
      </div>

      <h3 class="font-weight-bold mt-5 mb-3">Other Related Topics</h3>

      <div class="mb-5">
        <a href="/teerBarrierFunction.php" class="btn ecisDarkBtn mb-2 mr-1" role="button">Barrier Function</a>
        <a href="/teer.php" class="btn ecisDarkBtn mb-2 mr-1" role="button">TEER</a>
        <a href="/cellProliferation.php" class="btn ecisDarkBtn mb-2 mr-1" role="button">Cell Proliferation</a>
        <a href="/cytotoxicity.php" class="btn ecisDarkBtn mb-2 mr-1" role="button">Cytotoxicity</a>
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
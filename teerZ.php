<?php
  $title = "TEERZ - 24/96 Well TEER Measurement System - Applied BioPhysics";
  $metaDesc = "The ECIS TEERZ is designed to carry out traditional trans-epithelial/endothelial electrical resistance
  measurements using ECIS";
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

  <section id="productHeading" class="pb-4 text-center text-md-left">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-4">TEERZ Array Station</h1>
          <hr class="my-2">
          <h2>ECIS<sup class="registered">®</sup> Z-Theta</h2>
        </div>
      </div>
    </div>
  </section><!-- /productHeading -->

  <section id="productInfo" class="pb-5 text-center text-md-left">
    <div class="container">

      <div class="row align-items-center mb-4 mb-xl-0">
        <div class="col-md-7">
          <p>
            Combine the ECIS<sup>®</sup> Z-Theta impedance analyzer with the TEERZ array station to measure transepithelial electrical resistance (TEER) continuously in real time. With fixed electrode positioning and resistance isolation in a 24 or 96-well format, the ECIS<sup>®</sup> TEERZ delivers consistent, biologically meaningful barrier data.
          </p>
        </div>
        <div class="col-md-5">
          <img class='img-fluid d-block mx-auto' src='public/img/ZTTEERZGif.gif' alt='Z-Theta TEERZ' />
        </div>
      </div>

      <div class='pb-3'>
        <a href="/requestDemo.php" class="btn blueBtn mr-2 mb-2" role="button">Request a Demo</a>
        <a href="/contactABP.php" class="btn ecisDarkBtn mr-2 mb-2" role="button">Talk Applications</a>
        <a href="/whatIsECIS.php" class="btn ecisDarkBtn mb-2" role="button">What Is ECIS?</a>
      </div>

      <h3 class="font-weight-bold mt-5 mb-5">Why Choose the ECIS<sup>®</sup> TEERZ for TEER Assays?</h3>

      <div class='pb-5'>
        <div class="row d-flex align-items-start">
          <div class="col-lg-4">
            <div class="p-3 border border-dark my-0 mx-0 rounded-xxl">
              <h5 class="font-weight-bold">Continuous TEER</h5>
              <p class="m-0">Monitor barrier formation, disruption, and recovery without removing inserts from incubated conditions.
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-3 border border-dark my-0 mx-0 rounded-xxl mt-3 mt-lg-0">
              <h5 class="font-weight-bold">Fixed Dipping Electrodes</h5>
              <p class="m-0">Fixed dipping electrodes eliminate user variability in electrode placement and depth.
              </p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="p-3 border border-dark my-0 mx-0 rounded-xxl mt-3 mt-lg-0">
              <h5 class="font-weight-bold">Resistance-focused TEER</h5>
              <p class="m-0">Isolate resistance from complex impedance for a cleaner barrier integrity readout.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-5 pb-3 mt-2">
        <div class="col">
          <video autoplay muted controls loop class='my-3 my-md-0 border' width='100%' height='100%'>
            <source src="public/img/TEERZPromoII.mp4" type="video/mp4" />
          </video>
        </div>
      </div>

      <h3 class="font-weight-bold mt-5 mb-5">ECIS<sup>®</sup> TEERZ Array Cartridge</h3>

      <div class="row align-items-center mb-5">
        <div class="col-md-6">
          <img class='img-fluid d-block mx-auto' src='public/img/tray-pins-2.png' alt='TEERZ Tray Pins' />
        </div>
        <div class="col-md-6">
          <ul class="list-inline mt-lg-4">
            <li class="ml-3">
              • Fixed dipping pin electrodes
            </li>
            <li class="ml-3 my-3">
              • 24 and/or 96-well format
            </li>
            <li class="ml-3 my-3">
              • Medical-grade stainless steel electrodes
            </li>
            <li class="ml-3">
              • Accepts commercially available cell-culture permeable inserts
            </li>
          </ul>
        </div>
      </div>

      <h3 class="font-weight-bold mt-5 mb-5">TEERZ Array Station Specs</h3>

      <div class="row align-items-center mt-4 mb-5">
        <div class="col-lg-7">
          <div class="info-box">

            <div class="info-row d-flex">
              <div class="info-label font-weight-bold">
                Array Station
              </div>
              <div class="info-value">
                TEERZ
              </div>
            </div>

            <div class="info-row d-flex">
              <div class="info-label font-weight-bold">
                Arrays
              </div>
              <div class="info-value">
                Commercially available permeable cell-culture inserts
              </div>
            </div>

            <div class="info-row d-flex">
              <div class="info-label font-weight-bold">
                Signal
              </div>
              <div class="info-value">
                75 Hz sinusodial AC
              </div>
            </div>

            <div class="info-row d-flex">
              <div class="info-label font-weight-bold">
                Data Output
              </div>
              <div class="info-value">
                Impedance, resistance, reactance, TEER (export as CSV, Excel, or graphical JPG/TIF)
              </div>
            </div>

            <div class="info-row d-flex">
              <div class="info-label font-weight-bold">
                Connectivity
              </div>
              <div class="info-value">
                USB to laptop
              </div>
            </div>

            <div class="info-row d-flex">
              <div class="info-label font-weight-bold">
                Software
              </div>
              <div class="info-value">
                ECIS<sup>®</sup> TEERZ Software
              </div>
            </div>

            <div class="info-row d-flex">
              <div class="info-label font-weight-bold">
                Includes
              </div>
              <div class="info-value">
                Z-Theta impedance analyzer, TEERZ array station, TEERZ Cartridge, laptop PC with ECIS<sup>®</sup> software
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-5 mt-5 mt-md-0">
          <img class='img-fluid d-block mx-auto' src='public/img/TEERZunit-with-tray.png' alt='TEERZ unit with tray' />
        </div>
      </div>

      <div class='mt-n5 mt-md-0 mb-5'>
        <a href="public/pdf/ECISInstrumentSpecifications.pdf" target='_blank' class="btn blueBtn mr-2 mb-2" role="button">Download Data Sheet</a>
      </div>

      <h3 class="font-weight-bold mt-5 mt-lg-2 mb-4">Other Z-Theta Array Stations</h3>

      <div class="row mt-5 d-flex justify-content-center">
        <div class="col-md-6">
          <a class="text-dark link text-decoration-none" href="ztheta96.php">
            <div class="card product-card mb-3 rounded-xxl border-dark">
              <div class="card-body text-center pb-1">
                <h4>96-well Array Station</h4>
              </div>
              <img class="card-img-top img-fluid w-50 mx-auto d-block" src="public/img/96-well-Station.jpg" alt="96-well Array Station">
            </div>
          </a>
        </div>

        <div class="col-md-6">
          <a class="text-dark link text-decoration-none" href="ztheta.php">
            <div class="card product-card mb-3 rounded-xxl border-dark">
              <div class="card-body text-center pb-1">
                <h4>16-well Array Station</h4>
              </div>
              <img class="card-img-top img-fluid w-50 mx-auto d-block" src="public/img/16-well-station.jpg" alt="96-well Array Station">
            </div>
          </a>
        </div>
      </div>

      <h3 class="font-weight-bold mt-5 mb-4">Related Applications</h3>

      <div class="mb-5">
        <a href="/teer.php" class="btn ecisDarkBtn mb-2 mr-1" role="button">TEER</a>
      </div>
  </section>

  <?php include_once "includes/footer.php";?>

  <!-- Scroll to top -->
  <button class="btn btn-outline-dark" id="scrollBtn"><i class="fas fa-angle-up fa-2x"></i></button>

  <!-- Order Info Modal -->
  <div class="modal fade" id="orderInfo" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Order Information</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="orderInfoForm" action="/orderInfoProcess.php" method="post">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control form-control-lg" name="name" id="name" required>
            </div>
            <div class="form-group">
              <label for="company">Institution</label>
              <input type="text" class="form-control form-control-lg" name="institution" id="institution" required>
            </div>
            <div class="form-group">
              <label for="text">Phone Number</label>
              <input type="text" class="form-control form-control-lg" name="phone" id="phone" required>
            </div>
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="email" class="form-control form-control-lg" name="email" id="email" required>
            </div>
            <div class="form-group">
              <label for="system">System Interested In</label>
              <input type="text" class="form-control form-control-lg" name="system" id="system" required>
            </div>
            <div class="form-group d-none">
              <!-- Honey -->
              <input type="text" class="form-control form-control-lg" name="fax" id="fax">
            </div>
            <div class="form-group mt-4">
              <label class="d-block">Would you like to Demo or Purchase?</label>
              <div class="form-check form-check-inline">
                <input class="form-check-input demoOrPurchase" type="radio" name="demoOrPurchase" id="demoOrPurchaseDemo" value="Demo" checked>
                <label class="form-check-label" for="demoOrPurchaseDemo">Demo</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input demoOrPurchase" type="radio" name="demoOrPurchase" id="demoOrPurchasePurchase" value="Purchase">
                <label class="form-check-label" for="demoOrPurchasePurchase">Purchase</label>
              </div>
            </div>
            <div class="form-group">
              <label for="comments">Comments</label>
              <textarea class="form-control form-control-lg" name="comments" id="comments"></textarea>
            </div>

            <div class="row">
              <div class="col d-flex flex-column">
                <button id="orderInfoBtn" class="btn ecisBtn btn-lg submit-btn btn-block mt-3 ml-auto">Submit</button>
                <i class="fas fa-spinner fa-2x fa-spin mt-4 mx-auto"></i>
                <!--Initially hidden in the css-->
                <span class="submitMessage text-center mt-4 mb-3 mx-auto">Thank you, your request has been sent</span>
                <!--Initially hidden in the css-->
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="public/js/jquery.min.js"></script>
  <script src="public/js/bootstrap.bundle.min.js"></script>
  <script src="public/js/util.js"></script>
  <script src="public/js/smooth-scroll.min.js"></script>
  <script src="public/js/formsHandling.js"></script>
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
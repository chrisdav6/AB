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
          <h1 class="display-2">ECIS<sup class="registered">®</sup> TEERZ</h1>
          <hr class="my-2">
          <h2>24/96 Well TEER Measurement System</h2>
        </div>
      </div>
    </div>
  </section><!-- /productHeading -->

  <section id="productCarousel" class="py-4 mb-5">
    <div class="container">
      <div class="row">

        <div class="col-lg-5">

          <div id="carouselExampleIndicators" class="carousel slide border" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="public/img/teerZFront.jpg" alt="TEER96 Barrier Function Measurement System">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-7 text-center text-md-left mt-4">
          <h2>Description</h2>
          <hr class="mt-1">
          <p>
            How can TEER assays for barrier function be made easier and more accurate? By making them continuous and reporting measurements in real time. The all new TEERZ by Applied Biophysics, Inc. A more effective approach to a traditionally complicated assay.
          </p>
          <p><strong>21 CFR Part 11</strong> capable option now available - <small><strong>Powered by TotalLab</strong></small></p>
          <h2 class='coming-soon'>Coming Soon!</h2>
          <a href="public/pdf/TEERZBrochure.pdf" target="_blank" class="btn btn-outline-success productBtn mt-3" role="button">Download Brochure</a>
          <!-- <a href="public/pdf/TEER96DataSheetR3.pdf" target="_blank" class="btn btn-outline-success productBtn mr-0 mr-md-1" role="button">Download Data
            Sheet</a>
          <a href="#" class="btn btn-success productBtn" role="button" data-id="Order Info Form" data-toggle="modal" data-target="#orderInfo">Order Info</a> -->
        </div>

      </div>
    </div>
  </section> <!-- /productCarousel -->

  <!-- <section id="productInfo" class="py-5 mb-5 text-center text-md-left">
    <div class="container">

      <div class="row">
        <div class="col">
          <h2>Overview</h2>
          <hr class="mt-1">
          <p class="mb-5">
            The ECIS TEER96 is designed to carry out traditional trans-epithelial/endothelial electrical resistance
            measurements using ECIS (electric cell-substrate impedance sensing) technology to monitor the barrier
            function of cell layers grown on membrane insert filters. Data is collected continuously from up to 96
            independent wells and reported as real-time barrier function changes in ohm-cm<sup>2</sup>.
          </p>

          <div class="row pt-3">
            <div class="col-lg-6">
              <img class="img-fluid" src="public/img/teer96graphLg.jpg" alt="TEER96 Graph">
              <p class='figText'>Figure 1: Continuous TEER measurements taken on MDCK II cells that were already confluent (turquoise) and freshly inoculated (magenta) at time 0 in the ECIS<sup>®</sup> TEER96. The cells were inoculated in a 96-well cell-culture insert plate.</p>
            </div>
            <div class="col-lg-6">
              <img class="img-fluid" src="public/img/teer96-2.jpg" alt="TEER96 Station">
            </div>
          </div>

          <h5 class='mt-5'>Benefits</h5>
          <ul class="list-unstyled mt-3 ml-0 ml-md-3">
            <li>- Automated TEER measurements in 96 wells under incubated conditions</li>
            <li>- Single point measurement or continuous mode</li>
            <li>- Uses Corning<sup>&reg;</sup> and Millipore<sup>&reg;</sup> 96-well filter plates</li>
            <li>- Fast barrier function dynamics monitoring</li>
            <li>- Non-invasive &amp; label free</li>
          </ul>

          <div class="row my-5">
            <div class="col-lg-8 mx-auto">
              <img class="img-fluid" src="public/img/teer96-3.jpg" alt="TEER96 Station">
            </div>
          </div>

          <p class="mt-4">
            Non-invasive measurements may be made continuously for days with TEER96. The fixed position
            of electrodes throughout the measurements eliminates operator variability allowing precise and repeatable
            measurements of cell layers.
          </p>
          <p class="mt-4">
            The TEER96 accepts standard Millipore<sup>&reg;</sup> and Corning<sup>&reg;</sup> 96-well filter plates.
            These are placed on the platen of the TEER96. An optical switch senses the array is in place and
            automatically moves the array into the station and precisely moves the plate up to the dipping pins. Each
            well has two stainless steel coated dipping pins, one for the counter electrode and one over the filter to take the
            measurement.
          </p>
          <p>
            The system can take just one reading of each well per plate or take continuous data on a plate over days or
            weeks. The system can be programmed to include a wash cycle after a certain number of arrays are run. The
            system includes a bar code reader, the bar code data is integrated with the data file.
          </p>
        </div>
      </div>

    </div>
  </section> -->

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
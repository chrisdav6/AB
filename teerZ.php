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
                <img class="d-block w-100" src="public/img/teerZFront2.jpg" alt="TEER96 Barrier Function Measurement System">
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-7 text-center text-md-left mt-4">
          <h2>Description</h2>
          <hr class="mt-1">
          <p>
            How can TEER assays for barrier function be made easier and more accurate? By making them continuous and reporting measurements in real time. The all new TEERZ by Applied BioPhysics. A more effective approach to a traditionally complicated assay.
          </p>
          <p><strong>21 CFR Part 11</strong> capable option now available - <small><strong>Powered by TotalLab</strong></small></p>

          <a href="/contactABP.php" class="btn btn-warning productBtn mr-0 mr-md-1" role="button">Learn More</a>
          <a href="public/pdf/TEERZAplicationNote.pdf" target="_blank" class="btn btn-outline-success productBtn" role="button">Application Note</a>
        </div>

      </div>
    </div>
  </section> <!-- /productCarousel -->

  <section id="productInfo" class="py-5 mb-5 text-center text-md-left">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Overview</h2>
          <hr class="mt-1 mb-5">

          <div class="row">
            <div class="col-md-6">
              <p>
                <strong>Continuous Data</strong><br />
                Transepithelial Electrical Resistance (TEER) is collected continuously in real-time
              </p>

              <p>
                <strong>Cells Remain Incubated</strong><br />
                While TEER data is being collected, the cells remain inside of the incubator
              </p>

              <p>
                <strong>Fixed Dipping Pin Electrodes</strong><br />
                The ECIS<sup>&reg;</sup> TEERZ Cartridges hold fixed dipping pin electrodes that can be used with commercially available transwell filter inserts in 24 or 96-well formats
              </p>

              <p>
                <strong>ECIS<sup>&reg;</sup> Technology</strong><br />
                Small and light-weighted device leaves enough space for other vessels
              </p>

              <p>
                <strong>Easy-to-use Software</strong><br />
                ECIS<sup>&reg;</sup> TEERZ Software is user-friendly and reports data in TEER vs time
              </p>
            </div>
            <div class="col-md-6">
              <!-- <iframe src="https://drive.google.com/file/d/1fgdUS_tp6sBA_p7SjptjLRnzBVUKkmXg/preview" width=" 100%" height="315" allow="autoplay"></iframe> -->
              <!-- <iframe width="100%" height="315" src="https://www.youtube.com/embed/IsVJahHu3dE?si=Yy6fWYcVjn6_sVWO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> -->
              <video autoplay muted controls loop class='my-3 my-md-0 border' width='100%'>
                <source src="public/img/TEERZPromoII.mp4" type="video/mp4" />
              </video>

            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col">
          <h2>Continuous Data</h2>
          <hr class="mt-1 mb-5">

          <div class="row align-items-center">
            <div class="col-md-6">
              <p>
                With the all new ECIS<sup>&reg;</sup> TEERZ, transepithelial electrical resistance (TEER) can be collected for hours, days, or even weeks at a time. With continuous data collection, the dynamics of cell monolayer permeability can be witnessed in real time.
              </p>
            </div>
            <div class="col-md-6">
              <img class='img-fluid d-block mx-auto' src='public/img/TEERGraph.gif' alt='TEER Graph' />
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col">
          <h2>Cells Remain Incubated</h2>
          <hr class="mt-1 mb-5">

          <div class="row align-items-center">
            <div class="col-md-6">
              <p>
                Those with experience measuring TEER know that values drastically change when cells are removed from the incubator. With the ECIS<sup>&reg;</sup> TEERZ, data is collected on TEER while the cells remain inside of the incubator, keeping the environment canonical to cells grown in vitro.
              </p>
            </div>
            <div class="col-md-6">
              <img class='img-fluid d-block mx-auto' src='public/img/teerZFront3.jpg' alt='TEER Front Image' />
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col">
          <h2>Fixed Dipping Pin Electrodes</h2>
          <hr class="mt-1 mb-5">

          <div class="row align-items-center">
            <div class="col-md-6">
              <p>
                With the ECIS<sup>&reg;</sup> TEERZ Cartridge, researchers can ensure that values will be consistent by having dipping pin electrodes that are stationary and will remain in the same position each and every time. The TEERZ cartridge can measure commercially available transwell filter insert plates in 24 or 96-well formats.
              </p>
            </div>
            <div class="col-md-6">
              <img class='img-fluid d-block mx-auto' src='public/img/tray-pins-2.jpg' alt='Fixed Dipping Pin Electrodes' />
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col">
          <h2>ECIS<sup>&reg;</sup> Technology</h2>
          <hr class="mt-1 mb-5">

          <div class="row align-items-center">
            <div class="col-md-6">
              <p>
                The ECIS<sup>&reg;</sup> TEERZ uses Electric Cell-substrate Impedance Sensing (ECIS) technology to gather TEER information. With ECIS, complex impedance is recorded that allows the separation of whole impedance into its components of resistance and capacitance. Since resistance is used for barrier measurements, ECIS isolates and parallels the resistance, giving the <i>true</i> value of TEER.
              </p>
            </div>
            <div class="col-md-6">
              <img class='img-fluid d-block mx-auto' src='public/img/TEERZ-Product-Page.jpg' alt='ECIS Technology' />
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col">
          <h2>Easy-to-use Software</h2>
          <hr class="mt-1 mb-5">

          <div class="row align-items-center">
            <div class="col-md-6">
              <p>
                The ECIS<sup>&reg;</sup> TEERZ intuitive software design makes experimental setup, data collection, and analysis efficient and easily accessible. The Real-Time monitoring capabilities tracks barrier function/TEER, cell growth, morphology, attachment, and much more continuously over time, making data collection smooth and seamless.
              </p>
            </div>
            <div class="col-md-6">
              <img class='img-fluid d-block mx-auto' src='public/img/laptopTEERZ.jpg' alt='Easy-to-use Software' />
            </div>
          </div>
        </div>
      </div>

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
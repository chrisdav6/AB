<?php
  $title = "TEER24 - Barrier Function Measurements - Applied BioPhysics";
  $metaDesc = "The TEER24 by Applied BioPhysics measures the transepithelial electrical resistance (TEER) barrier
  function of cellular layers in a total of 24 wells continuously in real-time.";
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
          <h1 class="display-2">TEER24</h1>
          <hr class="my-2">
          <h2>Barrier Function Measurement System</h2>
        </div>
      </div>
    </div>
  </section><!-- /productHeading -->

  <section id="productCarousel" class="py-4">
    <div class="container">
      <div class="row">

        <div class="col-lg-5">

          <div id="carouselExampleIndicators" class="carousel slide border" data-ride="carousel">
            <div class="carousel-inner">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              </ol>

              <div class="carousel-item active">
                <img class="d-block w-100" src="public/img/teer24Graph.jpg" alt="TEER24 Barrier Function Measurement System">
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="public/img/teer24Station.jpg" alt="TEER24 Barrier Function Measurement System">
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="public/img/teer24Side.jpg" alt="TEER24 Barrier Function Measurement System Side View">
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="public/img/teer24Incubator.jpg" alt="TEER24 Barrier Function Measurement System Incubator">
              </div>

            </div>
            <a class="carousel-control-prev" data-scroll-ignore data-toggle="tab" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" data-scroll-ignore data-toggle="tab" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>

        <div class="col-lg-7 text-center text-md-left mt-4">
          <h2>Description</h2>
          <hr class="mt-1">
          <p>
            How can TEER assays for barrier function be made easier and more accurate? By making them automated and
            reporting measurements in real time. The all new TEER24 by Applied Biophysics, Inc. A more effective
            approach to a traditionally complicated assay.
          </p>
          <a href="public/pdf/TEER24DataSheetR5.pdf" target="_blank" class="btn btn-outline-success productBtn mr-0 mr-md-1" role="button">Download Data
            Sheet</a>
          <a href="#" class="btn btn-success productBtn" role="button" data-id="Order Info Form" data-toggle="modal" data-target="#orderInfo">Order Info</a>
          <!-- <p class="text-danger mt-3"><small>***Please note TEER24 is currently on backorder, please contact us for more information***</small></p> -->
        </div>

      </div>
    </div>
  </section> <!-- /productCarousel -->

  <section id="productInfo" class="py-5 mb-5 text-center text-md-left">
    <div class="container">

      <div class="row">
        <div class="col">
          <h2>Overview</h2>
          <hr class="mt-1">
          <p>
            The ECIS TEER24 is designed to carry out traditional trans-epithelial/endothelial electrical resistance
            measurements using ECIS (electric cell-substrate impedance sensing) technology to monitor the barrier
            function of cell layers grown on membrane insert filters. Data is collected continuously from up to 24
            independent wells and reported as real-time barrier function changes in ohm-cm<sup>2</sup>.
          </p>
          <h5 class="mt-4">Benefits</h5>
          <ul class="list-unstyled mt-3 ml-0 ml-md-3">
            <li>- Automated TEER measurements from under 10 to 2,500 ohm-cm<sup>2</sup> in 24 wells</li>
            <li>- Uses standard commercially available membrane inserts</li>
            <li>- Data recorded and visualized in real time under incubator conditions</li>
            <li>- Accurate measuring of endothelial barrier function</li>
            <li>- Long term data collection capabilities</li>
            <li>- Easily sterilizable, disposable array and autoclavable stainless dipping pins</li>
            <li>- Fast barrier function dynamics monitoring</li>
            <li>- Non-invasive &amp; label free</li>
            <li>- Highly reproducible</li>
            <li>- User friendly software</li>
            <li>- Data output in CSV or graphical (jpg, tif)</li>
            <li>- Create figures and plots of data</li>
          </ul>
          <h5 class="mt-4">System Includes:</h5>
          <ul class="list-unstyled mt-3 ml-0 ml-md-3">
            <li>- 24 well channel station</li>
            <li>- External control module</li>
            <li>- Laptop PC</li>
            <li>- ECIS control, acquisition, and display software</li>
            <li>- Validation test array</li>
            <li>- 1 Common Electrode Array (CEA) with 24 gold pins</li>
            <li>- Four 24-well TEER consumable electrode microplates</li>
          </ul>
          <p class="mt-4">
            Non-invasive measurements may be made continuously for days and even weeks with TEER24. The fixed position
            of electrodes throughout the measurements eliminates operator variability allowing precise and repeatable
            measurements of cell layers. There is no need to take the station out of the incubator, therefore eliminating temperature variations.
          </p>
          <p class="mt-4">
            The TEER24 accepts standard 24 well membrane inserts from any commercial supplier. These are placed in a
            disposable sterile baseplate with addressable electrodes on the well bottom. Once medium and cell suspension
            are added, an autoclavable array of gold dipping electrodes is inserted and measurements may begin. Even
            with the dipping electrodes in place, the media both in and out of the inner well can be easily reached with
            standard micropipettes.
          </p>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col">

          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active text-dark" id="specs-tab" data-scroll-ignore data-toggle="tab" href="#specs" role="tab" aria-controls="specs" aria-selected="false">Specifications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" id="video-tab" data-scroll-ignore data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">Video</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link text-dark" id="options-tab" data-scroll-ignore data-toggle="tab" href="#options"
                role="tab" aria-controls="options" aria-selected="false">Options</a>
            </li> -->
          </ul>

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="specs" role="tabpanel" aria-labelledby="specs-tab">
              <p class="mt-4">
              <ul class="list-unstyled mt-3 ml-0 ml-md-3">
                <li>- 24 well microplates use standard 6mm filters</li>
                <li>- 24 well plates are barcoded with serial numbers for tracking</li>
                <li>- 24 well dipping assembly is medical grade stainless and autoclavable</li>
                <li>- Gold electrodes</li>
                <li>- 75 Hz sinusoidal signal</li>
                <li>- Power: 3 watts; 12 V dc</li>
                <li>- Station: 25.5 x 18 x 4.5 cm, 2.3 kg</li>
                <li>- Controller: 30.2 x 22.2 x 9.8 cm, 2.3 kg</li>
                <li>- Connects to laptop via USB</li>
                <li>- Windows 10 OS</li>
              </ul>
              </p>
            </div>
            <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
              <p class="mt-4">
              <div class="youtubeEmbed" id="aIT_ldWSNvY"></div>
              </p>
              <p class="mt-4">
              <div class="youtubeEmbed" id="-p-1MbOJ29U"></div>
              </p>
            </div>
            <!-- <div class="tab-pane fade" id="options" role="tabpanel" aria-labelledby="options-tab">
              <p class="mt-4">Descriptions and links of optional add-on products and/or training</p>
            </div> -->
          </div>
        </div>
      </div>

      <div id="dataSheets" class="row mt-5">
        <div class="col">
          <h2>Data Sheets <i class="far fa-file-pdf ml-1"></i></h2>
          <hr class="mt-1">
          <div class="row mt-4">
            <div class="col-md-3 pb-4 pb-md-0">
              <a href="public/pdf/TEER24DataSheetR5.pdf" target="_blank" data-toggle="tooltip" data-placement="right" title="Download TEER24 Data Sheet">
                <img class="img-fluid" src="public/img/teer24DataSheet.jpg" alt="Download TEER24 Data Sheet">
              </a>
            </div>
            <div class="col-md-3">
              <a href="public/pdf/TEER24ManualR9.pdf" target="_blank" data-toggle="tooltip" data-placement="right" title="Download TEER24 Manual">
                <img class="img-fluid" src="public/img/teer24Manual.jpg" alt="Download TEER24 Manual">
              </a>
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
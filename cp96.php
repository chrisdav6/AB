<?php
  $title = "ECIS CP96 - Cell Population Monitor - Applied BioPhysics";
  $metaDesc = "The ECIS CP96 by Applied BioPhysics is is based upon the ECIS (Electric Cell-Substrate Impedance Sensing)
  technology where cells are grown upon gold electrodes carrying very weak AC signals";
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
          <h1 class="display-2">CP96</h1>
          <hr class="my-2">
          <h2>Cell Population Monitor</h2>
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
                <img class="d-block w-100" src="public/img/cp96Graph.jpg" alt="CP96 Cell Proliferation Measurement System Graph">
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="public/img/cp96Station.jpg" alt="CP96 Cell Proliferation Measurement System">
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="public/img/cp96Front.jpg" alt="CP96 Cell Proliferation Measurement System Front View">
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="public/img/cp96Incubator.jpg" alt="CP96 Cell Proliferation Measurement System Incubator">
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
            Cell population is measured in real time, under incubator conditions, label-free and in 96 wells.
            Introducing the all new CP96 by Applied Biophysics, Inc. Data collection made easy.”
          </p>
          <a href="public/pdf/CP96DataSheetR4.pdf" target="_blank" class="btn btn-outline-success productBtn mr-0 mr-md-1" role="button">Download Data
            Sheet</a>
          <a href="#" class="btn btn-success productBtn" role="button" data-id="Order Info Form" data-toggle="modal" data-target="#orderInfo">Order Info</a>
          <!-- <p class="text-danger mt-3"><small>***Please note CP96 is currently on backorder, please contact us for more information***</small></p> -->
          <a class='schedule-meet' href='https://calendly.com/mdetweiler' target='_blank'>
            Schedule Zoom Informational Meeting Here
          </a>
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
            The CP96 Cell Population Monitor is based upon the ECIS (Electric Cell-Substrate Impedance Sensing)
            technology where cells are grown upon gold electrodes carrying very weak AC signals. This complete turn-key
            system provides a means to carry out reproducible, label-free, automated cell population measurements
            without damaging the cells. Cell population is monitored as cells are grown in a normal CO<sub>2</sub>
            tissue culture incubator, and data are reported as real-time changes in percent of cell-substrate coverage.
          </p>
          <h5 class="mt-4">Benefits</h5>
          <ul class="list-unstyled mt-3 ml-0 ml-md-3">
            <li>- Automated cell population monitoring in 96 wells</li>
            <li>- Data recorded and visualized in real time under incubator conditions</li>
            <li>- Long-term data collection capabilities</li>
            <li>- Non-invasive &amp; label free</li>
            <li>- Highly reproducible</li>
            <li>- User Friendly software</li>
            <li>- Calculate EC50 values</li>
            <li>- Data output in CSV or graphical (jpg, tif)</li>
            <li>- Impedance data converted to percent of cell-substrate coverage</li>
            <li>- Create figures and plots of data</li>
          </ul>
          <h5 class="mt-4">Features</h5>
          <ul class="list-unstyled mt-3 ml-0 ml-md-3">
            <li>- Follow dynamics of cell-substrate coverage</li>
            <li>- Study cytotoxic effects of compounds upon cell proliferation or loss of viability</li>
            <li>- Calculate EC50 values</li>
          </ul>
          <h5 class="mt-4">System Includes:</h5>
          <ul class="list-unstyled mt-3 ml-0 ml-md-3">
            <li>- 96 channel station</li>
            <li>- External control module</li>
            <li>- Laptop PC</li>
            <li>- ECIS control, acquisition, and display software</li>
            <li>- Validation test array</li>
            <li>- Six 96W20idf consumable electrode arrays</li>
          </ul>
          <p class="mt-4">
            These non-invasive measurements can be made for days and even weeks without the need to remove the station
            from the incubator, eliminating unwanted temperature and pH variations.
          </p>
          <p class="mt-4">
            Compounds affecting cell behavior can be introduced before or after the cells have covered the substrate to
            distinguish changes in growth from the cells to detaching from the substrate. And with the capability of
            measuring 96 wells continuously, the CP96 allows for a high throughput of data to be collected and analyzed
            in real time, making cell population monitoring simple and efficient.
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
                <li>- 96 well plates are barcoded with serial numbers for tracking</li>
                <li>- Gold electrodes</li>
                <li>- 48 KHz sinusoidal signal</li>
                <li>- Power: &lt; 1 watt, 12 V dc</li>
                <li>- Station: 25.5 x 18 x 4.5 cm, 2.3 kg</li>
                <li>- Controller: 30.2 x 22.2 x 9.8 cm, 2.3 kg</li>
                <li>- Connects to laptop via USB</li>
                <li>- Windows 10</li>
              </ul>
              </p>
            </div>
            <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
              <p class="mt-4">
              <div class="youtubeEmbed" id="LTd7aiBJX1U"></div>
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
              <a href="public/pdf/CP96DataSheetR4.pdf" target="_blank" data-toggle="tooltip" data-placement="right" title="Download CP96 Data Sheet">
                <img class="img-fluid" src="public/img/cp96DataSheet.jpg" alt="Download CP96 Data Sheet">
              </a>
            </div>
            <div class="col-md-3">
              <a href="public/pdf/CP96ManualR7.pdf" target="_blank" data-toggle="tooltip" data-placement="right" title="Download CP96 Manual">
                <img class="img-fluid" src="public/img/cp96Manual.jpg" alt="Download CP96 Manual">
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
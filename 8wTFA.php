<?php
  $title = "8WTFA - 8-well Transfilter Array - Applied BioPhysics";
  $metaDesc = "The ECIS 8-well Transfilter Array (8wTFA), TEER is collected continously in real-time while the cells remain incubated, making this an essential tool for accurate barrier function quantification.";
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
          <h1 class="display-3">ECIS<sup class="registered">®</sup> 8-well Transfilter Array</h1>
          <hr class="my-2">
          <h2>TEER</h2>
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
              </ol>

              <div class="carousel-item active">
                <img class="d-block w-100" src="public/img/8wtfa-1.jpg" alt="8-well Transfilter Array">
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="public/img/8wtfa-2.jpg" alt="8-well Transfilter Array">
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="public/img/8wtfa-3.jpg" alt="8-well Transfilter Array">
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
            Traditional methods for measuring transepithelial electrical resistance (TEER) have been limited to single timepoint measurements and require removal of the cells from incuabted conditons. With the ECIS 8-well Transfilter Array (8wTFA), TEER is collected continously in real-time while the cells remain incubated, making this an essential tool for accurate barrier function quantification.
          </p>
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
          <p class="mb-5">
            The ECIS<sup>&reg;</sup> 8-well Transfilter Array (8wTFA) allows researchers to measure transepithelial electrical resistance (TEER) on standard cell culture 24-well inserts using Electric Cell-substrate Impedance Sensing (ECIS<sup>&reg;</sup>). The 8wTFA connects with the ECIS<sup>&reg;</sup> Z-Theta 16-well station and can monitor TEER continuously in real-time without having to remove the cells from the incuabtor. Since ECIS technology is being used with the 8wTFA, users can also monitor cell coverage alongside TEER measurements, allowing verification of confluence of the cell monolayer.
          </p>

          <div class="row pt-3">
            <div class="col-lg-6 mb-4 mb-md-0">
              <img class="img-fluid" src="public/img/8wtfaData-1.jpg" alt="8wtfa Graph">
            </div>
            <div class="col-lg-6">
              <img class="img-fluid" src="public/img/8wtfaData-2.jpg" alt="8wtfa Graph">
            </div>
          </div>

          <h5 class='mt-5'>Benefits</h5>
          <ul class="list-unstyled mt-3 ml-0 ml-md-3">
            <li>- Automated TEER measurements under incuabated conditions</li>
            <li>- Continuously monitored</li>
            <li>- Uses standard 24-well cell culture inserts</li>
            <li>- Non-invasive &amp; label-free</li>
          </ul>

          <!-- <h5 class="mt-4">System Includes:</h5>
          <ul class="list-unstyled mt-3 ml-0 ml-md-3">
            <li>- 96 well channel station located in or outside the CO<sub>2</sub> incubator</li>
            <li>- External control module</li>
            <li>- Laptop PC</li>
            <li>- ECIS control, acquisition, and display software</li>
            <li>- Validation test array</li>
            <li>- Two 96 well gold coated dipping pin assemblies</li>
          </ul> -->

          <div class="row my-5">
            <div class="col-lg-8 mx-auto">
              <img class="img-fluid" src="public/img/8wtfa-4.jpg" alt="8-well Transfilter Array">
            </div>
          </div>

        </div>
      </div>

      <div class="row mt-5">
        <div class="col">

          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <!-- <li class="nav-item">
              <a class="nav-link active text-dark" id="specs-tab" data-scroll-ignore data-toggle="tab" href="#specs" role="tab" aria-controls="specs" aria-selected="false">Specifications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" id="video-tab" data-scroll-ignore data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">Video</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link active text-dark" id="application-notes-tab" data-scroll-ignore data-toggle="tab" href="#applicationNotes" role="tab" aria-controls="applicationNotes" aria-selected="false">Application Notes</a>
            </li>
          </ul>

          <div class="tab-content" id="myTabContent">
            <!-- <div class="tab-pane fade show active" id="specs" role="tabpanel" aria-labelledby="specs-tab">
              <p class="mt-4">
              <ul class="list-unstyled mt-3 ml-0 ml-md-3">
                <li>- Stainless Steel electrode dipping pins</li>
                <li>- 75 Hz sinusoidal signal</li>
                <li>- Connects to laptop via USB</li>
                <li>- Windows 10 OS</li>
              </ul>
              </p>
            </div>
            <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
              <p class="mt-4">
              <div class="youtubeEmbed" id="H4AU9D-dKhk"></div>
              </p>
              <p class="mt-4">
              <div class="youtubeEmbed" id="YNWNDkTsMxs"></div>
              </p>
            </div> -->
            <div class="tab-pane show active" id="applicationNotes" role="tabpanel" aria-labelledby="application-notes-tab">
              <div class="applicationNotes mt-4">
                <p><a href="public/pdf/MeasuringTEERwiththeECIS8wellTransfilterArray.pdf" class="link text-dark" target="_blank"><i class="far fa-file-pdf mr-2"></i> Measuring TEER with the ECIS 8-well Transfilter Array</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- <div id="dataSheets" class="row mt-5">
        <div class="col">
          <h2>Data Sheets <i class="far fa-file-pdf ml-1"></i></h2>
          <hr class="mt-1">
          <div class="row mt-4">
            <div class="col-md-3 pb-4 pb-md-0">
              <a href="public/pdf/TEER96DataSheetR3.pdf" target="_blank" data-toggle="tooltip" data-placement="right" title="Download TEER96 Data Sheet">
                <img class="img-fluid" src="public/img/teer96DataSheet.jpg" alt="Download TEER96 Data Sheet">
              </a>
            </div>
            <div class="col-md-3">
              <a href="public/pdf/TEER96ManualR2.pdf" target="_blank" data-toggle="tooltip" data-placement="right" title="Download TEER96 Manual">
                <img class="img-fluid" src="public/img/teer96Manual.jpg" alt="Download TEER96 Manual">
              </a>
            </div>
          </div>
        </div>
      </div> -->

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
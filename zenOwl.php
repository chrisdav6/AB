<?php
  $title = "Zen CELL Owl  - Applied BioPhysics";
  $metaDesc = "The zenCELL owl is a compact, 24-channel incubator microscope designed for fully automated, remote monitoring of your cell cultures.";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="<?php echo $metaDesc; ?>">
  <!-- JQuery Min -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
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

  <?php include_once "includes/navbar.php"; ?>
  <?php include_once "includes/logo-sm.php"; ?>

  <section id="productHeading" class="pb-4 text-center text-md-left">
    <div class="container">
      <div class="row">
        <div class="col">
          <img class='zenOwlLogo w-100' src='public/img/zenCellOwlLogo.png' alt='Zen Cell Owl Logo' />
          <hr class="my-2">
          <h2>Meet the zenCELL owl – Your Smart Incubator Microscope</h2>
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
                <img class="d-block w-100" src="public/img/zenCELLCarousel1.jpg" alt="zenCELL Owl Product Photo">
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="public/img/zenCELLCarousel2.jpg" alt="zenCELL Owl Lab Photo">
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="public/img/zenCELLCarousel3.jpg" alt="zenCELL Owl Data Photo">
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
            The <strong>zenCELL owl</strong> is a compact, 24-channel incubator microscope designed for fully automated, remote monitoring of your cell cultures. It captures and analyzes data in real-time, 24/7 — so you can monitor your experiments continuously without interrupting them.
          </p>
          <p>
            With intuitive PC access, you can conveniently observe your cell cultures from anywhere, saving valuable working time while improving both the <strong>quality</strong> and <strong>quantity</strong> of your data. Its <strong>lightweight, space-saving design</strong> fits easily into your incubator, making it a seamless addition to any lab setup.
          </p>
          <!-- <a href="public/pdf/ABPBrochure2018.pdf" target="_blank" class="btn btn-outline-success productBtn mr-0 mr-md-1" role="button">Download Data
            Sheet</a> -->
          <a href="#" class="btn btn-success productBtn" role="button" data-id="Order Info Form" data-toggle="modal" data-target="#orderInfo">Order Info</a>
          <!-- <div class="engage-hub-form-embed mt-5" id="eh_form_6395499704745984" data-id="6395499704745984"></div> -->
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
            The ECIS<sup>®</sup> ZƟ (Z Theta) is capable of noninvasively monitoring cell behavior in real-time using
            electric cell-substrate impedance sensing (ECIS). By applying an alternating current across patterned gold
            electrodes, a voltage potential is created which is then measured by the system. When cells cover these
            electrodes, the current is then impeded in different manners depending upon the overall cell morphology.
          </p>
          <p>
            Upon stimulation of cell function, resulting responses in cell morphology will alter the impedance,
            revealing quantifiable differences. The ECIS Z-Theta can then convert the complex impedance into series
            resistance and capacitance, allowing for more accurate data of the cell behavior, making it an advanced form
            of cellular impedance-based assays.
          </p>
          <h5 class="mt-4">Benefits</h5>
          <ul class="list-unstyled mt-3 ml-0 ml-md-3">
            <li>- Automated measurements of cell proliferation, morphology, barrier function, attachment, etc.</li>
            <li>- 16 or 96 wells</li>
            <li>- Choice of a wide range of AC frequencies*</li>
            <li>- Data recorded and visualized in real time under incubator conditions</li>
            <li>- Long-term data collection capabilities</li>
            <li>- Non-invasive &amp; label free</li>
            <li>- Highly reproducible</li>
            <li>- User Friendly software</li>
            <li>- Data output in CSV, excel or graphical (jpg, tif)</li>
            <li>- Multiple array selection</li>
          </ul>
          <h5 class="mt-4">System Includes:</h5>
          <ul class="list-unstyled mt-3 ml-0 ml-md-3">
            <li>- 16 and/or 96 well station</li>
            <li>- External control module</li>
            <li>- Laptop PC</li>
            <li>- ECIS control, acquisition, and display software</li>
            <li>- Elevated field module (EFM) for automated cell migration and electroporation</li>
            <li>- Twelve 8-well and/or six 96-well consumable electrode arrays</li>
          </ul>
          <p class="mt-4">
            *The ECIS Z-Theta uses a range of AC frequencies from 100 – 64,000 Hz to calculate time course changes in
            cell behavior including measurements of permeability of the cell layer, constricted flow underneath the
            cells, and the membrane capacitance. And with multiple options in size of electrodes and patterns of the
            available arrays, the ECIS Z-Theta is able to detect morphological changes from subtle variations in small
            populations of cells to widespread population changes such as cell proliferation.
          </p>
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
                <p><a href="public/pdf/CellGrowth.pdf" class="link text-dark" target="_blank"><i class="far fa-file-pdf mr-2"></i> Cell Growth Analysis using the 24-channel microscope zenCELL owl</a></p>
                <p><a href="public/pdf/AnalysisOfCytostaticDrugEffects.pdf" class="link text-dark" target="_blank"><i class="far fa-file-pdf mr-2"></i> Analysis of Cytostatic Drug Effects using the 24-channel microscope zenCELL owl</a></p>
                <p><a href="public/pdf/DocumentationOfCellCultureQuality.pdf" class="link text-dark" target="_blank"><i class="far fa-file-pdf mr-2"></i> Documentation of cell culture quality using the 24-channel microscope zenCELL owl</a></p>
                <p><a href="public/pdf/ScratchAssay.pdf" class="link text-dark" target="_blank"><i class="far fa-file-pdf mr-2"></i> Cell migration analyzed
                    with the 24-channel microscope zenCELL owl</a></p>
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
              <a href="public/pdf/ABPBrochure2018.pdf" target="_blank" data-toggle="tooltip" data-placement="right" title="Download ZTheta Data Sheet">
                <img class="img-fluid" src="public/img/zThetaDataSheet.jpg" alt="Download ZTheta Data Sheet">
              </a>
            </div>
            <div class="col-md-3">
              <a href="public/pdf/ECISProductGuide.pdf" target="_blank" data-toggle="tooltip" data-placement="right" title="Download ECIS Product Guide">
                <img class="img-fluid" src="public/img/ECISProductGuide.jpg" alt="Download ECIS Product Guide">
              </a>
            </div>
          </div>
        </div>
      </div> -->

    </div>
  </section>

  <?php include_once "includes/footer.php"; ?>

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
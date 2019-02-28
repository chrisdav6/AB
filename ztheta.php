<?php
$title = "Applied Biophysics";
$metaDesc = "Label-free Real-time Automated Cell-based assays powered by the technology of ECIS. Developed by Nobel laureate Ivar
    Giaever and Charles Keese ECIS uses impedance sensing to monitor the behavior of cells as they grow in culture.";
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

    <?php include_once "includes/navbar.php"; ?>
    <?php include_once "includes/logo-sm.php"; ?>

    <section id="productHeading" class="pb-4 text-center text-md-left">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="display-2">ZTheta</h1>
            <hr class="my-2">
            <h2>16 or 96 Well Array Station</h2>
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
                  <img class="d-block w-100" src="public/img/zThetaLarge1.jpg" alt="ZTheta with 16 Well Array Station">
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="public/img/zThetaLarge2.jpg" alt="ZTheta with 96 Well Array Station">
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="public/img/zThetaData.jpg" alt="ZTheta System Data">
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
              The ECIS<sup>®</sup> ZƟ (Z Theta) is our most advanced instrument capable of noninvasively monitoring cell behavior in real-time. The turn-key package consists of a ZƟ System Controller, 16 and/or 96 well Array Station, and computer with integrated software running on Windows or Mac OS. The system also includes our exclusive elevated field mode (EFM) to carry out automated cell migration and electroporation studies.
            </p>
            <a href="#dataSheets" class="btn btn-outline-success productBtn mr-0 mr-md-1" role="button">Download Data Sheet</a>
            <a href="#" class="btn btn-success productBtn" role="button">Order Info</a>
          </div>

        </div>
      </div>
    </section> <!-- /productCarousel -->

    <section id="productInfo" class="py-5 text-center text-md-left">
      <div class="container">

        <div class="row">
          <div class="col">
            <h2>Overview</h2>
            <hr class="mt-1">
            <p>
              The ECIS<sup>®</sup> ZƟ interprets complex impedance as series resistance and capacitance and reports these values at any AC frequency. Data gathered from confluent cell monolayers at multiple AC frequencies can also be mathematically modeled to present time course changes in three parameters related to actual cell morphology. These parameters include changes in the barrier function (permeability) of the confluent layer, averaged apical and basal membrane capacitance and the close contacts between the basal cell membrane and the cell substrate.
            </p>
            <h5 class="mt-4">System includes:</h5>
            <ul class="list-unstyled mt-3 ml-0 ml-md-3">
              <li>- Include Items</li>
            </ul>
            <p class="mt-4">
              These non-invasive measurements can be made for days and even weeks with no need to remove the station from the incubator, eliminating unwanted temperature and pH variations.
            </p>
            <p class="mt-4">
              Compounds affecting cell growth can be introduced before or after the cells have attached to distinguish changes in growth from the ability of the cells to attach to the substrate.
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
              <li class="nav-item">
                <a class="nav-link text-dark" id="options-tab" data-scroll-ignore data-toggle="tab" href="#options" role="tab" aria-controls="options"
                  aria-selected="false">Options</a>
              </li>
            </ul>
            
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="specs" role="tabpanel" aria-labelledby="specs-tab">
                <p class="mt-4">
                  <ul class="list-unstyled mt-3 ml-0 ml-md-3">
                    <li>- Specs</li>
                  </ul>
                </p>
              </div>
              <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
                <p class="mt-4">
                  <div class="youtubeEmbed" id="5Rui4xG5Nr0"></div>
                </p>
              </div>
              <div class="tab-pane fade" id="options" role="tabpanel" aria-labelledby="options-tab">
                <p class="mt-4">Descriptions and links of optional add-on products and/or training</p>
              </div>
            </div>
          </div>
        </div>

        <div id="dataSheets" class="row mt-5">
          <div class="col">
            <h2>Data Sheets <i class="far fa-file-pdf ml-1"></i></h2>
            <hr class="mt-1">
            <div class="row mt-4">
              <div class="col-md-3 pb-4 pb-md-0">
                <a href="public/pdf/CP96DataSheetR2.pdf" target="_blank" data-toggle="tooltip" data-placement="right" title="Download ZTheta Data Sheet">
                  <img class="img-fluid" src="public/img/cp96DataSheet.jpg" alt="Download CP96 Data Sheet">
                </a>
              </div>
              <div class="col-md-3">
                <a href="public/pdf/CP96ManualR4.pdf" target="_blank" data-toggle="tooltip" data-placement="right" title="Download ZTheta Manual">
                  <img class="img-fluid" src="public/img/cp96Manual.jpg" alt="Download CP96 Manual">
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <?php include_once "includes/footer.php"; ?>

    <!-- Scroll to top -->
    <button class="btn btn-outline-dark" id="scrollBtn"><i class="fas fa-angle-up fa-2x"></i></button>

    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <script src="public/js/util.js"></script>
    <script src="public/js/smooth-scroll.min.js"></script>
    <script src="public/js/scripts.js"></script>
  </body>

</html>
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
            <h1 class="display-2">CP96</h1>
            <hr class="my-2">
            <h2>Cell Proliferation Measurement System</h2>
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
                  <img class="d-block w-100" src="public/img/teer24Large.jpg" alt="TEER 24 Barrier Function Measurement System">
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="public/img/teer24top.jpg" alt="TEER 24 Barrier Function Measurement System Top View">
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="public/img/teer24Data.jpg" alt="TEER 24 Barrier Function Measurement System Data">
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
              The ECIS TEER24 is designed to carry out traditional trans-epithelial/endothelial electrical resistance measurements to monitor the barrier function of cell layers grown on membrane insert filters. Data are collected continuously from up to 24 independent wells and reported as real-time changes in the carrier function of cell layers in ohm-cm.
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
              This system provides repeatable, automated TEER measurements to electrically monitor the barrier function of epithelial and endothelial cells as they are grown on membrane insert filters in 24 independent wells. Data are collectedcontinuously and it reports real-time changes in barrier function of cell layers in ohm-cm<sup>2</sup>.
            </p>
            <h5 class="mt-4">Biological Benefits</h5>
            <ul class="list-unstyled mt-3 ml-0 ml-md-3">
              <li>- Continuous long-term measurement of TEER from under 10 to 10,000 ohm cm2 in up to 24 wells</li>
              <li>- Uses standard commercially available membrane inserts</li>
              <li>- Fast barrier function dynamics can be monitored</li>
              <li>- Accurately measures Endothelial barrier function</li>
              <li>- Located in incubator for long term experiments</li>
              <li>- Real time visualization of TEER, control of sampling rate</li>
              <li>- Multiple samples</li>
              <li>- Easy sample tracking</li>
              <li>- Easily sterilizable, disposable array and autoclavable stainless dipping pins</li>
              <li>- Quantitative data easy to export to third party programs</li>
              <li>- Create figures and plots of data</li>
            </ul>
            <p class="mt-4">
              Non-invasive measurements may be made continuously for days and even weeks. The fixed position of electrodes throughout the measurements eliminates operator variability allowing precise and repeatable measurements of endothelial layers with weak barrier function (&lt;10 ohm-cm<sup>2</sup>). No need to take the station out of the incubator eliminating temperature variations.
            </p>
            <p class="mt-4">
              The TEER24 accepts standard 24 well membrane inserts from any commercial supplier. These are placed in a disposable sterile base plate with addressable electrodes on the well bottom. Once medium and cell suspension are added, an autoclavable array of gold dipping electrodes is inserted and measurements begun. Even with the dipping electrodes in place, the media both in and out of the inner well can be easily reached with standard micropipettes.
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
                    <li>- 10 sec/well read rate</li>
                    <li>- 24 well microplates use standard 6mm filters</li>
                    <li>- Gold electrodes</li>
                    <li>- Connects to laptop via USB</li>
                    <li>- Power: powered from USB output</li>
                    <li>- 24 well plates are barcoded with unique serial number for tracking</li>
                    <li>- 24 well dipping assembly is medical grade stainless, can be autoclaved</li>
                    <li>- Station dimensions 10 x 3 x 15cm</li>
                    <li>- Power and mode indicator light located on front panel</li>
                    <li>- Rear panel: USB</li>
                    <li>- Power: 3 watts</li>
                    <li>- Windows 10 OS</li>
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
              <div class="col-md-3 mr-auto">
                <a href="public/pdf/ABP_TEER_24_Sheet_PROOF_for_Website.pdf" target="_blank" data-toggle="tooltip" data-placement="right" title="Download TEER24 Data Sheet">
                  <img class="img-fluid" src="public/img/teer24DataSheet.jpg" alt="Download TEER24 Data Sheet">
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
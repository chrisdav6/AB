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

    <?php include_once "includes/navbar.php";?>
    <?php include_once "includes/logo-sm.php";?>

    <section id="CO2IncubatorHeading" class="mb-2 text-center text-md-left">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="display-3">CO<sub>2</sub> Incubator</h1>
            <hr class="my-2">
            <h2>CO<sub>2</sub> Compact Tissue Culture Incubator</h2>
          </div>
        </div>
      </div>
    </section><!-- /CO2IncubatorHeading -->

    <section id="productCarousel" class="py-4">
      <div class="container">
        <div class="row">

          <div class="col-lg-5">

            <div id="carouselExampleIndicators" class="carousel slide border" data-ride="carousel">
              <div class="carousel-inner">
                <!-- <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol> -->

                <div class="carousel-item active">
                  <img class="d-block w-100" src="public/img/c02incubator.jpg" alt="ECIS CO2 Incubator">
                </div>

              </div>
              <!-- <a class="carousel-control-prev" data-scroll-ignore data-toggle="tab" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" data-scroll-ignore data-toggle="tab" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a> -->
            </div>

          </div>

          <div class="col-lg-7 text-center text-md-left mt-4">
            <h2>Description</h2>
            <hr class="mt-1">
            <p>
              For proper data collection, the ECIS stations with inoculated arrays need to be kept under appropriate cellular incubation parameters that regulate thermal conditions and CO<sub>2</sub>. Fluctuations in these parameters can alter cellular behavior, and due to the high measuring sensitivity of the ECIS systems, these alterations will be expressed in the data. Because space next to the incubator is required for the ECIS electronics, we recommend acquiring a tissue-culture incubator that is dedicated for the ECIS systems.
            </p>
            <!-- <a href="#dataSheets" class="btn btn-outline-success productBtn mr-0 mr-md-1" role="button">Download Data Sheet</a>
            <a href="#" class="btn btn-success productBtn" role="button">Order Info</a> -->
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
              We offer a tissue culture incubator to be used in conjunction with the ECIS instrument. The incubator is compact having an exterior footprint of approximately 21 x 22.5 inches (27 inches in height) and a 1.5 cubic foot interior chamber. A water jacket provides excellent thermal stability and CO<sub>2</sub> levels are automatically maintained with an infrared sensor. A 1” port on the right side of the incubator is provided for the ECIS leads as well as for tubing if using the ECIS flow module system. A custom port sealing bracket is included to provide a secure seal for the ECIS cable
            </p>
            <h5 class="mt-4">Benefits</h5>
            <ul class="list-unstyled mt-3 ml-0 ml-md-3">
              <li>- Infrared CO<sub>2</sub> Sensor for quick recovery of CO2 following open door</li>
              <li>- Unique water jacket provides excellent thermal regulation</li>
              <li>- Patented copper cage HEPA filter to minimize contamination</li>
              <li>- Heated door for reduction of condensation and thermal regulation</li>
              <li>- Autoclavable shelving system</li>
              <li>- Easily cleanable stainless-steel chamber</li>
              <li>- Heated copper CO<sub>2</sub> inlet to promote temperature uniformity</li>
            </ul>
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
                    <li>- Digital controller</li>
                    <li>- Power: 110-120 VAC. 50-60 Hz, 5.0 amps</li>
                    <li>- Max HVAC load: 2001 BTUs/hr</li>
                    <li>- Dimensions: 53.3 x 57.2 x 68.6 cm</li>
                    <li>- Volume: 42 L</li>
                    <li>- Unit Weight: 61.7 kg</li>
                    <li>- Interior Metal: 300 SST</li>
                    <li>- Exterior Metal: Painted cold roll steel</li>
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

        <!-- <div id="dataSheets" class="row mt-5">
          <div class="col">
            <h2>Data Sheets <i class="far fa-file-pdf ml-1"></i></h2>
            <hr class="mt-1">
            <div class="row mt-4">
              <div class="col-md-3 pb-4 pb-md-0">
                <a href="public/pdf/P-FlowPumpManualRevD.pdf" target="_blank" data-toggle="tooltip" data-placement="right" title="Download ECIS p-FLOW Peristaltic Pump Manual">
                  <img class="img-fluid" src="public/img/pFlowManual.jpg" alt="Download ECIS p-FLOW Peristaltic Pump Manual">
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

    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <script src="public/js/util.js"></script>
    <script src="public/js/smooth-scroll.min.js"></script>
    <script src="public/js/scripts.js"></script>
  </body>

</html>
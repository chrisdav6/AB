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

    <section id="hypoxiaHeading" class="mb-2 text-center text-md-left">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="display-3">Hypoxia Chamber</h1>
            <hr class="my-2">
            <h2>Hypoxia/Hyperoxia Chamber Offered by COY Laboratory Products</h2>
          </div>
        </div>
      </div>
    </section><!-- /hypoxiaHeading -->

    <section id="productCarousel" class="py-4">
      <div class="container">
        <div class="row">

          <div class="col-lg-5">

            <div id="carouselExampleIndicators" class="carousel slide border" data-ride="carousel">
              <div class="carousel-inner">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>

                <div class="carousel-item active">
                  <img class="d-block w-100" src="public/img/hypoxia1.jpg" alt="ECIS Hypoxia Chamber">
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="public/img/hypoxia2.jpg" alt="ECIS Hypoxia Chamber">
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
              Cells respond to a variety of environmental conditions and having options to apply these varying conditions in vitro is essential. At Applied Biophysics, we encourage different avenues of manipulating the environment while using the ECIS systems. One way this can be accomplished is by using hypoxia chambers.
            </p>
            <a href="#dataSheets" class="btn btn-outline-success productBtn mr-0 mr-md-1" role="button">Download Data Sheet</a>
            <a href="#" class="btn btn-success productBtn" role="button">Order Info</a>
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
              The ECIS Environmental Control Cabinets (ECC) offered by COY Laboratory Products (coylab.com) allows researchers to monitor cell behavior and conduct ECIS experiments in a controlled gas environment. The cabinet will accept either the 16 or 96 well ECIS Station and fits within a standard tissue culture incubator* that is used to regulate the cabinet’s temperature. Optional gas sensors within the cabinet are used to measure and regulate the concentration of oxygen and/or carbon dioxide within the cabinet. Pull-out shelves provide easy access to the array holder.
            </p>
            <p>*Please Note: the cabinet will not fit in the subcompact incubators offered by Applied BioPhysics.</p>
            <h5 class="mt-4">Benefits</h5>
            <ul class="list-unstyled mt-3 ml-0 ml-md-3">
              <li>- Hermetically sealed chamber</li>
              <li>- Continuous control of oxygen</li>
              <li>- Compatible with existing lab incubators for temperature control</li>
              <li>- Optional CO<sub>2</sub> control</li>
              <li>- Customizable sizes</li>
            </ul>
            <h5 class="mt-4">System Includes:</h5>
            <ul class="list-unstyled mt-3 ml-0 ml-md-3">
              <li>- O<sub>2</sub> controller and sensor</li>
              <li>- Pressure relief valve</li>
              <li>- Two sensor ports</li>
              <li>- Circulation fan</li>
              <li>- Gas inlet</li>
              <li>- Pullout sliding shelves</li>
              <li>- Humidification trays</li>
              <li>- Adjustable leveling pads</li>
              <li>- 3 ECIS Environmental Control Cabinet optional configurations
                <ul class="list-unstyled ml-0 ml-md-3">
                  <li>- Hypoxia cabinet with O<sub>2</sub> control system</li>
                  <li>- Hypoxia cabinet with O<sub>2</sub> and CO<sub>2</sub> control systems</li>
                  <li>- Hypercapnia cabinet with CO<sub>2</sub> control system</li>
                </ul>
              </li>
            </ul>
          </div>
        </div>

        <div class="row my-5">
          <div class="col-md-6">
            <h5>ECC Oxygen Controller</h5>
            <img class="img-fluid my-4" src="public/img/ECCOxygenController.jpg" alt="ECC Oxygen Controller">
            <p>
              The oxygen controller has two ports, one for oxygen and the other for nitrogen/air (or a mixture of carbon dioxide and nitrogen/air). The system is designed to automatically maintain hypoxic or hyperoxic conditions in the cabinet with oxygen concentration from 0% to 60% (monitors up to 100%). 
            </p>
          </div>
          <div class="col-md-6">
            <h5>ECC Carbon Dioxide Controller</h5>
            <img class="img-fluid my-4" src="public/img/ECCCarbonDioxideController.jpg" alt="ECC Carbon Dioxide Controller">
            <p>
              The carbon dioxide controller has two ports, one for CO<sub>2</sub> and one for nitrogen/air. The system regulates carbon dioxide concentration from 0% to 20% in single decimal increments using a gas purge method. 
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
                    <li>- Cabinet size: 20.96 x 40.6 x 35.6 cm</li>
                    <li>- Overall Footprint: 33.02 x 40.6 x 38.1 cm</li>
                    <li>- Oxygen Control: 0-100% in 0.1% increments and control tolerance (factory range 0-20.9%, filed calibration required)</li>
                    <li>- CO<sub>2</sub> Control (option): 0-20% in 0.1% increments and control tolerance
                      <ul class="list-unstyled ml-0 ml-md-3">
                        <li>- Or use pre-mixed tanks to control to desired levels</li>
                      </ul>
                    </li>
                    <li>- Temperature Control: As dictated by incubator used to contain the cabinet</li>
                    <li>- Humidity: Moisture tray to ensure maximum sample saturation</li>
                  </ul>
                </p>
                <p class="mt-5">These products are offered by Coy Laboratory Products. For more information, please call 734-475-2200 or visit <a class="text-dark link" href="http://coylab.com/" target="_blank">coylab.com</a></p>
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
            <a class="text-dark manual-link" href="public/pdf/HypoxiaV2cFINAL.pdf" target="_blank">Hypoxia Literature</a>
            <a class="text-dark manual-link" href="public/pdf/StemCellParadigm.pdf" target="_blank">Hypoxia or In Situ Normoxia: The Stem Cell Paradigm</a>
            <a class="text-dark manual-link" href="public/pdf/PO2MattersinStemCellCulture.pdf" target="_blank">PO<sub>2</sub> Matters in Stem Cell Culture</a>
            <a class="text-dark manual-link" href="public/pdf/MetabolicMarkersofHypoxia.pdf" target="_blank">Metabolic Markers of Hypoxia: Systems Biology Applications in Biomedicine</a>
          </div>
        </div>

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
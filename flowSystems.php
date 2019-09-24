<?php
  $title = "ECIS Flow Systems - Applied BioPhysics";
  $metaDesc = "A flow system and flow arrays from Applied BioPhysics that allow cellular behavior to be measured with
  ECIS under shear stress conditions. ";
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

  <section id="flowSystemsHeading" class="mb-2 text-center text-md-left">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-3">Flow Systems</h1>
          <hr class="my-2">
          <h2>ECIS Flow Systems</h2>
        </div>
      </div>
    </div>
  </section><!-- /flowSystemsHeading -->

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
                <img class="d-block w-100" src="public/img/pFlow1.jpg" alt="ECIS p-Flow Peristaltic Pump">
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="public/img/pFlow2.jpg" alt="ECIS p-Flow Peristaltic Pump">
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="public/img/pFlow3.jpg" alt="ECIS p-Flow Peristaltic Pump">
              </div>

            </div>
            <a class="carousel-control-prev" data-scroll-ignore data-toggle="tab" href="#carouselExampleIndicators"
              role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" data-scroll-ignore data-toggle="tab" href="#carouselExampleIndicators"
              role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

        </div>

        <div class="col-lg-7 text-center text-md-left mt-4">
          <h2>Description</h2>
          <hr class="mt-1">
          <p>
            In terms of in vitro experiments, it is paramount in the scientific community to mimic the natural
            environment to the best of our abilities. In the case of endothelial cells, providing fluid dynamics to the
            experiments brings us closer to allowing the cells to behave as they would in the vascular system. That’s
            why Applied Biophysics is now providing the ECIS p-Flow Peristaltic Pump addition to the ECIS system to
            collect automated, real-time data of endothelial cells under fluidic shear stress, bringing new meaning to
            “go with the flow”.
          </p>
          <a href="#dataSheets" class="btn btn-outline-success productBtn mr-0 mr-md-1" role="button">Download Data
            Sheet</a>
          <!-- <a href="#" class="btn btn-success productBtn" role="button">Order Info</a> -->
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
            The ECIS Z Theta instrument can be equipped with the ECIS p-Flow Peristaltic Pump option specifically
            designed for researchers who wish to employ ECIS measurements to study the behavior of cells under flow
            conditions. A variety of flow arrays are available: a single channel (0.4 x 5 x 50mm) which has 8
            electrodes, a six channel with one electrode per channel, and a &quot;Y&quot; channel to simulate vessel
            branching. Various combinations of channel heights and types of electrodes (1E or 10E) are also available.
          </p>

          <img class="img-fluid py-5 d-block mx-auto" src="public/img/pflowChannel.jpg" alt="pFlow Channels">

          <h5 class="mt-4">Benefits</h5>
          <ul class="list-unstyled mt-3 ml-0 ml-md-3">
            <li>- Automated measurements of cell proliferation, morphology, barrier function, migration, ect. under flow
              conditions</li>
            <li>- Single channel, six channel, or angled channel (“Y” channel) array selections</li>
            <li>- Adjustable flow rates with reversable direction control</li>
            <li>- Laminar and pulsed flow options</li>
            <li>- Data recorded and visualized in real time under incubator conditions</li>
            <li>- Long-term data collection capabilities</li>
            <li>- User friendly software</li>
            <li>- Data output in CSV or graphical (jpg, tif)</li>
          </ul>
          <h5 class="mt-4">p-Flow Peristaltic Pump Kit Includes:</h5>
          <ul class="list-unstyled mt-3 ml-0 ml-md-3">
            <li>- Pump</li>
            <li>- 15V DC, 1.2A input power supply</li>
            <li>- USB cable</li>
            <li>- 3mm ID, 1mm wall thickness bioprene tubing (10m)</li>
            <li>- (2) 25ml bottles with caps and luer lock exit ports</li>
            <li>- 10 pack Red N Lock Ring to 1/8&quot; (3.2mm) barb</li>
            <li>- 10 Male slip Luer to female Luer</li>
          </ul>
          <p class="mt-4">
            Flow can be programmed from slow to high rates yielding shear stress similar to that experienced by
            endothelial cells in differing areas of the vascular system in vivo. In addition to steady laminar flow, the
            flow programming also includes the ability to generate pulsed flows of different periods and with varying
            flow rates.
          </p>
          <p class="mt-4">
            Although only one or two pumps are required for many ECIS applications, multiple pumps can be connected
            together via a USB hub, all controlled independently by the software. The ECIS Z Theta instruments can also
            be equipped with an elevated field module which allows for electroporation and/ or cell migration
            measurements, via <a class="text-dark link" href="cellMigration.php">automated wound-healing</a> assays,
            under flow conditions.
          </p>
          <p class="mt-4">
            The Model ECIS p-Flow can be controlled manually to adjust the rate of flow rate from 70 ul/min to 20
            ml/min. Direction of the pump can also be adjusted via a toggle switch or controlled automatically via the
            ECIS software to change the direction of the flow.
          </p>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col">

          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active text-dark" id="specs-tab" data-scroll-ignore data-toggle="tab" href="#specs"
                role="tab" aria-controls="specs" aria-selected="false">Specifications</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link text-dark" id="video-tab" data-scroll-ignore data-toggle="tab" href="#video" role="tab"
                aria-controls="video" aria-selected="false">Video</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" id="options-tab" data-scroll-ignore data-toggle="tab" href="#options"
                role="tab" aria-controls="options" aria-selected="false">Options</a>
            </li> -->
          </ul>

          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="specs" role="tabpanel" aria-labelledby="specs-tab">
              <p class="mt-4">
                <ul class="list-unstyled mt-3 ml-0 ml-md-3">
                  <li>- Maximum Flow Rate with 3mm ID tubing: 20ml/min</li>
                  <li>- Minimum Flow Rate with 3mm ID tubing: 70ul/min (1.2uL/sec)</li>
                  <li>- Flow Rate resolution with 3mm ID tubing: 70ul/min from -20ml/min to +20ml/min</li>
                  <li>- Max ramp rate 0-20ml/min: 150msec (forward or reverse)</li>
                  <li>- Full forward to full reverse, -20ml/min to +20ml/min: 400msec</li>
                  <li>- Pump Speed: -60 to +60 RPM stepper driven motor</li>
                  <li>- Pump Resolution: 1024 increments/rev</li>
                  <li>- Control Input: USB or RS232</li>
                  <li>- Dimensions: 4.12&quot;W x 4.12&quot;H x 6.25&quot;L</li>
                  <li>- Case: Powder Coated Aluminum</li>
                </ul>
              </p>
            </div>
            <!-- <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
              <p class="mt-4">
                <div class="youtubeEmbed" id="5Rui4xG5Nr0"></div>
              </p>
            </div>
            <div class="tab-pane fade" id="options" role="tabpanel" aria-labelledby="options-tab">
              <p class="mt-4">Descriptions and links of optional add-on products and/or training</p>
            </div> -->
          </div>
        </div>
      </div>

      <div id="dataSheets" class="row mt-5">
        <div class="col">
          <h2>Data Sheets <i class="far fa-file-pdf ml-1"></i></h2>
          <hr class="mt-1">
          <a class="text-dark manual-link" href="public/pdf/P-FlowPumpManualRevD.pdf" target="_blank">ECIS p-FLOW
            Peristaltic Pump Manual</a>
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
</body>

</html>
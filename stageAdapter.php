<?php
  $title = "ECIS Array Stage Adapters - Applied BioPhysics";
  $metaDesc = "Array Stage Adapters by Applied BioPhysics allow simultaneous ECIS measurements and visualization with an
  inverted tissue-culture microscope of cells cultured in 8-well ECIS Arrays.";
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

  <section id="stageAdapterHeading" class="mb-2 text-center text-md-left">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-3">Array Stage Adapter</h1>
          <hr class="my-2">
          <h2>View Cell Activity</h2>
        </div>
      </div>
    </div>
  </section><!-- /stageAdapterHeading -->

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
                <img class="d-block w-100" src="public/img/stageAdapter1.jpg" alt="ECIS Array Stage Adapter">
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="public/img/stageAdapter2.jpg" alt="ECIS Array Stage Adapter">
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="public/img/stageAdapter3.jpg" alt="ECIS Array Stage Adapter">
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
            ECIS systems typically quantify data in real time under incubator conditions and report the data to the ECIS
            software, but the cells may be viewed with an inverted tissue culture microscope while collecting ECIS data
            simultaneously. With the ECIS Array Stage Adapter, researchers can view activity of their cells while
            collecting data in real time.
          </p>
          <!-- <a href="#dataSheets" class="btn btn-outline-success productBtn mr-0 mr-md-1" role="button">Download Data
            Sheet</a> -->
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
            Applied Biophysics offers a microscope stage adapter which fits into a standard inverted manual or motorized
            microscope stage with a plate opening dimensions of 160mm x 110mm. The stage adapter accepts two 8 well ECIS
            arrays and includes the ECIS electrical clamps with 152 cm cables to connect to the ECIS controller. This
            allows simultaneous optical viewing and impedance measurement of cell activity.
          </p>
          <h5 class="mt-4">Benefits</h5>
          <ul class="list-unstyled mt-3 ml-0 ml-md-3">
            <li>- Optical viewing of cells during ECIS data accumulation</li>
            <li>- Fits standard inverted microscope stages</li>
          </ul>
          <h5 class="mt-4">Adapter Includes:</h5>
          <ul class="list-unstyled mt-3 ml-0 ml-md-3">
            <li>- Stage adapter</li>
            <li>- ECIS electrical clamps w/cables</li>
          </ul>
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
                  <li>- Platform: 9.5 x 13.5 cm</li>
                  <li>- Base: 10.9 x 16 cm</li>
                  <li>- Cable: 152 cm</li>
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

      <!-- <div id="dataSheets" class="row mt-5">
        <div class="col">
          <h2>Data Sheets <i class="far fa-file-pdf ml-1"></i></h2>
          <hr class="mt-1">
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
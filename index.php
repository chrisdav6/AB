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
    
    <?php include_once "includes/navbar.php" ?>

    <section id="logo" class="py-4 mt-4 mt-md-0 border-bottom">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-3 col-md-4 text-center text-md-left">
            <a href="/">
              <img src="public/img/abLogo.png" class="img-fluid" alt="Applied Biophysics Logo">
            </a>
          </div>
          <div class="col-lg-9 col-md-8 text-right d-none d-md-block">
            <h3>LET'S TALK APPLICATIONS</h3>
            <h4><a href="tel:866-301-3247"><i class="fas fa-phone-square fa-flip-horizontal"></i> 866-301-ECIS (3247)</a></h4>
            <p class="mb-0">Hours 8am-5pm EST</p>
          </div>
        </div>
      </div>
    </section> <!-- /logo -->

    <section id="carousel" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">

            <div id="carouselExampleIndicators" class="carousel slide border" data-interval="false">
              <div class="carousel-inner">

                <div class="carousel-item active">
                  <img class="d-block w-100" src="public/img/slide1_image.jpg" alt="TEER 24 Barrier Function Measurement System">
                  <div class="carousel-caption text-dark">
                    <h2 class="mb-0 mb-md-2">TEER 24</h5>
                    <hr>
                    <h3>Barrier Function Measurement System</h3>
                    <p class="py-0 py-lg-2 d-none d-md-block">This system provides repeatable, label free automated TEER measurements to electrically monitor the barrier function of epithelial and endothelial cells as they are grown in normal CO<sup>2</sup> high humidity incubators.</p>
                    <div class="mt-3">
                      <a href="teer24.php" class="btn btn-dark btn-sm" role="button">Read More</a> <a href="#" class="btn btn-success btn-sm" role="button">Order Info</a>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="public/img/slide2_image.jpg" alt="ECIS Cultureware">
                  <div class="carousel-caption text-dark">
                    <h2 class="mb-0 mb-md-2">ECIS</h5>
                    <hr>
                    <h3>Cultureware</h3>
                    <p class="py-0 py-lg-2 d-none d-md-block">Sterile disposable electrode arrays containing gold film electrodes delineated with an insulating film. Well top assembly is made of polystyrene. The gold layer is thin enough to allow microscopic observation of the cells using a standard inverted tissue culture microscope.</p>
                    <div class="mt-3">
                      <a href="#" class="btn btn-dark btn-sm" role="button">Read More</a> <a href="#" class="btn btn-success btn-sm" role="button">Order Info</a>
                    </div>
                  </div>
                </div>

                <div class="carousel-item">
                  <img class="d-block w-100" src="public/img/slide3_image.jpg" alt="ECIS 8W TransFilter Adapter">
                  <div class="carousel-caption text-dark">
                    <h2 class="mb-0 mb-md-2">ECIS</h5>
                    <hr>
                    <h3>8W TransFilter Adapter</h3>
                    <p class="py-0 py-lg-2 d-none d-md-block">The 8W TransFilter is designed to measure the TEER of cell layers grown on 24 well membrane filter inserts available from a broad range of manufacturers. The 8W TransFilter accepts up to eight 6.5mm dia. cell culture inserts.</p>
                    <div class="mt-3">
                      <a href="#" class="btn btn-dark btn-sm" role="button">Read More</a> <a href="#" class="btn btn-success btn-sm" role="button">Order Info</a>
                    </div>
                  </div>
                </div>

              </div>
              <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a> -->
            </div>

          </div>
        </div>
      </div>
    </section> <!-- /carousel -->

    <section id="events" class="py-5">
      <div class="container">
        <div class="row">

          <div class="col-md-4 mb-4 mb-md-0">
            <a href="#" class="text-dark">
              <div class="card text-center">
                <div class="card-body">
                  <h3 class="card-title">Webinars</h3>
                  <h4 class="mb-0">Oct 9, 2018</h4>
                  <p class="card-text mb-0">ECIS Theory</p>
                  <p class="card-text mb-0">11:00AM EST</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4 mb-4 mb-md-0">
            <a href="#" class="text-dark">
              <div class="card text-center">
                <div class="card-body">
                  <h3 class="card-title">Tradeshows</h3>
                  <h4 class="mb-0">Oct 14-18, 2018</h4>
                  <p class="card-text mb-0">Vascular Biology 2018</p>
                  <p class="card-text mb-0">Newport, RI</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-4">
            <a href="#" class="text-dark">
              <div class="card text-center">
                <div class="card-body">
                  <h3 class="card-title">ECIS School</h3>
                  <h4 class="mb-0">Oct 25-26, 2018</h4>
                  <p class="card-text mb-0">2 Day Course</p>
                  <p class="card-text mb-0">Troy, NY</p>
                </div>
              </div>
            </a>
          </div>

        </div>
      </div>
    </section> <!-- /events -->

    <?php include_once "includes/footer.php" ?>

    <!-- Scroll to top -->
    <button class="btn btn-outline-dark" id="scrollBtn"><i class="fas fa-angle-up fa-2x"></i></button>
    
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <script src="public/js/util.js"></script>
    <script src="public/js/smooth-scroll.min.js"></script>
    <script src="public/js/scripts.js"></script>
  </body>
</html>
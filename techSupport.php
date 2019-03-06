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

    <section id="techSupportHeading" class="text-center text-md-left">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="mb-0">Technical Support</h1>
            <hr class="mt-0">
          </div>
      </div>
    </section><!-- /techSupportHeading -->

    <section id="techSupportContent" class="py-4 mb-5">
      <div class="container text-center text-md-left">

        <div class="row">
          <div class="col-md-6">
            <p>
              At Applied BioPhysics we understand that the journey of scientific research can be a very bumpy endeavor. That’s why we
              want to make sure that using the ECIS technology is a smooth, hassle-free process from beginning to end by providing
              manuals, journal articles, videos, and even user notes to aid in your travels on the road to discovery.
            </p>
          </div>
          <div class="col-md-6">
            <img class="img-fluid" src="public/img/techSupportArray.jpg" alt="Applied BioPhysics Array">
          </div>
        </div>

        <h4 class="mt-5 mb-4 secondary-title">Manuals</h4>

        <p><a href="public/pdf/ECIS_Operation_Manual_v1_2_123.pdf" class="link text-dark" target="_blank">ECIS Operation Manual</a></p>
        
      </div>
    </section><!-- /techSupportContent -->

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
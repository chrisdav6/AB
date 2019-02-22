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

    <section id="tradeshowsHeading" class="text-center text-md-left">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="mb-0">Tradeshows and Events</h1>
            <hr class="mt-0">
          </div>
        </div>
    </section><!-- /tradeshowsHeading -->

    <section id="tradeshowsContent" class="py-4 mb-4">
      <div class="container text-center text-md-left">

        <p class="tradeshowIntro mb-1">
          What better way to learn more about the power of ECIS than joining us at scientific events around the world!
        </p>

        <p>Below are a list of upcoming shows that Applied BioPhysics will be attending in 2019:</p>

        <h4 class="my-4 secondary-title">March 10-14, 2019</h4>

        <div class="tradeshow">
          <div class="row align-items-center">
              <div class="col-lg-4">
                <img class="img-fluid" src="public/img/SOTMeeting.png" alt="SOT Banner">
              </div>
          
            <div class="col-lg-8">
              <a href="https://www.toxicology.org/events/am/AM2019" class="tradeshow-link" target="_blank">58th Annual SOT Annual
                  Meeting - Baltimore, MD</a>
              <p>More than 80 Scientific Sessions and 2,100 Abstract Presentations</p>
            </div>
          
          
        </div>

      </div>
    </section><!-- /tradeshowsContent -->

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
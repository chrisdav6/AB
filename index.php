<?php
  $title = "Applied Biophysics";
  $metaDesc = "Label-free Real-time Automated Cell-based assays powered by the technology of ECIS. Developed by Nobel laureate Ivar
    Giaever and Charles Keese.";
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="public/css/bootstrap.css" type="text/css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="public/css/style.css">
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="public/img/favicon.ico">
  <title><?php echo $title; ?></title>
</head>

<body class="d-flex flex-column">

  <!-- <div class="holiday">
    <div class="container py-3 text-center">
      <h5 class="mb-0">
        <i class="fas fa-holly-berry mr-3"></i>
        Applied Biophyics will be closed for the holidays December 20th at 12PM and will reopen on January 2, 2025
        <i class="fas fa-holly-berry ml-3"></i>
      </h5>
    </div>
  </div> -->

  <!-- <div class="anniversary">
    <div class="container py-3 text-center">
      <h5 class="mb-0">
        Applied Biophysics, the creator of ECIS<sup>®</sup>, is proud to celebrate 33 years in business!
      </h5>
    </div>
  </div> -->

  <!-- <div class="holiday">
    <div class="container py-3 text-center">
      <h5 class="mb-0">
        Applied Biophysics will be closed on October 14, 2024, for Columbus Day
      </h5>
    </div>
  </div> -->

  <!-- <div class="holiday">
    <div class="container py-3 text-center">
      <h5 class="mb-0">
        <i class="far fa-snowflake mr-2"></i>
        Applied Biophyics will be closed due to the winter snowstorm - Tuesday, March 14th
        <i class="far fa-snowflake ml-2"></i>
      </h5>
    </div>
  </div> -->

  <div class="pcArrays">
    <div class="container py-3 text-center">
      <h5 class="mb-0">
        Due to an equipment issue, PC arrays are currently temporarily unavailable.<br />We apologize for the inconvenience and are working to restock as soon as possible. Thank you for your patience!
      </h5>
    </div>
  </div>

  <?php include_once "includes/navbar.php"; ?>
  <?php include_once "includes/logo.php"; ?>

  <!-- <section id="notification">
    <div class="container text-center">
      <p>Measurement of Cytopathic Effects from Viral Infections</p>
    </div>
  </section> -->

  <section id="hero" class="d-flex">
    <div class="container my-auto">
      <div class="row">
        <div class="col pt-5">
          <h3 class="text-light text-center hero-text">
            ECIS<sup>®</sup>, the label free, non-invasive method to electronically monitor cells grown in tissue culture.
          </h3>
        </div>
      </div>
      <div class="row pt-4 pb-5">
        <div class="col d-flex flex-wrap text-center">
          <a class="application-link mb-2 flex-fill" href="teer.php">TEER</a>
          <a class="application-link mb-2 flex-fill" href="teerBarrierFunction.php">Barrier Function</a>
          <a class="application-link mb-2 flex-fill" href="cellProliferation.php">Cell Proliferation</a>
          <a class="application-link mb-2 flex-fill" href="cellMigration.php">Cell Migration</a>
          <a class="application-link mb-2 flex-fill" href="cytotoxicity.php">Cytotoxicity</a>
          <a class="application-link mb-2 flex-fill" href="virology.php">Virology</a>
          <!-- <a class="application-link mb-2 flex-fill" href="signalTransduction.php">Signal Transduction</a> -->
        </div>
      </div>
    </div>
  </section>

  <section id="events" class="py-5 border-top">
    <div class="container">
      <div class="row">

        <div class="col-md-4 mb-4 mb-md-0">
          <a href="webinars.php" class="text-dark">
            <div class="card text-center">
              <div class="card-body">
                <h3 class="card-title">Webinars</h3>
                <h4 class="mb-1">July 8, 2025</h4>
                <p class="card-text mb-0">Cell Attachment and Spreading Measurements</p>
                <p class="card-text mb-0">11:00AM EDT</p>
                <!-- Extra Event -->
                <!-- <h4 class="mb-1 mt-3">May 17, 2022</h4>
                <p class="card-text mb-0">Cytotoxicity Assays with the ECIS<sup>&reg;</sup> CP96 Cell Population Monitor</p>
                <p class="card-text mb-0">11:00AM EDT</p> -->
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4 mb-4 mb-md-0">
          <a href="tradeShows.php" class="text-dark">
            <div class="card text-center">
              <div class="card-body">
                <h3 class="card-title">Tradeshows</h3>
                <h4 class="mb-1">No Scheduled Shows</h4>
                <p class="card-text mb-0">Please check back soon.</p>
                <!-- <h4 class="mb-1">February 3-7, 2024</h4>
                <p class="card-text mb-0">SLAS 2024</p>
                <p class="card-text mb-0">Boston, MA</p> -->
              </div>
            </div>
          </a>
        </div>

        <div class="col-md-4">
          <a href="ecisSchool.php" class="text-dark">
            <div class="card text-center">
              <div class="card-body">
                <h3 class="card-title">ECIS School</h3>
                <h4 class="mb-1">Date: TBD</h4>
                <p class="card-text mb-0">2 Day Course</p>
                <p class="card-text mb-0">Troy, NY</p>
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section> <!-- /events -->

  <?php include_once "includes/footer.php"; ?>

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
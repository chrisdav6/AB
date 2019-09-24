<?php
  $title = "IBCA Meeting - Applied BioPhysics";
  $metaDesc = "A new tradition began in 2011 with the first Impedance Based Cellular Assays Meeting held in
  Regensburg, Germany with the purpose of sharing ideas and research using impedance-based methods.";
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

  <section id="ibcaHeading" class="text-center text-md-left">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="mb-0">IBCA Meeting</h1>
          <hr class="mt-0">
        </div>
      </div>
    </div>
  </section><!-- /ibcaHeading -->

  <section id="ibcaContent" class="py-4 mb-5">
    <div class="container text-center text-md-left">

      <p class="mb-5">
        A new tradition began in 2011 with the first "Impedance Based Cellular Assays Meeting" held in Regensburg,
        Germany. The
        purpose of these meetings is to share ideas and research discoveries of all people using impedance-based methods
        to
        develop cellular assays.
      </p>

      <div class="row text-center">
        <div class="col-lg-4 col-md-6 mb-4">
          <a href="http://www.ibca2018.net" class="text-dark ibcaLink" target="_blank">
            <div class="card">
              <img src="public/img/ibca2018.jpg" class="card-img-top" alt="IBCA Meeting 2018">
              <div class="card-body">
                <h5 class="card-title mb-0">2018</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <a href="http://www.ibca2016.net" class="text-dark ibcaLink" target="_blank">
            <div class="card">
              <img src="public/img/ibca2016.jpg" class="card-img-top" alt="IBCA Meeting 2016">
              <div class="card-body">
                <h5 class="card-title mb-0">2016</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <a href="http://www.ibca2013.net" class="text-dark ibcaLink" target="_blank">
            <div class="card">
              <img src="public/img/ibca2013.jpg" class="card-img-top" alt="IBCA Meeting 2013">
              <div class="card-body">
                <h5 class="card-title mb-0">2013</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <a href="http://www.ibca2011.net" class="text-dark ibcaLink" target="_blank">
            <div class="card">
              <img src="public/img/ibca2011.jpg" class="card-img-top" alt="IBCA Meeting 2011">
              <div class="card-body">
                <h5 class="card-title mb-0">2011</h5>
              </div>
            </div>
          </a>
        </div>
      </div>

    </div>
  </section><!-- /ibcaContent -->

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
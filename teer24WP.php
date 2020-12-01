<?php
  $title = "The TEER24 Cell Permeability Assay";
  $metaDesc = "Description and data sample from the all new TEER24";
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

  <section id="productHeading" class="text-center text-md-left">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-3">TEER24</h1>
          <hr class="my-2">
          <h2>Continuous 24 Well TEER Measurements</h2>
        </div>
      </div>
    </div>
  </section><!-- /productHeading -->

  <section id="productInfo" class="py-5 mb-5 text-center text-md-left">
    <div class="container">

      <div class="row mt-4 justify-content-between">
        <div class="col-md-7 pb-4 pb-md-0">
          <h3>Click below to download whitepaper</h3>
          <hr class="mb-5">
          <a href="public/pdf/ABPTEER24Whitepaper.pdf" target="_blank" data-toggle="tooltip" data-placement="left" title="TEER24 White Paper">
            <img class="img-fluid w-100" src="public/img/teer24WP.jpg" alt="Download TEER24 White Paper">
          </a>
          <div class="d-flex justify-content-center mt-2">
            <small>(Click to download white paper)</small>
          </div>
        </div>
        <div class="col-md-4 mt-5 mt-md-0">
          <h3>Submit to learn more</h3>
          <hr>
          <form class="mt-5" action="/">
            <div class=" form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control form-control-lg" name="name" id="name">
            </div>
            <div class=" form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control form-control-lg" name="email" id="email">
            </div>
            <button id="teer24WPBtn" class="btn ecisBtn btn-lg submit-btn mt-4">Submit</button>
          </form>
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
  <script src="public/js/formsHandling.js"></script>
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
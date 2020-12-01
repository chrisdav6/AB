<?php
  $title = "Partner Companies - Applied Biophysics";
  $metaDesc = "Applied BioPhysics teams up with other companies to aid in providing quality research and products to
  ECIS users.";
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

  <section id="companyHeading" class="text-center text-md-left">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="mb-0">Partner Companies</h1>
          <hr class="mt-0">
        </div>
      </div>
    </div>
  </section><!-- /companyHeading -->

  <section id="partnerContent" class="py-4 mb-5">
    <div class="container text-center text-md-left">

      <div class="company mt-4">
        <div class="row mb-3">
          <div class="col-lg-4 col-md-6">
            <img class="img-fluid" src="public/img/vecTechnologiesLogo.png" alt="VEC Technologies Logo">
          </div>
          <div class="col-lg-8 col-md-6 mt-4 mt-md-0">
            <h3><a href="http://www.vectechnologies.com" class="link text-dark" target="_blank">VEC Technologies
                Inc.</a></h3>
            <p>
              One University Place<br>
              Rensselaer, NY 12144-3456<br>
              Tel: 518-257-2010<br>
              Fax: 518-257-2012
            </p>
            <p>
              VEC Technologies, Inc. is a manufacturer of normal endothelial cells and endothelial cell support
              products. Their state-of-the-art laboratory
              facilities are located at the University of Albany's East Campus Biotechnology Incubator Facility in
              Rensselaer, New York
            </p>
          </div>
        </div>
      </div>

      <div class="company mt-5">
        <div class="row mb-3">
          <div class="col-lg-4 col-md-6">
            <img class="img-fluid" src="public/img/atccLogo.png" alt="ATCC Logo">
          </div>
          <div class="col-lg-8 col-md-6 mt-4 mt-md-0">
            <h3><a href="https://www.atcc.org" class="link text-dark" target="_blank">ATCC The Global Bioresource
                Center</a></h3>
            <p>
              10801 University Boulevard<br>
              Manassas, Virginia 20110-2209<br>
              Tel: 703-365-2723<br>
              Fax: 703-365-2750
            </p>
            <p>
              ATCC is a private, nonprofit biological resource center (BRC) and research organization whose mission
              focuses on the acquisition, authentication,
              production, preservation, development and distribution of standard reference microorganisms, cell lines
              and other materials for research in the life sciences.
            </p>
          </div>
        </div>
      </div>

      <div class="company mt-5">
        <div class="row mb-3">
          <div class="col-lg-4 col-md-6">
            <img class="img-fluid" src="public/img/ibidiLogo.png" alt="ibidi Logo">
          </div>
          <div class="col-lg-8 col-md-6 mt-4 mt-md-0">
            <h3><a href="https://ibidi.com" class="link text-dark" target="_blank">Integrated BioDiagnostics</a></h3>
            <p>
              Am Klopferspitz 19<br>
              D-82152 Martinsreid<br>
              Germany<br>
              Tel: 49 (0)89 / 2180 64 19<br>
              Fax: 49 (0)89 / 2180 135 39
            </p>
            <p>
              In partnership with Integrated Biodiagnostics, Applied BioPhysics now offers ibidi µ-Slide. ibidi is a
              leading supplier for functional cell-based
              assays and advanced products for cellular microscopy. ibidi is located in Martinsried, Germany, close to
              Munich and the US headquarters, ibidi USA
              Inc., is located in Madison, Wisconsin.
            </p>
          </div>
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
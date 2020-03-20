<?php
  $title = "Cytotoxicity with ECIS - Applied BioPhysics";
  $metaDesc = "Cytotoxicity effects on cells have been notoriously difficult to measure simply because the methods have been qualitative in nature rather than quantitative. With ECIS® technology, cell toxicology and viability can be quantitatively measured in real-time, continuously and label free, all while under incubated conditions.";
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

  <section id="applicationHeading" class="text-center text-md-left">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="mb-0">Cytotoxicity</h1>
          <hr class="mt-0">
        </div>
      </div>
    </div>
  </section><!-- /applicationHeading -->

  <section id="applicationContent" class="py-4 text-center text-md-left">
    <div class="container">

      <p>
        Cytotoxicity effects on cells have been notoriously difficult to measure simply because the methods have been qualitative in nature rather than quantitative. With ECIS<sup>®</sup> technology, cell toxicology and viability can be quantitatively measured in real-time, continuously and label free, all while under incubated conditions.
      </p>

      <div class="row">
        <div class="col">
          <h4 class="mt-4 mb-3 secondary-title">Overview</h4>

          <div class="row">
            <div class="col-md-6">
              <p>
                ECIS<sup>®</sup> technology has long been used to detect proliferation and viability of cells by measuring electrical impedance changes as cells grow over gold electrodes at the bottom of culture dishes. Since cell proliferation can be detected through electrical impedance as these cells attach spread over the electrodes, so can cell death be detected as the cells detach from the electrodes. Through ECIS<sup>®</sup> software, as cells attach and spread, the impedance levels will rise and reach a plateau representing confluency, and when a cytotoxic substance is introduced such as a pathogen, the impedance levels will drop as the cells die and detach from the gold electrode substrate as shown in the A & B diagrams. The graph to the right shows an example of this where A549 adenocarcinomic lung epithelial cells were treated with MRSA. As you can see in the graph, when the cells were treated with the pathogen the cytotoxic effects take place and the impedance reduces down to cell-free levels indicating a cleared electrode from cell death.
              </p>
            </div>
            <div class="col-md-6">
              <img class="img-fluid w-100 my-3 my-md-0" src="public/img/cytotoxicity.jpg" alt="Cytotoxicity">
            </div>
          </div> 

        </div><!-- /col -->
      </div><!-- /row -->

    </div><!-- /container -->
  </section><!-- /applicationContent -->

  <section id="applicationReferences" class="py-4 text-center text-md-left mb-5">
    <div class="container">

      <div class="row">
        <div class="col mb-4">
          <h4 class="mt-4 mb-0">Key References</h4>
          <hr class="mt-0 mb-4">
          <p>
            <strong>An evaluation of the impact of clinical bacterial isolates on epithelial cell monolayer integrity by the electric Cell-Substrate Impedance Sensing (ECIS) method.</strong>, Nahid, Md A.,Campbell, Carmen E.,Fong, Keith S.K.,Barnhill, Jason C.,Washington, Michael A.  (2020).  Journal of Microbiological Methods  169 105833 doi:10.1016/j.mimet.2020.105833 [Abstract]  
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <h4 class="mt-4 mb-0">Related Cytotoxicity ECIS Publications</h4>

          <hr class="mt-0 mb-4">

          <p>To view publications in cytotoxicity please visit our <a class="link text-dark" href="publications.php">publications page</a></p>
        </div>
      </div>

    </div>
  </section><!-- /applicationReferences -->

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
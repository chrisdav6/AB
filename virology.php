<?php
  $title = "Virology with ECIS - Applied BioPhysics";
  $metaDesc = "Cytopathic effects from viral infections of cells have long been difficult to quantify due to the subjective nature of monitoring cell viability. The advantage of ECIS® technology is the ability to monitor cell behavior (e.g. growth, toxicity, cytopathic effects) quantitatively in real-time and label free.";
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
          <h1 class="mb-0">Cytopathic Effects: Virology</h1>
          <hr class="mt-0">
        </div>
      </div>
    </div>
  </section><!-- /applicationHeading -->

  <section id="applicationContent" class="py-4 text-center text-md-left">
    <div class="container">

      <p>
        Cytopathic effects from viral infections of cells have long been difficult to quantify due to the subjective nature of monitoring cell viability. The advantage of ECIS<sup>®</sup> technology is the ability to monitor cell behavior (e.g. growth, toxicity, cytopathic effects) quantitatively in real-time and label free. When cells grown on the gold electrodes of ECIS<sup>®</sup> arrays show changes from viral infections in vitro, their morphology and viability will be detected from the change in impedance measured by the ECIS<sup>®</sup> instruments.

      </p>

      <div class="row">
        <div class="col">
          <h4 class="mt-4 mb-3 secondary-title">Overview</h4>

          <div class="row">
            <div class="col">
              <p>
                When detecting cytopathic effects in cell cultures, the researcher needs the ability to monitor cell viability continuously and in real-time. With ECIS<sup>®</sup> technology, they can do just that. ECIS<sup>®</sup> technology monitors cell growth and death by the changing impedance that happens well cells attach and spread and then detach from the gold electrodes at the bottom of ECIS<sup>®</sup> well arrays when viral pathogens are introduced. Through the ECIS software, impedance changes are monitored in graphical form, and when cells attach and spread over the gold electrodes, the impedance rises to confluent levels indicated by a plateau in the graphical plot.
              </p>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-md-6">
              <ul class="application-list list-unstyled mt-3">
                <li>- Cells are seeded into ECIS<sup>®</sup> electrode arrays</li>
                <li>- Cells are grown to confluency. This will be represented by a plateau in the ECIS<sup>®</sup> software graph.</li>
                <li>- Cells are then treated with specified virus</li>
                <li>- Cells will exhibit cytopathic effects by changes in morphology and viability as cells reduce their barrier function and detach from the gold electrodes</li>
                <li>- These cytopathic effects can be viewed in real-time as changes in impedance on the ECIS® software graph</li>
              </ul>
            </div>
            <div class="col-md-6">
              <img class="img-fluid w-100 my-3 my-md-0" src="public/img/virology1.jpg" alt="Virology">
            </div>
          </div>

          <div class="row mt-5 pb-5">
            <div class="col-md-6 order-last order-md-first">
              <figure class="figure w-100">
                <img class="img-fluid w-100 my-3 my-md-0" src="public/img/virology2.jpg" alt="Virology">
                <figcaption class="figure-caption text-center">(Campbell, Laane, Haugarvoll, & Giaever, 2007)</figcaption>
              </figure>
            </div>
            <div class="col-md-6">
              <p>When cells are displaying cytopathic effects following their infection with viruses, the ECIS<sup>®</sup> instrumentation detects these changes in real time.</p>
              <p>The graph on the left is an example of this, where endothelioma papulosum cyprini cells (EPC) were exposed to infectious hematopoietic necrosis virus (IHNV) in 10-fold dilutions. The graph represents resistance changes that are clearly dependent upon the titer of the virions applied to the cell layers. The black trace is resistance from an uninfected control.</p>
            </div>
          </div>

          <div class="row mt-5 d-flex justify-content-center">

            <div class="col-md-4">
              <a class="text-dark link" href="ztheta.php">
                <div class="card mb-3">
                  <img class="card-img-top px-3 pt-3" src="public/img/zThetaLarge1.jpg" alt="ECIS zTheta">
                  <div class="card-body text-center">
                    <h3>ECIS Z-theta</h3>
                    <p class="card-text">All-in-One Cell Monitor</p>
                  </div>
                </div>
              </a>
            </div>

            <!-- <div class="col-md-4">
              <a class="text-dark link" href="cp96.php">
                <div class="card mb-3">
                  <img class="card-img-top px-3 pt-3" src="public/img/cp96Computer.jpg" alt="ECIS CP96">
                  <div class="card-body text-center">
                    <h3>ECIS CP96</h3>
                    <p class="card-text">Cell Population Monitor</p>
                  </div>
                </div>
              </a>
            </div> -->

            <!-- <div class="col-md-4">
              <a class="text-dark link" href="teer24.php">
                <div class="card mb-3">
                  <img class="card-img-top px-3 pt-3" src="public/img/teer24Station.jpg" alt="ECIS TEER24">
                  <div class="card-body text-center">
                    <h3>ECIS TEER24</h3>
                    <p class="card-text">Barrier Function Monitor</p>
                  </div>
                </div>
              </a>
            </div> -->

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
            <strong>Monitoring viral-induced cell death using electric cell-substrate impedance sensing..,</strong>Campbell, Carmen Elaine,Laane, Morten Motzfeldt,Haugarvoll, Erlend,Giaever, Ivar (2007). Biosensors & bioelectronics 23 (4) : 536-542 doi:10.1016/j.bios.2007.06.015 [Abstract]
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col">
          <h4 class="mt-4 mb-0">Related Virology ECIS Publications</h4>

          <hr class="mt-0 mb-4">

          <p>To view publications in virology please visit our <a class="link text-dark" href="publications.php">publications page</a></p>
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
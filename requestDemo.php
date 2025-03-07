<?php
  $title = "Request A Demo - Applied Biophysics";
  $metaDesc = "Applied BioPhysics (ABP) agrees to make available an ECIS instrument for a 4-week period to be used as a
  trial demonstration.";
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

  <section id="contactHeading" class="text-center text-md-left">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="mb-0">Request Demo System</h1>
          <hr class="mt-0">
        </div>
      </div>
    </div>
  </section><!-- /contactHeading -->

  <section id="requestDemoContent" class="py-4 mb-5">
    <div class="container text-center text-md-left">

      <h2 class="mb-4">Thank you for your interest in ECIS.</h2>

      <p class="requestIntro mb-4">
        Below are a few conditions along with requirements for a successful demonstration.
      </p>

      <p>Applied Biophysics (ABP) agrees to make available an ECIS instrument for a 4-week period.</p>

      <p>
        All equipment necessary for Electric Cell-substrate Impedance Sensing is provided by ABP, which includes: ECIS controller, array station, computer and start up supply of arrays. Additional arrays are available for purchase.
      </p>

      <p>
        ABP agrees to pay the shipping from ABP to your location and requests that the researcher, should the decision be made not to keep the instrument, pays the return shipping fees.</p>

      <p>
        ABP requests at least one researcher be dedicated to the operation and maintenance of the instrument. As the dedicated operator we request to speak with this researcher on a weekly basis to review data and system operation.
      </p>

      <h4 class="mt-5 mb-5 secondary-title">Request Demo Form</h4>

      <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScweWk3_5kejqKKxxnJ97zTbfv9pRpk0pO8ZKm8rdhvt9_EGA/viewform?embedded=true" width="100%" height="1000" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>

      <!--<form action="demoProcess.php" method="post" id="demoForm">

        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label for="name" class="text-left">Name</label>
              <input type="text" class="form-control form-control-lg" name="name" id="name" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="phone" class="text-left">Phone</label>
              <input type="text" class="form-control form-control-lg" name="phone" id="phone" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="email" class="text-left">Email</label>
              <input type="email" class="form-control form-control-lg" name="email" id="email" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control form-control-lg" name="message" id="message" rows="5"></textarea>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col d-flex flex-column">
            <div class="form-group d-none">
     
              <input type="text" class="form-control form-control-lg" name="fax" id="fax">
            </div>

            <button id="reqDemoBtn" class="btn ecisBtn btn-lg submit-btn mt-3 ml-auto">Submit</button>
            <i class="fas fa-spinner fa-2x fa-spin mt-4 ml-auto"></i>
-->
      <!--Initially hidden in the css-->
      <!-- <span class="submitMessage text-center mt-4 mb-3 ml-auto">Thank you, your demo request has been sent</span> -->
      <!--Initially hidden in the css-->
      <!-- </div>
        </div>

      </form> -->

    </div>
  </section><!-- /requestDemoContent -->

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
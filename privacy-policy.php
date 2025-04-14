<?php
  $title = "Privacy Policy - Applied BioPhysics";
  $metaDesc = "Privacy Policy - Applied BioPhysics";
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

  <?php include_once "includes/navbar.php"; ?>
  <?php include_once "includes/logo-sm.php"; ?>

  <section id="privacyHeading" class="text-center text-md-left">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="mb-0">Privacy Policy</h1>
          <hr class="mt-0">
        </div>
      </div>
    </div>
  </section><!-- /privacyHeading -->

  <section id="privacyContent" class="py-4 mb-5 text-center text-md-left">
    <div class="container">

      <div class="row">
        <div class="col">
          <p>
            Thank you for your interest in Applied Biophysics Inc. We value your privacy and are committed to protecting your personal information.
          </p>
          <p>By submitting forms on our website, you agree to share your information with Applied Biophysics Inc. so we can contact you regarding your interest in our products or services.</p>
        </div>
      </div>

      <div class="row pt-0 pt-md-5">
        <div class="col">
          <h2 class="mt-5 mt-md-0">What We Collect</h2>
          <p>
            We may collect the following information from this form:
          </p>
          <p>
            • Name
          </p>
          <p>
            • Job title
          </p>
          <p>
            • Company Name
          </p>
          <p>
            • Email Address
          </p>
          <p>
            • Phone number (if provided)
          </p>
          <p>
            • Any additional information you choose to share with us
          </p>
        </div>
      </div>

      <div class="row pt-0 pt-md-5">
        <div class="col">
          <h2 class="mt-5 mt-md-0">How We Use Your Information</h2>
          <p>
            The information you provide will be used to:
          </p>
          <p>
            • Respond to your inquiry
          </p>
          <p>
            • Provide relevant information about our products or services
          </p>
          <p>
            • Send occasional updates, promotions, or educational content (you can opt out at any time)
          </p>
        </div>
      </div>

      <div class="row pt-0 pt-md-5">
        <div class="col">
          <h2 class="mt-5 mt-md-0">Data Protection</h2>
          <p>
            We do not sell or rent your personal data. Your information will be stored securely and only accessed by authorized personnel at Applied Biophysics Inc. or trusted service providers acting on our behalf.
          </p>
        </div>
      </div>

      <div class="row pt-0 pt-md-5">
        <div class="col">
          <h2 class="mt-5 mt-md-0">Your Rights</h2>
          <p>
            You may request to:
          </p>
          <p>
            • Access the personal data we hold about you
          </p>
          <p>
            • Correct any inaccuracies
          </p>
          <p>
            • Unsubscribe from communications at any time
          </p>
          <p>To make such a request or if you have any questions, please contact us at <a href="mailto:info@biophysics.com?subject=Applied Biophysics Privacy Policy">info@biophysics.com</a>.</p>
        </div>
      </div>

      <div class="row pt-0 pt-md-5">
        <div class="col">
          <h2 class="mt-5 mt-md-0">Updates to This Policy</h2>
          <p>
            We may update this privacy policy occasionally to reflect changes in our practices.
          </p>
        </div>
      </div>

    </div>
  </section><!-- /privacyContent -->

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
<?php
$title = "Publications Using ECIS - Applied BioPhysics";
$metaDesc = "ECIS systems have been used in over 700 publications world-wide with a variety of different
applications.";
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

  <section id="publicationsHeading" class="text-center text-md-left">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="mb-0">Publications</h1>
          <hr class="mt-0">
        </div>
      </div>
    </div>
  </section><!-- /publicationsHeading -->

  <section id="publicationsContent" class="py-4 mb-5">
    <div class="container text-center text-md-left">
      <!-- Bioz -->
      <object id="wobj-2050-q" type="text/html" data="https://www.bioz.com/v_widget_5_0/2050/?pt=6&ex=1" style="width:100%; height: 193px; background-color:[RGB Color];"></object>
      <div id="bioz-w-pb-2050-q-div" style="width: 100%"><a id="bioz-w-pb-2050" style="font-size: 12px;text-decoration:none;color:#476D85" href="https://www.bioz.com/" target="_blank"><img src="https://cdn.bioz.com/assets/favicon.png" style="width:11px;height:11px;vertical-align: baseline;padding-bottom:0px;margin-left:0px;margin-bottom:0px;float:none"> Powered by Bioz</a></div>
      <!-- /Bioz -->
    </div>
  </section><!-- /publicationsContent -->

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

  <!-- Bioz -->
  <script src="https://cdn.bioz.com/assets/bioz-w-api-5.0.min.js"></script>

</body>

</html>
<?php
  $title = "ECIS Software - Applied BioPhysics";
  $metaDesc = "Please provide info to receive the latest version of software for your Instrument. We will email the
  software link within 24 hrs, if required sooner, please call 518-880-6860.";
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

  <section id="softwareHeading" class="text-center text-md-left">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="mb-0">Software</h1>
          <hr class="mt-0">
        </div>
      </div>
    </div>
  </section><!-- /softwareHeading -->

  <section id="softwareContent" class="py-4">
    <div class="container text-center text-md-left">
      <div class="googleForm">
        <iframe onload="self.scrollTo(0,0)"
          src="https://docs.google.com/forms/d/e/1FAIpQLSfMiSfG9ajissHdku_e1Z9wyhCxNlRRig04K_zE44SxJMlQPQ/viewform?embedded=true"
          width="100%" height="2700" frameborder="0" marginheight="0" marginwidth="0" scrolling="no">Loading...</iframe>
      </div>

    </div>
  </section><!-- /softwareContent -->

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
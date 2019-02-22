<?php
$title = "Applied Biophysics";
$metaDesc = "Label-free Real-time Automated Cell-based assays powered by the technology of ECIS. Developed by Nobel laureate Ivar
    Giaever and Charles Keese ECIS uses impedance sensing to monitor the behavior of cells as they grow in culture.";
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

    <section id="tradeshowsHeading" class="text-center text-md-left">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="mb-0">Tradeshows and Events</h1>
            <hr class="mt-0">
          </div>
        </div>
    </section><!-- /tradeshowsHeading -->

    <section id="tradeshowsContent" class="py-4 mb-5">
      <div class="container text-center text-md-left">

        <div class="tradeshow-text">
          <p class="tradeshowIntro mb-1">
            What better way to learn more about the power of ECIS than joining us at scientific events around the world!
          </p>

          <p>Below are a list of upcoming shows that Applied BioPhysics will be attending in 2019:</p>
        </div>

        <div class="tradeshow">
          <h4 class="secondary-title">March 10-14, 2019</h4>
          <div class="row">
            <div class="col-lg-4">
              <img class="img-fluid mb-3 mb-lg-0" src="public/img/SOTMeeting.png" alt="SOT Banner">
            </div>
            <div class="col-lg-8">
              <a href="https://www.toxicology.org/events/am/AM2019" class="tradeshow-link" target="_blank">58th Annual
                SOT Annual Meeting - Baltimore, MD</a>
              <p class="mb-0 mt-2">More than 80 Scientific Sessions and 2,100 Abstract Presentations. Continuing
                Education
                Courses, Postdoc and Student Activities and Training, and More.</p>
            </div>
          </div>
        </div>

        <hr class="my-5">

        <div class="tradeshow mb-5">
          <h4 class="secondary-title">March 29 - April 3, 2019</h4>
          <div class="row">
            <div class="col-lg-4">
              <img class="img-fluid mb-3 mb-lg-0" src="public/img/aacrMeeting.png" alt="AACR Banner">
            </div>
            <div class="col-lg-8">
              <a href="https://www.aacr.org/Meetings/Pages/MeetingDetail.aspx?EventItemID=174" class="tradeshow-link"
                target="_blank">AACR Annual Meeting 2019 - Atlanta, GA</a>
              <p class="mb-0 mt-2">The AACR Annual Meeting program covers the latest discoveries across the spectrum of
                cancer research—from population science and prevention; to cancer biology, translational, and clinical
                studies; to survivorship and advocacy—and highlights the work of the best minds in research and medicine
                from institutions all over the world.</p>
            </div>
          </div>
        </div>

        <hr class="my-5">

        <div class="tradeshow">
          <h4 class="secondary-title">April 6-9, 2019</h4>
          <div class="row">
            <div class="col-lg-4">
              <img class="img-fluid mb-3 mb-lg-0" src="public/img/EBMeeting.png" alt="Experimental Biology Banner">
            </div>
            <div class="col-lg-8">
              <a href="https://experimentalbiology.org/2019/home.aspx" class="tradeshow-link"
                target="_blank">Experimental Biology 2019 - Orlando, FL</a>
              <p class="mb-0 mt-2">EB is the place to explore the latest cutting edge science in anatomy, biochemistry
                and
                molecular biology, investigative pathology, pharmacology, and physiology. Attendees represent scientists
                from
                academic institutions, government agencies, non-profit organizations and industry.</p>
            </div>
          </div>
        </div>

        <hr class="my-5">

        <div class="tradeshow">
          <h4 class="secondary-title">September 8-11, 2019</h4>
          <div class="row">
            <div class="col-lg-4">
              <img class="img-fluid mb-3 mb-lg-0" src="public/img/eurotoxMeeting.png" alt="Eurotox Banner">
            </div>
            <div class="col-lg-8">
              <a href="http://eurotox-congress.com/2019" class="tradeshow-link" target="_blank">EUROTOX 2019 - Helsinki,
                Finland</a>
              <p class="mb-0 mt-2">EUROTOX is a Federation of more than 40 European societies of toxicology representing
                7,500 European toxicologists. The annual congresses rotate from one European country to another
                providing diversity to the venues and contents of the congress. The number of participants is
                approximately 1,500.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- /tradeshowsContent -->

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
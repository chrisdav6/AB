<?php
  $title = "ECIS Webinar Series - Applied BioPhysics";
  $metaDesc = "The ECIS Application Webinar series will review the topics listed below in 20-minute, web-based,
  interactive seminars led by Dr. Charles Keese.";
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

  <section id="webinarsHeading" class="text-center text-md-left">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="mb-0">ECIS Application Webinar Series</h1>
          <hr class="mt-0">
        </div>
      </div>
    </div>
  </section><!-- /webinarsHeading -->

  <section id="webinarsContent" class="py-4 mb-5">
    <div class="container text-center text-md-left">

      <p class="webinarIntro mb-4 mb-md-5">
        ECIS is used in over 160 labs worldwide, and ECIS data has been published in a growing list of over 700
        peer-reviewed publications.
      </p>

      <div class="row mb-5">
        <div class="col-md-7">
          <p>
            ECIS electrically monitors cell morphological changes and provides quantitative, real-time measurements of
            cell
            motility, attachment and spreading, and barrier function. Experimental protocols include studies of
            cell-integrin
            interactions, metastatic invasion, signal transduction, and cell migration (via automated wound/healing).
          </p>

          <p>
            The ECIS Application Webinar series will review the topics listed below in 20-minute, web-based, interactive
            seminars.
            To expand your knowledge of ECIS, follow the instructions below.
          </p>

          <p>
            The ECIS Application Webinar series will review the topics listed below in 20-minute, web-based, interactive
            seminars.
            To expand your knowledge of ECIS, follow the instructions below.
          </p>
        </div>
        <div class="col-md-5">
          <img class="img-fluid mt-4 mt-md-0" src="public/img/ECIS-Ztheta-pic.jpg" alt="ECIS ZTheta">
        </div>
      </div>

      <!--<h4 class="mt-5 mt-md-4 mb-4 secondary-title">To register for a webinar:</h4>

      <div class="row">
        <div class="col-lg-8">
          <p>1. Scroll down to a webinar and click register.</p>
          <p>2. Register for the meeting.</p>
          <p>Once you have registered, you will receive a confirmation email with instructions for joining the webinar.
          </p>
        </div>
        <div class="col-lg-4">
          <figure class="figure">
            <img class="figure-img img-fluid mt-4 mt-lg-0" src="public/img/DrCharlesKeese.jpg" alt="Dr. Charles Keese">
            <figcaption class="figure-caption">All webinars are presented by Dr. Charles Keese, President, Applied
              BioPhysics</figcaption>
          </figure>
        </div>
      </div>-->


      <!--<h4 class="mt-3 mt-md-4 mb-4 secondary-title">To view webinars:</h4>

        <div class="row mb-5">
          <div class="col-lg-9 col-md-8">
            <p>Click a <strong>"webinar title"</strong> link below to view the full presentation.</p>
            <p>Slow internet connections - right click the <strong>"download"</strong> link and "save as" to your local computer.</p>
            <p>Please contact Applied BioPhysics at <a href="mailto:info@biophysics.com?subject=Please send me webinar presentation slides" class="link text-dark">info@biophysics.com</a> to obtain a copy of the presentation slides used in a webinar
            presentation.</p>

            <div class="download-webinars mt-4">
              <p class="webinar-download-item d-flex justify-content-center justify-content-md-start align-items-center">
                <a class="view-webinar" href="#">ECIS Introduction (11:02)</a>
                <a href="#" class="download-webinar">(Download)</a>
              </p>
              <p class="webinar-download-item d-flex justify-content-center justify-content-md-start align-items-center">
                <a class="view-webinar" href="#">ECIS Theory (22:55)</a>
                <a href="#" class="download-webinar">(Download)</a>
              </p>
              <p class="webinar-download-item d-flex justify-content-center justify-content-md-start align-items-center">
                <a class="view-webinar" href="#">Cell Invasion Assays (9:19)</a>
                <a href="#" class="download-webinar">(Download)</a>
              </p>
              <p class="webinar-download-item d-flex justify-content-center justify-content-md-start align-items-center">
                <a class="view-webinar" href="#">Cell Migration (10:27)</a>
                <a href="#" class="download-webinar">(Download)</a>
              </p>
              <p class="webinar-download-item d-flex justify-content-center justify-content-md-start align-items-center">
                <a class="view-webinar" href="#">Barrier Function Assays (14:45)</a>
                <a href="#" class="download-webinar">(Download)</a>
              </p>
              <p class="webinar-download-item d-flex justify-content-center justify-content-md-start align-items-center">
                <a class="view-webinar" href="#">Electroporation (10:28)</a>
                <a href="#" class="download-webinar">(Download)</a>
              </p>
              <p class="webinar-download-item d-flex justify-content-center justify-content-md-start align-items-center">
                <a class="view-webinar" href="#">Signal Transduction Assays (7:16)</a>
                <a href="#" class="download-webinar">(Download)</a>
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 d-none d-md-block">
            <figure class="figure">
              <img class="figure-img img-fluid mt-4 mt-md-0" src="public/img/DrCharlesKeese.jpg" alt="Dr. Charles Keese">
              <figcaption class="figure-caption">All webinars are presented by Dr. Charles Keese, President, Applied BioPhysics</figcaption>
            </figure>
          </div>
        </div>-->

      <h4 class="mt-lg-0 mb-3 secondary-title">2019 Webinar Schedule</h4>

      <!-- <div class="webinar">
        <h4 class="webinar-title">ECIS Theory – 11:00 AM EST</h4>
        <p class="date">January 8, 2019</p>
        <p>This webinar will provide an overview of the use of impedance (both simple and complex) to detect cell
          morphological
          changes. Emphasis will be placed on the use of different AC frequencies to distinguish cell parameters.</p>
        <a class="register"
          href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/d574e305d0c84a73af85361ece443047?localOccurrenceTime=2019-10-08%2011%3A00%3A00"
          target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Cell Invasion / Extravasation Assays – 11:00 AM EST</h4>
        <p class="date">January 22, 2019</p>
        <p>This webinar will review ECIS as it is used to monitor endothelial monolayers as they are challenged with
          metastatic
          cell lines. Extravasation of these layers can be followed in real time to provide quantitative data regarding
          the
          metastatic potential of the cancer cells.</p>
        <a class="register"
          href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/78a06bad36c94967ac70dc5296b8c212?localOccurrenceTime=2019-10-22%2011%3A00%3A00"
          target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Automated Cell Migration – 11:00 AM EST</h4>
        <p class="date">February 5, 2019</p>
        <p>The ECIS Wound Healing Assay replaces the traditional "scratch" or "scrape" assay. Instead of disrupting the
          cell layer
          mechanically with a needle or pipette tip and following the migration of cells to "heal" the wound with a
          microscope, we
          employ electric signals to both wound and monitor the healing process. We will also describe a novel and new
          approach to
          this measurement called the “electric fence”. This webinar will review the basic principles of ECIS and then
          present
          quantitative data regarding these automated assays.</p>
        <a class="register"
          href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/393c3ab03ba349eb95cecd3404722b6f?localOccurrenceTime=2019-11-05%2011%3A00%3A00"
          target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Barrier Function Assays – 11:00 AM EST</h4>
        <p class="date">February 19, 2019</p>
        <p>This webinar will review ECIS and then show how complex impedance measurements can be used to evaluate the
          barrier
          function (permeability) of confluent endothelial monolayers. The ability of ECIS data to be mathematically
          modeled will
          be briefly introduced.</p>
        <a class="register"
          href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/6b26b52bef2b49b9b646305dc4cc2a85?localOccurrenceTime=2019-11-19%2011%3A00%3A00"
          target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Real-time Electroporation and Monitoring – 11:00 AM EST</h4>
        <p class="date">March 5, 2019</p>
        <p>ECIS can be used to electroporate cells and then to immediately follow the results of the electroporation in
          real-time.
          This unique feature of the ECIS technology will be described in this webinar and sample data presented.</p>
        <a class="register"
          href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/41926702cfbf4ca4ab2ed8a53ab00ed2?localOccurrenceTime=2019-12-03%2011%3A00%3A00"
          target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Cell Attachment and Spreading Measurements – 11:00 AM EST</h4>
        <p class="date">March 19, 2019</p>
        <p>The webinar will review ECIS and then present quantitative data gathered in real time regarding the
          attachment and
          spreading behavior of cells upon extracellular matrix proteins.</p>
        <a class="register"
          href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/d67fa17fab264e3892e36edae2aa781c?localOccurrenceTime=2019-07-23%2011%3A00%3A00"
          target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Signal Transduction Assays – 11:00 AM EDT</h4>
        <p class="date">April 9, 2019</p>
        <p>Data will be presented showing the ability of ECIS to monitor signal transduction in label-free, whole-cell
          assays. The
          morphological changes responsible for the impedance changes will be further evaluated by modeling the complex
          impedance
          data.</p>
        <a class="register"
          href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/0a30ea2d697b450b9b546494103e1a61?localOccurrenceTime=2019-09-10%2011%3A00%3A00"
          target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Toxicology with ECIS – 11:00 AM EDT</h4>
        <p class="date">April 23, 2019</p>
        <p>This webinar will review ECIS and then present data showing how ECIS impedance measurements respond to
          varying
          concentrations of toxic compounds.</p>
        <a class="register"
          href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/dc74a2239548469f929027ab7a43a1c4?localOccurrenceTime=2019-09-24%2011%3A00%3A00"
          target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">ECIS Theory – 11:00 AM EDT</h4>
        <p class="date">May 7, 2019</p>
        <p>This webinar will provide an overview of the use of impedance (both simple and complex) to detect cell
          morphological
          changes. Emphasis will be placed on the use of different AC frequencies to distinguish cell parameters.</p>
        <a class="register"
          href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/d574e305d0c84a73af85361ece443047?localOccurrenceTime=2019-10-08%2011%3A00%3A00"
          target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Cell Invasion / Extravasation Assays – 11:00 AM EST</h4>
        <p class="date">May 21, 2019</p>
        <p>This webinar will review ECIS as it is used to monitor endothelial monolayers as they are challenged with
          metastatic
          cell lines. Extravasation of these layers can be followed in real time to provide quantitative data regarding
          the
          metastatic potential of the cancer cells.</p>
        <a class="register"
          href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/78a06bad36c94967ac70dc5296b8c212?localOccurrenceTime=2019-10-22%2011%3A00%3A00"
          target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Automated Cell Migration – 11:00 AM EST</h4>
        <p class="date">June 4, 2019</p>
        <p>The ECIS Wound Healing Assay replaces the traditional "scratch" or "scrape" assay. Instead of disrupting the
          cell layer
          mechanically with a needle or pipette tip and following the migration of cells to "heal" the wound with a
          microscope, we
          employ electric signals to both wound and monitor the healing process. We will also describe a novel and new
          approach to
          this measurement called the “electric fence”. This webinar will review the basic principles of ECIS and then
          present
          quantitative data regarding these automated assays.</p>
        <a class="register"
          href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/393c3ab03ba349eb95cecd3404722b6f?localOccurrenceTime=2019-11-05%2011%3A00%3A00"
          target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Barrier Function Assays – 11:00 AM EST</h4>
        <p class="date">June 18, 2019</p>
        <p>This webinar will review ECIS and then show how complex impedance measurements can be used to evaluate the
          barrier
          function (permeability) of confluent endothelial monolayers. The ability of ECIS data to be mathematically
          modeled will
          be briefly introduced.</p>
        <a class="register"
          href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/6b26b52bef2b49b9b646305dc4cc2a85?localOccurrenceTime=2019-11-19%2011%3A00%3A00"
          target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Real-time Electroporation and Monitoring – 11:00 AM EST</h4>
        <p class="date">July 9, 2019</p>
        <p>ECIS can be used to electroporate cells and then to immediately follow the results of the electroporation in
          real-time.
          This unique feature of the ECIS technology will be described in this webinar and sample data presented.</p>
        <a class="register"
          href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/41926702cfbf4ca4ab2ed8a53ab00ed2?localOccurrenceTime=2019-12-03%2011%3A00%3A00"
          target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Cell Attachment and Spreading Measurements – 11:00 AM EST</h4>
        <p class="date">July 23, 2019</p>
        <p>The webinar will review ECIS and then present quantitative data gathered in real time regarding the
          attachment and
          spreading behavior of cells upon extracellular matrix proteins.</p>
        <a class="register"
          href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/d67fa17fab264e3892e36edae2aa781c?localOccurrenceTime=2019-07-23%2011%3A00%3A00"
          target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Signal Transduction Assays – 11:00 AM EDT</h4>
        <p class="date">September 10, 2019</p>
        <p>Data will be presented showing the ability of ECIS to monitor signal transduction in label-free, whole-cell
          assays. The
          morphological changes responsible for the impedance changes will be further evaluated by modeling the complex
          impedance
          data.</p>
        <a class="register"
          href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/0a30ea2d697b450b9b546494103e1a61?localOccurrenceTime=2019-09-10%2011%3A00%3A00"
          target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Toxicology with ECIS – 11:00 AM EDT</h4>
        <p class="date">September 24, 2019</p>
        <p>This webinar will review ECIS and then present data showing how ECIS impedance measurements respond to
          varying
          concentrations of toxic compounds.</p>
        <a class="register"
          href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/dc74a2239548469f929027ab7a43a1c4?localOccurrenceTime=2019-09-24%2011%3A00%3A00"
          target="_blank">Register</a>
      </div>

      <div class="webinar">
        <h4 class="webinar-title">ECIS Theory – 11:00 AM EDT</h4>
        <p class="date">October 8, 2019</p>
        <p>This webinar will provide an overview of the use of impedance (both simple and complex) to detect cell
          morphological
          changes. Emphasis will be placed on the use of different AC frequencies to distinguish cell parameters.</p>
        <a class="register"
          href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/d574e305d0c84a73af85361ece443047?localOccurrenceTime=2019-10-08%2011%3A00%3A00"
          target="_blank">Register</a>
      </div>

      <div class="webinar">
        <h4 class="webinar-title">Cell Invasion / Extravasation Assays – 11:00 AM EST</h4>
        <p class="date">October 22, 2019</p>
        <p>This webinar will review ECIS as it is used to monitor endothelial monolayers as they are challenged with
          metastatic
          cell lines. Extravasation of these layers can be followed in real time to provide quantitative data regarding
          the
          metastatic potential of the cancer cells.</p>
        <a class="register"
          href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/78a06bad36c94967ac70dc5296b8c212?localOccurrenceTime=2019-10-22%2011%3A00%3A00"
          target="_blank">Register</a>
      </div> -->

      <div class="webinar">
        <h4 class="webinar-title">Automated Cell Migration – 11:00 AM EST</h4>
        <p class="date">November 5, 2019</p>
        <p>The ECIS Wound Healing Assay replaces the traditional "scratch" or "scrape" assay. Instead of disrupting the
          cell layer
          mechanically with a needle or pipette tip and following the migration of cells to "heal" the wound with a
          microscope, we
          employ electric signals to both wound and monitor the healing process. We will also describe a novel and new
          approach to
          this measurement called the “electric fence”. This webinar will review the basic principles of ECIS and then
          present
          quantitative data regarding these automated assays.</p>
        <a class="register"
          href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/393c3ab03ba349eb95cecd3404722b6f?localOccurrenceTime=2019-11-05%2011%3A00%3A00"
          target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Barrier Function Assays – 11:00 AM EST</h4>
        <p class="date">November 19, 2019</p>
        <p>This webinar will review ECIS and then show how complex impedance measurements can be used to evaluate the
          barrier
          function (permeability) of confluent endothelial monolayers. The ability of ECIS data to be mathematically
          modeled will
          be briefly introduced.</p>
        <a class="register"
          href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/6b26b52bef2b49b9b646305dc4cc2a85?localOccurrenceTime=2019-11-19%2011%3A00%3A00"
          target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Real-time Electroporation and Monitoring – 11:00 AM EST</h4>
        <p class="date">December 3, 2019</p>
        <p>ECIS can be used to electroporate cells and then to immediately follow the results of the electroporation in
          real-time.
          This unique feature of the ECIS technology will be described in this webinar and sample data presented.</p>
        <a class="register"
          href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/41926702cfbf4ca4ab2ed8a53ab00ed2?localOccurrenceTime=2019-12-03%2011%3A00%3A00"
          target="_blank">Register</a>
      </div>

    </div>
  </section><!-- /webinarsContent -->

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
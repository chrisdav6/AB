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
        ECIS is used in over 160 labs worldwide, and ECIS data has been published in a growing list of over 700 peer-reviewed publications.
      </p>

      <div class="row mb-5">
        <div class="col-md-7">
          <p>
            ECIS electrically monitors cell morphological changes and provides quantitative, real-time measurements of cell motility, attachment and spreading, and barrier function. Experimental protocols include studies of cell-integrin interactions, metastatic invasion, signal transduction, and cell migration (via automated wound/healing).
          </p>

          <p>
            The ECIS Application Webinar series will review the topics listed below in 20-minute, web-based, interactive seminars. To expand your knowledge of ECIS, register for a webinar below.
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

      <h4 class="mt-lg-0 mb-3 secondary-title">2024 Webinar Schedule</h4>

      <div class="webinar">
        <h4 class="webinar-title">ECIS Theory – 11:00 AM EDT</h4>
        <p class="date">September 3, 2024</p>
        <p>This webinar will provide an overview of the use of impedance (both simple and complex) to detect cell morphological changes. Emphasis will be placed on the use of different AC frequencies to distinguish cell parameters.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/r5fa1b9b887d4a46b2fb0b563c3077456" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Cell Invasion / Extravasation Assays – 11:00 AM EDT</h4>
        <p class="date">September 17, 2024</p>
        <p>This webinar will review ECIS as it is used to monitor endothelial monolayers as they are challenged with metastatic cell lines. Extravasation of these layers can be followed in real time to provide quantitative data regarding the metastatic potential of the cancer cells.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/rad6528933f25f7daf88c3b71678ab0ea" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Automated Cell Migration – 11:00 AM EDT</h4>
        <p class="date">October 1, 2024</p>
        <p>The ECIS Wound Healing Assay replaces the traditional "scratch" or "scrape" assay. Instead of disrupting the cell layer mechanically with a needle or pipette tip and following the migration of cells to "heal" the wound with a microscope, we employ electric signals to both wound and monitor the healing process. We will also describe a novel and new approach to this measurement called the “electric fence”. This webinar will review the basic principles of ECIS and then present quantitative data regarding these automated assays.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/r3fb5555ab196bd9b63fc75604dc873b1" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Barrier Function Assays – 11:00 AM EDT</h4>
        <p class="date">October 15, 2024</p>
        <p>This webinar will review ECIS and then show how complex impedance measurements can be used to evaluate the barrier function (permeability) of confluent endothelial monolayers. The ability of ECIS data to be mathematically modeled will be briefly introduced.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/r0075051bfe68806bcb6967c4a18fb48c" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Real-time Electroporation and Monitoring – 11:00 AM EST</h4>
        <p class="date">October 29, 2024</p>
        <p>ECIS can be used to electroporate cells and then to immediately follow the results of the electroporation in real-time. This unique feature of the ECIS technology will be described in this webinar and sample data presented.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/r634c036be457668b01ec560f273f3ce0" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">ECIS Theory – 11:00 AM EST</h4>
        <p class="date">November 12, 2024</p>
        <p>This webinar will provide an overview of the use of impedance (both simple and complex) to detect cell morphological changes. Emphasis will be placed on the use of different AC frequencies to distinguish cell parameters.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/r01f4c30d4a99727f0d8ccfb256e4a756" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Cell Invasion / Extravasation Assays – 11:00 AM EST</h4>
        <p class="date">November 26, 2024</p>
        <p>This webinar will review ECIS as it is used to monitor endothelial monolayers as they are challenged with metastatic cell lines. Extravasation of these layers can be followed in real time to provide quantitative data regarding the metastatic potential of the cancer cells.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/rce101dfc32e6872db34215db52438cef" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Automated Cell Migration – 11:00 AM EST</h4>
        <p class="date">December 10, 2024</p>
        <p>The ECIS Wound Healing Assay replaces the traditional "scratch" or "scrape" assay. Instead of disrupting the cell layer mechanically with a needle or pipette tip and following the migration of cells to "heal" the wound with a microscope, we employ electric signals to both wound and monitor the healing process. We will also describe a novel and new approach to this measurement called the “electric fence”. This webinar will review the basic principles of ECIS and then present quantitative data regarding these automated assays.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/r2e45f733451ea3bc7091c2529997691c" target="_blank">Register</a>
      </div>


      <h4 class="mt-4 mb-3 secondary-title">2025 Webinar Schedule</h4>


      <div class="webinar">
        <h4 class="webinar-title">ECIS Theory – 11:00 AM EST</h4>
        <p class="date">January 7, 2025</p>
        <p>This webinar will provide an overview of the use of impedance (both simple and complex) to detect cell morphological changes. Emphasis will be placed on the use of different AC frequencies to distinguish cell parameters.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/rf8c2ed12b3ccfdc943afd2be23ed6ae8" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Cell Invasion / Extravasation Assays – 11:00 AM EST</h4>
        <p class="date">January 21, 2025</p>
        <p>This webinar will review ECIS as it is used to monitor endothelial monolayers as they are challenged with metastatic cell lines. Extravasation of these layers can be followed in real time to provide quantitative data regarding the metastatic potential of the cancer cells.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/r32fb867e36a6e3b9715ff62991b065c7" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Automated Cell Migration – 11:00 AM EST</h4>
        <p class="date">February 4, 2025</p>
        <p>The ECIS Wound Healing Assay replaces the traditional "scratch" or "scrape" assay. Instead of disrupting the cell layer mechanically with a needle or pipette tip and following the migration of cells to "heal" the wound with a microscope, we employ electric signals to both wound and monitor the healing process. We will also describe a novel and new approach to this measurement called the “electric fence”. This webinar will review the basic principles of ECIS and then present quantitative data regarding these automated assays.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/r94644ee44bbc1bf7db4d67b125151050" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Barrier Function Assays – 11:00 AM EST</h4>
        <p class="date">February 18, 2025</p>
        <p>This webinar will review ECIS and then show how complex impedance measurements can be used to evaluate the barrier function (permeability) of confluent endothelial monolayers. The ability of ECIS data to be mathematically modeled will be briefly introduced.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/r56dddfd3659fbc72d7a97a233e1c51c7" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Real-time Electroporation and Monitoring – 11:00 AM EST</h4>
        <p class="date">March 4, 2025</p>
        <p>ECIS can be used to electroporate cells and then to immediately follow the results of the electroporation in
          real-time. This unique feature of the ECIS technology will be described in this webinar and sample data presented.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/ra6211ec8b1c5f1ef5930d681f8638d5d" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Cell Attachment and Spreading Measurements – 11:00 AM EDT</h4>
        <p class="date">March 18, 2025</p>
        <p>The webinar will review ECIS and then present quantitative data gathered in real time regarding the attachment and spreading behavior of cells upon extracellular matrix proteins.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/r4b27f33e5531f591dda09c33a7d3d1f3" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Signal Transduction Assays – 11:00 AM EDT</h4>
        <p class="date">April 1, 2025</p>
        <p>Data will be presented showing the ability of ECIS to monitor signal transduction in label-free, whole-cell assays. The morphological changes responsible for the impedance changes will be further evaluated by modeling the complex impedance data.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/ra37974a5ae3f9191075f7d19e1a181a5" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Toxicology with ECIS – 11:00 AM EDT</h4>
        <p class="date">April 15, 2025</p>
        <p>This webinar will review ECIS and then present data showing how ECIS impedance measurements respond to varying concentrations of toxic compounds.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/r98ce1248b72d471e48af56529bfd3573" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">ECIS Theory – 11:00 AM EDT</h4>
        <p class="date">April 29, 2025</p>
        <p>This webinar will provide an overview of the use of impedance (both simple and complex) to detect cell morphological changes. Emphasis will be placed on the use of different AC frequencies to distinguish cell parameters.</p>
        <a class="register" href=" https://appliedbiophysics.webex.com/weblink/register/r9a611855cc9561c5a252b9118d6d415e" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Cell Invasion / Extravasation Assays – 11:00 AM EDT</h4>
        <p class="date">May 13, 2025</p>
        <p>This webinar will review ECIS as it is used to monitor endothelial monolayers as they are challenged with metastatic cell lines. Extravasation of these layers can be followed in real time to provide quantitative data regarding the metastatic potential of the cancer cells.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/r17b8d9caeb2da30f0ce631abfbf26ebe" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Automated Cell Migration – 11:00 AM EDT</h4>
        <p class="date">May 27, 2025</p>
        <p>The ECIS Wound Healing Assay replaces the traditional "scratch" or "scrape" assay. Instead of disrupting the cell layer mechanically with a needle or pipette tip and following the migration of cells to "heal" the wound with a microscope, we employ electric signals to both wound and monitor the healing process. We will also describe a novel and new approach to this measurement called the “electric fence”. This webinar will review the basic principles of ECIS and then present quantitative data regarding these automated assays.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/r182dbc7aac3276856378816c0905c172" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Barrier Function Assays – 11:00 AM EDT</h4>
        <p class="date">June 10, 2025</p>
        <p>This webinar will review ECIS and then show how complex impedance measurements can be used to evaluate the barrier function (permeability) of confluent endothelial monolayers. The ability of ECIS data to be mathematically modeled will be briefly introduced.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/r068c2c56c5961158fb149f8b86089a9e" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Real-time Electroporation and Monitoring – 11:00 AM EDT</h4>
        <p class="date">June 24, 2025</p>
        <p>ECIS can be used to electroporate cells and then to immediately follow the results of the electroporation in real-time. This unique feature of the ECIS technology will be described in this webinar and sample data presented.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/r79bd74e3693b0011b765f66157eaf760" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Cell Attachment and Spreading Measurements – 11:00 AM EDT</h4>
        <p class="date">July 8, 2025</p>
        <p>The webinar will review ECIS and then present quantitative data gathered in real time regarding the attachment and spreading behavior of cells upon extracellular matrix proteins.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/rc3103d1c279a5be8272e6ae5aaaa8d55" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Signal Transduction Assays – 11:00 AM EDT</h4>
        <p class="date">July 22, 2025</p>
        <p>Data will be presented showing the ability of ECIS to monitor signal transduction in label-free, whole-cell assays. The morphological changes responsible for the impedance changes will be further evaluated by modeling the complex impedance data.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/rf621879b2d4abbdf24316a6ff6b93784" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Toxicology with ECIS – 11:00 AM EDT</h4>
        <p class="date">September 2, 2025</p>
        <p>This webinar will review ECIS and then present data showing how ECIS impedance measurements respond to varying concentrations of toxic compounds.</p>
        <a class="register" href=" https://appliedbiophysics.webex.com/weblink/register/rd587a527003eb26ffe3a68b71033b811" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">ECIS Theory – 11:00 AM EDT</h4>
        <p class="date">September 16, 2025</p>
        <p>This webinar will provide an overview of the use of impedance (both simple and complex) to detect cell morphological changes. Emphasis will be placed on the use of different AC frequencies to distinguish cell parameters.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/rcdc886b250c5e8157ebab7a5e4b14911" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Cell Invasion / Extravasation Assays – 11:00 AM EDT</h4>
        <p class="date">September 30, 2025</p>
        <p>This webinar will review ECIS as it is used to monitor endothelial monolayers as they are challenged with metastatic cell lines. Extravasation of these layers can be followed in real time to provide quantitative data regarding the metastatic potential of the cancer cells.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/rabe3f9f10c77ab04d532764484318713" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Automated Cell Migration – 11:00 AM EDT</h4>
        <p class="date">October 14, 2025</p>
        <p>The ECIS Wound Healing Assay replaces the traditional "scratch" or "scrape" assay. Instead of disrupting the cell layer mechanically with a needle or pipette tip and following the migration of cells to "heal" the wound with a microscope, we employ electric signals to both wound and monitor the healing process. We will also describe a novel and new approach to this measurement called the “electric fence”. This webinar will review the basic principles of ECIS and then present quantitative data regarding these automated assays.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/rfb9f547f17869ba9902f73b9d47f8d6d" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Barrier Function Assays – 11:00 AM EDT</h4>
        <p class="date">October 28, 2025</p>
        <p>This webinar will review ECIS and then show how complex impedance measurements can be used to evaluate the barrier function (permeability) of confluent endothelial monolayers. The ability of ECIS data to be mathematically modeled will be briefly introduced.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/r863d8254af37bacab14038a6bc531b1e" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Real-time Electroporation and Monitoring – 11:00 AM EST</h4>
        <p class="date">November 11, 2025</p>
        <p>ECIS can be used to electroporate cells and then to immediately follow the results of the electroporation in real-time. This unique feature of the ECIS technology will be described in this webinar and sample data presented.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/r1917353f2c2e15ae3b8f76c02697ec67" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">ECIS Theory – 11:00 AM EST</h4>
        <p class="date">November 25, 2025</p>
        <p>This webinar will provide an overview of the use of impedance (both simple and complex) to detect cell morphological changes. Emphasis will be placed on the use of different AC frequencies to distinguish cell parameters.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/r62284372edf454a6667e631f15d3f282" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Cell Invasion / Extravasation Assays – 11:00 AM EST</h4>
        <p class="date">December 9, 2025</p>
        <p>This webinar will review ECIS as it is used to monitor endothelial monolayers as they are challenged with metastatic cell lines. Extravasation of these layers can be followed in real time to provide quantitative data regarding the metastatic potential of the cancer cells.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/weblink/register/r3e5343f233aa8438a6fc53ee57a5f95c" target="_blank">Register</a>
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
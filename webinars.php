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

      <h4 class="mt-lg-0 mb-3 secondary-title">2022 Webinar Schedule</h4>

      <!--<div class="webinar">
        <h4 class="webinar-title">Barrier Function Assays – 11:00 AM EST</h4>
        <p class="date">November 9, 2021</p>
        <p>This webinar will review ECIS and then show how complex impedance measurements can be used to evaluate the barrier function (permeability) of confluent endothelial monolayers. The ability of ECIS data to be mathematically modeled will be briefly introduced.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/0561cabb375b4826956fa9cf0611391e" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Real-time Electroporation and Monitoring – 11:00 AM EST</h4>
        <p class="date">November 23, 2021</p>
        <p>ECIS can be used to electroporate cells and then to immediately follow the results of the electroporation in real-time. This unique feature of the ECIS technology will be described in this webinar and sample data presented.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/831b3bd20c084b42b0684eff0c428781" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">ECIS Theory – 11:00 AM EST</h4>
        <p class="date">December 7, 2021</p>
        <p>This webinar will provide an overview of the use of impedance (both simple and complex) to detect cell morphological changes. Emphasis will be placed on the use of different AC frequencies to distinguish cell parameters.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/4259ef6fe721464595090bd652fe0f59" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">ECIS Theory – 11:00 AM EST</h4>
        <p class="date">January 4, 2022</p>
        <p>This webinar will provide an overview of the use of impedance (both simple and complex) to detect cell morphological changes. Emphasis will be placed on the use of different AC frequencies to distinguish cell parameters.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/60ec9a6524224a87855888925c1a9436" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Cell Invasion / Extravasation Assays – 11:00 AM EST</h4>
        <p class="date">January 18, 2022</p>
        <p>This webinar will review ECIS as it is used to monitor endothelial monolayers as they are challenged with metastatic cell lines. Extravasation of these layers can be followed in real time to provide quantitative data regarding the metastatic potential of the cancer cells.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/2875540a94de4a23aa8af1833d0566fa" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Automated Cell Migration – 11:00 AM EST</h4>
        <p class="date">February 1, 2022</p>
        <p>The ECIS Wound Healing Assay replaces the traditional "scratch" or "scrape" assay. Instead of disrupting the cell layer mechanically with a needle or pipette tip and following the migration of cells to "heal" the wound with a microscope, we employ electric signals to both wound and monitor the healing process. We will also describe a novel and new approach to this measurement called the “electric fence”. This webinar will review the basic principles of ECIS and then present quantitative data regarding these automated assays.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/eff24c6ed2a64c6a95476e5d0c8b8d09" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Barrier Function Assays – 11:00 AM EST</h4>
        <p class="date">February 15, 2022</p>
        <p>This webinar will review ECIS and then show how complex impedance measurements can be used to evaluate the barrier function (permeability) of confluent endothelial monolayers. The ability of ECIS data to be mathematically modeled will be briefly introduced.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/b6a6b024790f481a9ccb941e739d7acf" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Real-time Electroporation and Monitoring – 11:00 AM EST</h4>
        <p class="date">March 1, 2022</p>
        <p>ECIS can be used to electroporate cells and then to immediately follow the results of the electroporation in
          real-time. This unique feature of the ECIS technology will be described in this webinar and sample data presented.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/96b8ac70df854b908a229f22373c8173" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Cell Attachment and Spreading Measurements – 11:00 AM EDT</h4>
        <p class="date">March 15, 2022</p>
        <p>The webinar will review ECIS and then present quantitative data gathered in real time regarding the attachment and spreading behavior of cells upon extracellular matrix proteins.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/c86a7dae70214bed9333d7305cd08ce4" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Signal Transduction Assays – 11:00 AM EDT</h4>
        <p class="date">March 29, 2022</p>
        <p>Data will be presented showing the ability of ECIS to monitor signal transduction in label-free, whole-cell assays. The morphological changes responsible for the impedance changes will be further evaluated by modeling the complex impedance data.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/319cc40595c643c18011be9012029ce8" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Toxicology with ECIS – 11:00 AM EDT</h4>
        <p class="date">April 12, 2022</p>
        <p>This webinar will review ECIS and then present data showing how ECIS impedance measurements respond to varying concentrations of toxic compounds.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/b8a087395dd34581ae07441dc7a7ca4a" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">ECIS Theory – 11:00 AM EDT</h4>
        <p class="date">April 26, 2022</p>
        <p>This webinar will provide an overview of the use of impedance (both simple and complex) to detect cell morphological changes. Emphasis will be placed on the use of different AC frequencies to distinguish cell parameters.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/785692c93408436cb35ce13ca8570ee3" target="_blank">Register</a>
      </div>

      <hr>-->

      <div class="webinar">
        <h4 class="webinar-title">Cell Invasion / Extravasation Assays – 11:00 AM EDT</h4>
        <p class="date">May 10, 2022</p>
        <p>This webinar will review ECIS as it is used to monitor endothelial monolayers as they are challenged with metastatic cell lines. Extravasation of these layers can be followed in real time to provide quantitative data regarding the metastatic potential of the cancer cells.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/4b2e416301944f04a730d2e8053048ad" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Automated Cell Migration – 11:00 AM EDT</h4>
        <p class="date">May 24, 2022</p>
        <p>The ECIS Wound Healing Assay replaces the traditional "scratch" or "scrape" assay. Instead of disrupting the cell layer mechanically with a needle or pipette tip and following the migration of cells to "heal" the wound with a microscope, we employ electric signals to both wound and monitor the healing process. We will also describe a novel and new approach to this measurement called the “electric fence”. This webinar will review the basic principles of ECIS and then present quantitative data regarding these automated assays.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/b2cc90d0d7ec4e9b8f30a66726ae7627" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Barrier Function Assays – 11:00 AM EDT</h4>
        <p class="date">June 7, 2022</p>
        <p>This webinar will review ECIS and then show how complex impedance measurements can be used to evaluate the barrier function (permeability) of confluent endothelial monolayers. The ability of ECIS data to be mathematically modeled will be briefly introduced.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/cdca0287246b4598b39a740b7cf48433" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Real-time Electroporation and Monitoring – 11:00 AM EDT</h4>
        <p class="date">June 21, 2022</p>
        <p>ECIS can be used to electroporate cells and then to immediately follow the results of the electroporation in real-time. This unique feature of the ECIS technology will be described in this webinar and sample data presented.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/9f734c1322e94d61974fa634b86d96a0" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Cell Attachment and Spreading Measurements – 11:00 AM EDT</h4>
        <p class="date">July 5, 2022</p>
        <p>The webinar will review ECIS and then present quantitative data gathered in real time regarding the attachment and spreading behavior of cells upon extracellular matrix proteins.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/547c3b0a56074f28add7c82e0708ddd6" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Signal Transduction Assays – 11:00 AM EDT</h4>
        <p class="date">July 19, 2022</p>
        <p>Data will be presented showing the ability of ECIS to monitor signal transduction in label-free, whole-cell assays. The morphological changes responsible for the impedance changes will be further evaluated by modeling the complex impedance data.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/fab13f444402409c9263d1f09f376169" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Toxicology with ECIS – 11:00 AM EDT</h4>
        <p class="date">September 6, 2022</p>
        <p>This webinar will review ECIS and then present data showing how ECIS impedance measurements respond to varying concentrations of toxic compounds.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/d50f3010a6f7490b87f29737d4dba9bf" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">ECIS Theory – 11:00 AM EDT</h4>
        <p class="date">September 20, 2022</p>
        <p>This webinar will provide an overview of the use of impedance (both simple and complex) to detect cell morphological changes. Emphasis will be placed on the use of different AC frequencies to distinguish cell parameters.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/f7ffa8eeb84e46b7a9e8e09377438659" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Cell Invasion / Extravasation Assays – 11:00 AM EDT</h4>
        <p class="date">October 4, 2022</p>
        <p>This webinar will review ECIS as it is used to monitor endothelial monolayers as they are challenged with metastatic cell lines. Extravasation of these layers can be followed in real time to provide quantitative data regarding the metastatic potential of the cancer cells.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/cd9b614b79444b9c92e01b116101a9da" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Automated Cell Migration – 11:00 AM EDT</h4>
        <p class="date">October 18, 2022</p>
        <p>The ECIS Wound Healing Assay replaces the traditional "scratch" or "scrape" assay. Instead of disrupting the cell layer mechanically with a needle or pipette tip and following the migration of cells to "heal" the wound with a microscope, we employ electric signals to both wound and monitor the healing process. We will also describe a novel and new approach to this measurement called the “electric fence”. This webinar will review the basic principles of ECIS and then present quantitative data regarding these automated assays.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/3ba7953a1bc742b6b4161d9c83ba6d73" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Barrier Function Assays – 11:00 AM EDT</h4>
        <p class="date">November 1, 2022</p>
        <p>This webinar will review ECIS and then show how complex impedance measurements can be used to evaluate the barrier function (permeability) of confluent endothelial monolayers. The ability of ECIS data to be mathematically modeled will be briefly introduced.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/9840410bf2f348dc97b6b84b89dc2558" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Real-time Electroporation and Monitoring – 11:00 AM EST</h4>
        <p class="date">November 15, 2022</p>
        <p>ECIS can be used to electroporate cells and then to immediately follow the results of the electroporation in real-time. This unique feature of the ECIS technology will be described in this webinar and sample data presented.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/ab6386ad36ec4ce8a90aa02ac94781a8" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">ECIS Theory – 11:00 AM EST</h4>
        <p class="date">November 29, 2022</p>
        <p>This webinar will provide an overview of the use of impedance (both simple and complex) to detect cell morphological changes. Emphasis will be placed on the use of different AC frequencies to distinguish cell parameters.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/7bf9849a164646778b3d0939eb99649e" target="_blank">Register</a>
      </div>

      <hr>

      <div class="webinar">
        <h4 class="webinar-title">Cell Invasion / Extravasation Assays – 11:00 AM EST</h4>
        <p class="date">December 13, 2022</p>
        <p>This webinar will review ECIS as it is used to monitor endothelial monolayers as they are challenged with metastatic cell lines. Extravasation of these layers can be followed in real time to provide quantitative data regarding the metastatic potential of the cancer cells.</p>
        <a class="register" href="https://appliedbiophysics.webex.com/webappng/sites/appliedbiophysics/meeting/info/2d6e0a032fbd4f7086a94c059e7e9039" target="_blank">Register</a>
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
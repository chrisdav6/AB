<?php
  $title = "Technical Support - Applied BioPhysics";
  $metaDesc = "Ensuring that using the ECIS technology is a smooth, hassle-free process from beginning to end by
  providing manuals, journal articles, videos, and user notes to aid in the road to discovery.";
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

  <section id="techSupportHeading" class="text-center text-md-left">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="mb-0">Technical Support</h1>
          <hr class="mt-0">
        </div>
      </div>
    </div>
  </section><!-- /techSupportHeading -->

  <section id="techSupportContent" class="py-4 mb-5">
    <div class="container text-center text-md-left">

      <div class="row">
        <div class="col-md-6">
          <p>
            At Applied BioPhysics we understand that the journey of scientific research can be a very bumpy endeavor.
            That’s why we
            want to make sure that using the ECIS technology is a smooth, hassle-free process from beginning to end by
            providing
            manuals, journal articles, videos, and even user notes to aid in your travels on the road to discovery.
          </p>
        </div>
        <div class="col-md-6">
          <img class="img-fluid" src="public/img/techSupportArray.jpg" alt="Applied BioPhysics Array">
        </div>
      </div>

      <h4 class="mt-5 mt-lg-0 mb-4 secondary-title">Manuals</h4>

      <div class="supportDocs">
        <p><a href="public/pdf/ECIS_Operation_Manual_v1_2_123.pdf" class="link text-dark" target="_blank"><i
              class="far fa-file-pdf mr-2"></i> ECIS Operation Manual</a></p>
        <p><a href="public/pdf/ECISHandbook.pdf" class="link text-dark" target="_blank"><i
              class="far fa-file-pdf mr-2"></i> ECIS Handbook</a></p>
        <p><a href="public/pdf/P-FlowPumpManualRevD.pdf" class="link text-dark" target="_blank"><i
              class="far fa-file-pdf mr-2"></i> P-Flow Pump Manual</a></p>
        <p><a href="public/pdf/PerfusionIN-1090X_pump_system manual.pdf" class="link text-dark" target="_blank"><i
              class="far fa-file-pdf mr-2"></i> Perfusion IN-1090X Pump System Manual</a></p>
        <p><a href="public/pdf/IncubatorPortSheldonInstructions.pdf" class="link text-dark" target="_blank"><i
              class="far fa-file-pdf mr-2"></i> Incubator Port Sheldon Instructions</a></p>
      </div>

      <h4 class="mt-5 mb-4 secondary-title">Journal Articles</h4>

      <div class="supportDocs">
        <p><a href="https://link.springer.com/article/10.1007/s00424-014-1674-0?view=classic" class="link text-dark"
            target="_blank">Impedance analysis of GPCR-mediated changes in endothelial barrier function: Overview, and
            fundamental considerations for stable and reproducible measurements</a></p>
      </div>

      <h4 class="mt-5 mb-4 secondary-title">Books</h4>

      <div class="supportDocs">
        <p><a href="https://www.springer.com/us/book/9789400749269" class="link text-dark" target="_blank">Electric
            Cell-Substrate Impedance Sensing and Cancer Metastasis" is available from Springer Netherlands</a></p>
      </div>

      <h4 class="mt-5 mb-4 secondary-title">JOVE Videos</h4>

      <div class="supportDocs">
        <p><a href="https://www.jove.com/video/51300/electric-cell-substrate-impedance-sensing-for-quantification"
            class="link text-dark" target="_blank"><i class="fas fa-video mr-2"></i> Electric Cell-substrate Impedance
            Sensing for the Quantification of Endothelial Proliferation, Barrier Function, and Motility (12min)</a></p>
        <p><a href="https://www.jove.com/video/3840/measurement-of-cellular-chemotaxis-with-ecistaxis"
            class="link text-dark" target="_blank"><i class="fas fa-video mr-2"></i> Measurement of Cellular Chemotaxis
            with ECIS/Taxis (11min)</a></p>
      </div>

      <h4 class="mt-5 mb-4 secondary-title">Tutorial Notes</h4>

      <div class="supportDocs">
        <p><a href="public/pdf/ImprovingExperimentRepeatabilitywithCysteine.pdf" class="link text-dark"
            target="_blank"><i class="far fa-file-pdf mr-2"></i> Improving Experiment Repeatability with Cysteine</a>
        </p>
        <p><a href="public/pdf/InoculationOfArrays.pdf" class="link text-dark" target="_blank"><i
              class="far fa-file-pdf mr-2"></i> Inoculation of Arrays</a></p>
        <p><a href="public/pdf/Pre-CoatingElectrodeswithDefinedProteinCoats.pdf" class="link text-dark"
            target="_blank"><i class="far fa-file-pdf mr-2"></i> Pre-Coating Electrodes with Defined Protein Coats</a>
        </p>
        <p><a href="public/pdf/AnAlternativeWaytoObtainGoodCellDistributiononECISArrays.pdf" class="link text-dark"
            target="_blank"><i class="far fa-file-pdf mr-2"></i> An Alternative Way to Obtain Good Cell Distribution on
            ECIS Arrays</a></p>
        <p><a href="public/pdf/AddingCompoundsToStudyTheirEffectonECISMeasurements.pdf" class="link text-dark"
            target="_blank"><i class="far fa-file-pdf mr-2"></i> Adding Compounds to Study their Effect on ECIS
            Measurements</a></p>
        <p><a href="public/pdf/ECIS_Microscopy_V2_DINA4.pdf" class="link text-dark" target="_blank"><i
              class="far fa-file-pdf mr-2"></i> Phase-Contrast & Fluorescence Microscopy Tutorial</a></p>
        <p><a href="public/pdf/ChoiceOfProgramForECISTimeCourseDataAcquisition.pdf" class="link text-dark"
            target="_blank"><i class="far fa-file-pdf mr-2"></i> Choice of Program for ECIS Time Course Data
            Acquisition</a></p>
        <p><a href="public/pdf/ChoiceOfProgramForECISTimeCourseDataAcquisition.pdf" class="link text-dark"
            target="_blank"><i class="far fa-file-pdf mr-2"></i> Don't Forget Capacitance</a></p>
        <p><a href="public/pdf/DontOverlookMicromotion.pdf" class="link text-dark" target="_blank"><i
              class="far fa-file-pdf mr-2"></i> Don't Overlook Micromotion</a></p>
        <p><a href="public/pdf/AN12_Avoiding_evaporation.pdf" class="link text-dark" target="_blank"><i
              class="far fa-file-pdf mr-2"></i> Avoiding Evaporation (ibidi)</a></p>
      </div>

    </div>
  </section><!-- /techSupportContent -->

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
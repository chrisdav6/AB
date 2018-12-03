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
    <?php include_once "includes/logo.php";?>

    <section id="applicationHeading" class="text-center text-md-left">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="display-5 mb-0">ECIS Users</h1>
            <hr class="mt-0">
          </div>
      </div>
    </section><!-- /applicationsHeading -->

    <section id="applicationContent" class="py-4 text-center text-md-left">
      <!-- <div class="container">

        <div class="row">
          <div class="col">
            <p class="lead mb-0">
              ECIS<sup>&reg;</sup> (Electric Cell-substrate Impedance Sensing) is a real-time, label-free, impedance-based method to study the activities of cells grown in tissue culture. These include morphological changes, cell locomotion, and other behaviors directed by the cell’s cytoskeleton. This impedance-based cell monitoring technology was invented by Drs. Ivar Giaever and Charles R. Keese who founded Applied BioPhysics, Inc.
            </p>
            <img class="img-fluid py-5 d-block mx-auto" src="public/img/ecisWorks.jpg" alt="ECIS Illustration">
            <p class="lead mb-0">
              The ECIS<sup>&reg;</sup> approach has been applied to numerous investigations including measurements of the invasive nature of cancer cells, the barrier function of endothelial cells, in vitro toxicity testing as an alternative to animal testing, and signal transduction involving GPCR’s for modern drug discovery.
            </p>
            <img class="img-fluid py-5 d-block mx-auto" src="public/img/whatIsECIS-B.jpg" alt="ECIS Graph">
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <h2 class="mt-5 mt-md-0">How to Quantify Cell Behavior</h2>
            <p class="lead">
              Cell function modulates cell morphology. ECIS is capable of detecting and quantifying morphology changes in the sub-nanometer to micrometer range. In ECIS a small alternating current (I) is applied across the electrode pattern at the bottom of the ECIS arrays (direct current cannot be used). This results in a potential (V) across the electrodes which is measured by the ECIS instrument. The impedance (Z) is determined by Ohm’s law Z = V/I.
            </p>
            <p class="lead">
              When cells are added to the ECIS Arrays and attach to the electrodes, they act as insulators increasing the impedance. As cells grow and cover the electrodes, the current is impeded in a manner related to the number of cells covering the electrode, the morphology of the cells and the nature of the cell attachment. When cells are stimulated to change their function, the accompanying changes in cell morphology alter the impedance. The data generated is impedance versus time.
            </p>
          </div>
          <div class="col-md-6">
            <h2 class="mt-5 mt-md-0">How Frequencies Reveal Cell Behavior</h2>
            <p class="lead">
              Why are multiple AC frequencies important? To understand why AC frequency is important in ECIS we have to consider how frequency affects the current paths with cell-covered electrodes. (Note: the total current is maintained constant and voltage changes are measured.) At relatively low frequencies (&lt; 2,000Hz) most of the current flows in the solution channels under and between adjacent cells (red lines).
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <img class="img-fluid py-5 d-block mx-auto" src="public/img/How Frequencies Reveal Cell Behavior A.jpg" alt="How Frequencies Reveal Cell Behavior Illustration A">
            <p class="lead">
              At higher frequencies (&gt; 40,000 Hz) more current now capacitively couples directly through the insulating cell membranes (green lines).
            </p>
            <img class="img-fluid py-5 d-block mx-auto" src="public/img/How Frequencies Reveal Cell Behavior B.jpg" alt="How Frequencies Reveal Cell Behavior Illustration B">
            <p class="lead">
              The high frequency impedance is more affected by cell-coverage, whereas the low frequency responds more strongly to changes in the spaces either under or between the cells.
            </p>
            <p class="lead">
              With the more advanced ZΘ instrument, where the impedance is broken down into its components (resistance and capacitance), quantitative information about the cells can be obtained by modeling (Giaever and Keese PNAS 1991). Using impedance data at multiple AC frequencies the ECIS model calculates time course changes in:
            </p>
            <ul class="list-unstyled mt-3 ml-0 ml-md-3">
              <li>- The barrier function (permeability) of the cell layer</li>
              <li>- The degree of constricted flow of current under the cells</li>
              <li>- The cell membrane capacitance</li>
            </ul>
          </div>
        </div>

        <div class="row my-4">
          <div class="col">
            <h2>How Electrode Designs Reveal Aspects of Cell Behavior</h2>
            <img class="img-fluid py-5 d-block mx-auto" src="public/img/1e v 10e+ web.jpg" alt=">How Electrode Designs Reveal Aspects of Cell Behavior">
            <h4 class="my-4">Small Electrodes</h4>
            <p class="lead">
              Small electrodes (1E, 10E, 10E+ type arrays) and their layout within the wells ensure that all current passes through the cell monolayer. This allows the ability to analyze data with the ECIS modeling software to determine barrier function, cell membrane capacitance as well as the spacing between the cell basal membrane and electrode.
            </p>
            <p class="lead">
              Keeping the total surface area of the electrodes small also allows for a relatively low AC current to generate the large electric field necessary to either electroporate or kill the cells in migration experiments. Small electrodes also provide the ability to monitor the uncorrelated nano-scale morphological changes of individual or small populations of cells (&lt;100), while larger or multiple electrodes provide the averaged morphological response of many cells (1000+).
            </p>
            <h4 class="my-4">Large Electrodes</h4>
            <p class="lead">
              Some experimental protocols, such as cell proliferation, require sparse inoculations leading to a variance of cell density at the bottom of the well. Large electrodes (CP Array) or a large collection of small electrodes (10E+ Array) increases the sampling size resulting in less variability.
            </p>
            <h4 class="my-4">Specialized Designs</h4>
            <p class="lead">
              Applied Biophysics offers arrays optimized for observing cells under a variety of conditions such as high shear stress and hypoxia/hyperoxia. Additionally, specialized arrays for correlated microscopy and ECIS are available.
            </p>
          </div>
        </div>

      </div> -->
    </section><!-- /applicationContent -->

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
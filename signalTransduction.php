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
            <h1 class="display-5 mb-0">Signal Transduction</h1>
            <hr class="mt-0">
          </div>
      </div>
    </section><!-- /applicationsHeading -->

    <section id="applicationContent" class="py-4 text-center text-md-left">
      <!-- <div class="container">

        <div class="row">
          <div class="col">
            <p class="lead">
              Epithelial cells and endothelial cells regulate the passage of molecules across cell layers. Diseases, especially vascular disease, occur when this function is impaired. ECIS<sup>®</sup> provides a highly sensitive real-time continous TEER measurement ideal for these types of studies.
            </p>
            <p class="lead mb-0">
              Example Publication: <a href="#" class="text-muted"> Kim et al., (2015) "Critical Role of Sphingosine-1-Phosphate Receptor-2 in the Disruption of Cerebrovascular Integrity in Experimental Stroke." Nature Communications 6:7893 doi:10.1038/ncomms8893</a>
            </p>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col">
            <h3>Monitoring the Barrier Function of Cell Monolayers using ECIS<sup>®</sup></h3>
            <hr class="my-0">
            <h4 class="mt-5 mb-3 secondary-title">Introduction</h4>
            <p class="lead">
              In vivo, barriers are provided by monolayers of epithelial or endothelial cells. These cell layers play a key role regulating the free movement of molecules between different tissues and/or interstitial compartments. In many diseases as well as in inflammation, these barriers become compromised, and hence, measuring their permeability is of considerable interest to cell biologists and the health community in general.
            </p>
            <p class="lead">
              Most epithelial and endothelial cells types can be cultured in vitro to form confluent monolayers where it is possible to measure the barrier function afforded by these cell layers. In addition, with the right tools, dynamic changes of the layers can be followed when the cellular environment is altered by exposure to compounds or physical changes such as shear stress.
            </p>

            <h4 class="mt-4 mb-3 secondary-title">Barrier Function Measurements</h4>
            <p class="lead">
              We offer different real-time approaches for electrically monitoring the barrier function (permeability) of cell monolayers using the ECIS<sup>®</sup> instrumentation. The approach used depends upon the degree of barrier function of the cells being studied, the throughput (number of experimental conditions) required, special experimental conditions (e.g. cells under flow) and, of course, the preference of the researcher. The main consideration, however, is whether one wants to monitor cells grown upon solid substrates or upon membrane filter supports.
            </p>

            <ul class="list-unstyled mt-3 ml-0 ml-md-3">
              <li class="indent my-4 pl-0 pl-sm-4">
                Monitoring cells upon solid substrates with gold film electrodes is simple and high throughput can easily be achieved (e.g. using 96 well arrays). In addition, this approach allows barrier measurements to be made under shear stress conditions to more closely mimic the in vivo endothelial cell environment.
              </li>
              <li class="indent my-4 pl-0 pl-sm-4">
                The use of membrane filters as a substrate is experimentally more demanding, however, this approach provides a more in vivo like situation where cells are effectively fed from both the apical and basal side. It is commonly observed that under these conditions cell layers achieve higher absolute barrier function. That being said, the relative change in barrier function observed on both solid and filter supports seem to be comparable.
              </li>
            </ul>

            <h4 class="mt-4 mb-3 secondary-title">ECIS Barrier Function Measurements on Gold Film Electrodes</h4>
            <p class="lead">
              Let's first consider the importance of the AC frequency used in the ECIS constant current measurement. The illustration below shows a cross section of a confluent cells layer where the path of the current is indicated by the arrows. The red arrows represent ion current flow coming from the electrode interface, moving in the solution spaces between the electrode and the basal plasma membrane and then moving through the paracellular passage between the cells (the barrier function). The green arrows on the other hand indicate a path of current that is possible as ECIS is an AC measurement, and current can couple capacitively through the cell membranes.
            </p>
            <img class="img-fluid py-5 d-block mx-auto" src="public/img/ac-frequency.jpg" alt="AC frequency">
            <p class="lead">
              Current will always follow the path of least resistance. At high AC frequency (40,000 Hz) the impedance (capacitive reactance) of the membrane is relatively small, and current mainly capacitively couples through the insulating cell membranes with little current passing through the paracellular path. At low AC frequency, on the other hand, the membrane impedance is high, and most of the current now flows under the cells and through the tight spaces between the cells (the solution path).
            </p>
            <p class="lead">
              As a result of this difference, high frequency impedance can be used to monitor the establishment of a confluent layer, and low frequency impedance can be used to monitor the solution paths about the cells and hence the layer's barrier function.
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
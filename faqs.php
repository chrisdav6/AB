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

    <section id="technologyHeading" class="text-center text-md-left">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="mb-0">FAQ's</h1>
            <hr class="mt-0">
          </div>
      </div>
    </section><!-- /technologyHeading -->

    <section id="technologyContent" class="py-4 text-center text-md-left">
      <div class="container">

        <div class="row">
          <div class="col">

            <div class="item">
              <h4>What does ECIS stand for?</h4>
              <p class="pl-0 pl-md-3">
                ECIS stands for Electric Cell-Substrate Impedance Sensing.
              </p>
            </div>

            <div class="item">
              <h4>How is ECIS pronounced?</h4>
              <p class="pl-0 pl-md-3">
                ECIS - (ë'sis) n. adj.
              </p>
            </div>

            <div class="item">
              <h4>Does ECIS require labels?</h4>
              <p class="pl-0 pl-md-3">
                No. ECIS is a completely label free measurement.
              </p>
            </div>

            <div class="item">
              <h4>Can the cells sense that they are being monitored?</h4>
              <p class="pl-0 pl-md-3">
                No. The AC current used to monitor the cells is 10 X below their ability to sense any current. It's as if you are eavesdropping on the cells.
              </p>
            </div>

            <div class="item">
              <h4>What is impedance?</h4>
              <p class="pl-0 pl-md-3">
                Impedance is a measure of the opposition to a sinusoidal AC current. Impedance extends the concept of DC resistance to AC circuits. It describes not only the amplitude of the voltage and current, but also the phase of the voltage relative to the current.
              </p>
            </div>

            <div class="item">
              <h4>What does ECIS measure?</h4>
              <p class="pl-0 pl-md-3">
                The ECIS system measures the change in impedance as cells cover a 250um diameter gold electrode and block the current flow.
              </p>
            </div>

            <div class="item">
              <h4>What is micromotion?</h4>
              <p class="pl-0 pl-md-3">
                Micromotion is the intricate movement and unique ruffling of cells.
              </p>
            </div>

            <div class="item">
              <h4>What is modeling?</h4>
              <p class="pl-0 pl-md-3">
                We can apply a mathematical model of the impedance changes due to the presence of a cell layer, where the impedance data can be used to calculate cell morphological parameters including the barrier function of the cell layer, the spacing between the ventral side of the cell and the substratum, and the cell membrane capacitance. In the model cells are represented as disk shaped objects having insulating membrane surfaces and filled with conducting electrolyte.
              </p>
            </div>

            <div class="item">
              <h4>What kind of cells can be monitored?</h4>
              <p class="pl-0 pl-md-3">
                Cells must adhere to the substrate.
              </p>
            </div>

            <div class="item">
              <h4>Can the array surface be pretreated with protein?</h4>
              <p class="pl-0 pl-md-3">
                Yes.
              </p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- /technologyContent -->

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
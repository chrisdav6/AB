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

    <section id="schoolHeading" class="text-center text-md-left">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="mb-0">ECIS School</h1>
            <hr class="mt-0">
          </div>
      </div>
    </section><!-- /schoolHeading -->

    <section id="schoolContent" class="py-4 mb-5">
      <div class="container text-center text-md-left">

        <p class="schoolIntro mb-5">
          Applied BioPhysics offers an in-depth training course on electric cell-substrate impedance sensing (ECIS) theory.
        </p>

        <div class="row">
          <div class="col-lg-6">
            <img class="img-fluid mb-4 mb-lg-0 border" src="public/img/schoolKeese.jpg" alt="Dr. Keese Teaching">
          </div>
          <div class="col-lg-6">
            <p class="nextClass">Next training class: May 9-10, 2019</p>
            <p>
              The course, taught by Dr. Charles Keese, provides the students with the knowledge and tools on how to apply ECIS
              theory
              in cellular research and how to properly operate the ECIS systems to further enhance potential publication
              opportunities.
            </p>
            
            <p>
              Applied BioPhysics will also provide an opportunity to get familiar with our area by arranging lunch and dinner at
              local
              eateries for the duration of your stay. Please contact us for further details.
            </p>
          </div>
        </div>

        <h4 class="mt-5 mb-5 secondary-title">ECIS School Agenda</h4>

        <div class="row">
          <div class="col-md-6 mb-4 mb-md-0">
            <h4>Day 1:</h4>
            <hr>
            <ul class="list-unstyled schoolList">
              <li class="list-item">- History of ECIS & Applied Biophysics</li>
              <li class="list-item">- Impedance Primer ECIS Theory</li>
              <li class="list-item break">- Coffee Break -</li>
              <li class="list-item">- Basics of Preparing/inoculating Arrays</li>
              <li class="list-item">- Lab Demo</li>
              <li class="list-item">- Cell-ECM Interactions</li>
              <li class="list-item">- Extravasation Assay</li>
              <li class="list-item">- The ECIS Model</li>
              <li class="list-item break">- Lunch -</li>
              <li class="list-item">- Toxicology</li>
              <li class="list-item">- Assay Development</li>
              <li class="list-item">- Electroporation & Monitoring</li>
              <li class="list-item">- Signal Transduction</li>
              <li class="list-item">- Inoculate Array</li>
              <li class="list-item break">- Dinner -</li>
            </ul>
          </div>
          <div class="col-md-6">
            <h4>Day 2:</h4>
            <hr>
            <ul class="list-unstyled schoolList">
              <li class="list-item">- Cell-ECM Interactions</li>
              <li class="list-item">- Barrier Function Measurements</li>
              <li class="list-item">- Cell Migration Assays</li>
              <li class="list-item">- New Filter-based Measurements</li>
              <li class="list-item break">- Lunch -</li>
              <li class="list-item">- Recent Literature</li>
              <li class="list-item">- Software I: Data Inquisition</li>
              <li class="list-item">- Software II: Basic Data Analysis</li>
              <li class="list-item">- Software III: Modeling</li>
              <li class="list-item">- Advanced Data Analysis</li>
            </ul>
          </div>
        </div>

        <h4 class="mt-4 mb-4 secondary-title">ECIS School Fees</h4>

        <p class="mb-1">Registration Fees: $1250.00</p>
        <p class="fees">*Fees include two nights of lodging, transportation to and from the hotel to Applied Biophysics facility, lunch on both
        days, and dinner on the first evening</p>

        <h4 class="mt-5 mb-4 secondary-title">Past ECIS School Graduates</h4>


      </div>
    </section><!-- /schoolContent -->

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
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

    <section id="companyHeading" class="text-center text-md-left">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="mb-0">Early Career Mini-Grants</h1>
            <hr class="mt-0">
          </div>
        </div>
    </section><!-- /companyHeading -->

    <section id="earlyCareerContent" class="py-4 mb-5">
      <div class="container text-center text-md-left">

        <p class="careerIntro mb-4">
          Applied BioPhysics would like to help young scientists obtain funding.
        </p>

        <p>
          The ECIS mini-grant is aimed at early career scientists who are applying for their first RO1 grant. For a
          researcher wanting to use ECIS technology to achieve their research goals, Applied BioPhysics will provide an
          ECIS instrument, ECIS arrays, and consultation in order to generate preliminary data to support the applicants
          RO1 proposal.
        </p>

        <p>
          Interested scientists should submit their research plan with a cover letter explaining how ECIS technology can
          be used to achieve their specific objectives. Applied BioPhysics will evaluate proposals based on scientific
          merit, suitability with ECIS technology and novelty.
        </p>

        <p class="mb-0">To apply please send a resume, RO1 research plan and cover letter to ???</p>

        <h4 class="mt-5 mb-3 secondary-title">2011 ECIS Early Career Grant Recipient: Dr. Seema Sehrawat</h4>

        <div class="row mt-3">
          <div class="col-md-3">
            <img class="img-fluid" src="public/img/semmaSehrawat.jpg"
              alt="2011 ECIS Early Career Grant Recipient: Dr. Seema Sehrawat">
          </div>
          <div class="col-md-9 mt-4 mt-md-0">
            <p>
              Applied BioPhysics is proud to introduce Dr. Seema Sehrawat, Research Fellow at the Brigham and Women's
              Hospital, Harvard Medical School, as the latest recipient of the Early Career ECIS Grant Program. This
              program fosters the prospects of young scientists to secure initial NIH funding for health related
              research.
            </p>
            <p>
              Dr. Sehrawat is testing the hypothesis that viral and bacterial pathogens regulate PKA activity in a
              cAMP-dependent manner to regulate specific proteins/protein complexes. She will characterize a potentially
              novel protein complex containing AKAP9/Epac1 at the centrosome and its role in endothelial barrier
              function particularly in the context of viral and bacterial infection. Using the ECIS Z-Theta she will
              monitor endothelial barrier function and associated cell morphology changes on a real-time basis, to
              elucidate the signaling mechanisms involved.
            </p>
          </div>
        </div>

        <h4 class="mt-5 mb-3 secondary-title">2010 ECIS Early Career Grant Recipient: Dr. Sandra Wells</h4>

        <div class="row mt-3">
          <div class="col-md-3">
            <img class="img-fluid" src="public/img/sandraWells.jpg"
              alt="2010 ECIS Early Career Grant Recipient: Dr. Sandra Wells">
          </div>
          <div class="col-md-9 mt-4 mt-md-0">
            <p>
              Dr. Wells' research focuses on the physiological mechanisms underlying the pathology of asthma. Her
              ultimate goal is to identify new therapeutic targets for treating this widespread disease.
            </p>
            <p>
              Her ECIS Grant project explored the role of serotonin homeostasis in the pathophysiology of asthma.
              Accumulating evidence supports a role for the serotonergic system in the pathophysiology of asthma leading
              to speculation that the serotonin (5-HT) transmitter system might represent a novel therapeutic target for
              the treatment of asthma. However, the mechanisms responsible for altered 5-HT homeostasis in the lung, and
              the role of elevated 5-HT in the pathophysiology of asthma remain unknown.
            </p>
            <p>
              Utilizing a murine model of allergic inflammation, her research has shown that increased lung inflammation
              and reduced pulmonary function are associated with a greater than 2-fold elevation in lung 5-HT and a 2-
              to 4-fold reduction in lung SERT and MAO-A expression. In addition, significant levels of SERT, MAO-A and
              5-HT were found in human bronchial epithelial cells.
            </p>
            <p>
              To determine the functional consequences of elevated lung 5-HT, Dr. Wells utilized Electric Cell-Substrate
              Impedance Sensing (ECIS) to monitor epithelial barrier function, a key element in the pathogenesis of
              asthma. A dose-dependent reduction in barrier function was found in human lung epithelial cells following
              treatment with 5-HT. These findings have led to the hypothesis that reduced lung 5-HT uptake by SERT and
              inactivation by MAO-A worsens asthma through epithelial barrier dysfunction. In addition, the data
              provides support for the 5-HT transmitter system in the lung as a potential therapeutic target for the
              treatment of asthma.
            </p>
            <p>
              Dr. Wells earned her Ph.D. in Microbiology at Columbia University in New York, New York and completed a
              postdoctoral fellowship in immunology at the National Institutes of Health in Bethesda, Maryland.
              Subsequently, she worked for 9 years in the biotechnology industry as a regulatory and clinical scientist
              prior to returning to academic research in 2005. In 2009, Dr. Wells joined the faculty as an Assistant
              Professor in the Department of Environmental, Agricultural and Occupational Health in the College of
              Public Health at the University of Nebraska Medical Center. She has been awarded NIH funding to study
              mechanisms involved in the development and pathophysiology of asthma and is involved in the development of
              a multidisciplinary collaboration to assess health effects of environmental exposure to methamphetamine
              use and production in children, and serves on the National Advisory Board for the nonprofit organization
              National Alliance for Drug Endangered Children.
            </p>
          </div>
        </div>

      </div>
    </section>

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
<?php
  $title = "Cells Measured with ECIS - Applied BioPhysics";
  $metaDesc = "A Partial List of Cell Lines Measured with ECIS. With over 80 cell lines recorded and counting, ECIS
  instruments continue to successfully measure cellular behavior.";
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

  <section id="technologyHeading" class="text-center text-md-left">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="mb-0">Cells Measured with ECIS</h1>
          <hr class="mt-0">
        </div>
      </div>
    </div>
  </section><!-- /technologyHeading -->

  <section id="technologyContent" class="py-4 mb-5 text-center text-md-left">
    <div class="container">

      <p>A Partial List of Cell Lines Measured with ECIS. If you have additional cell lines that are not listed and have
        been used with ECIS, we invite you to submit the information to us for the partial list of cell lines.</p>

      <div class="mt-5 cells">
        <p>3T3-L1</p>
        <p>B3B3</p>
        <p>BAEC</p>
        <p>BLMVEC</p>
        <p>BPAEC</p>
        <p>BPMEC</p>
        <p>BPMVEC</p>
        <p>Bovine Endothelial Cells</p>
        <p>Bovine Pulmonary Microvascular Endothelial Cells</p>
        <p>Bovine aortic Endothelial Cells</p>
        <p>Bronchial Epithelial (BEC) Cells</p>
        <p>BS-C-1</p>
        <p>CaCo cells</p>
        <p>CaCo-2BBE</p>
        <p>Cardiac Myocytes</p>
        <p>Chinese Hamster Lung Fibroblast V79 Cells</p>
        <p>CHO</p>
        <p>Chondrocytes</p>
        <p>Corneal Epithelial Cells</p>
        <p>D. Discoideum Strain NC4A2</p>
        <p>Dermal Fibroblast</p>
        <p>Dermal Microvascular Endothelial Cells</p>
        <p>Du-145</p>
        <p>Dunning Murine Prostatic Carcinoma Lines</p>
        <p>Dunning Prostatic Adenocarcinoma</p>
        <p>Du-Pro</p>
        <p>ECV</p>
        <p>ECV304</p>
        <p>Foreskin cells</p>
        <p>Foreskin microvascular endothelial cells</p>
        <p>HBMEC</p>
        <p>HCT 116 colon cancer cells</p>
        <p>HCT 166 cells</p>
        <p>HK293</p>
        <p>Hep2G</p>
        <p>HMEC</p>
        <p>HPAEC</p>
        <p>HTB77</p>
        <p>Human brain microvascular endothelial cells</p>
        <p>Human Astrocytes-565 Breast Cancer</p>
        <p>Human Au</p>
        <p>Human microvascular endothelial cells</p>
        <p>Human pulmonary artery endothelial cells</p>
        <p>Human pulmonary microvascular endothelial cells</p>
        <p>HUVEC</p>
        <p>J774</p>
        <p>LEC</p>
        <p>LP3</p>
        <p>LP9</p>
        <p>Madin-Darby canine kidney</p>
        <p>MCF-7 cells</p>
        <p>MCF-10A</p>
        <p>MDA-MB-4355</p>
        <p>MDCK</p>
        <p>MEF</p>
        <p>Mesothelial cells</p>
        <p>METSA</p>
        <p>Microvascular Endothelial Cell</p>
        <p>MLL Dunning Cells</p>
        <p>MMP9</p>
        <p>Monocytic THP-1 cells</p>
        <p>Murine Macrophages</p>
        <p>Myoblast</p>
        <p>Myoblasts from human skeletal muscle</p>
        <p>NB7</p>
        <p>NIH3T3</p>
        <p>N-N1003A</p>
        <p>Neuroblastoma cells</p>
        <p>Normal rat kidney</p>
        <p>NRK</p>
        <p>Orbital Fibroblast</p>
        <p>Osteosarcome cells</p>
        <p>PBCEC</p>
        <p>PMVEC</p>
        <p>Primary rat cortical astrocytes</p>
        <p>Rabbit lens epithelial (BEC) cells</p>
        <p>Ramos Cells</p>
        <p>Rat Fibroblasts</p>
        <p>RAW264</p>
        <p>RD Transfectant Cells</p>
        <p>RDX2C2</p>
        <p>Ros17_2.8</p>
        <p>Smooth Muscle</p>
        <p>Spodptera Frugiperda Sf9</p>
        <p>Transfeted NIH3T3</p>
        <p>V79</p>
        <p>W138_ VA-13</p>
        <p>WI-38</p>
        <p>WINR6</p>
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
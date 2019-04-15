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

    <section id="applicationHeading" class="text-center text-md-left">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="mb-0">Cell Proliferation</h1>
            <hr class="mt-0">
          </div>
        </div>
      </div>
    </section><!-- /applicationsHeading -->

    <section id="applicationContent" class="py-4 text-center text-md-left">
      <div class="container">

        <p>
          As cells proliferate two factors act to change the impedance: cell number and cell morphology. In most instances the cells grow asynchronously and the impedance gradually increases until a maximum when cells become confluent. The impedance change is approximately linear with cell number while the cells are sub-confluent.
        </p>

        <div class="row">
          <div class="col">
            <h4 class="mt-4 mb-3 secondary-title">Overview</h4>
            <p>
              ECIS measurements can be used to monitor cell proliferation, and experiments can be designed to determine how various changes in cell and culture conditions affect the rates at which the cell monolayer approaches confluence. To accomplish these studies, arrays are inoculated with a low cell density providing room for the dividing cell population. As the cell number increases, the amount of electrode area covered with the spread cells grows accordingly, causing the electrode impedance to rise. These impedance changes can be related to the relative cell proliferation rates or, more accurately, the rate at which the substrate becomes occupied with spread cells. More quantitative measurements can be obtained by observing the changes in capacitance measured at high AC frequencies.
            </p>
            <p>
              Dr. Joachim Wegener has modeled how ECIS impedance measurements repond to different degrees of fractional substrate coverage by spread cells. These calculations were carried out using the properties of MDCK type II cells and demonstrate that the capacitance measured at 40K Hz varies in a linear fashion with the fractional cell coverage (Wegener, et al 2000). Although this calculation was only carried out for the MDCK line, in general this correlation is valid for most lines and primary cell cultures. With this relationship, the percentage of the electrode area covered as a function of time can be easily followed.
            </p>
          </div><!-- /col -->
        </div><!-- /row -->

        <div class="row mt-3">
          <div class="col-lg-8 col-md-6">
            <p>
              Calculated resistance (A) and capacitance (B) values of ECIS electrodes as a function of fractional coverage of the surface with adherent cells. Electrode parameters were modeled for three different frequencies: (...) 400 Hz, (- - -) 4 kHz, (___) 40 kHz. For a better comparison both quantities are normalized to the corresponding values of a cell-free electrode.
            </p>
            <p>
              It is important to note that the ECIS approach measures the area blocked by the spread cells and not the number of cells directly. Nevertheless, this approach can yield useful proliferation-related data that, if required, can later be validated by experiments employing direct cell counting procedures. The appeal of the ECIS measurement is that it is fully automated and requires minimal manipulations. Once cells are added to the electrode arrays the incubator door remain closed, and data may be gathered for up to days if required. For these assays, we recommend the use of the <a href="#" class="text-dark link">8W10E arrays</a>, since theses follow the substratum coverage of ten individual electrodes. These are located at different sires on the well bottom and provide a more statistically relevant measurement of the overall condition of the culture.
            </p>
          </div>
          <div class="col-lg-4 col-md-6">
            <img class="img-fluid my-5 my-md-0" src="public/img/highfreq.jpg" alt="High frequency">
          </div>
        </div><!-- /row -->

        <div class="row">
          <div class="col">
            <h4 class="mt-4 mb-3 secondary-title">Chondrocyte Proliferation Data Measured Via ECIS</h4>
            <p>
              Chondrocytes were harvested from actively growing flasks and inoculated into ECIS wells to give an initial surface concentration of approximately 1 x 104 cells per cm2. A total of seven individual ECIS wells were inoculated and the impedance measured every 10 minutes for over 150 hours. The arrays used from this work were <a href="#" class="text-dark link">8W10E</a> with 10 small electrodes connected in parallel in each well. The plot below shows the resistive portion of the impedance at 4000 Hz as a function of time. One medium change took place at 100 hours post inoculation.
            </p>
            <img class="img-fluid py-5 d-block mx-auto" src="public/img/chonprolif2.jpg" alt="Chondrocyte Proliferation">
            <p>
              The same data is summarized below, showing the time course change in the average resistance of the seven wells minus the starting resistance due to the cell-free electrode. Note that the medium change at 100 hours causes a temporary departure from the otherwise exponential appearance of the graph until confluence is achieved. The subsequent change in impedance presumably comes about as cells crowd into the layer resulting in more regions of cell-cell contact and a slight drop in resistance. Using capacitance measurements at high frequency, this factor can be essentially eliminated.
            </p>
            <img class="img-fluid py-5 d-block mx-auto" src="public/img/chonprolif2a.jpg" alt="Average Minus Starting Value">
          </div><!-- /col -->
        </div><!-- /row -->

      </div><!-- /container -->
    </section><!-- /applicationContent -->

    <section id="applicationReferences" class="py-4 text-center text-md-left mb-5">
      <div class="container">

        <div class="row">
          <div class="col">
            <h4 class="mt-4 mb-0">Related Cell Proliferation ECIS Publications</h4>
            
            <hr class="mt-0 mb-4">

            <p>Zudaire, E., Cuesta, N., Murty, V., Woodson, K., Gonzalez, N., Martinez, A, Narayan, G., Kirsch, I., Hirsch, F., Birrer, M., Cuttitta, F., <strong>"The aryl hydrocarbon receptor repressor is a putative tumor gene in multiple human cancers."</strong> J. of Clinical Investigation, 118 (2):640-650 (2008).</p>

            <p>Lundien, M.C., Mohammed, K.A., Nasreen, N., Tepper, R.S., Hardwick, J.A., Sanders, K.L., Van Horn, R.D., Antony, V.B., <strong>"Induction of MCP-1 expression in airway epithelial cells: Role of CCR2 receptor in airway epithelial injury"</strong>, Journal of Clinical Immunology, 22 (3): 144-152 (2002).</p>

            <h4 class="my-4">Example Publication</h4>
            <p>
              <a href="http://mct.aacrjournals.org/content/12/7/1266" class="text-dark link" target="_blank"> MacKenzie et al., (2013) "Triptolide Induces the Expres-sion of miR-142-3p: A Negative Regulator of Heat Shock Protein 70 and Pancreatic Cancer Cell Proliferation." Molecular Cancer Therapeutics 12(7):1266 doi:10.1158/1535-7163.MCT-12-1231</a> 
            </p>

          </div>
        </div>

      </div>
    </section><!-- /applicationReferences -->
   

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
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

    <section id="culturewareHeading" class="pb-4 text-center text-md-left">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="display-3">ECIS Cultureware</h1>
            <hr class="my-2">
            <h2>Disposable Electrode Arrays</h2>
          </div>
        </div>
      </div>
    </section><!-- /culturewareHeading -->

    <section id="culturewareContent" class="py-4 mb-5">
      <div class="container text-center text-md-left">

        <p>
          ECIS Cultureware consists of sterile disposable electrode arrays containing gold film electrodes delineated with an insulating film. The well top assembly is made of polystyrene. The gold layer is thin enough to allow microscopic observation of the cells using a standard inverted tissue culture microscope. The ECIS electrode array is placed in an array holder located in the incubator.
        </p>

        <p>For help in chossing an ECIS array we offer a technical note for download - <a class="text-dark link" href="public/pdf/TN01ArrayChoices.pdf" target="_blank"><i class="far fa-file-pdf mx-2"></i>TN01 Array Choices</a></p>

        <div class="culturewareTables my-5">
          <h4 class="mb-4 secondary-title">96 Well Arrays</h4>

          <table class="table table-bordered table-responsive-sm">
            <thead>
              <tr>
                <th scope="col">Array</th>
                <th scope="col">Electrodes per Well</th>
                <th scope="col">Electrode Area (mm<sup>2</sup>)</th>
                <th scope="col">Maximum Number of Cells Measured</th>
                <th scope="col">Well Volume (µL)</th>
              </tr>
            </thead>
            <tbody>
              <tr class="odd">
                <th scope="row"><a class="arrayLink" href="#96W1E">96W1E+ PET</a></th>
                <td>2</td>
                <td>0.256</td>
                <td>100-200</td>
                <td>300</td>
              </tr>
              <tr class="even">
                <th scope="row"><a class="arrayLink" href="#96W10idf">96W10idf PET</a></th>
                <td>idf</td>
                <td>2.09</td>
                <td>2000-4000</td>
                <td>300</td>
              </tr>
              <tr class="odd">
                <th scope="row">96W20idf PET</th>
                <td>idf</td>
                <td>3.985</td>
                <td>4000-8000</td>
                <td>300</td>
              </tr>
            </tbody>
          </table>

          <h4 class="mb-4 mt-5 secondary-title">Standard 8 Well Arrays</h4>

          <table class="table table-bordered table-responsive-sm">
            <caption class="ml-3 ml-sm-0 mb-0">
              <strong>PET:</strong> Polyethylene terephthalate, standard thickness 0.25mm<br>
              <strong>PC:</strong> Clear polycarbonate substrate, standard thickness 0.51mm<br>
              High numerical aperture (HNA) series with a thickness of 0.13mm is available - contact factory to order
            </caption>

            <thead>
              <tr>
                <th scope="col">Array</th>
                <th scope="col">Electrodes per Well</th>
                <th scope="col">Electrode Area (mm<sup>2</sup>)</th>
                <th scope="col">Maximum Number of Cells Measured</th>
                <th scope="col">Well Volume (µL)</th>
              </tr>
            </thead>
            <tbody>
              <tr class="odd">
                <th scope="row">8W1E PET or PC</th>
                <td>1</td>
                <td>0.049</td>
                <td>50-100</td>
                <td>600</td>
              </tr>
              <tr class="even">
                <th scope="row">8W10E PET or PC</th>
                <td>10</td>
                <td>0.49</td>
                <td>500-1000</td>
                <td>600</td>
              </tr>
              <tr class="odd">
                <th scope="row">8W10E+ PET or PC</th>
                <td>40</td>
                <td>1.96</td>
                <td>2000-4000</td>
                <td>600</td>
              </tr>
              <tr class="even">
                <th scope="row">8W20idf PET</th>
                <td>idf</td>
                <td>3.985</td>
                <td>4000-8000</td>
                <td>600</td>
              </tr>
            </tbody>
          </table>

          <h4 class="mb-4 mt-4 secondary-title">Specialty Arrays</h4>

          <table class="table table-bordered table-responsive-sm">
            <caption class="ml-3 ml-sm-0 mb-0">*Specialty arrays may require 2-4 weeks lead time</caption>
          
            <thead>
              <tr>
                <th scope="col">Array</th>
                <th scope="col">Electrodes per Well</th>
                <th scope="col">Electrode Area (mm<sup>2</sup>)</th>
                <th scope="col">Maximum Number of Cells Measured</th>
                <th scope="col">Well Volume (µL)</th>
              </tr>
            </thead>
            <tbody>
              <tr class="odd">
                <th scope="row">8W2x1E PET or PC</th>
                <td>2x1</td>
                <td>2 x 0.049</td>
                <td>50-100</td>
                <td>600</td>
              </tr>
              <tr class="even">
                <th scope="row">8W1CXE PET or PC</th>
                <td>1</td>
                <td>0.049</td>
                <td>50-100</td>
                <td>600</td>
              </tr>
              <tr class="odd">
                <th scope="row">8W2LE PET or PC</th>
                <td>2</td>
                <td>0.20</td>
                <td>200-400</td>
                <td>600</td>
              </tr>
              <tr class="even">
                <th scope="row">8Wµ1E+ PET or PC</th>
                <td>4</td>
                <td>0.196</td>
                <td>200-400</td>
                <td>600</td>
              </tr>
              <tr class="odd">
                <th scope="row">2W4x10E PC</th>
                <td>4x10</td>
                <td>4 x 0.49</td>
                <td>2000-4000</td>
                <td>600</td>
              </tr>
            </tbody>
          </table>

          <h4 class="mb-4 mt-4 secondary-title">Flow Arrays</h4>
          
          <table class="table table-bordered table-responsive-sm">
            <caption class="ml-3 ml-sm-0 mb-0">**Four electrodes are equal in size to 8W10E</caption>
          
            <thead>
              <tr>
                <th scope="col">Array</th>
                <th scope="col">Electrodes per Well</th>
                <th scope="col">Electrode Area (mm<sup>2</sup>)</th>
                <th scope="col">Maximum Number of Cells Measured</th>
                <th scope="col">Well Volume (µL)</th>
                <th scope="col">Channel Height x Width (mm)</th>
              </tr>
            </thead>
            <tbody>
              <tr class="odd">
                <th scope="row">1F8x1E PC</th>
                <td>8x1 (1 channel)</td>
                <td>0.049</td>
                <td>50-100</td>
                <td>90/60</td>
                <td>0.36 x 5</td>
              </tr>
              <tr class="even">
                <th scope="row">1F8x10E PC</th>
                <td>8x10 (1 channel)</td>
                <td>0.49</td>
                <td>500-1000</td>
                <td>90/60</td>
                <td>0.36 x 5</td>
              </tr>
              <tr class="odd">
                <th scope="row">6F1E PC</th>
                <td>1 (6 channels)</td>
                <td>0.049</td>
                <td>50-100</td>
                <td>45/60</td>
                <td>0.66 x 5</td>
              </tr>
              <tr class="even">
                <th scope="row">6F10E PC</th>
                <td>10 (6 channels)</td>
                <td>0.49</td>
                <td>500-1000</td>
                <td>45/60</td>
                <td>0.66 x 5</td>
              </tr>
              <tr class="odd">
                <th scope="row">1F2Y8x10E PC</th>
                <td>8x4x2 (30&45 degree sides**)</td>
                <td>0.49</td>
                <td>500-1000</td>
                <td>165/60</td>
                <td>0.66 x 5</td>
              </tr>
            </tbody>
          </table>

        </div><!-- /culturewareTables -->

        <h4 class="mt-4 secondary-title">How to Order Arrays</h4>

        <div class="row my-5">
          <div class="col-md-6 mb-4 mb-md-0">
            <div class="orderArray border p-3">
              <h4>Please Specify Array Name and Base Type</h4>
              <hr>
              <p><strong>PET:</strong> Polyethylene terephthalate, standard thickness 0.25mm</p>
              <p><strong>PC:</strong> Clear polycarbonate substrate, standard thickness 0.51mm</p>
              <p class="mb-0">High numerical aperture (HNA) series with a thickness of 0.13mm is available - contact factory to order</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="orderArray border p-3">
              <h4>Barcode</h4>
              <img class="img-fluid my-2" src="public/img/barcode.jpg" alt="ECIS Array Barcode">
              <p class="mb-0">All arrays include a bar code (code 128) label and serial number. The ECIS software embeds
              the type of array and serial number information in the ECIS data file. The information can be scanned
              in via a bar code scanner or keyed in manually. Requires ECIS software V 1.2.135 or later.</p>
            </div>
          </div>
        </div>

        <p>
          We maintain a large supply of arrays for shipment from our facility. When arrays are ordered, a final oxygen plasma etching procedure is used to both clean the gold surfaces and to sterilize the arrays. They are then packed and mailed on the same day via FedEx 2nd day. Credit cards are accepted.
        </p>

        <p>
          For array ordering and questions please contact Catherine Toniatti at (518) 880-6860. You may also send an email to <a class="link text-dark" href="mailto:ctoniatti@biophysics.com?subject=Ordering Applied BioPhysics Arrays">ctoniatti@biophysics.com</a> or fax your order with contact numbers and all shipping & billing addresses to 518-880-6865.
        </p>

        <p>
          All arrays can be ordered without upper chambers (NC). Gold films are transparent and the upper chambers can be removed following ECIS measurements to facilitate staining including fluorescence measurements.
        </p>

        <div class="mb-5 mt-5 array-title d-flex flex-column flex-md-row align-items-center">
          <h4 class="mb-0 secondary-title">96 Well Array Specifications</h4><a class="downloadArrayList" href="public/pdf/96WellArrays.pdf" target="_blank">96 Well Array List</a>
        </div>

        <div id="96W1E" class="array">
          <h4>96W1E+ PET</h4>

          <div class="row">
            <div class="col-md-8 mr-auto">
              <img class="img-fluid mb-5" src="public/img/96W1E+.jpg" alt="ECIS 96W1E+ PET Array">
            </div>
          </div>

          <p>
            Each of the 96 wells in a standard plate configuration contains two circular 350 μm diameter active electrodes on a transparent PET substrate (measuring from 100-200 cells). As with other 1E arrays, a major use of this array is for the ECIS wound-healing assays where the small electrodes assures the high current pulse will result in complete cell killing.
          </p>

          <p>
            Only a small population of cells is monitored on the small electrodes resulting in a fluctuating impedance signal due to the random like movement of the cells (micromotion).
          </p>

          <p class="applicationTitle">Applications Include:</p>
          <ul class="list-unstyled">
            <li>- Cell Migration</li>
            <li>- Measurement of Micromotion</li>
            <li>- Cell-ECM Protein Interactions</li>
            <li>- Signal transduction assays</li>
            <li>- Detection of invasion of endothelial cell layers by metastatic cells</li>
            <li>- Barrier Function</li>
            <li>- In situ Cell Electroporation and Monitoring</li>
          </ul>
        </div><!-- /array -->

        <hr class="mb-5">

        <div id="96W10idf" class="array">
          <h4>96W10idf PET</h4>
        
          <div class="row">
            <div class="col-md-8 mr-auto">
              <img class="img-fluid mb-5" src="public/img/96W10idf.jpg" alt="ECIS 96W10idf PET Array">
            </div>
          </div>
        
          <p>
            Each of the 96 wells has an Inter-digitated finger configuration. The total electrode area is 2.09mm<sup>2</sup> which measures a
            maximum of 2000-4000 cells.
          </p>
        
          <p class="applicationTitle">Applications Include:</p>
          <ul class="list-unstyled">
            <li>- Cell-ECM Protein Interactions</li>
            <li>- Signal Transduction Assays</li>
            <li>- Detection of invasion of endothelial cell layers by metastatic cells</li>
            <li>- Signal transduction assays</li>
            <li>- Barrier Function</li>
            <li>- Cell Proliferation</li>
          </ul>
        </div><!-- /array -->

        <hr class="mb-5">
        

      </div>
    </section><!-- /culturewareContent -->

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
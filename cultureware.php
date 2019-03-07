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

    <section id="culturewareHeading" class="mb-2 text-center text-md-left">
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

          <div class="mb-5 mt-5 array-title d-flex flex-column flex-md-row align-items-center">
            <h4 class="mb-0 secondary-title">96 Well Arrays</h4><a class="arrayTitleLink" href="https://applied-biophysics-inc.myshopify.com/collections/96-well-arrays" target="_blank"><i class="fas fa-shopping-cart mr-1"></i> Shop for 96 Well Arrays</a>
          </div>

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
                <th scope="row"><a class="arrayLink" href="#96W20idf">96W20idf PET</a></th>
                <td>idf</td>
                <td>3.985</td>
                <td>4000-8000</td>
                <td>300</td>
              </tr>
            </tbody>
          </table>

          <div class="mb-5 mt-5 array-title d-flex flex-column flex-md-row align-items-center">
            <h4 class="mb-0 secondary-title">Standard 8 Well Arrays</h4><a class="arrayTitleLink" href="https://applied-biophysics-inc.myshopify.com/collections/8-well-arrays" target="_blank"><i class="fas fa-shopping-cart mr-1"></i> Shop for 8 Well Arrays</a>
          </div>

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
                <th scope="row"><a class="arrayLink" href="#8W1E">8W1E PET or PC</a></th>
                <td>1</td>
                <td>0.049</td>
                <td>50-100</td>
                <td>600</td>
              </tr>
              <tr class="even">
                <th scope="row"><a class="arrayLink" href="#8W10E">8W10E PET or PC</a></th>
                <td>10</td>
                <td>0.49</td>
                <td>500-1000</td>
                <td>600</td>
              </tr>
              <tr class="odd">
                <th scope="row"><a class="arrayLink" href="#8W10EPlus">8W10E+ PET or PC</a></th>
                <td>40</td>
                <td>1.96</td>
                <td>2000-4000</td>
                <td>600</td>
              </tr>
              <tr class="even">
                <th scope="row"><a class="arrayLink" href="#8W20idf">8W20idf PET</a></th>
                <td>idf</td>
                <td>3.985</td>
                <td>4000-8000</td>
                <td>600</td>
              </tr>
            </tbody>
          </table>

          <div class="mb-5 mt-5 array-title d-flex flex-column flex-md-row align-items-center">
            <h4 class="mb-0 secondary-title">Specialty Arrays</h4><a class="arrayTitleLink" href="https://applied-biophysics-inc.myshopify.com/collections/specialty-arrays" target="_blank"><i class="fas fa-shopping-cart mr-1"></i> Shop for Specialty Arrays</a>
          </div>

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
                <th scope="row"><a class="arrayLink" href="#8W2x1E">8W2x1E PET or PC</a></th>
                <td>2x1</td>
                <td>2 x 0.049</td>
                <td>50-100</td>
                <td>600</td>
              </tr>
              <tr class="even">
                <th scope="row"><a class="arrayLink" href="#8W1CXE">8W1CXE PET or PC</a></th>
                <td>1</td>
                <td>0.049</td>
                <td>50-100</td>
                <td>600</td>
              </tr>
              <tr class="odd">
                <th scope="row"><a class="arrayLink" href="#8W2LE">8W2LE PET or PC</a></th>
                <td>2</td>
                <td>0.20</td>
                <td>200-400</td>
                <td>600</td>
              </tr>
              <tr class="even">
                <th scope="row"><a class="arrayLink" href="#8WU1EPlus">8Wµ1E+ PET or PC</a></th>
                <td>4</td>
                <td>0.196</td>
                <td>200-400</td>
                <td>600</td>
              </tr>
              <tr class="odd">
                <th scope="row"><a class="arrayLink" href="#2W4x10E">2W4x10E PC</a></th>
                <td>4x10</td>
                <td>4 x 0.49</td>
                <td>2000-4000</td>
                <td>600</td>
              </tr>
            </tbody>
          </table>

          <div class="mb-5 mt-5 array-title d-flex flex-column flex-md-row align-items-center">
            <h4 class="mb-0 secondary-title">Flow Arrays</h4><a class="arrayTitleLink" href="https://applied-biophysics-inc.myshopify.com/collections/flow-arrays" target="_blank"><i class="fas fa-shopping-cart mr-1"></i> Shop for Flow Arrays</a>
          </div>
          
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
                <th scope="row"><a class="arrayLink" href="#1F8x1E">1F8x1E PC</a></th>
                <td>8x1 (1 channel)</td>
                <td>0.049</td>
                <td>50-100</td>
                <td>90/60</td>
                <td>0.36 x 5</td>
              </tr>
              <tr class="even">
                <th scope="row"><a class="arrayLink" href="#1F8x10E">1F8x10E PC</a></th>
                <td>8x10 (1 channel)</td>
                <td>0.49</td>
                <td>500-1000</td>
                <td>90/60</td>
                <td>0.36 x 5</td>
              </tr>
              <tr class="odd">
                <th scope="row"><a class="arrayLink" href="#6F1E">6F1E PC</a></th>
                <td>1 (6 channels)</td>
                <td>0.049</td>
                <td>50-100</td>
                <td>45/60</td>
                <td>0.66 x 5</td>
              </tr>
              <tr class="even">
                <th scope="row"><a class="arrayLink" href="#6F10E">6F10E PC</a></th>
                <td>10 (6 channels)</td>
                <td>0.49</td>
                <td>500-1000</td>
                <td>45/60</td>
                <td>0.66 x 5</td>
              </tr>
              <tr class="odd">
                <th scope="row"><a class="arrayLink" href="#1F2Y8x10E">1F2Y8x10E PC</a></th>
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
          <h4 class="mb-0 secondary-title">96 Well Array Specifications</h4><a class="arrayTitleLink" href="public/pdf/96WellArrays.pdf" target="_blank">96 Well Array List</a>
        </div>

        <!-- 96W1E -->
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

        <!-- 96W10idf -->
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

        <!-- 96W20idf -->
        <div id="96W20idf" class="array">
          <h4>96W20idf PET</h4>
          <div class="row">
            <div class="col-md-8 mr-auto">
              <img class="img-fluid mb-5" src="public/img/96W20idf.jpg" alt="ECIS 96W20idf PET Array">
            </div>
          </div>
          <p>
            Each of the 96 wells has an Inter-digitated finger configuration. The total electrode area is 3.985mm2 which measures a maximum of 4000-8000 cells.
          </p>
          <p class="applicationTitle">Applications Include:</p>
          <ul class="list-unstyled">
            <li>- Cell-ECM Protein Interactions</li>
            <li>- Signal Transduction Assays</li>
            <li>- Detection of invasion of endothelial cell layers by metastatic cells</li>
            <li>- Barrier Function</li>
            <li>- Cell Proliferation</li>
          </ul>
        </div><!-- /array -->

        <div class="mb-5 mt-5 array-title d-flex flex-column flex-md-row align-items-center">
          <h4 class="mb-0 secondary-title">Standard 8 Well Array Specifications</h4><a class="arrayTitleLink" href="public/pdf/8WellArrays.pdf" target="_blank">Standard 8 Well Array List</a>
        </div>

        <!-- 8W1E PET or PC -->
        <div id="8W1E" class="array">
          <h4>8W1E PET or PC</h4>
          <div class="row">
            <div class="col-md-8 mr-auto">
              <img class="img-fluid mt-4 mb-5" src="public/img/8W1E.jpg" alt="ECIS 8W1E PET or PC Array">
            </div>
          </div>
          <p>
            Each of the 8 wells contains a single circular 250μm diameter active electrode. Each well has a substrate area of 0.8 cm<sup>2</sup> and a maximum volume of 600μL. On average, with a confluent cell layer, approximately 50 to 100 cells will be measured by the electrode, but even a single cell can be observed.
          </p>
          <p class="applicationTitle">Applications Include:</p>
          <ul class="list-unstyled">
            <li>- Barrier Function</li>
            <li>- Signal Transduction Assays</li>
            <li>- Cell Invasion</li>
            <li>- In situ Cell Electroporation and Monitoring</li>
            <li>- Cell Migration / Wound Healing</li>
            <li>- Correlated Microscopy and ECIS Experiments</li>
          </ul>
        </div><!-- /array -->

        <hr class="mb-5">

        <!-- 8W10E PET or PC -->
        <div id="8W10E" class="array">
          <h4>8W10E PET or PC</h4>
          <div class="row">
            <div class="col-md-8 mr-auto">
              <img class="img-fluid mt-4 mb-5" src="public/img/8W10E.jpg" alt="ECIS 8W10E PET or PC Array">
            </div>
          </div>
          <p>
            Each of the 8 wells contains ten circular 250 μm diameter active electrodes connected in parallel on a common gold pad. Each well has a substrate area of 0.8 cm<sup>2</sup> and a maximum volume of 600 μL. On average, with a confluent cell layer, approximately 500 to 1000 cells will be measured by the electrodes.
          </p>
          <p class="applicationTitle">Applications Include:</p>
          <ul class="list-unstyled">
            <li>- Cell Attachment and Spreading</li>
            <li>- Cell Proliferation</li>
            <li>- Cell Differentiation</li>
            <li>- Barrier Function</li>
            <li>- Signal Transduction Assays</li>
            <li>- Cell Invasion</li>
            <li>- Cytotoxicity</li>
          </ul>
        </div><!-- /array -->
        
        <hr class="mb-5">

        <!-- 8W10E+ PET or PC -->
        <div id="8W10EPlus" class="array">
          <h4>8W10E+ PET or PC</h4>
          <div class="row">
            <div class="col-md-8 mr-auto">
              <img class="img-fluid mt-4 mb-5" src="public/img/8W10E+.jpg" alt="ECIS 8W10E+ PET or PC Array">
            </div>
          </div>
          <p>
            Each of the 8 wells has two sets of 20 circular 250 μm diameter active electrodes located on inter-digitated fingers to provide measurements of cells upon a total of 40 electrodes. Each well has a substrate area of 0.8 cm<sup>2</sup> and a maximum volume of 600 μL. On average, with a confluent layer, approximately 2000 to 4000 cells will be measured by the electrodes.
          </p>
          <p>
            The 10E+ arrays are designed to monitor larger numbers of cells, sampling over the entire bottom of the well. Because of the relatively high number of cells, impedance fluctuations due to micromotion are smoothed out and do not obscure subtle changes in impedance due to the experimental conditions.
          </p>
          <p class="applicationTitle">Applications Include:</p>
          <ul class="list-unstyled">
            <li>- Cell Attachment and Spreading</li>
            <li>- Cell Proliferation</li>
            <li>- Cell Differentiation</li>
            <li>- Cell-ECM Protein Interactions</li>
            <li>- Barrier Function</li>
            <li>- Signal Transduction Assays</li>
            <li>- Cell Invasion</li>
            <li>- Cytotoxicity</li>
          </ul>
        </div><!-- /array -->
        
        <hr class="mb-5">

        <!-- 8W20idf PET -->
        <div id="8W20idf" class="array">
          <h4>8W20idf PET</h4>
          <div class="row">
            <div class="col-md-8 mr-auto">
              <img class="img-fluid mt-4 mb-5" src="public/img/8WCP.jpg" alt="ECIS 8W20idf PET Array">
            </div>
          </div>
          <p>
            Each of the 8 wells has a total electrode area of 3.985mm<sup>2</sup> located on inter-digitated fingers to provide measurements of cells. Each well has a substrate area of 0.8cm<sup>2</sup> and a maximum volume of 600 μL. On average, with a confluent layer, approximately 4000 to 8000 cells will be measured by the electrodes.
          </p>
          <p>
            The 8W20idf PET arrays are designed to monitor larger numbers of cells, sampling over the entire bottom of the well. Because of the relatively high number of cells, impedance fluctuations due to micromotion are smoothed out and do not obscure subtle changes in impedance due to the experimental conditions.
          </p>
          <p class="applicationTitle">Applications Include:</p>
          <ul class="list-unstyled">
            <li>- Cell Attachment and Spreading</li>
            <li>- Cell Proliferation</li>
            <li>- Cytotoxicity</li>
          </ul>
        </div><!-- /array -->

        <div class="mb-5 mt-5 array-title d-flex flex-column flex-md-row align-items-center">
          <h4 class="mb-0 secondary-title">Specialty Array Specifications</h4><!--<a class="arrayTitleLink" href="public/pdf/8WellArrays.pdf" target="_blank">Specialty Array List</a>-->
        </div>

        <!-- 8W2x1E PET or PC -->
        <div id="8W2x1E" class="array">
          <h4>8W2x1E PET or PC</h4>
          <div class="row">
            <div class="col-md-8 mr-auto">
              <img class="img-fluid mt-4 mb-5" src="public/img/8W2x1E-medusa-array.jpg" alt="ECIS 8W2x1E PET or PC Array">
            </div>
          </div>
          <p>
            This array is also called the Medusa array. Each well in this array has two independent single 250 Âµm diameter active electrodes. The Medusa array is useful for duplicating readings in the same well or to wound/electroporate one electrode while leaving the other as a control within the same well.
          </p>
          <p>
            When connected to the array holder only the upper four wells are measured. To use the other four wells, the array is turned around and the contact pads at the other end are connected.
          </p>
          <p class="applicationTitle">Applications Include:</p>
          <ul class="list-unstyled">
            <li>- Barrier Function</li>
            <li>- Signal Transduction Assays</li>
            <li>- Cell Invasion</li>
            <li>- In situ Cell Electroporation and Monitoring</li>
            <li>- Cell Migration / Wound Healing</li>
            <li>- Correlated Microscopy and ECIS Experiments</li>
          </ul>
        </div><!-- /array -->

        <hr class="mb-5">

        <!-- 8W1CXE PET or PC -->
        <div id="8W1CXE" class="array">
          <h4>8W1CXE PET or PC</h4>
          <div class="row">
            <div class="col-md-8 mr-auto">
              <img class="img-fluid mt-4 mb-5" src="public/img/8W1CXE-taxis-array.jpg" alt="ECIS 8W1CXE PET or PC Array">
            </div>
          </div>
          <p>
            This array is used to monitor the movement of cells in response to chemical gradients and is the array used in chemotaxis measurements first described by Hadjout, N. et al. (2001) Biotechniques 31 (5) 1130. The measuring electrode in this array is a thin gold line between two registry marks.*
          </p>
          <p>
            Each well has a substrate area of 0.8 cm<sup>2</sup> and a maximum volume of 600 μL. On average, with a confluent layer, approximately 50 to 100 cells will be monitored by the electrode.
          </p>
          <p class="smallDesc">
            *The gold line has the same total area as a 250 μm single circular electrode.
          </p>
          <p class="applicationTitle">Applications Include:</p>
          <ul class="list-unstyled">
            <li>- Cell Chemotaxis</li>
          </ul>
        </div><!-- /array -->
        
        <hr class="mb-5">

        <!-- 8W2LE PET or PC -->
        <div id="8W2LE" class="array">
          <h4>8W2LE PET or PC</h4>
          <div class="row">
            <div class="col-md-8 mr-auto">
              <img class="img-fluid mt-4 mb-5" src="public/img/8W2LE-line-array.jpg" alt="ECIS 8W2LE PET or PC Array">
            </div>
          </div>
          <p>
            Each of the 8 wells contains a single linear electrode with dimensions of 667µm x 150µm and a measurement value equal to that of our standard 250µm circular electrodes. Each well has a substrate area of 0.8cm<sup>2</sup> and a maximum volume of 600μL. On average, with a confluent cell layer, approximately 200 to 400 cells will be measured by the electrode, but even a single cell can be observed.
          </p>
          <p class="applicationTitle">Applications Include:</p>
          <ul class="list-unstyled">
            <li>- Cell Migration / Wound Healing</li>
            <li>- Correlated Microscopy and ECIS Experiments</li>
          </ul>
        </div><!-- /array -->
        
        <hr class="mb-5">

        <!-- 8Wµ1E+ PET or PC -->
        <div id="8WU1EPlus" class="array">
          <h4>8Wµ1E+ PET or PC</h4>
          <div class="row">
            <div class="col-md-8 mr-auto">
              <img class="img-fluid mt-4 mb-5" src="public/img/8Wu1E+.jpg" alt="ECIS 8Wµ1E+ PET or PC Array">
            </div>
          </div>
          <p>
            Each of the 8 wells contains four 250µm circular electrodes which will measure from 200-400 cells. The placement of the electrodes at the center of the well allows for the use of cloning cylinders to be placed around the electrodes creating microwells. The area outside of the cloning cylinder can then be flooded to reduce evaporation from within the micro-wells.
          </p>
          <p class="applicationTitle">Applications Include:</p>
          <ul class="list-unstyled">
            <li>- Barrier Function</li>
            <li>- Signal Transduction Assays</li>
            <li>- Cell Invasion</li>
            <li>- In situ Cell Electroporation and Monitoring</li>
            <li>- Cell Migration / Wound Healing</li>
            <li>- Correlated Microscopy and ECIS Experiments</li>
          </ul>
        </div><!-- /array -->
        
        <hr class="mb-5">

        <!-- 2W4x10E PC -->
        <div id="2W4x10E" class="array">
          <h4>2W4x10E PC</h4>
          <div class="row">
            <div class="col-md-8 mr-auto">
              <img class="img-fluid mt-4 mb-5" src="public/img/Wang-array.jpg" alt="ECIS 2W4x10E PC Array">
            </div>
          </div>
          <p>
            Each of the 2 circular 25mm diameter wells contain four independent sets of ten 250 μm diameter active electrodes measuring from 2000-4000 cells. In addition, the 2W4x10E array is useful for duplicating readings in the same well or to wound/electroporate one electrode while leaving the other as a control within the same well.
          </p>
          <p class="applicationTitle">Applications Include:</p>
          <ul class="list-unstyled">
            <li>- Cell Attachment and Spreading</li>
            <li>- Cell Proliferation</li>
            <li>- Cell Differentiation</li>
            <li>- Barrier Function</li>
            <li>- Signal Transduction Assays</li>
            <li>- Cell Invasion</li>
            <li>- Cytotoxicity</li>
            <li>- Correlated Microscopy and ECIS Experiments</li>
          </ul>
        </div><!-- /array -->
        
        <div class="mb-5 mt-5 array-title d-flex flex-column flex-md-row align-items-center">
          <h4 class="mb-0 secondary-title">Flow Array Specifications</h4><!--<a class="arrayTitleLink" href="public/pdf/8WellArrays.pdf" target="_blank">Specialty Array List</a>-->
        </div>

        <!-- 1F8x1E PC -->
        <div id="1F8x1E" class="array">
          <h4>1F8x1E PC</h4>
          <div class="row">
            <div class="col-md-8 mr-auto">
              <img class="img-fluid mt-4 mb-5" src="public/img/1E-flow-array.jpg" alt="ECIS 1F8x1E PC Array">
            </div>
          </div>
          <p>
            This is a specialized Flow array having 8 active 250 μm diameter electrodes (each measuring from 50-100 cells) located in the central region at the base of a flow channel measuring 50mm in length 5mm in width and available in 0.36mm in height with a total channel volume of 90 μL.
          </p>
          <p>
            Our flow arrays are designed for ECIS measurements of cells under perfused conditions or to mimic the shear stress endothelial cells experience in vivo or under flow mimicking the shear stress endothelial cells experience in vivo.
          </p>
          <p class="applicationTitle">Applications Include:</p>
          <ul class="list-unstyled">
            <li>- Barrier Function</li>
            <li>- Signal Transduction Assays</li>
            <li>- Cell Invasion</li>
            <li>- In situ Cell Electroporation and Monitoring</li>
            <li>- Cell Migration / Wound Healing</li>
            <li>- Cell Proliferation</li>
            <li>- Cell Differentiation</li>
            <li>- Cytotoxicity</li>
          </ul>
        </div><!-- /array -->

        <hr class="mb-5">

        <!-- 1F8x10E PC -->
        <div id="1F8x10E" class="array">
          <h4>1F8x10E PC</h4>
          <div class="row">
            <div class="col-md-8 mr-auto">
              <img class="img-fluid mt-4 mb-5" src="public/img/10E-flow-array.jpg" alt="ECIS 1F8x10E PC Array">
            </div>
          </div>
          <p>
            This is a specialized Flow array having 8 sets of 10 active 250 μm diameter electrodes (each measuring from 500-1000 cells) located in the central region at the base of a flow channel measuring 50mm in length 5mm in width and available in 0.36 mm in height with a total channel volume of 90 μL.
          </p>
          <p>
            Our flow arrays are designed for ECIS measurements of cells under perfused conditions or to mimic the shear stress endothelial cells experience in vivo or under flow mimicking the shear stress endothelial cells experience in vivo.
          </p>
          <p class="applicationTitle">Applications Include:</p>
          <ul class="list-unstyled">
            <li>- Barrier Function</li>
            <li>- Signal Transduction Assays</li>
            <li>- Cell Invasion</li>
            <li>- In situ Cell Electroporation and Monitoring</li>
            <li>- Cell Migration / Wound Healing</li>
            <li>- Cell Proliferation</li>
            <li>- Cell Differentiation</li>
            <li>- Cytotoxicity</li>
          </ul>
        </div><!-- /array -->
        
        <hr class="mb-5">

        <!-- 6F1E PC -->
        <div id="6F1E" class="array">
          <h4>6F1E PC</h4>
          <div class="row">
            <div class="col-md-8 mr-auto">
              <img class="img-fluid mt-4 mb-5" src="public/img/6F1E-flow-array.jpg" alt="ECIS 6F1E PC Array">
            </div>
          </div>
          <p>
            This flow array allows 6 independent flow assays to be run simultaneously. The channels are 0.66mm in height and 5mm wide with 1 active 250 μm diameter electrode (measuring from 50-100 cells) per channel.
          </p>
          <p>
            Each channel has a 45 μL volume with 60 μL reservoirs.
          </p>
          <p class="applicationTitle">Applications Include:</p>
          <ul class="list-unstyled">
            <li>- Barrier Function</li>
            <li>- Signal Transduction Assays</li>
            <li>- Cell Invasion</li>
            <li>- In situ Cell Electroporation and Monitoring</li>
            <li>- Cell Migration / Wound Healing</li>
            <li>- Cell Proliferation</li>
            <li>- Cell Differentiation</li>
            <li>- Cytotoxicity</li>
          </ul>
        </div><!-- /array -->
        
        <hr class="mb-5">

        <!-- 6F10E PC -->
        <div id="6F10E" class="array">
          <h4>6F10E PC</h4>
          <div class="row">
            <div class="col-md-8 mr-auto">
              <img class="img-fluid mt-4 mb-5" src="public/img/6F10E-flow-array.jpg" alt="ECIS 6F10E PC Array">
            </div>
          </div>
          <p>
            This flow array allows 6 independent flow assays to be run simultaneously. The channels are 0.66mm in height and 5mm wide with 10 active 250 μm diameter electrodes (each measuring from 500-1000 cells) per channel.
          </p>
          <p>
            Each channel has a 45 μL volume with 60 μL reservoirs.
          </p>
          <p class="applicationTitle">Applications Include:</p>
          <ul class="list-unstyled">
            <li>- Barrier Function</li>
            <li>- Signal Transduction Assays</li>
            <li>- Cell Invasion</li>
            <li>- In situ Cell Electroporation and Monitoring</li>
            <li>- Cell Migration / Wound Healing</li>
            <li>- Cell Proliferation</li>
            <li>- Cell Differentiation</li>
            <li>- Cytotoxicity</li>
          </ul>
        </div><!-- /array -->
        
        <hr class="mb-5">

        <!-- 1F2Y8x10E PC -->
        <div id="1F2Y8x10E" class="array">
          <h4>1F2Y8x10E PC</h4>
          <div class="row">
            <div class="col-md-8 mr-auto">
              <img class="img-fluid mt-4 mb-5" src="public/img/1F2Y8x10E-yflow.jpg" alt="ECIS 1F2Y8x10E PC Array">
            </div>
          </div>
          <p>
            This flow array is intended for bifurcation studies and blood vessel simulation. It splits into 30 degree Y channels in one direction and 45 degree Y channel in the other direction.
          </p>
          <p>
            This array is double ended with 8 measurement channels available at each end. Eight measurement points, each with 4 circular active electrodes (with an area of 0.49mm<sup>2</sup> measuring from 500-1000 cells, the area is the same as a 10E electrode), are located along the channel and through the Y portion of the channel. One end of the array is used to monitor the 30 degree Y channel and the other end is used to monitor the 45 degree Y channel. The electrodes are located close in the corners of the flow direction transition points. Each channel has a 165 μL volume with 60 μL reservoirs. The flow is always laminar, i.e., turbulent flows are not possible. For simulation of turbulence flow we recommend oscillating the flow. Defined shear stress and shear rate levels.
          </p>
          <p class="applicationTitle">Recommended for the following applications under shear stress conditions:</p>
          <ul class="list-unstyled">
            <li>- Simulation of the bifurcation of blood vessels for arteriosclerosis research</li>
            <li>- Rolling and adhesion of leukocytes on endothelial cells cultured under flow</li>
            <li>- Cell-cell interaction studies and cell-drug interaction screenings under flow conditions</li>
          </ul>
        </div><!-- /array -->
        
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
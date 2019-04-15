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
    <title>
      <?php echo $title; ?>
    </title>
  </head>

  <body class="d-flex flex-column">

    <?php include_once "includes/navbar.php";?>
    <?php include_once "includes/logo-sm.php";?>

    <section id="applicationHeading" class="text-center text-md-left">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="mb-0">ECIS Wound Healing/Cell-Migration Assay</h1>
            <hr class="mt-0">
          </div>
        </div>
      </div>
    </section><!-- /applicationHeading -->

    <section id="applicationContent" class="py-4 text-center text-md-left">
      <div class="container">

        <p>
          ECIS<sup>®</sup> instruments include an elevated field mode allowing for electroporation and wounding.
          The ECIS<sup>®</sup> wound is precisely defined, as it includes only those cells on the electrode.
          Additionally, with ECIS<sup>®</sup> the ECM protein coating is not scraped off and is unaffected by the
          current.
        </p>

        <div class="row">
          <div class="col">
            <h4 class="mt-4 mb-3 secondary-title">Overview</h4>

            <div class="row">
              <div class="col-md-8">
                <p>
                  Cellular migration is an essential process that occurs in early development and maintains homeostasis
                  from the beginning to the end of life. Due to its importance, it has become a major focal point in
                  research. Unfortunately, the traditional methods of wound healing assays lack reproducibility and
                  precision and have been widely criticized, until recently. Through electric cell-substrate impedance
                  sensing (ECIS), the wound healing assay can now be measured precisely, which makes reproducing the
                  assay very simple, and this is all done in real-time, giving the ECIS Wound Healing Assay a far
                  greater advantage for data collection over traditional wound healing procedures.
                </p>
              </div>
              <div class="col-md-4">
                <img class="img-fluid my-3 my-md-0" src="public/img/MDCKHealedWithSpace.jpg" alt="MDCK Healed">
              </div>
            </div>

            <h4 class="mt-4 mb-3 secondary-title">Still Starting from "Scratch"?</h4>
            <p>
              Wound healing assays to monitor cell migration have been carried out in tissue culture for many years to
              estimate the migration and proliferation rates of different cells and culture conditions. The traditional
              “scratch” assay generally involves first growing a confluent cell monolayer, then scratching a line
              through the layer with objects such as toothpicks, pipette tips, rakes or even needles, which almost
              always destroys the absorbed proteins and extracellular matrix at the basal level. The open gap is then
              inspected microscopically over time as the cells move in and fill the damaged area. This "healing" can
              take from several hours to over a day depending on the cell type, conditions and the extent of the
              "wounded" region.
            </p>

            <table class="table text-center scratchTable">
              <thead class="thead-color">
                <tr>
                  <th scope="col"></th>
                  <th scope="col">Traditional Scratch Assay</th>
                  <th scope="col">ECIS Wound Healing Assay</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Measure Cell Migration</th>
                  <td><i class="fas fa-check fa-2x text-success"></i></td>
                  <td><i class="fas fa-check fa-2x text-success"></i></td>
                </tr>
                <tr>
                  <th scope="row">Precise Wounding</th>
                  <td></td>
                  <td><i class="fas fa-check fa-2x text-success"></i></td>
                </tr>
                <tr>
                  <th scope="row">Real-Time Data</th>
                  <td></td>
                  <td><i class="fas fa-check fa-2x text-success"></i></td>
                </tr>
                <tr>
                  <th scope="row">Automated</th>
                  <td></td>
                  <td><i class="fas fa-check fa-2x text-success"></i></td>
                </tr>
                <tr>
                  <th scope="row">Highly Reproducable</th>
                  <td></td>
                  <td><i class="fas fa-check fa-2x text-success"></i></td>
                </tr>
                <tr>
                  <th scope="row">Matrix Preservation</th>
                  <td></td>
                  <td><i class="fas fa-check fa-2x text-success"></i></td>
                </tr>
              </tbody>
            </table>

            <h4 class="mb-3 secondary-title">ECIS Wound Healing Assay</h4>

            <div class="row">
              <div class="col-md-5">
                <p>
                  The ECIS Wound Healing Assay replaces the traditional "scratch" assay. Instead of disrupting the cell
                  layer mechanically with a random tip and following the migration of cells to "heal" the wound with a
                  microscope, we employ electric signals to both wound and monitor the healing process. ECIS electrical
                  wounding is only directed at the small population of cells in contact with the active 250 micrometer
                  diameter ECIS electrode, producing a precise 250 micrometer wound that can be verified both with the
                  ECIS measurement and vital staining. Unlike the traditional scratch method, the ECIS Wound Healing
                  Assay will not affect the extracellular matrix and protein coating.
                </p>
              </div>
              <div class="col-md-7">
                <img class="img-fluid my-3 my-md-0" src="public/img/NRKCellsWounding.jpg" alt="NRK Cells Wounding">
              </div>
            </div>

            <div class="row mt-0 mt-md-5 mb-5">
              <div class="col-md-4 order-2 order-md-1">
                <img class="img-fluid my-3 my-md-0" src="public/img/WoundingGraphic.jpg" alt="Wounding Graphic">
              </div>
              <div class="col-md-8 order-1 order-md-2">
                <p>
                  ECIS has now been modified such that automated assays of this sort can be performed. In normal ECIS
                  measurements, a current of less than a microampere is typically used. This is undetected by the
                  cells, and, in its measuring mode, ECIS essentially eavesdrops on cell behavior electrically. When
                  the current is boosted by a 1000 fold to a milliampere, the resulting voltages across the cell
                  membranes result in electroporation. If this is applied for only a few milliseconds, the cells
                  recover and it is possible to insert impermeable molecules including DNA constructs into the
                  cytoplasm. When the high current is applied for several seconds, cell death ensues due to severe
                  electroporation and possible local heating effects. The ECIS wound is very well defined, as it
                  includes only those cells on the 250 micrometer electrode. Death can be verified both with the ECIS
                  measurement and vital staining.
                </p>
              </div>
            </div>

            <h4 class="mt-5 mb-3 secondary-title">Traditional Scratch Method vs. ECIS Wound Healing Assay</h4>

            <div class="row">
              <div class="col-md-8">
                <p>Micrographs were taken after a traditional scratch wound healing assay and an ECIS Wound Healing
                  Assay.</p>

                <p>
                  The micrograph of the traditional scratch assay shows healing times of 6 hours (a), 12 hours (b), and
                  23 hours (c) of NRK cells following the initial wounding. A confluent layer of the NRK cells were
                  scraped/wounded in a non-uniform pattern of unknown area using the tip of a pipette. As seen in the
                  figure, the cells begin to migrate toward the center of the wound. Cells must be counted and compared
                  to establish migration rate.
                </p>

                <p>
                  The micrograph of the ECIS Wound Healing Assay shows images of HUVECs as a confluent layer (I),
                  immediately following wounding (II), 2 hours (III) and 4 hours (IV) after wounding. Note that the
                  high electrical current completely annihilated any living cells attached to the microelectrode (II),
                  and the rise of TEER was measured as a result of the surrounding viable cells migrating into the
                  exposed electrodes (III, IV) (Lee, et al., 2006).
                </p>
              </div>
              <div class="col-md-4">
                <img class="img-fluid my-3 my-md-0" src="public/img/traditionalScratchAssay.jpg" alt="Traditional Scratch Assay">
              </div>
            </div>

            <div class="row mt-5">
              <div class="col">
                <p>
                  Typical ECIS data involving this assay is shown in the figure below. Here BSC1 cells were first grown
                  as complete monolayers and the impedance traces from four confluent wells can be seen on the graph.
                  At the arrow, an elevated field was applied to two of the wells, wounding the cells on the small
                  electrode and causing the impedance to drop to that of an open electrode. Over time these two traces
                  return to control values, as the healthy cells outside of the small electrode migrate inward to
                  repopulate the wounded area and replace their dead cohorts (healing). These types of data are highly
                  reproducible and respond to culture conditions.
                </p>
                <img class="img-fluid py-5 d-block mx-auto" src="public/img/migrationGraph1.jpg" alt="Migration Graph">
                <p>
                  Typical ECIS data involving this assay is shown in the figure above. Here BSC1 cells were first grown
                  as complete monolayers and the impedance traces from four confluent wells can be seen on the graph.
                  At the arrow, an elevated field was applied to two of the wells, wounding the cells on the small
                  electrode and causing the impedance to drop to that of an open electrode. Over time these two traces
                  return to control values, as the healthy cells outside of the small electrode migrate inward to
                  repopulate the wounded area and replace their dead cohorts (healing). These types of data are highly
                  reproducible and respond to culture conditions.
                </p>
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-md-7">
                <p>
                  The figure shows an ECIS electrode covered with MDCK cells 24 hours after the elevated field wounding
                  took place. Note the subtle radial patterns indicated by the arrows as the cells have migrated
                  inward. MDCK Cells wounded with ECIS Automated Cell Wounding. This is a completely automated assay
                  requiring a minimum of labor. Both cell wounding and measurements of the subsequent healing process
                  are carried out under computer control without opening the door of the incubator.
                </p>
              </div>
              <div class="col-md-5">
                <img class="img-fluid my-3 my-md-0" src="public/img/woundingRadialPatterns.jpg" alt="Wounding Radial Patterns">
              </div>
            </div>

            <h4 class="mt-5 mb-3 secondary-title">ECIS Cell Migration Measurements</h4>

            <div class="row">
              <div class="col-md-7">
                <p>
                  Once ECIS electrically wounds the cells, it returns to its normal mode to immediately follow the
                  healthy neighboring cells as they migrate inward to replace the annihilated cells. Traditionally,
                  these measurements are carried out with extensive labor including microscopy and researcher
                  quantification. The ECIS Wound-Healing/Cell Migration Assay is a completely automated assay requiring
                  a minimum of labor. Both cell wounding and measurements of the subsequent healing process are carried
                  out under computer control without opening the door of the incubator.
                </p>
              </div>
              <div class="col-md-5">
                <img class="img-fluid my-3 my-md-0" src="public/img/migrationGraph2.jpg" alt="Migration Graph">
              </div>
            </div>

            <h4 class="mt-5 mb-3 secondary-title">ECIS Electric Fence Method</h4>

            <div class="row">
              <div class="col-md-6">
                <p>
                  Applied Biophysics has developed a novel impedance-based technique called “The Electric Fence” to
                  measure the rates of cell migration. The Electric Fence differs from the Wounding Assay in that it
                  prevents the cells from actually growing on the electrode while a confluent layer develops around the
                  electrode. When the "electric fence" is activated, a series of high field electric pulses are applied
                  which prevent the cells from attaching and spreading onto the measurement electrode. When the
                  electric fence is turned off, the cells in the surrounding confluent layer migrate into the open
                  space left by the electric fence.
                </p>
              </div>
              <div class="col-md-6">
                <img class="img-fluid my-3 my-md-0" src="public/img/electricFence.jpg" alt="Electric Fence">
              </div>
            </div>

          </div><!-- /col -->
        </div><!-- /row -->

      </div><!-- /container -->
    </section><!-- /applicationContent -->

    <section id="applicationReferences" class="py-4 text-center text-md-left mb-5">
      <div class="container">

        <div class="row">
          <div class="col">
            <h4 class="mt-4 mb-0">Related Wound Healing/Cell-Migration Assay ECIS Publications</h4>
            
            <hr class="mt-0 mb-4">

            <p><strong>Cystic fibrosis transmembrane conductance regulator is involved in airway epithelial wound
                repair. </strong>Katherine R. Schiller, Peter J. Maniak, and Scott M. O'Grady. <em>Am J Physiol Cell
                Physiol.</em> 2010; 299:C912-C921.</p>

            <p><strong>Effects of (-)-epigallocatechin gallate on RPE cell migration and adhesion.</strong> CM Chan, JH
              Huang, HS Chiang, WB Wu, HH Lin, JY Hong, and CF Hung. Mol Vis. 2010; 16: 586.</p>

            <p><strong>Zeaxanthin inhibits PDGF-BB-induced migration in human dermal fibroblasts</strong>. NL Wu, YC
              Chiang, CC Huang, JY Fang, DF Chen, and CF Hung. Exp Dermatol. 2010.</p>

            <p><strong>Effects of Negative Pressures on Epithelial Tight Junctions and Migration in Wound Healing.</strong>
              Chih-Chin Hsu, Wen Chung Tsai, Carl Pai-Chu Chen, Yun-Mei Lu, and Jong-Shyan Wang. Am J Physiol Cell
              Physiol. Published 5 May 2010, 10.1152/ajpcell.00504.2009.</p>

            <p>Irina Gorshkova, Donghong He, Evgeny Berdyshev, Peter Usatuyk, Michael Burns, Satish Kalari, Yutong
              Zhao, Srikanth Pendyala, Joe G. N. Garcia, Nigel J. Pyne, David N. Brindley, and Viswanathan Natarajan,
              <strong>&ldquo;Protein Kinase C Regulates Sphingosine 1-Phosphate-mediated Migration of Human Lung
                Endothelial Cells through Activation of Phospholipase D2, Protein Kinase C, and Rac1.&rdquo;</strong>
              Journal of Biological Chemistry (Vol. 283, No. 17, April 25, 2008).</p>

            <p>Jiang, W.G., Martin, T.A., Lewis-Russell, J.M., Douglas-Jones, A., Ye, L., Mansel, R.E., <strong>&quot;Eplin-alpha
                expression in human breast cancer, the impact on cellular migration and clinical outcome.&quot;</strong>Molecular
              Cancer: 7:71 (2008).</p>

            <p>Saxena, N.K., Sharma, D., Ding, X. Lin, S., Marra, F., Merline, D. Anania, F., <strong>&quot;Concomitant
                Activation of the JAK/STAT, P13K/AKT and ERK Signaling is Involved in Leptin-Mediated Promotion of
                Invasion and Migration of Hepatocellular Carcinoma Cells.&quot;</strong> Cancer Research: 2497-2507
              (2007).</p>

            <p>Earley, S., Plopper, G.E., <strong>&quot;Disruption of focal adhesion slows transendothelial migration
                of AU-565 breast cancer cells.&quot;</strong> Biochemical and Biophysical Research Communications:
              405-412 (2006).</p>

            <p>Sapper, A., Wegener, J., Janshoff, A., <strong>&quot;Cell motility probed by noise analysis of thickness
                shear mode
                resonators.&quot;</strong> Anal Chem. 15;78(14):5184-91, (2006).</p>

            <p>Ren, J., Xiao, Y., Singh, L.S., Zhao, X., Zhao, Z., Feng, L., Rose, T.M., Prestwich, G.D., Xu, Y.,<strong>&quot;Lysophosphatidic
                Acid Is Constitutively Produced by Human Peritoneal Mesothelial Cells and Enhances Adhesion, Migration,
                and Invasion of Ovarian Cancer Cells.&quot;</strong> Cancer Res 2006; 66: (6) (2006).</p>

            <p>Waters, C.M., Long, J., Gorshkova, I., Fujiwara, Y., Connell, M., Belmonte, K.E., Tigyi, G., Natarajan,
              V., Pyne, S., Pyne, N.J., <strong>&quot;Cell migration activated by platelet-derived growth factor
                receptor is blocked by an inverse agonist of the sphingosine 1-phosphate receptor-1.&quot;</strong> The
              FASEB Journal Express Article 10.1096/fj.05-4810fje (2005).</p>

            <p>Charrier, L., Yan, Y., Driss, A., Laboisse, C.L., Sitaraman, S.V. and Merlin, D.,<strong>&quot;ADAM-15
                inhibits wound healing in human intestinal epithelial cell monolayers.&quot;</strong> AJP Gastrointest
              Liver Physiol. 288:346-353, (2005).</p>

            <p>Kucharzik, T., Lugering, A., Yan, Y., Driss, A., Charrier, L., Sitaraman, S., Merlin, D., <strong>&quot;Activation
                of epithelial CD98 glycoprotein perpetuates colonic inflammantion&quot;</strong>, Laboratory
              Investigation 1-10 (2005)</p>

            <p>Charrier, L., Yan, Y., Driss, A., Laboisse, C.L., Sitaraman, S.V., Merlin, D. <strong>&quot;ADAM-15
                Inhibits Wound Healing in Human Intestinal Epithelial Cell Monolayers.&quot;</strong> Am J Physiol
              Gastrointest Liver Physiol. [Epub ahead of print] (2004).</p>

            <p>Keese, Charles R., Wegener, Joachim, Walker, Sarah R., and Giaever, Ivar. <strong>&quot;Electrical
                Wound-healing assay for cell in vitro&quot;</strong>. PNAS 101: 1554-1559 (2004).</p>

            <p>Hug, T.S. <strong>&quot;Biophysical methods for monitoring cell-substrate interactions in drug
                discovery.&quot; </strong>Assay Drug Dev Technol. 1(3):479-88. (2003).</p>

            <p>Lundien, M.C., Mohammed, K.A., Nasreen, N., Tepper, R.S., Hardwick, J.A., Sanders, K.L., Van Horn, R.D.,
              Antony, V.B. <strong>&quot;Induction of MCP-1 expression in airway epithelial cells: role of CCR2
                receptor in airway epithelial injury.&quot;</strong> J Clin Immunol. 22(3):144-52 (2002).</p>

            <p>Wegener, J., Keese, C.R., Giaever, I, <strong>&quot;Recovery of Adherent Cells After In Situ
                Electroporation Monitored Electronically&quot;</strong> Bio Techniques 33(2), 348ff (2002).</p>

            <p>Hadjout, N., Laevsky, G., Knecht, D.A., Lynes ,M.A., <strong>&quot;Automated real-time measurement of
                chemotactic cell motility.&quot; </strong>Biotechniques, 31 (5): 1130-1138 (2001).</p>

            <p>Lo, C.M., Linton, M., Keese, C.R., Giaever, I. <strong>&quot;Correlated motion and oscillation of
                neighboring cells in vitro.&quot;</strong> Cell Commun Adhes. 8(3):139-45 (2001).</p>

            <p>Burns, A.R., R.A. Bowden, S.D. MacDonell, D.C. Walker, T.O. Odebunmi, E.M. Donnachie, S.I. Simon, M.L.
              Entman, and C.W. Smith. <strong>&quot;Analysis of Tight Junctions During Neutrophil Transendothelial
                Migration.&quot;</strong> J. of Cell Sci, 113:45-75. (2000).</p>

            <p>Huang, C.N., Lo, C.M., Hsu, T.C., Tsay, G.J. <strong>&quot;Sera from patients with scleroderma inhibit
                fibroblast micromotions monitored electrically.&quot;</strong> J Rheumatol. 26(6):1312-7 (1999).</p>

            <p>Noiri, E., Lee, E., Testa, J., Quigley, J., Colflesh, D., Keese, C., Giaever, I. and Goligorsky, M.,
              <strong>&quot;Podokinesis in endothelial cell migration: role of nitric oxice&quot;</strong>, Am. J.
              Physiol. 43, 236C (1998).</p>

            <p>Moy A.B., Van Engelenhoven,J., Bodmer, J., Kamath, J., Keese, C.,Giaever, I., Shasby,S., and Shasby,
              D.M., <strong>&quot;Histamine and Thrombin Modulate Endothelial Focal Adhesion Through Centripetal and
                Centrifugal Forces&quot;</strong> J Clin. Inv. (1996).</p>

            <p>Burns, A., Walker, D., Brown, E., Thurmon, L., Bowden, R., Keese, C., Simon, S., Entman, M.and Smith,
              W., <strong>&quot;Neutrophil Transendothelial Migration Is Independent of Tight Junctions and Occurs
                Preferentially at Tricellular Corners&quot;</strong>, J. of Immunol. 22, 2893-2903 (1997).st. 97,
              1020-1027 (1996).</p>

            <p>Lo, C.M., Keese, C.R., Giaever, I. <strong>&quot;Monitoring motion of confluent cells in tissue
                culture.&quot;</strong> Exp Cell Res. 204(1):102-9 (1993).</p>

            <h4 class="my-4">Example Publication</h4>
            <p>
              <a href="https://www.physiology.org/doi/full/10.1152/ajpcell.00159.2015" class="text-dark link"
              target="_blank">Peitzman et al., (2015) "Agonist Binding to β-Adrenergic Receptors on Human Airway
              Epithelial Cells Inhibits Migration and Wound Repair." American Journal of Physiology - Cell Physiology
              309(12):C847 doi:10.1152/ajpcell.00159.2015</a>
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
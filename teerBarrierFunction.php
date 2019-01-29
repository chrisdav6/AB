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
            <h1 class="mb-0">TEER/Barrier Function</h1>
            <hr class="mt-0">
          </div>
      </div>
    </section><!-- /applicationHeading -->

    <section id="applicationContent" class="py-4 text-center text-md-left">
      <div class="container">

        <div class="row">
          <div class="col">
            <p>
              Epithelial cells and endothelial cells regulate the passage of molecules across cell layers. Diseases, especially vascular disease, occur when this function is impaired. ECIS<sup>®</sup> provides a highly sensitive real-time continous TEER measurement ideal for these types of studies.
            </p>
            <p class="mb-0">
              Example Publication: <a href="https://www.nature.com/articles/ncomms8893" class="text-dark link" target="_blank"> Kim et al., (2015) "Critical Role of Sphingosine-1-Phosphate Receptor-2 in the Disruption of Cerebrovascular Integrity in Experimental Stroke." Nature Communications 6:7893 doi:10.1038/ncomms8893</a> 
            </p>
          </div>
        </div><!-- /row -->

        <div class="row mt-5">
          <div class="col">
            <h3>Monitoring the Barrier Function of Cell Monolayers using ECIS<sup>®</sup></h3>
            <hr class="my-0">
            <h4 class="mt-5 mb-3 secondary-title">Introduction</h4>
            <p>
              In vivo, barriers are provided by monolayers of epithelial or endothelial cells. These cell layers play a key role regulating the free movement of molecules between different tissues and/or interstitial compartments. In many diseases as well as in inflammation, these barriers become compromised, and hence, measuring their permeability is of considerable interest to cell biologists and the health community in general.
            </p>
            <p>
              Most epithelial and endothelial cells types can be cultured in vitro to form confluent monolayers where it is possible to measure the barrier function afforded by these cell layers. In addition, with the right tools, dynamic changes of the layers can be followed when the cellular environment is altered by exposure to compounds or physical changes such as shear stress.
            </p>

            <h4 class="mt-4 mb-3 secondary-title">Barrier Function Measurements</h4>
            <p>
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
            <p>
              Let's first consider the importance of the AC frequency used in the ECIS constant current measurement. The illustration below shows a cross section of a confluent cells layer where the path of the current is indicated by the arrows. The red arrows represent ion current flow coming from the electrode interface, moving in the solution spaces between the electrode and the basal plasma membrane and then moving through the paracellular passage between the cells (the barrier function). The green arrows on the other hand indicate a path of current that is possible as ECIS is an AC measurement, and current can couple capacitively through the cell membranes.
            </p>
            <img class="img-fluid py-5 d-block mx-auto" src="public/img/ac-frequency.jpg" alt="AC frequency">
            <p>
              Current will always follow the path of least resistance. At high AC frequency (40,000 Hz) the impedance (capacitive reactance) of the membrane is relatively small, and current mainly capacitively couples through the insulating cell membranes with little current passing through the paracellular path. At low AC frequency, on the other hand, the membrane impedance is high, and most of the current now flows under the cells and through the tight spaces between the cells (the solution path).
            </p>
            <p>
              As a result of this difference, high frequency impedance can be used to monitor the establishment of a confluent layer, and low frequency impedance can be used to monitor the solution paths about the cells and hence the layer's barrier function.
            </p>

            <h4 class="mt-4 mb-3 secondary-title">Data Taken at Different AC Frequencies with Tight Epithelial Cell Monolayers</h4>
            <p>
              The data below report the changes of impedance in two duplicate wells following inoculation of MDCK II cells (canine kidney epithelium). The micrographs show that the cell layer is in place and confluent about 3 hours after inoculation, and this is conveyed by the plateau in the impedance at 40,000 Hz. Measuring the same wells at 400 Hz we see the formation of the barrier function is not completed until about 10 hours after inoculation. This is also confirmed microscopically using stains for the junctional proteins E-cadherin and ZO-1 (zona occludens protein. (Data courtesy of Professor Joachim Wegener, Univ. of Regensburg) For tight epithelial cells, the impedance at low AC frequencies provides a very effective measure of the layer's barrier function.
            </p>
            <img class="img-fluid py-5 d-block mx-auto" src="public/img/cell-coverage.png" alt="Cell Coverage">

            <h4 class="mt-4 mb-3 secondary-title">Data from Endothelial Cell Measurements</h4>
            <p>
              With endothelial cells, the barrier function is relatively low compared with epithelial cells with tight junctions, and the resistive portion of the ECIS impedance measured at 4000 Hz is commonly used to evaluate barrier function changes. This assay for endothelium was introduced in 1992 (Tiruppathi et.al.) and relied on the use of complex impedance measurements of endothelial cells grown upon ECIS electrodes to report just the resistive portion of the impedance. In this first study, the response of bovine pulmonary microvascular endothelial cells exposed to thrombin was evaluated (see figure below).
            </p>
            <img class="img-fluid py-5 d-block mx-auto" src="public/img/thrombin.jpg" alt="Thrombin">
            <p>
              Since this first study, the resistive portion of the impedance at 4000 Hz has been used to monitor real-time changes in endothelial permeability in several laboratories, and the assay appears in many peer-reviewed publications. ECIS used in this manner has increasingly become an attractive alternative to Ussing chambers and other membrane filter measurements. In addition to its convenience in gathering barrier function data with a minimum of labor, the measurement also requires no tagged compounds and associated sampling/measuring techniques.
            </p>

            <h4 class="mt-4 mb-3 secondary-title">Flow Arrays Measurements</h4>
            <p>
              Another important feature of the ECIS system, unlike filter-based assays, is its ability to follow the barrier function of endothelial cell monolayers as they are exposed to flow conditions. This is accomplished using ECIS flow arrays that permit measurements of cell layers subjected to shear stress as high as those experienced in vivo.
            </p>
            <img class="img-fluid py-5 d-block mx-auto" src="public/img/flow-diagram.jpg" alt="Flow Diagram">

            <h4 class="mt-4 mb-3 secondary-title">ECIS Measurements Using Porated Filters</h4>
            <h5 class="third-title mt-3">The 8 Well Trans-Filter Adapter</h5>
            <hr>
            <p>
              Traditionally, in vitro barriers are quantified by growing confluent cell layers upon filter supports, where medium on both the apical and basal side of the cell layer can be altered. The filters commonly used for this application are porated with pores etched in plastic films running vertically between the faces of the filter. This type of filter is generally preferred by cell biologists as not only can the pore size and density be tightly controlled, but, unlike most other filters, the material is marginally transparent making limited microscopic observation of the cells possible.
            </p>
            <a href="#">
              <img class="img-fluid py-5 d-block mx-auto" src="public/img/filter-adapter.png" alt="Applied Biophysics Filter Adapter">
            </a>
            <p>
              To make filter measurements with the ECIS instrumentation, an <a href="#" class="text-dark link">8W Trans Filter Adapter</a> is used. This device (shown in the figures) fits into the standard 16 well station and converts it into a multiple well, a filter-based device for real-time measurements of barrier function. Filter inserts are placed in the wells and a common dipping electrode contacts solution in the small inner wells above the filter. At the base of the wells are large electrodes that can be individually addressed by the instrumentation. Special software converts ECIS impedance measurements made with the device into time course changes in TEER (trans epithelial electrical resistance) values.
            </p>
            <img class="img-fluid py-5 d-block mx-auto" src="public/img/filter1-3.jpg" alt="TEER Resistance Values">
            <p>
              Data collected with the ECIS instrumentation from a Corning Costar filter (# 3413) with 0.4 micrometer diameter pores at a density of ~108 pores/cm<sup>2</sup>. At time zero two different concentrations of MDCK II epithelial cells were added to the inner wells and the TEER monitored over time – one well is without cells.
            </p>
            <p>
              A 3D plot of the first 20 hours of the experiment showing data from the blue trace above. Notice how the four lowest frequencies (circled) are in good agreement with curves peaking around 370 ohm-cm<sup>2</sup>.
            </p>
            <img class="img-fluid py-5 d-block mx-auto" src="public/img/3D-2.jpg" alt="TEER 3D Plot">

            <h4 class="mt-4 mb-3 secondary-title">The ECIS TEER24 Instrument</h4>
            <h5 class="third-title mt-3"><a href="#" class="text-dark link">ECIS TEER24 Literature</a></h5>
            <hr>
            <p>
              We now offer a special single purpose instrument designed to only work with membrane insert filters. The ECIS TEER24 uses 3 AC frequencies to determine the TEER value. The measurement consists of three steps; a zero set phase to flat-field the microplate array, setting a reference well to monitor any incubator changes which may occur during the measurement and the data collection phase. The flat-fielding takes into account the resistance of the electrodes in the microplate, solution and filter. During data collection the resistance is measured, and the TEER is calculated by subtracting the flat field zero values and reference well changes and scaling for the surface area of the filter.
            </p>
            <img class="img-fluid py-5 d-block mx-auto" src="public/img/Cell-Dish-Small.jpg" alt="Cell Dish">

            <h4 class="mt-4 mb-3 secondary-title">Modeled ECIS Measurements (Pure Paracellular Path Measurements)</h4>
            <p>
              When using either the ECIS solid substrate array or measurements with porated filters, there is a component to the solution-path impedance other than the paracellular path - namely the narrow solution passageway sandwiched beneath the cell and its substrate. (Lo et.al.).
            </p>
            <p>
              In some situations when measuring barrier function (the resistance of the paracellular space), there is another component we refer to as alpha where current also encounters resistance in moving in the narrow spaces between the substrate and the basal plasma membrane.
            </p>
            <a href="#">
              <img class="img-fluid py-5 d-block mx-auto" src="public/img/constructed-path.jpg" alt="Constructed Path">
            </a>
            <p>
              This is illustrated in the figure showing a cross section of an epithelial cell with tight junctions to its neighboring cells. In this case, we illustrate a porated filter as the cell substrate, but one could just as well have an ECIS solid substrate beneath the cells. In either situation there is a constricted space beneath the cell (shaded in blue) that must be first traversed before current (or tracers) can pass through the paracellular space (the barrier of interest, shaded in red).
            </p>
            <p>
              For many epithelial cell layers, the contribution of this passage under the cell is small relative to the tight paracellular passage and does not play a major role in the measurement of barrier function. However, with cells having weaker barrier functions (e.g. some endothelial layers), this may present a complication in making a clean measurement of the paracellular path.
            </p>
            <p>
              Fortunately, using the <a href="#" class="text-dark link">ECIS mathematical modeling software</a> (Giaever and Keese), it is possible to separate these two aspects of the measurement. With this feature, time course changes in both the barrier function (Rb) and the passage beneath the cells (alpha) can be independently presented. The modeling software comes standard with the <a href="#" class="text-dark link">ZTheta instrumentation</a>.
            </p>
            <img class="img-fluid py-5 d-block mx-auto" src="public/img/thrombin-addition.jpg" alt="Thrombin Addition">
            <p>
              An example is shown of modeled data software, where time course changes of Rb are reported for microvascular endothelial cells exposed to thrombin. The value of alpha remains essentially constant throughout the measurements and is also plotted for comparison.
            </p>

            <h4 class="mt-4 mb-3 secondary-title">ECIS Filter Measurements with Tortuous-path Filters</h4>
            <p>
              There is another means to eliminate the contribution of the spaces beneath the cells and measure only the paracellular space; this is accomplished using tortuous-path rather than porated filters.
            </p>
            <a href="#">
              <img class="img-fluid py-5 d-block mx-auto" src="public/img/porated-filter.png" alt="Porated Filter">
            </a>
            <p>
              As shown in the figure, without the vertical pores, current can now flow with little hindrance directly to the cell-cell junctions - essentially eliminating this space (alpha) from the measurement.
            </p>
            <p>
              Tortuous-path filters for 24 well plates are available from several vendors and can be used with the ECIS <a href="#" class="text-dark link">8W TransFilter Adapter</a> as well as the <a href="#" class="text-dark link">TEER24 instrument</a>.
            </p>

          </div><!-- /col -->
        </div><!-- /row -->

      </div><!-- /container -->
    </section><!-- /applicationContent -->

    <section id="applicationReferences" class="py-4 text-center text-md-left">
      <div class="container">

        <div class="row">
          <div class="col mb-4">
            <h4 class="mt-4 mb-0">Key References</h4>
            <hr class="mt-0 mb-4">
            <p>
              Tiruppathi, C., Malik, A.B., Del Vecchio, P.J., Keese, C.R., and Giaever,I., Electrical method for detection of endothelial cell shape change in real time, <strong>PNAS USA 89</strong>, 7919-7923 (1992).
            </p>
            <p>
              Lo, C.M., Keese, C.R., Giaever, I., "Cell-substrate contact: Another factor may influence transepithelial electrical resistance of cell layers cultured on permeable filters", <strong>Experimental Cell Research</strong>, 250 (2): 576-580 (1999).
            </p>
            <p>
              Giaever, I. and Keese,C.R., <strong>PNAS USA 88</strong>, 7896 (1991).
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col mb-4">
            <h4 class="mt-4 mb-0">Related Barrier Function of Cell Layers ECIS Publications</h4>
            <hr class="mt-0 mb-4">

            <p><strong>Septin-2 Mediates Airway Epithelial Barrier Function in  Physiologic and Pathologic Conditions. </strong>VK Sidhaye, E Chau, P Breysse, and  LS King. <em>Am J Respir Cell  Mol Biol.</em> 2010.</p>

            <p><strong>Epidermal growth factor receptor signaling contributes  to house dust mite-induced epithelial barrier dysfunction. </strong>I.H. Heijink, A.  van Oosterhout, and A. Kapus<br><em>Eur. Respir. J.</em> 2010; 36:1016-1026.</p>

            <p><strong>Effect of a novel multipurpose contact lens  solution on human corneal epithelial barrier function. </strong>ME  Cavet, KR Vandermeid, KL Harrington, R Tchao, KW Ward, and JZ Zhang. <em>Cont Lens Anterior Eye.</em> 2010.</p>

            <p><strong>The PI3K  p110α isoform regulates endothelial adherens junctions via Pyk2 and Rac1.</strong> RJ Cain, B Vanhaesebroeck, and AJ Ridley. <em>J Cell Biol.</em> 2010; vol:188 iss:6 pg:863 -876</p>

            <p><strong>EGFR signaling contributes to house dust mite-induced  epithelial barrier dysfunction.</strong> I.H. Heijink, A. van Oosterhout, and A. Kapus. <em>Eur. Respir. J.</em> published  29 March 2010, 10.1183/09031936.00125809.</p>

            <p><strong>Desmoglein 2-mediated adhesion is required for intestinal  epithelial barrier integrity.</strong> Nicolas Schlegel, Michael Meir, Wolfgang-Moritz Heupel, Bastian Holthöfer,  Rudolf E. Leube, and Jens Waschke. <em>Am J Physiol Gastrointest Liver Physiol.</em> 2010; 298:G774-G783.</p>

            <p><strong>Calcium/calmodulin-dependent protein kinase II delta6  (CaMKIIdelta6) and RhoA involvement in thrombin-induced endothelial barrier  dysfunction.</strong> Zhen Wang, Roman Ginnan, Iskandar  F. Abdullaev, Mohamed Trebak, Peter A. Vincent, and Harold A. Singer<em>. J.  Biol. Chem.</em> published 4 May 2010, 10.1074/jbc.M110.120790.</p>

            <p><strong>Group V Phospholipase A2 Mediates Barrier Disruption of  Human Pulmonary Endothelial Cells Caused by LPS in Vitro.</strong> Steven M. Dudek, Nilda M. Muñoz, Anjali Desai, Christopher  M. Osan, Angelo Y. Meliton, and Alan R. Leff. <em>Am. J. Respir. Cell Mol. Biol.</em> published 6 May 2010, 10.1165/rcmb.2009-0446OC.</p>

            <p><strong>Adenosine protected against pulmonary edema through  transporter- and receptor A2-mediated endothelial barrier enhancement.</strong> Qing Lu, Elizabeth O. Harrington, Julie Newton, Brian  Casserly, Gregory Radin, Rod Warburton, Yang Zhou, Michael R. Blackburn, and  Sharon Rounds. <em>Am J Physiol Lung Cell Mol Physiol.</em> 2010;  298:L755-L767.</p>

            <p><strong>Regulation of CovR expression in Group B streptococcus  impacts blood-brain barrier penetration.</strong> A Lembo, MA Gurney, K Burnside, A Banerjee, M de Los Reyes, JE Connelly, WJ  Lin, KA Jewell, A Vo, CW Renken, KS Doran, and L Rajagopal. <em>Mol Microbiol.</em> 2010.</p>

            <p><strong>Cellular mechanisms of IL-17-induced blood-brain barrier  disruption.</strong> Jula Huppert, Dorothea Closhen,  Andrew Croxford, Robin White, Paulina Kulig, Eweline Pietrowski, Ingo Bechmann,  Burkhard Becher, Heiko J. Luhmann, Ari Waisman, and Christoph R. W. Kuhlmann. FASEB  J. 2010 Apr;24(4):1023-34. Epub 2009 Nov 25.</p>

            <p>Kei Sarai, Kenichi Shikata, Yasushi  Shikata, Kazuyoshi Omori, Naomi Watanabe, Motofumi Sasaki, Shingo Nishishita,  Jun Wada, Noriko Goda, Noriyuki Kataoka, and Hirofumi Makino. <strong>Endothelial barrier protection by FTY720  under hyperglycemic condition: involvement of focal adhesion kinase, small  GTPases, and adherens junction proteins.</strong> <em>Am J Physiol Cell Physiol.</em> 2009; 297:C945-C954.</p>

            <p>Jula Huppert, Dorothea Closhen,  Andrew Croxford, Robin White, Paulina Kulig, Eweline Pietrowski, Ingo Bechmann,  Burkhard Becher, Heiko J. Luhmann, Ari Waisman, and Christoph R. W. Kuhlmann. <strong>Cellular mechanisms of IL-17-induced  blood-brain barrier disruption.</strong> <em>FASEB J.</em> published 25 November 2009,  10.1096/fj.09-141978.</p>

            <p>Donghong He, Yanlin Su, Peter V.  Usatyuk, Ernst Wm. Spannhake, Paul Kogut, Julian Solway, Viswanathan Natarajan,  and Yutong Zhao, <strong>Lysophosphatidic Acid  Enhances Pulmonary Epithelial Barrier Integrity and Protects Endotoxin-induced  Epithelial Barrier Disruption and Lung Injury.</strong> The Journal of Biological  Chemistry, Vol. 284, NO. 36, pp. 24123–24132, September 4, 2009.</p>

            <p>Tripathi, A. K., Sullivan, D.J.,  Stins, M.F., <strong>Plasmodium  falciparum-Infected Erthyrocytes Decrease the Integrity of Human Blood-Brain  Barrier Endothelial Cell Monolayers,</strong> J. of Infectious Diseases: 942-950  (2007).</p>

            <p>Litkouhi, B., Kwong, J., Lo, C.M.,  Smedley, J.G., McClane, B.A, Aponte, M., Gao, Z., Sarno, J.L., Hinners, J.,  Welch, W.R., Berkowitz, R.S., Mok, S.C., Garner, E.I.O., <strong>Claudin-4 Overexpression in Epithelial Ovarian Cancer Is Associated  with Hypomethylation and Is a Potential Target for Modulation of Tight Junction  Barrier Function Using a C-Terminal Fragment of Clostridium perfringens  Enterotoxin.</strong> Neoplasia: 304-314 (2007).</p>

            <p>Hartmann, C., Zozulya, A., Wegener,  J., Galla, H.J., <strong>The impact of  glia-derived extracellular matrices on the barrier function of cerebral  endothelial cells: An in vitro study,</strong> Experimental Cell Research (2007).</p>

            <p>Chiang, E.T., Persaud-Sawin, D.A.,  Kulkarni, S., Garcia, J.G., Imani, F., <strong>Bluetongue  Virus and Double-Stranded RNA Increase Human Vascular Permeability: Role of p38  MAPK,</strong> J Clin Immunol. [Epub ahead of print] (2006).</p>

            <p>Yin F, Watsky MA. <strong>LPA and S1P Increase Corneal Epithelial  and Endothelial Cell Transcellular Resistance,</strong> Invest Ophthalmol Vis Sci.  46(6):1927-33 (2005).</p>

            <p>Weidenfeller, C., Schrot, S.,  Zozulya, A., Galla, H.J., <strong>Murine brain  capillary endothelial cells exhibit improved barrier properties under the  influence of hydrocortisone,</strong> Brain Res. 1053(1-2):162-74 (2005).</p>

            <p>McLaughlin, J.N., Shen, L.,  Holinstat, M., Brooks, J.D., DiBenedetto, E., Hamm, H.E., <strong>Functional Selectivity of G Protein Signaling by Agonist Peptides and  Thrombin for the Protease-activated Receptor-1.</strong> J. Biol. Chem. 280(26):  25048-25059 (2005).</p>

            <p>McLaughlin, J.N., Mazzoni, M.R.,  Cleator, J.H., Earls, L., Perdigoto, A.L., Brooks, J.D., Muldowney, J.A.S.,  Vaughan, D.E., Hamm, H.E. , <strong>Thrombin  Modulates the Expression of a Set of Genes Including Thrombospondin-1 in Human  Microvascular Endothelial Cells,</strong> J. Biol. Chem. 280(23): 22172-22180  (2005).</p>

            <p>Wu, M.H., <strong>Endothelial focal adhesions and barrier function,</strong> J. Physiology.  569(2): 359 (2005).</p>

            <p>Treeratanapiboon, L., Psathaki, K., Wegener,  J., Looareesuwan, S., Galla, H.J., Udomsangpetch, R. <strong>In vitro study of malaria parasite induced disruption of blood-brain  barrier,</strong> Biochem Biophys Res Commun. 335(3):810-8 (2005).</p>

            <p>Aigul Moldobaeva, Laura E  Welsh-Servinsky, Larissa A Shimoda, R. Scott Stephens, Alexander D Verin, Rubin  M Tuder, and David B Pearse <strong>Role of  Protein Kinase G in Barrier Protective Effects of cGMP in Human Pulmonary  Artery Endothelial Cells,</strong> Am J Physiol Lung Cell Mol Physiol, 0: 4342005  (2005).</p>

            <p>Anna A Birukova, Djanybek Adyshev,  Boris Gorshkov, Gary M Bokoch, Konstantin G Birukov, and Alexander A Verin <strong>GED-H1 is Involved in Agonist-induced  Human Pulmonary Entotherlial Barrier Dysfunction,</strong> Am J Physiol Lung Cell  Mol Physiol, 0: 2592005 (2005).</p>

            <p>Grab, D.J., Nikolskaia, O., Kim,  Y.V., Lonsdale-Eccles, J.D., Ito, S., Hara, T., Fukuma, T., Nyarko, E., Kim,  K.J., Stins, M.F., Delannoy, M.J., Rodgers, J., Kim, K.S., <strong>African Trypanosome Interactions With an In Vitro Model of the Human  Blood-Brain Barrier,</strong> J Parasitology, 90(5): 970-979 (2004).</p>

            <p>Birukova, A.A., Birukov, K.G.,  Smurova, K., Adyshev, D., Kaibuchi, K., Alieva, I., Garcia, J.G.N., Verin,  A.D., <strong>Novel role of microtubules in  thrombin-induced endothelial barrier dysfunction, </strong>The FASEB Journal.  18:1879-1890, (2004).</p>

            <p>Jacobson, J.R., Dudek, S.M.,  Birukov, K.G., Ye, S.Q., Grigoryev,D.N., Girgis, R.E., Garcia, J.G.N. <strong>Cytoskeletal Activation and Altered Gene  Expression in Endothelial Barrier Regulation by Simvastatin,</strong> American  Journal of Respiratory Cell and Molecular Biology. Vol. 30, pp. 662-670,  (2004).</p>

            <p>Zeng, W., Matter, W.F., Yan, S.B.,  Um, S.L., Vlahos, C.J., Liu, L., <strong>Effect  of drotrecogin alfa (activated) on human endothelial cell permeability and Rho  kinase signaling,</strong> Critical Care Medicine. 32(5): S302-S308 (2004).</p>

            <p>Regard, J.B., Scheek, S., Borbiev,  T., Lanahan, A.A., Schneider, A., Demetriades, A.M., Hiemisch, H., Barnes,  C.A., Verin, A.D., Worley, P.F. , <strong>Verge:  A Novel Vascular Early Reponse Gene,</strong> The Journal of Neuroscience.  24(16):4092-4103 (2004)</p>

            <p>Kilani, M.M., Mohammed, K.A.,  Nasreen, N., Hardwick, J.A., Kaplan, M.H., Tepper, R.S., Antony, V.B. <strong>Respiratory syncytial virus causes  increased bronchial epithelial permeability, </strong>Chest 126(1):186-91 (2004)</p>

            <p>Tsikitis, V., Morin, N., Harrington,  E., Albina, J., Reichner, J. <strong>The  Lectin-Like Domain of Comple,emt Receptor 3 Protects Endotherlial Barrier  Function from Activated Neutrophils,</strong> The Journal of Immunology 173:  1284-1291 (2004).</p>

            <p>Iyer, S., Ferreri, D.M., DeCocco,  N.C., Minnear, F.L., Vincent, P.A. <strong>VE-cadherin-p120  interaction is required for maintenance of endothelial barrier function,</strong> Am J Physiol Lung Cell Mol Physiol. 286(6):L1143-53. (2004) </p>

            <p>Pearse, P.M., Shimoda, L.A., Verin,  A.D., Bogatcheva, N., Moon, C., Ronnett., G.V., Welsh, L.A., Becker, P.M., <strong>Effect of cGMP on hydrogen peroxide-  induced barrier dysfunction in lung microvascular endothelium,</strong> Endothelium, 10:309-317, (2003).</p>

            <p>Tar, K., Birukova, A.A., Csortos,  C., Bakó, E., Garcia, J.G.N., Verin, A.D., <strong>Phosphatase  2A is involved in endothelial cell microtubule remodeling and barrier  regulation,</strong> Journal of Cellular Biochemistry Vol 92, Issue 3 , 534 - 546,  (2003).</p>

            <p>Schaphorst, K.L., Chiang, E.,  Jacobs, K.N., Zaiman, A., Natarajan, V., Wigley, F., Garcia, J.G.N., <strong>Role of sphingosine-1 phosphate in the  enhancement of endothelial barrier integrity by platelet-released products,</strong> Am J Physiol Lung Cell Mol Physiol 285: L258-L267, (2003).</p>

            <p>Usatyuk, P.V., Fomin, V.P., Shi, S.,  Garcia, J.G.N., Schaphorst, K., Natarajan, V., <strong>Role of Ca2+ in diperoxovanadate-induced cytoskeletal remodeling and  endothelial cell barrier function,</strong> Am J Physiol Lung Cell Mol Physiol 285:  L1006-L1017, (2003).</p>

            <p>Lum, Hazel, Qiao, Jing, Walter,  Robert J., Huang, Fei, Subbaiah, Papasani V., Kim, Kwang S., and Holian, Oksana. <strong>Inflammatory Stress Increases Receptor  for Lysophosphatidylcholine in Human Microvasucal Endothelial Cells, </strong>Amer.  J. Physiol., in press, (2003).</p>

            <p>Birukov, K.G., Jacobson, J.R.,  Flores, A.A., Ye, S.Q., Birukova, A.A., Verin, A.D., Garcia, J.G.N. , <strong>Magnitude-dependent regulation of  pulmonary endothelial call barrier function by cyclic stretch,</strong> Am J  Physiol Lung Cell Mol Physiol. 285: L785-L797 (2003).</p>

            <p>van Wetering, S., van den Berk, N.,  van Buul, J.D., Mul, F.P.J., Lommerse, I., Mous, R., ten Klooster, J.P.,  Zwaginga, J.J,. Hordijk, P.L. , <strong>VCAM-1-mediated  Rac signaling controls endothelial cell-cell contacts and leukocyte  transmigration,</strong> American Journal of Physiology-Cell Physiology, 285 (2):  C343-C352 (2003).</p>

            <p>Qiao, Jing, Huang, Fei , and Lum,  Hazel. <strong>PKA Inhibits RhoA Activation: A  Protection Mechanism Against Endothelial Barrier Dysfunation,</strong> Amer. J.  Physiol, 284: L972-L980, (2003).</p>

            <p>Tiruppathi, C., Freichel, M., Vogel,  S.M., Paria, B.C., Mehta, D., Flockerzi, V., Malik, A.B. <strong>Impairment of Store-Operated Ca ^ 2+ Entry in TRPC4 ^ -/- Mice  Interferes With Increase in Lung Microvascular Permeability,</strong> Circulation  Research 91: 70-76 (2002). </p>

            <p>Goldberg PL, MacNaughton DE,  Clements RT, Minnear FL, Vincent PA. <strong>p38  MAPK activation by TGF-beta1 increases MLC phosphorylation and endothelial  monolayer permeability,</strong> Am J Physiol Lung Cell Mol Physiol.  282(1):L146-54. PMID,(2002). </p>

            <p>Kataoka, N., Iwaki, K., Hashimoto,  K., Mochizuki, S., Ogasawara, Y., Sato, M., Tsujioka, K., Kajiya, F., <strong>Measurements of endothelial cell-to-cell  and cell-to-substrate gaps and micromechanical properties of endothelial cells  during monocyte adhesion,</strong> The National Academy of Sciences of the United States  of America, 99 (24): 15638-15643 (2002).</p>

            <p>Antony, A.B., Tepper, R.S.,  Mohammed, K.A., <strong>Cockroach extract  antigen increases bronchial airway epithelial permeability,</strong> Journal of  Allergy and Clinical Immunology, 110 (4): 589-595 (2002).</p>

            <p>Lum, Hazel, Hao, Zengping, Gayle,  Dave, Kumar, Priyadarsini, Patterson, Carolyn E., and Uhler, Michael D. . <strong>Vascular Endothelial Cells Express  Isoforms of Protein Kinase A Inhibitor,</strong> Amer J. Physiol., 282: C59-C66,  (2002).</p>

            <p>Garcia, J.G.N., Liu, F., Verin,  A.D., Birukova, A., Dechert, M.A., Gerthoffer, W.T., Bamberg, J.R., English,  D., <strong>Sphingosine 1-phosphate promotes  endothelial cell barrier integrity by Edg-dependent cytoskeletal rearrangement,</strong> J Clin Invest. 108(5): 689?701, (2001).</p>

            <p>Minnear FL, Patil S, Bell D, Gainor  JP, Morton CA. <strong>Platelet lipid(s) bound  to albumin increases endothelial electrical resistance: mimicked by LPA,</strong> Am J Physiol Lung Cell Mol Physiol. 281(6):L1337-44. PMID, (2001). </p>

            <p>Gainor JP, Morton CA, Roberts JT,  Vincent PA, Minnear FL. <strong>Platelet-conditioned  medium increases endothelial electrical resistance independently of cAMP/PKA  and cGMP/PKG,</strong> Am J Physiol Heart Circ Physiol. Nov;281(5):H1992-2001. PMID  (2001).</p>

            <p>Becker, Patrice M. , Verin,  Alexander D., Booth, Mary Ann, Liu,Feng, Birukova, Anna and Garcia, Joe G. N., <strong>Differential regulation of diverse  physiological responses to VEGF in pulmonary endothelial cells,</strong> Amer J.  Physiol., 281: L1500-L1511, (2001).</p>

            <p>Hillebrandt, H. Abdelghani,A.  Abdelghani-Jacquin,C. Aepfelbacher,M. Sackmann, ., <strong>Electrical and optical characterization of thrombin-induced  permeability of cultured endothelial cell monolayers on semiconductor electrode  arrays,</strong> Applied Physics A-Material Science &amp; Processing, 73 (5):  539-546 (2001).</p>

            <p>Lum, Hazel, Podolski, J.L., Gurnack,  K.L., Schulz, I.T., Huang, F. and Holian, O. <strong>Protein Phosphatase 2B Inhibitor Potentiates PKC Activity and  Endothelial Barrier Dysfunction,</strong> Amer. J. Physiol., 281: L546-555, (2001).</p>

            <p>Sandoval, R., A. B. Malik., T.  Naqvi, D. Metha, and C. Tiruppathi. <strong>Requirement  for Ca2+ signaling in the mechanism of thrombin-induced increase in endothelial  permeability,</strong> Am. J. Physiol. 280:L239-L247, (2001).</p>

            <p>Sandoval, R., A. B. Malik., R. D.  Minshall, P. Kouklis, C. A. Ellis, and C. Tiruppathi. <strong>Ca 2+ signaling and PKC? activate increased endothelial permeability  by disassembly of VE-cadherin junctions,</strong> J. Physiol. (London).533:433-445,  (2001).</p>

            <p>Sandoval, R., A. B. Malik., R. D.  Minshall, P. Kouklis, C. A. Ellis, and C. Tiruppathi. <strong>Ca 2+ signaling and PKC? activate increased endothelial permeability  by disassembly of VE-cadherin junctions,</strong> J. Physiol. (London).533:433-445,  (2001).</p>

            <p>Minnear FL. Patil S, Bell D, Gainor  JP, Morton CA. <strong>Related Articles  Platelet lipid(s) bound to albumin increases endothelial electrical resistance:  mimicked by LPA,</strong> Am J Physiol Lung Cell Mol Physiol. 281(6):L1337-44,  (2001).</p>

            <p>Ellen, R.P., Ko, K.S.S., Lo, C.M.,  Grove, D.A., Ishihara, K. <strong>Insertional  Inactivation of the prtP Gene of Treponema denticola Confirms Dentilisin's  Disruption of Epithelial Junctions,</strong> J. Mol. Microbiol. Biotechnol. 2(4):  581-586, (2000).</p>

            <p>Tsukahara, H., Noiri, E., Jiang,  M.Z., Hiraoka, M., Mayumi, M. <strong>Role of  nitric oxide in human pulmonary microvascular endothelial cell adhesion,</strong> Life Sci. 67(1):1-11 (2000).</p>

            <p>Ellen, R.P., Ko, K.S., Lo, C.M.,  Grove, D.A., Ishihara, K. <strong>Insertional  inactivation of the prtP gene of Treponema denticola confirms dentilisin's  disruption of epithelial junctions,</strong> J Mol Microbiol Biotechnol. 2(4):581-6  (2000).</p>

            <p>Patterson, C.E., Lum, H. Schaphorst,  K.L., Verin, A.D., and Garcia, J.G.N. <strong>Regualtion  of Endothelial Barrier Function by the cAMP-dependent Protein Kinase,</strong> Endotherlium, 7(4): 287-308, 2000</p>

            <p>Waypa GB, Morton CA, Vincent PA,  Mahoney JR Jr, Johnston WK III, and Minnear FL. <strong>Oxidant-increases endothelial permeability: prevention with  phosphodiesterase inhibition vs cAMP production,</strong> J Appl Physiol  88:835-842, 2000.</p>

            <p>Lo, C.M., Keese, C.R., Giaever, I. , <strong>Cell-substrate contact: Another factor  may influence transepithelial electrical resistance of cell layers cultured on  permeable filters,</strong> Experimental Cell Research, 250 (2): 576-580 (1999).</p>

            <p>Ellis, C. A., C. Tiruppathi, R.  Sandoval, W.D. Niles, and Malik. A. B. <strong>Time  course of recovery of endothelial cell surface thrombin receptor (PAR-1)  expression,</strong> Am. J. Physiol. 276:C38-C45, 1999.</p>

            <p>Moy, A.B., Winter, M., Kamath, A.,  Blackwell, K., Reyes, G., Giaever, I., Keese, C., Shasby, D.M., <strong>Histamine alters endothelial barrier  function at cell-cell and cell-matrix sites,</strong> American Journal of  Physiology-Lung Cellular and Molecular Physiology, 278 (5): L888-L898 (2000). </p>

            <p>Patil S, Kaplan JE, Minnear FL. <strong>Protein, not adenosine or adenine  nucleotides, mediates platelet decrease in endothelial permeability,</strong> Am J  Physiol. Nov; 273(5 Pt 2):H2304-11. PMID (1997) </p>

            <p>Tiruppathi, C., W. Song., M.  Bergenfeldt. P. Sass and A.B. Malik. <strong>Gp60  activation mediates albumin transcytosis in endothelial cells bytyrosine  kinase-dependent pathway,</strong> J. Biol. Chem. 272:25968-25975,</p>

            <p>Tiruppathi, C., Malik, A.B., Del  Vecchio, P.J., Keese, C.R., and Giaever,I., <strong>Electrical method for detection of endothelial cell shape change in  real time,</strong> PNAS USA 89, 7919-7923 (1992).</p>
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
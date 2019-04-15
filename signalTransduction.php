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
            <h1 class="mb-0">Signal Transduction</h1>
            <hr class="mt-0">
          </div>
        </div>
      </div>
    </section><!-- /applicationsHeading -->

    <section id="applicationContent" class="py-4 text-center text-md-left">
      <div class="container">

        <p>
          ECIS<sup>®</sup> is especially useful to monitor the signal transduction pathways activated by G protein cou-pled receptors (GPCR). GPCR activation, regardless of the second messenger, results in alterations of the cell’s cytoskeletal elements, causing morpholog-ical changes.
        </p>
  
        <div class="row">
          <div class="col">
            <h4 class="mt-4 mb-3 secondary-title">Overview</h4>
            <p>
              Many compounds of interest in biological and medical research are those molecules that specifically bind to cell surface receptors. When the receptor receives these ligands, subsequent changes in a signal transduction pathway result in the enhancement or attenuation of a cellular response. Assays capable of detecting and quantifying the receptor-ligand interaction are valuable tools both in fundamental studies of cell behavior and in the development of new drugs. Many modern assays are based upon detection of receptor-ligand binding event directly. Although binding of a compound is an essential component of signal transduction, this event alone does not assure that the biological response affected by the receptor is altered. Assays where one monitors cellular response directly, can avoid these potential false positives and provide more reliable information regarding the efficacy of compounds.
            </p>
            <p>
              We have explored the use of ECIS to monitor the signal transduction pathways activated by G protein coupled receptors (GPCR). This assay is based upon the widely accepted conjecture that GPCR activation, regardless of the second messenger, results in alterations of the cell's cytoskeletal elements. This culminates in morphological changes, and this is precisely the type of event detected in real time and with great sensitivity by the ECIS biosensor.
            </p>
            <img class="img-fluid py-5 d-block mx-auto" src="public/img/GEN5.png" alt="GEN5">
            <p>
              In preliminary studies using this approach, several receptors have been successfully studied, including the muscarinic receptor monitored in a dose response experiment reported in the figure above. To prepare for this experiment, CHO cells, engineered to over express the muscarinic receptor were first grown to confluence over a period of 24 hours in the ECIS wells. At time zero in the figure, the cell-covered electrodes exhibited resistance values from 4.1 to 5.4 k ohms normal variation in the measurement. At the arrow, the control received a small volume of balanced salt solution, whereas the other wells received the same vehicle but containing different concentrations of the muscarinic agonist, carbachol (final concentrations are listed in the figure). Following agonist addition, there is a steep rise in the impedance lasting for 15 to 20 minutes. The impedance then plateaus and begins a gradual return to the baseline value. The control shows only a slight response to the vehicle addition. The impedance changes are very significant- doubling in some cases.
            </p>
            <img class="img-fluid py-5 d-block mx-auto" src="public/img/PZP-keese.png" alt="PZP">
            <p>
              To be certain the response monitored by ECIS is in fact the specific activation of the muscarinic receptor, we first estimated the EC50 value from the dose response data. Using the maximum value obtained following carbachol addition as indicative of the response, the data gave an EC50 of 1 micromolar, consistent with values reported in the literature for this receptor-ligand pair. Next, we carried out experiments with an antagonist for the receptor, perenzipine (PZP), to see if we could block the carbachol response. In the figure below these results are presented. Here, at the first arrow, we first administer different concentrations of PZP, followed in 15 minutes (the second arrow) with a fixed dose of 20 mM carbachol. Controls are included with only buffer addition at both times and with no PZP addition to see the normal carbachol response. The ability of PZP to block the carbachol activation is clearly demonstrated and indicates that we in fact are seeing morphological changes associated with activation of the muscarinic receptor and the ensuing signal transduction cascade.
            </p>
            <p>
              The use of whole cell sensors for these signal transduction measurements is especially significant in drug discovery efforts. Drugs must function at the cellular level to ultimately have an effect upon tissue and the whole organism. The complex molecular events that result in a cellular response to a particular compound involve a series of signaling and feedback circuits. Simply detecting binding of a compound to a receptor does not assure the efficacy of the compound in other aspects of the transduction mechanism such as receptor activation, second messenger production, etc. Using whole cell sensors such as ECIS in drug assays eliminates these potential stumbling points. In addition, with the whole cell system one can also evaluate the toxicity of compounds and the effect of drugs upon different cell types.
            </p>
          </div><!-- /col -->
        </div><!-- /row -->

      </div><!-- /container -->
    </section><!-- /applicationContent -->

    <section id="applicationReferences" class="py-4 text-center text-md-left mb-5">
      <div class="container">

        <div class="row">
          <div class="col">
            <h4 class="mt-4 mb-0">Related Signal Transduction Assays ECIS Publications</h4>

            <hr class="mt-0 mb-4">

            <p><strong>ADAM15  regulates endothelial permeability and neutrophil migration via Src/ERK1/2  signaling. </strong>Chongxiu Sun, Mack H. Wu, Mingzhang  Guo, Mark L. Day, Eugene S. Lee, and Sarah Y. Yuan. <em>Cardiovasc Res.</em> published  10 April 2010, 10.1093/cvr/cvq060.</p>

            <p><strong>Antipermeability Function of PEDF Involves Blockade of the  MAP Kinase/GSK/&beta;-Catenin Signaling Pathway and uPAR Expression.</strong> Jinling Yang, Elia J. Duh, Ruth B. Caldwell, and M. Ali  Behzadian. <em>Invest. Ophthalmol. Vis. Sci.</em> 2010; 51:3273-3280.&nbsp; </p>

            <p>Jingyan Han, Guoquan Liu, Jasmina  Profirovic, Jiaxin Niu, and Tatyana Voyno-Yasenetskaya. <strong>Zyxin is involved in  thrombin signaling <em>via</em> interaction with PAR-1 receptor. </strong><em>FASEB J.</em> 2009; 23:4193-4206.</p>

            <p>Dennis J. Grab, Jose C.  Garcia-Garcia, Olga V. Nikolskaia, Yuri V. Kim, Amanda Brown, Carlos A. Pardo,  Yongqing Zhang, Kevin G. Becker, Brenda A. Wilson, Ana Paula C. de A. Lima,  Julio Scharfstein, J. Stephen Dumler, &ldquo;<strong>Protease  Activated Receptor Signaling Is Required for African Trypanosome Traversal of  Human Brain Microvascular Endothelial Cells</strong>.&rdquo; PLOS, July 2009, Volume 3,  Issue 7, e479.</p>

            <p>ten Klooster, J. P., Jeffer, Z.M.,  Chernoff, J., Hordijk, P.L., &quot;<strong>Targeting  and activation of Rac1 are mediated by the exchange factor B-Pix</strong>.&quot; J.  Cell Biology. 172 (5): 759-769 (2006). </p>

            <p>Qiao, J., Huang, F., Naikawadi, R.P., Kim, K.S., Said, T.,  Hazel Lum, H., &quot;<strong>Lysophosphatidylcholine  Impairs Endothelial Barrier Function through the G Protein-Coupled Receptor,  GPR4</strong>.&quot; AJP Lung Cell Mol Physiol 0: 00508.2005v1 (2006).</p>

            <p>Meyer, M.C., McHowat, J., &quot;<strong>Calcium-Independent Phospholipase  A2-Catalyzed Plasmalogen Hydrolysis in Hypoxic Human Coronary Artery  Endothelial Cells</strong>,&rdquo; [PDF] Am J Physiol Cell Physiol (2006).</p>

            <p>ten Klooster, J. P., Jeffer, Z.M.,  Chernoff, J., Hordijk, P.L. &quot;<strong>Targeting  and activation of Rac1 are mediated by the exchange factor B-Pix</strong>.&quot; J.  Cell Biology. 172 (5): 759-769 (2006).</p>

            <p>Ren, J., Xiao, Y., Singh, L.S.,  Zhao, X., Zhao, Z., Feng, L., Rose, T.M., Prestwich, G.D., Xu, Y.,&quot;<strong>Lysophosphatidic Acid Is Constitutively  Produced by Human Peritoneal Mesothelial Cells and Enhances Adhesion,  Migration, and Invasion of Ovarian Cancer Cells</strong>.&quot; [PDF] Cancer Res  2006; 66: (6) (2006).</p>

            <p>Meyer, M.C., Kell, P.J., Creer,  M.H., McHowat, J., &quot;<strong>Calcium-independent  phospholipase A2 is regulated by a novel protein kinase C in human coronary  artery endothelial cells</strong>,&rdquo; Am J Physiol Cell Physiol 288: C475-C482,  (2005).</p>

            <p>Becker, P.M., Waltenberger, J.,  Yachechko, R., Mirzapoiazova, T., Sham, J.S.K., Lee, C.G., Elias, J.A., Verin,  A.D., &quot;<strong>Neuropilin-1 regulates  vascular endothelial growth factor-mediated endothelial permeability</strong>.&quot;  Circulation Research, 96:1257-1265, (2005).</p>

            <p>Charrier, L., Yan, Y., Driss, A.,  Laboisse, C.L., Sitaraman, S.V. and Merlin, D.,&quot;<strong>ADAM-15 inhibits wound healing in human intestinal epithelial cell  monolayers</strong>.&quot; [PDF] AJP Gastrointest Liver Physiol. 288:346-353,  (2005).</p>

            <p>Weidenfeller, C., Schrot, S.,  Zozulya, A., Galla, H.J.,&quot;<strong>Murine  brain capillary endothelial cells exhibit improved barrier properties under the  influence of hydrocortisone</strong>.&quot; [PDF] Brain Res. 1053(1-2):162-74  (2005).</p>

            <p>McLaughlin, J.N., Shen, L.,  Holinstat, M., Brooks, J.D., DiBenedetto, E., Hamm, H.E., &quot;<strong>Functional Selectivity of G Protein  Signaling by Agonist Peptides and Thrombin for the Protease-activated  Receptor-1</strong>.&quot; J. Biol. Chem. 280(26): 25048-25059 (2005).</p>

            <p>McLaughlin, J.N., Mazzoni, M.R.,  Cleator, J.H., Earls, L., Perdigoto, A.L., Brooks, J.D., Muldowney, J.A.S.,  Vaughan, D.E., Hamm, H.E., &quot;<strong>Thrombin  Modulates the Expression of a Set of Genes Including Thrombospondin-1 in Human  Microvascular Endothelial Cells</strong>.&quot; J. Biol. Chem. 280(23): 22172-22180  (2005).</p>

            <p>Wu, M.H. &quot;Endothelial focal  adhesions and barrier function.&quot; J. Physiology. 569(2): 359 (2005).</p>

            <p>Huang, F.,Subbaiah, P., Holian,  O.,Zhang, J.,Johnson, A.,Gertzberg, N.,Lum, H., &quot;<strong>Lysophosphatidylcholine Increases Endothelial Permeability: Role of PKC  and RhoA Cross-talk</strong>&quot; Am J Physiol Lung Cell Mol Physiol 289:  L176-L185, (2005).</p>

            <p>Kilani, M.M., Mohammed, K.A.,  Nasreen, N., Tepper, R.S., Antony, V.B., &quot;<strong>RSV causes HIF-1alpha stabilization via NO release in primary bronchial  epithelial cells</strong>.&quot; Inflammation. 28(5):245-5, (2004).</p>

            <p>Zeng, W., Matter, W.F., Yan, S.B.,  Um, S.L., Vlahos, C.J., Liu, L., &quot;<strong>Effect  of drotrecogin alfa (activated) on human endothelial cell permeability and Rho  kinase signaling</strong>.&quot; Critical Care Medicine. 32(5): S302-S308 (2004).</p>

            <p>Regard, J.B., Scheek, S., Borbiev,  T., Lanahan, A.A., Schneider, A., Demetriades, A.M., Hiemisch, H., Barnes,  C.A., Verin, A.D., Worley, P.F., &quot;<strong>Verge:  A Novel Vascular Early Reponse Gene</strong>.&quot; The Journal of Neuroscience.  24(16):4092-4103 (2004)</p>

            <p>Clements, R., Minnear, R., Singer,  H., Keller, R., Vincent, P., &quot;<strong>RhoA  and Rho-kinase dependent and independent signals mediate TGF--induced pulmonary  endothelial cytoskeletal reorganization and permeability</strong>.&quot; Am J  Physiol Lung Cell Mol Physiol 288: L294-L306, (2004).</p>

            <p>Ramirez-Icaza G, Mohammed KA,  Nasreen N, Van Horn RD, Hardwick JA, Sanders KL, Tian J, Ramirez-Icaza C,  Johnson MT, Antony VB. &quot;<strong>Th2  cytokines IL-4 and IL-13 downregulate paxillin expression in bronchial airway  epithelial cells</strong>.&quot; J Clin Immunol. 24(4):426-34 (2004).</p>

            <p>Wang Q, Turlington A, Heo S, Blanco  A, Tian J, Xie Z, Yan B, Wan Y., &quot;<strong>Extracellular  matrix activity and caveolae events contribute to cell surface receptor  activation that leads to MAP kinase activation in response to UV irradiation in  cultured human keratinocytes</strong>.&quot; Int J Mol Med. Apr;15(4):633-40 (2005)</p>

            <p>De Blasio, B.F., Rottingen, J.A.,  Sand, K.L., Giaever, I., Iversen, J.G. &quot;<strong>Global synchronous oscillations in cytosolic calcium and adherence in  bradykinin- stimulated Madin-Darby canine kidney cells</strong>.&quot; Acta Physiol  Scand 180: 335-346 (2004)</p>

            <p>Kim, Yuri V., Di Cello,  Francescopaolo, Hillaire, Coryse S., Kim, Kwang Sik. &quot;<strong>Differential Ca+ signaling by thrombin and protease-activated  receptor-1-activating peptide in human brain microvascular endothelial cells.</strong>&quot;  [PDF] American Journal of Physiology-Cell Physiology, 286: C31-C42 (2004).</p>

            <p>Hug, T.S. &quot;<strong>Biophysical methods for monitoring cell-substrate interactions in drug  discovery</strong>.&quot; Assay Drug Dev Technol. 1(3):479-88. Review (2003).</p>

            <p>Schmidt, M.H., Chen, B., Randazzo,  L.M., Bogler, O. &quot;<strong>SETA/CIN85/Ruk  and its binding partner AIP1 associate with diverse cytoskeletal elements,  including FAKs, and modulate cell adhesion</strong>.&quot; J Cell Sci. 116(Pt  14):2845-55 (2003).</p>

            <p>Sawhney RS, Sharma B, Humphrey LE,  Brattain MG. &quot;<strong>Integrin alpha2 and  extracellular signal-regulated kinase are functionally linked in highly  malignant autocrine transforming growth factor-alpha-driven colon cancer cells.</strong>&quot;  J Biol Chem. 278(22):19861-9 (2003).</p>

            <p>Reaas, V., Torbla, S., Andersen,  M.H., Jensen, J., Rustan, A.C. &quot;<strong>Electrical  stimulation improves insulin responses in a human skeletal muscle cell model of  hyperglycemia.</strong>&quot; Ann N Y Acad Sci. 967:506-15 (2002).</p>

            <p>Hillebrandt, H. Abdelghani, A.  Abdelghani-Jacquin, C. Aepfelbacher, M. Sackmann, &quot;<strong>Electrical and optical characterization of thrombin-induced  permeability of cultured endothelial cell monolayers on semiconductor electrode  arrays</strong>,&rdquo; Applied Physics A-Material Science &amp; Processing, 73 (5):  539-546, 2001.</p>

            <p>Tiruppathi, C., W. Yan, R.  Sandoval., T. Naqvi., A. N. Pronin., J.L. Benovic, and A. B. Malik. &quot;<strong>G protein-coupled receptor kinase-5  regulates Thrombin-Activated signaling in endothelial cells</strong>,&rdquo; Proc. Natl.  Acad. Sci. USA. 97:7440-7445, 2000.</p>

            <p>Wegener, J., Zink, S., Rosen, P.,  GAlla, H., &quot;<strong>Use of Electrochemical  Impedance measurements to monitor B-adrenergic stimulation of bovine aortic  endothelial cells</strong>.&quot; [PDF] Eur J Physiol 437: 925-934, 1999.</p>
            
            <p>Reddy, L., Wang, H.S., Keese, C.R.,  Giaever, I., Smith, T.J., &quot;<strong>Assessment  of rapid morphological changes associated with elevated cAMP levels in human  orbital fibroblasts</strong>,&rdquo; Experimental Cell Research, 245 (2): 360-367 (1998).</p>

            <h4 class="my-4">Example Publication</h4>
            <p>
              <a href="http://stke.sciencemag.org/content/6/267/ra18" class="text-dark link" target="_blank"> Shinde et al., (2013) "STIM1 Controls Endothelial Barrier Function Independ-ently of Orai1 and Ca2+ Entry." Science Signaling 6(267):ra18. doi:10.1126/scisignal.2003425</a>
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
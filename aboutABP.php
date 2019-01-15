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

    <section id="companyHeading" class="text-center text-md-left">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="mb-0">About Applied Biophysics</h1>
            <hr class="mt-0">
          </div>
      </div>
    </section><!-- /companyHeading -->

    <section id="companyContent" class="py-4">
      <div class="container text-center text-md-left">

        <div class="row mb-5">

          <div class="col-md-3">
            <div class="list-group mb-5" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action active" data-toggle="list" href="#overview" role="tab" data-scroll-ignore>Overview</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#whoWeAre" role="tab" data-scroll-ignore>Who We Are</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#mission" role="tab" data-scroll-ignore>Mission</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#advisory" role="tab" data-scroll-ignore>Advisory Board</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#press" role="tab" data-scroll-ignore>Press Releases</a>
              <a href="http://archive.constantcontact.com/fs021/1102585480643/archive/1102608169871.html" class="list-group-item list-group-item-action" target="_blank">Newsletter Archive</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#pastEvents" role="tab" data-scroll-ignore>Past Events</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#comics" role="tab" data-scroll-ignore>ECIS Comics</a>
            </div>
          </div>

          <div class="col-md-9">
            <div class="tab-content" id="nav-tabContent">

              <div class="tab-pane active" id="overview" role="tabpanel">
                <img class="img-fluid mb-5" src="public/img/RensselaerTechPark.jpg" alt="Rensselaer Tech Park Sign">
                <p>Applied BioPhysics, Inc. applies the results of biophysical research to provide practical tools for cell research
                  and drug discovery.
                </p>
                
                <p>
                  ECIS<sup>&trade;</sup> or Electric Cell-substrate Impedance Sensing is an impedance based method to study many of
                  the activities of animal cells when grown in tissue culture in real-time. These include morphological changes, cell
                  locomotion, and other behaviors directed by the cell's cytoskeleton. ECIS<sup>&trade;</sup> technology was invented
                  by Drs. Ivar Giaever and Charles R. Keese while working at General Electric Corporate Research and Development, but
                  its commercial potential was not explored as it fell outside of GE's core interests. In 1991, as the applications
                  of the technology became more apparent, Drs Giaever and Keese formed Applied BioPhysics, Inc. as a private company
                  to develop, commercialize and market ECIS<sup>&trade;</sup> and other biophysical technologies. Applied BioPhysics
                  is located next to the Rensselaer Polytechnic Institute campus, where several collaborative research projects are
                  ongoing in the academic laboratories.
                </p>

                <p>
                  Since the formation of the company, the ECIS<sup>&trade;</sup> approach has been applied to numerous
                  investigations including measurements of the invasive nature of cancer cells, the barrier function of endothelial
                  cells, in vitro toxicity testing as an alternative to animal testing, and signal transduction involving GPCR's
                  for modern drug discovery.
                <p>
                
                <p>
                  Instruments are located throughout the United States as well as in Asia and Europe. Customers include Johns
                  Hopkins University, The University of Tokyo, Vanderbilt University, Brown University, Genentech, and Allergan
                  to mention a few. Drs. Giaever and Keese continue to develop new innovations to enhance the ECIS technology
                  including most recently an automated wound healing assay and a device to study the behavior of cells under
                  flow conditions both of which are now commercially available.
                </p>
              </div><!-- /overview -->

              <div class="tab-pane" id="whoWeAre" role="tabpanel">
                <h2>Who We Are</h2>
                <hr class="mt-2 mb-4">

                <div class="row mb-5">
                  <div class="col-md-3 col-lg-2 mb-4 mb-md-0">
                    <img class="img-fluid memberPhoto" src="public/img/charlie.jpg" alt="Charles Keese Photo">
                  </div>
                  <div class="col-md-9 col-lg-10">
                    <h3 class="mb-3">Dr. Charles Keese - President</h3>
                    <p>
                      Charles R. Keese, President, holds a BS in physics and a Ph.D. in biology and is the author of numerous
                      technical papers and patents. While a staff scientist at the General Electric Research and Development
                      Center, in addition to co-inventing the ECIS technology, he was involved in the development of the indium
                      slide immunoassay and the use of fluorocarbon fluids as substrates for cell growth culminating in the first
                      liquid microcarrier.
                    </p>
                  </div>
                </div>
                
                <div class="row mb-5">
                  <div class="col-md-3 col-lg-2 mb-4 mb-md-0">
                    <img class="img-fluid memberPhoto" src="public/img/ivar.jpg" alt="Ivar Giaever Photo">
                  </div>
                  <div class="col-md-9 col-lg-10">
                    <h3 class="mb-3">Dr. Ivar Giaever - Chief Technology Officer</h3>
                    <p>
                      The company's Chief Technology Officer, Ivar Giaever, is a highly recognized physicist who shared the 1973
                      Nobel Prize in Physics for his studies of tunneling and superconductivity. He then became interested in
                      biophysics, in particular, the behavior of macromolecules and cells on metal films.
                    </p>
                  </div>
                </div>
                
                <div class="row mb-5">
                  <div class="col-md-3 col-lg-2 mb-4 mb-md-0">
                    <img class="img-fluid memberPhoto" src="public/img/chris.jpg" alt="Christian Dehnert Photo">
                  </div>
                  <div class="col-md-9 col-lg-10">
                    <h3 class="mb-3">Mr. Christian Dehnert - Vice President Marketing</h3>
                    <p>
                      Christian Dehnert, Vice President Marketing, holds a BS and MS in electrical engineering and a MBA with an
                      industrial marketing focus. He has over 16 years of experience in the marketing and sales of high
                      technology products.
                    </p>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-3 col-lg-2 mb-4 mb-md-0">
                    <img class="img-fluid memberPhoto" src="public/img/catherine.jpg" alt="Catherine Toniatti Photo">
                  </div>
                  <div class="col-md-9 col-lg-10">
                    <h3 class="mb-3">Catherine Toniatti-Yanulavich - Vice President Sales</h3>
                    <p>
                      Catherine received her BS in Biology from Rensselaer Polytechnic Institute. Prior to working for Applied
                      BioPhysics she completed an internship at Albany Medical College. She will be consulting with researchers
                      to match ECIS technology with their individual needs and goals.
                    </p>
                  </div>
                </div>
              </div><!-- whoWeAre -->

              <div class="tab-pane" id="mission" role="tabpanel">
                <h2>Our Mission</h2>
                <hr class="mt-2 mb-4">

                <div class="row">
                  <div class="col">
                    <p>
                      Applied BioPhysics manufactures <strong>ECIS<sup>&trade;</sup> (Electric Cell-Substrate Impedance Sensing)</strong>
                      instruments and arrays for monitoring the behavior of cells in tissue culture. We not only pride ourselves for
                      being the founders of an automated, quantitative, real-time instrument, we also pride ourselves on being as
                      academic minded as we are business savy. Our primary intention is to provide an instrument that answers the
                      researchers experimental question(s). A system sitting idle is as much of a loss to you as it is to our company.
                    </p>
                  </div>
                </div>
                
                <div class="row mt-2">
                  <div class="col-lg-6 mb-4 mb-lg-0">
                    <img class="img-fluid" src="public/img/mission.jpg" alt="Tecnicial Filling ECIS Array">
                  </div>
                
                  <div class="col-lg-6">
                    <p>
                      We thrive on creating a strong ECIS<sup>&trade;</sup> community, a network between ECIS<sup>&trade;</sup> users,
                      and with Applied BioPhysics. We rely heavily on peer reviewed publications to learn about how ECIS is being used
                      for various applications. In turn we are able to connect ECIS™ users with one another when questions arise about
                      specific assays, cell lines, experimental conditions, and protocols.
                    </p>
                  </div>
                </div>
                
                <div class="row mt-4">
                  <div class="col">
                    <p>
                      We have a dedicated team of employees that make our customers and their research a priority. It is not uncommon
                      for us to make ourselves available after hours when researchers have questions, or need assistance.
                    </p>
                    <p>All of our products are manufactured in the USA, 95 percent of which are manufactured at our facility in Troy, NY.</p>
                    <p>
                      Applied BioPhysics, Inc. has a mission to bring you innovative technology to benefit your research, with
                      guaranteed satisfaction through manufacturing and person to person communication. Reliable, reproducible, and
                      real-time results are our universal approach to the cell-science community.
                    </p>
                
                    <h3 class="mt-5">Environmental Impact Statement</h3>
                    <p>
                      Applied BioPhysics is dedicated to minimizing its environmental impact, and ensuring a sustainable future by
                      finding opportunities within both its operations and business practices to promote environmentally sound choices.
                    </p>
                    <p>Applied BioPhysics is developing innovative solutions to bring about change by:</p>
                
                    <ul class="list-unstyled mt-3 ml-0 ml-md-3">
                      <li class="indent my-4 pl-0 pl-sm-4">
                        Continuing improvement in daily operations that contribute to the health and well-being of its employees, as
                        well as the surrounding community.
                      </li>
                      <li class="indent my-4 pl-0 pl-sm-4">
                        Promoting the practices of reducing, reusing and recycling of all materials.
                      </li>
                      <li class="indent my-4 pl-0 pl-sm-4">
                        Conducting its business activities in the most environmentally sound manner possible.
                      </li>
                    </ul>
                
                    <p class="environment text-success mt-3"><i class="fas fa-leaf fa-flip-horizontal mr-2"></i>Please consider the environment before printing.</p>
                  </div>
                </div>
              </div><!-- /mission -->

              <div class="tab-pane" id="advisory" role="tabpanel">
                <h2>Advisory Board</h2>
                <hr class="mt-2 mb-4">

                <div class="row mb-5">
                  <div class="col-md-3 col-lg-2 mb-4 mb-md-0">
                    <img class="img-fluid memberPhoto" src="public/img/litwiller.jpg" alt="Dave Litwiller Photo">
                  </div>
                  <div class="col-md-9 col-lg-10">
                    <h3 class="mb-3">Dave Litwiller</h3>
                    <p>
                      Dave Litwiller is a senior executive of <a class="text-dark link" href="http://www.teledynedalsa.com/en/home"
                        target="_blank">DALSA Corporation</a>, headquartered in Waterloo, Ontario, Canada. He oversees strategy and
                      market development for DALSA's business units in semiconductor fabrication, image sensor integrated circuit
                      development, MEMS, digital cinema and life sciences instrumentation. In previous roles with DALSA, Mr. Litwiller
                      was the head of marketing, and before that, the head of engineering. Prior to joining DALSA, Mr. Litwiller was a
                      design engineer at several high technology start-ups in the wireless, fiber optic telecom, and broadcast
                      industries.
                    </p>
                    <p>
                      Mr. Litwiller is a graduate of the University of Waterloo, and holds a Bachelor of Applied Science degree. He
                      serves as an advisor for various private corporations in matters of strategy, technology, and business
                      development. Mr. Litwiller is a frequent speaker at technology start-up forums and executive industry association
                      conferences on business strategy.
                    </p>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-3 col-lg-2 mb-4 mb-md-0">
                    <img class="img-fluid memberPhoto" src="public/img/joachim.jpg" alt="Joachim Wegener Photo">
                  </div>
                  <div class="col-md-9 col-lg-10">
                    <h3 class="mb-1">Joachim Wegener</h3>
                    <h5 class="mb-3">Institute for Analytical Chemistry, Chemo & Biosensors - University of Regensburg</h5>
                    <p>
                      <a class="text-dark link" href="http://www-analytik.chemie.uni-regensburg.de/wegener/wegener.htm" target="_blank">Joachim
                        Wegener</a> is a professor for Biosensors & Bioanalytics at the University of Regensburg in Germany where he
                      moved in 2008 from his previous appointment at the University of Muenster (Germany). He holds a diploma in
                      chemistry and received his PhD from the University of Muenster in 1998. His research interests are focussed on
                      the development of non-invasive whole-cell biosensors that can be applied to follow the behaviour of mammalian
                      cells in vitro. As the analysis of living systems is a complex task, Wegener’s research aims to bring together
                      several sensoric principles in one device (multi-parametric sensing) so that more than one parameter can be
                      recorded from a given cell population simultaneously. He has authored numerous research papers, book chapters and
                      review articles on this subject. Wegener teaches courses in biochemistry, cell biology, biosensors & bioanalytics
                      at the undergraduate and graduate level.
                    </p>
                    <p>
                      Joachim Wegener started to work with ECIS and related techniques in 1993 inspired by the publications of Ivar
                      Giaever and Charles Keese, the founders of Applied BioPhysics Inc. After having received his PhD, he joined the
                      Giaever lab for two years working as a postdoc with Giaever & Keese on cell adhesion, electroporation and cell
                      wounding - all based on the ECIS technology. Since this time he has strong interest in modeling and simulating
                      the electrical properties of living animal cells on conducting surfaces and developing new applications for the
                      ECIS technology.
                    </p>
                  </div>
                </div>
              </div><!-- /advisory-->

              <div class="tab-pane" id="press" role="tabpanel">
                <h2>Press Releases</h2>
                <hr class="mt-2 mb-4">

                <div class="row">
                
                  <div class="col-md-6 mb-4">
                    <h3 class="pressTitle">June 2014</h3>
                    <hr class="mt-0">
                    <p><a class="text-dark link" href="public/pdf/TEERMeasurement2014.pdf" target="_blank">TEER measurement under
                        Dynamic Flow Conditions</a></p>
                  </div>
                
                  <div class="col-md-6 mb-4">
                    <h3 class="pressTitle">October 2013</h3>
                    <hr class="mt-0">
                    <p><a class="text-dark link" href="public/pdf/transFilterArray.pdf" target="_blank">Continuous measurement of cell
                        monolayer barrier function (TEER) using membrane inserts in multiple wells</a></p>
                  </div>
                
                  <div class="col-md-6 mb-4">
                    <h3 class="pressTitle">March 2013</h3>
                    <hr class="mt-0">
                    <p><a class="text-dark link" href="public/pdf/WenJiangBookPressRelease.pdf" target="_blank">Electric Cell-Substrate
                        Impedance Sensing and Cancer Metastasis Book</a></p>
                  </div>
                
                  <div class="col-md-6 mb-4">
                    <h3 class="pressTitle">November 2011</h3>
                    <hr class="mt-0">
                    <p><a class="text-dark link" href="public/pdf/Stemnion.pdf" target="_blank">Stemnion uses ECIS to Measure Placental
                        Stem Cells</a></p>
                  </div>
                
                  <div class="col-md-6 mb-4">
                    <h3 class="pressTitle">June 2011</h3>
                    <hr class="mt-0">
                    <p><a class="text-dark link" href="public/pdf/RegensburgMtg.pdf" target="_blank">1st Conference on Impedance-Based
                        Cellular Assays</a></p>
                  </div>
                
                  <div class="col-md-6 mb-4">
                    <h3 class="pressTitle">June 2011</h3>
                    <hr class="mt-0">
                    <p><a class="text-dark link" href="public/pdf/NoblePrize.pdf" target="_blank">How to Win a Nobel Prize</a></p>
                  </div>
                
                  <div class="col-md-6 mb-4">
                    <h3 class="pressTitle">June 2011</h3>
                    <hr class="mt-0">
                    <p><a class="text-dark link" href="public/pdf/StageArrayHolder.pdf" target="_blank">Microscope Stage Holder for
                        ECIS Biosensor Arrays</a></p>
                  </div>
                
                  <div class="col-md-6 mb-4">
                    <h3 class="pressTitle">February 2011</h3>
                    <hr class="mt-0">
                    <p><a class="text-dark link" href="public/pdf/CellProliferationRelease.pdf" target="_blank">Automated Cell
                        Proliferation Impedance-Based Assay</a></p>
                  </div>
                
                  <div class="col-md-6 mb-4">
                    <h3 class="pressTitle">September 2010</h3>
                    <hr class="mt-0">
                    <p><a class="text-dark link" href="public/pdf/ElectricFencePress.pdf" target="_blank">Electric Fence Array - Method
                        and Apparatus for Facilitating Evaluating Migration of Cells in Vitro</a></p>
                  </div>
                
                  <div class="col-md-6 mb-4">
                    <h3 class="pressTitle">April 2010</h3>
                    <hr class="mt-0">
                    <p><a class="text-dark link" href="public/pdf/LineWoundingPress.pdf" target="_blank">Line Wounding Array -
                        Automated Line Electrode Cell Migration Assay</a></p>
                  </div>
                
                </div>
              </div><!-- /press -->

              <div class="tab-pane" id="pastEvents" role="tabpanel">
                <h2>Past Events</h2>
                <hr class="mt-2 mb-4">

                <div class="row text-center">

                  <div class="col-lg-4 mb-4">
                    <a class="text-dark link" data-toggle="modal" data-target="#lifeScienceModal">
                      <div class="card">
                        <img class="card-img-top" src="public/img/lifeScienceExhibits.jpg" alt="Life Science Logo">
                        <div class="card-body">
                          <p class="card-text">Life Science Exhibits Research Supplier Product Show</p>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="col-lg-4 mb-4">
                    <a class="text-dark link" data-toggle="modal" data-target="#customerTrainingModal">
                      <div class="card">
                        <img class="card-img-top" src="public/img/Prof-Chu-Ming-Lo-011216sm.jpg" alt="Prof Chu Ming Lo">
                        <div class="card-body">
                          <p class="card-text">Customer Training Course at Shanghai Technical University</p>
                        </div>
                      </div>
                    </a>
                  </div>

                  <div class="col-lg-4 mb-4">
                    <a class="text-dark link" data-toggle="modal" data-target="#ml2sModal">
                      <div class="card">
                        <img class="card-img-top" src="public/img/ml2s.jpg" alt="ML2S Logo">
                        <div class="card-body">
                          <p class="card-text">Modeling Life in the Lab Symposium</p>
                        </div>
                      </div>
                    </a>
                  </div>

                </div><!-- /row -->
              </div><!-- /events -->

              <div class="tab-pane" id="comics" role="tabpanel">
                <h2>ECIS Comics!</h2>
                <hr class="mt-2 mb-4">

                <div class="row">
                  <div class="col-lg-10 mx-auto">
                    <img class="img-fluid comic" src="public/img/ECIS-Halloween-2017-Comic.jpg" alt="ECIS Comic October 2017">
                    <img class="img-fluid comic" src="public/img/ECIS-Comic-March-2017-Final.jpg" alt="ECIS Comic March 2017">
                    <img class="img-fluid comic" src="public/img/ECIS-Comic-Oct-2016-Final.jpg" alt="ECIS Comic October 2016">
                    <img class="img-fluid comic" src="public/img/Comic-Feb-2016-Final.jpg" alt="ECIS Comic February 2016">
                    <img class="img-fluid comic" src="public/img/ECIS-Comic-Feb-2015.jpg" alt="ECIS Comic February 2015">
                    <img class="img-fluid comic" src="public/img/ECIS-Comic-Oct-2014.jpg" alt="ECIS Comic October 2014">
                    <img class="img-fluid comic" src="public/img/Comic-Feb-2014.jpg" alt="ECIS Comic February 2014">
                    <img class="img-fluid comic" src="public/img/Comic-March-2013.jpg" alt="ECIS Comic March 2013">
                    <img class="img-fluid comic" src="public/img/Comic-November-2012.jpg" alt="ECIS Comic November 2012">
                    <img class="img-fluid comic" src="public/img/ComicMay2012.png" alt="ECIS Comic May 2012">
                    <img class="img-fluid comic" src="public/img/ComicJuly2011.jpg" alt="ECIS Comic July 2011">
                    <img class="img-fluid comic" src="public/img/ComicApril2011.jpg" alt="ECIS Comic April 2011">
                    <img class="img-fluid comic" src="public/img/ComicDec2010.jpg" alt="ECIS Comic December 2010">
                    <img class="img-fluid comic" src="public/img/moleculeZoo.jpg" alt="ECIS Comic April 2010">
                    <img class="img-fluid comic" src="public/img/ComicMoreEcisTalks.jpg" alt="ECIS Comic January 2010">
                </div>
              </div><!-- /comics -->
              
              
            </div><!-- /nav-tabContent -->
          </div><!-- /col-md-9 -->

        </div><!-- /row -->

      </div><!-- /container -->
    </section>


    <!-- Modals -->

    <!-- Life Science Modal -->
    <div class="modal fade" id="lifeScienceModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Life Science Exhibits Research Supplier Product Show</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <a href="http://www.lifescienceexhibits.com/showinfo" target=_blank">
              <img class="img-fluid" src="public/img/productShow-Nov1-2017.jpg" alt="Life Science Product Show">
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Customer Training Modal -->
    <div class="modal fade" id="customerTrainingModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Customer Training Course at Shanghai Technical University</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <p>
              Professor Chu Ming Lo of Yang Ming University of Taiwan leading a session on ECIS Theory during a customer training
              course at Shanghai Technical University
            </p>
            <p>
              The ECIS training course was given in cooperation between Dakewe and Sunpoint and allowed for ECIS training in Chinese.
              ECIS training courses have taken place in Troy, NY, Munich, Germany, Taipei, Taiwan and most recently Shanghai, China.
              For inquiries as to the next ECIS training course please contact Applied BioPhysics or the distributor nearest you.
            </p>
            <img class="img-fluid py-3" src="public/img/Prof-Chu-Ming-Lo-011216.jpg" alt="Prof Chu Ming Lo">
          </div>
        </div>
      </div>
    </div>

    <!-- ML2S Modal -->
    <div class="modal fade" id="ml2sModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modeling Life in the Lab Symposium</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body text-center">
            <img class="img-fluid" src="public/img/modelingLife2015.jpg" alt="Modeling Life">
          </div>
        </div>
      </div>
    </div>

    
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
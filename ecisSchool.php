<?php
  $title = "ECIS School - Applied BioPhysics";
  $metaDesc = "Applied BioPhysics offers a two day in-depth training course on electric cell-substrate impedance sensing
  (ECIS) theory taught by Dr. Charles Keese.";
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
    </div>
  </section><!-- /schoolHeading -->

  <section id="schoolContent" class="py-4 mb-5">
    <div class="container text-center text-md-left">

      <p class="schoolIntro mb-5">
        Applied BioPhysics offers an in-depth training course on electric cell-substrate impedance sensing (ECIS)
        theory.
      </p>

      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid mb-4 mb-lg-0 border" src="public/img/schoolKeese.jpg" alt="Dr. Keese Teaching">
        </div>
        <div class="col-lg-6">
          <p class="nextClass">Next training class: November 3-4, 2022</p>
          <p>
            The course, taught by Dr. Charles Keese, provides the students with the knowledge and tools on how to apply
            ECIS
            theory
            in cellular research and how to properly operate the ECIS systems to further enhance potential publication
            opportunities.
          </p>

          <p>
            Applied BioPhysics will also provide an opportunity to get familiar with our area by arranging lunch and
            dinner at
            local
            eateries for the duration of your stay. Please contact us for further details.
          </p>

          <p><a href="/public/pdf/schoolAgenda.pdf" class="link text-dark" target="_blank">Download ECIS School
              Agenda</a></p>
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
      <p class="fees">*Fees include two nights of lodging, transportation to and from the hotel to Applied Biophysics
        facility, lunch on both
        days, and dinner on the first evening</p>

      <h4 class="mt-5 mb-4 secondary-title">ECIS School Past Graduates</h4>


      <div class="row text-center">
        <div class="col-lg-4 col-md-6 mb-4">
          <a class="text-dark gradLink" data-toggle="modal" data-target="#ecisSchoolSept2019">
            <div class="card">
              <img src="public/img/students-sep2019.jpg" class="card-img-top" alt="ECIS Students September 2019 ">
              <div class="card-body">
                <h5 class="card-title mb-0">September 2019</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <a class="text-dark gradLink" data-toggle="modal" data-target="#ecisSchoolMay2019">
            <div class="card">
              <img src="public/img/students-may2019.jpg" class="card-img-top" alt="ECIS Students May 2019">
              <div class="card-body">
                <h5 class="card-title mb-0">May 2019</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <a class="text-dark gradLink" data-toggle="modal" data-target="#ecisSchoolAug2018">
            <div class="card">
              <img src="public/img/students-august2018.jpg" class="card-img-top" alt="ECIS Students August 2018">
              <div class="card-body">
                <h5 class="card-title mb-0">August 2018</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <a class="text-dark gradLink" data-toggle="modal" data-target="#ecisSchoolMay2018">
            <div class="card">
              <img src="public/img/students-may2018.jpg" class="card-img-top" alt="ECIS Students May 2018">
              <div class="card-body">
                <h5 class="card-title mb-0">May 2018</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <a class="text-dark gradLink" data-toggle="modal" data-target="#ecisSchoolAug2017">
            <div class="card">
              <img src="public/img/students-august2017.jpg" class="card-img-top" alt="ECIS Students August 2017">
              <div class="card-body">
                <h5 class="card-title mb-0">August 2017</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <a class="text-dark gradLink" data-toggle="modal" data-target="#ecisSchoolMarch2017">
            <div class="card">
              <img src="public/img/students-march2017.jpg" class="card-img-top" alt="ECIS Students March 2017">
              <div class="card-body">
                <h5 class="card-title mb-0">March 2017</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <a class="text-dark gradLink" data-toggle="modal" data-target="#ecisSchoolOctober2016">
            <div class="card">
              <img src="public/img/students-oct2016.jpg" class="card-img-top" alt="ECIS Students October 2016">
              <div class="card-body">
                <h5 class="card-title mb-0">October 2016</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <a class="text-dark gradLink" data-toggle="modal" data-target="#ecisSchoolJune2016">
            <div class="card">
              <img src="public/img/students-june2016.jpg" class="card-img-top" alt="ECIS Students June 2016">
              <div class="card-body">
                <h5 class="card-title mb-0">June 2016</h5>
              </div>
            </div>
          </a>
        </div>
      </div>

    </div>
  </section><!-- /schoolContent -->

  <!-- Modals -->

  <!-- February 2020 -->
  <div class="modal fade" id="ecisSchoolSept2019" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">ECIS School Graduates - September 2019</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <figure class="figure">
            <img src="public/img/students-sep2019.jpg" class="figure-img w-100" alt="ECIS Students September 2019">
            <figcaption class="figure-caption">
              From left to right: Charles Keese - Applied BioPhysics, Catherine Toniatti-Yanulavich - Applied
              BioPhysics, Derek Beahm, PhD - SUNY at Buffalo State, Erin Troy - SUNY at Buffalo State, Ryan Makin -
              University of Virginia
            </figcaption>
          </figure>
          <div class="grad-text my-2">
            <p class="mb-0">Derek Beahm, PhD</p>
            <p class="grad-desc-title">SUNY at Buffalo State</p>
            <p class="grad-desc">Research Focus: Investigating membrane, intercellular, and transepithelial transport
              phenomenon and the applications and development of label-free biosensing instrumentation.</p>
            <hr>
            <p class="mb-0">Erin Troy - Graduate Student</p>
            <p class="grad-desc-title">SUNY at Buffalo State</p>
            <p class="grad-desc">Research Focus: Investigating the effects of curcumin on the physiological properties
              of normal and transformed cell types.</p>
            <hr>
            <p class="mb-0">Ryan Makin - Graduate Student </p>
            <p class="grad-desc-title">University of Virginia</p>
            <p class="grad-desc">Research Pathological ocular neovascularization in the context of age-related macular
              degeneration (AMD). The Gelfand Lab is interested in the role of the DICER ribonuclease in pathological
              angiogenesis, and we are currently utilizing ECIS to study the effects of SINE RNA on endothelial adherens
              junction degradation and barrier function. </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- May 2019 -->
  <div class="modal fade" id="ecisSchoolMay2019" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">ECIS School Graduates - May 2019</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <figure class="figure">
            <img src="public/img/students-may2019.jpg" class="figure-img w-100" alt="ECIS Students May 2019">
            <figcaption class="figure-caption">
              From left to right: Christian Dehnert - Applied BioPhysics, Charles Keese - Applied
              BioPhysics, Tetyana Buzhdygan PhD - Temple University, Slava Rom PhD - Temple University, Ivar Giaever -
              Applied BioPhysics
            </figcaption>
          </figure>
          <div class="grad-text my-2">
            <p class="mb-0">Slava Rom, PhD</p>
            <p class="grad-desc-title">Assistant Professor - Temple University</p>
            <p class="grad-desc">Research Focus: Dr. Rom’s research focuses on microRNA biology and their role in
              blood-brain barrier dysfunction during ischemia-reperfusion (stroke), as well as on the Interactions
              between leukocytes and endothelium.</p>
            <hr>
            <p class="mb-0">Tetyana Buzhdygan, PhD</p>
            <p class="grad-desc-title">Researcher- Temple University</p>
            <p class="grad-desc">Research Focus: The goal of Dr. Buzhdygan’s research is to shed light on the
              neurobiology of novel designer drugs in terms of their effects on neuroinflammation and blood-brain
              barrier damage.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- August 2018 -->
  <div class="modal fade" id="ecisSchoolAug2018" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">ECIS School Graduates - August 2018</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <figure class="figure">
            <img src="public/img/students-august2018.jpg" class="figure-img w-100" alt="ECIS Students August 2018">
            <figcaption class="figure-caption">
              From left to right: Dennis Grab PhD - Uniformed Services University of the Health Sciences, Ivar Giaever -
              Applied BioPhysics, Charles Keese - Applied BioPhysics, Jessica Neder - University of Maryland School of
              Medicine, Lili Gu - University of Maryland School of Medicine, Lin Zou PhD - University of Maryland School
              of Medicine
            </figcaption>
          </figure>
          <div class="grad-text my-2">
            <p class="mb-0">Jessica Neder</p>
            <p class="grad-desc-title">Research Specialist - University of Maryland School of Medicine</p>
            <hr>
            <p class="mb-0">Lin Zou MD, PhD</p>
            <p class="grad-desc-title">University of Maryland School of Medicine</p>
            <p class="grad-desc">Research Focus: Determining the role of extracellular RNA in lung injury during sepsis.
            </p>
            <hr>
            <p class="mb-0">Lili Gu</p>
            <p class="grad-desc-title">Reseacher - University of Maryland School of Medicine</p>
            <hr>
            <p class="mb-0">Dennis Grab PhD</p>
            <p class="grad-desc-title">Uniformed Services University of the Health Sciences</p>
            <p class="grad-desc">Research Focus: Microbes and microvascular endothelial cell (MEC) barriers.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- May 2018 -->
  <div class="modal fade" id="ecisSchoolMay2018" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">ECIS School Graduates - May 2018</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <figure class="figure">
            <img src="public/img/students-may2018.jpg" class="figure-img w-100" alt="ECIS Students May 2018">
            <figcaption class="figure-caption">
              From left to right: Ivar Giaever - Applied BioPhysics, Susmita Bhattarai PhD - Louisiana State University
              Health Sciences Center, Ann Marie DiGeorge Foushee - Naval Medical Research Unit, Kirstin Morris PhD -
              Naval Medical Research Unit, Joshua Sumislawski MD - University of Colorado, Erica Beatman - National
              Jewish Health, Kelly Schweitzer - National Jewish Health, Fang Niu - University of Nebraska Medical
              Center, Manikandan Panchatcharam PhD - Louisiana State University Health Sciences Center, Charles Keese -
              Applied BioPhysics
            </figcaption>
          </figure>
          <div class="grad-text my-2">
            <p class="mb-0">Manikandan Panchatcharam, PhD</p>
            <p class="grad-desc-title">Louisiana State University Health Sciences Center</p>
            <p class="grad-desc">Research Focus: Research focuses on lipids which play a major factor in blocking blood
              vessels leading to stroke and heart attack.</p>
            <hr>
            <p class="mb-0">Susmita Bhattarai PhD</p>
            <p class="grad-desc-title">Student - Louisiana State University Health Sciences Center</p>
            <p class="grad-desc">Research Focus: Cardiovascular disease model focusing on the vascular functionality and
              muscular function.</p>
            <hr>
            <p class="mb-0">Kirstin Morris PhD</p>
            <p class="grad-desc-title">Student at UTSA-UTHSCSA, Orise Research Fellow, NAMRU-SA, Naval Medical Research
              Unit</p>
            <p class="grad-desc">Research Focus: Developing an electrospun collagen based 3D scaffold that would improve
              bone regeneration after tooth extraction.</p>
            <hr>
            <p class="mb-0">Ann Marie DiGeorge Foushee</p>
            <p class="grad-desc-title">Research Technician Naval Medical Research Unit</p>
            <p class="grad-desc">Research Focus: Conduct research to improve operational readiness and safety of DOD
              personnel via development of novel wound dressings that address prevention of infection as well as
              promotion of wound healing.</p>
            <hr>
            <p class="mb-0">Joshua Sumislawski, MD</p>
            <p class="grad-desc-title">Resident Physician - University of Colorado</p>
            <hr>
            <p class="mb-0">Kelly Schweitzer</p>
            <p class="grad-desc-title">Assistant Professor - National Jewish Health</p>
            <p class="grad-desc">Research Focus: Investigate mechanisms underlying cigarette smoke induced lung injury
              and to better understand lung alveolar cell death and recovery from various insults both in vitro and in
              vivo.</p>
            <hr>
            <p class="mb-0">Erica Beatman</p>
            <p class="grad-desc-title">Senior Research Technician - National Jewish Health</p>
            <p class="grad-desc">Research Focus: Investigating how to ameliorate lung damage induced by chronic
              cigarette smoke exposure by targeting specific lipids and enzymes associated with protection against the
              development of COPD and emphysema.</p>
            <hr>
            <p class="mb-0">Fang Niu</p>
            <p class="grad-desc-title">University of Nebraska Medical Center</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- August 2017 -->
  <div class="modal fade" id="ecisSchoolAug2017" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">ECIS School Graduates - August 2017</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <figure class="figure">
            <img src="public/img/students-august2017.jpg" class="figure-img w-100" alt="ECIS Students August 2017">
            <figcaption class="figure-caption">
              From left to right: Gary McCollum PhD - Vanderbilt University, Tillie Hackett - University of British
              Columbia, G. Cristina Brailoiu MD - Thomas Jefferson University, May Al-Fouadi - University of British
              Columbia, Alok Bhushan - Thomas Jefferson University (not shown in image)
            </figcaption>
          </figure>
          <div class="grad-text my-2">
            <p class="mb-0">Gary W. McCollum, PhD</p>
            <p class="grad-desc-title">Vanderbilt Eye Institute, Vanderbilt University</p>
            <p class="grad-desc">Research Focus: Our lab's research efforts are focused on developing therapies against
              retinal inflammatory and vasoproliferative events occurring in diabetic retinopathy (DR), using in vitro
              cell culture models and animal models of diabetes. Specifically, in studies related to retinal
              inflammation, we test potential therapies against diabetes-induced compromise of the blood retinal barrier
              and leukostasis; for those related to vasoproliferation, we focus on the therapeutic blockade of
              endothelial cell migration, proliferation and tube formation.</p>
            <hr>
            <p class="mb-0">G. Cristina Brailoiu, MD</p>
            <p class="grad-desc-title">Jefferson College of Pharmacy, Thomas Jefferson University</p>
            <p class="grad-desc">Research Focus: Dr. Brailoiu is interested in GPCR signaling and cardiovascular
              regulation. She is planning to use ECIS to characterize the changes in barrier function of brain
              microvascular endothelial cells in response to GPCR agonists.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- March 2017 -->
  <div class="modal fade" id="ecisSchoolMarch2017" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">ECIS School Graduates - March 2017</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <figure class="figure">
            <img src="public/img/students-march2017.jpg" class="figure-img w-100" alt="ECIS Students March 2017">
            <figcaption class="figure-caption">
              From left to right: Ying Lui - University of Pennsylvania, Koreana Pak - University of Pennsylvania,
              Nektarios Barabutis MSc, PhD - Old Dominion University, Raji Rajesh Lenin PhD - University of Tennessee
              Health Science Centre, Bethany Young - Virginia Commonwealth University, Gaelle Mercenne - Recursion
              Pharmaceuticals
            </figcaption>
          </figure>
          <div class="grad-text my-2">
            <p class="mb-0">Nektarios Barabutis, MSc, PhD</p>
            <p class="grad-desc-title">Frank Reidy Research Center for Bioelectrics, Old Dominion University</p>
            <p class="grad-desc">Research Focus: Dr. Nektarios Barabutis is interested on the mechanisms which govern
              the regulation of vascular permeability in lung tissues. He has recently introduced the protective role of
              p53 on the LPS induced hyperpermeability and he is currently focused on the intracellular cascades which
              mediate that effect.</p>
            <hr>
            <p class="mb-0">Raji Rajesh Lenin, PhD</p>
            <p class="grad-desc-title">Gangaraju lab, Department of Ophthalmology, University of Tennessee Health
              Science Centre</p>
            <p class="grad-desc">Research Focus: Effect of hyperglycemia and TNF-α in ER stress induced tight junction
              alterations and vascular dysfunction in Human Retinal Endothelial cells. ECIS will be applied to
              understand the barrier functional changes in endothelial cells during diabetes.</p>
            <hr>
            <p class="mb-0">Koreana Pak</p>
            <p class="grad-desc-title">Pathology and Laboratory Medicine, University of Pennsylvania</p>
            <p class="grad-desc">Research Focus: Investigate the mechanisms underlying hypoxia-driven sarcoma
              metastasis, as well as the role of ECM in tumor cell extravasation.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- October 2016 -->
  <div class="modal fade" id="ecisSchoolOctober2016" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">ECIS School Graduates - October 2016</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <figure class="figure">
            <img src="public/img/students-oct2016.jpg" class="figure-img w-100" alt="ECIS Students October 2016">
            <figcaption class="figure-caption">
              From left to right: Christian Renken - Applied BioPhysics, Randy Strauss - Virginia Tech Carilion Research
              Institute, Matthew Pennington - Cornell University, Wei-Sheng Chen PhD - National Institute of Allergy and
              Infectious Diseases (NIAID)
            </figcaption>
          </figure>
          <div class="grad-text my-2">
            <p class="mb-0">Matthew Pennington</p>
            <p class="grad-desc-title">Baker Institute for Animal Health, Cornell University</p>
            <p class="grad-desc">Research Focus: The Van de Walle lab focuses on the creation of ex vivo model systems
              to study ocular herpesvirus pathogenesis and for the evaluation of antivirals in a more physiologically
              relevant setting. We are currently exploring ECIS as a technique to aid in these studies. Additionally, we
              have utilized ECIS to study various aspects of mesenchymal stem cell biology.</p>
            <hr>
            <p class="mb-0">Wei-Sheng Chen, PhD</p>
            <p class="grad-desc-title">National Institute of Allergy and Infectious Diseases (NIAID)</p>
            <p class="grad-desc">Research Focus: As a Postdoctoral Fellow, Dr. Chen is responsible for exploring the
              biological mechanisms of the systemic capillary leak syndrome (SCLS), an ultra-rare orphan disease that is
              characterized by acute and severe recurrent attacks associated with a rapid fall in blood pressure.
              Currently, there is no cure for SCLS and the clinical management is primarily supportive.</p>
            <hr>
            <p class="mb-0">Randy Strauss</p>
            <p class="grad-desc-title">Virginia Tech, TBMH Program - Dr. Gourdie Lab</p>
            <p class="grad-desc">Research Focus: There is a growing appreciation that the gap junction protein, Cx43,
              has both channel -dependent and -independent functions. Cx43 shares the actin-binding scaffolding protein
              Zonula Occludens 1 (ZO-1), with both calcium-dependent adhesions junctions and tight junctions. The
              commonality of ZO-1 raises the prospect of regulatory and functional cross-talk between different classes
              of intercellular junction. My current goal is to examine the effects of a Cx43 C-terminal mimetic peptide
              on barrier function.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- June2016 -->
  <div class="modal fade" id="ecisSchoolJune2016" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">ECIS School Graduates - June 2016</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <figure class="figure">
            <img src="public/img/students-june2016.jpg" class="figure-img w-100" alt="ECIS Students June 2016">
            <figcaption class="figure-caption">
              From left to right: Doug Chung PhD - UCLA, Kaushali Thakore-Shah PhD - UCLA, Christopher Turner PhD -
              University of British Columbia, Cameron Oram - University of British Columbia, Chris Barrett MD - MIT
            </figcaption>
          </figure>
          <div class="grad-text my-2">
            <p class="mb-0">Doug Chung, PhD</p>
            <p class="grad-desc-title">UCLA, The Stein Eye Institute</p>
            <p class="grad-desc">Research Focus: Affecting approximately 4% - 5% of the world population above the age
              of 40, the corneal endothelial dystrophies are a group of heritable bilateral disorders that lead to the
              visual impairment and discomfort through the development of corneal opacities and edema as a result of
              corneal endothelial cell dysfunction and/or cell loss. We are currently using ECIS to characterize corneal
              endothelial proliferation, migration, and cell barrier function in cell-based models of corneal
              endothelial dystrophies.</p>
            <hr>
            <p class="mb-0">Kaushali Thakore-Shah, PhD</p>
            <p class="grad-desc-title">UCLA</p>
            <p class="grad-desc">Research Focus: My research focus is to find ways to improve the proliferation
              potential of corneal endothelial cells so that they may be used for regenerative cell therapy.</p>
            <hr>
            <p class="mb-0">Christopher Turner, PhD</p>
            <p class="grad-desc-title">University of British Columbia, Granville Lab, International Collaboration on
              Repair Discoveries (ICORD)</p>
            <p class="grad-desc">Research Focus: The Granville lab is focused on researching the role of granzymes in
              inflammation and disease. Our goal is to expand our current knowledge in granzyme biology and their role
              in pathogenesis. We also aspire to translate this knowledge to develop novel therapeutic approaches for
              management of chronic inflammatory disorders in which granzymes are involved.</p>
            <hr>
            <p class="mb-0">Cameron Oram</p>
            <p class="grad-desc-title">University of British Columbia</p>
            <hr>
            <p class="mb-0">Chris Barrett, MD</p>
            <p class="grad-desc-title">MIT</p>
            <p class="grad-desc">Research Focus: My research focuses on the links between the inflammatory response and
              coagulation system after major traumatic injury. The goal is to develop early interventions that have both
              immediate benefits in coagulopathic trauma patients while also having additional protective effects
              further in the hospital course to prevent late deaths after major trauma (due to organ failure and
              sepsis).</p>
          </div>
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

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-108411540-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'UA-108411540-1');
  </script>

  <!-- Engagebay -->
  <script type="text/javascript">
  var EhAPI = EhAPI || {};
  EhAPI.after_load = function() {
    EhAPI.set_account('lj2ng4pb8ricu2piqdirfbrv61', 'biophysics');
    EhAPI.execute('rules');
  };
  (function(d, s, f) {
    var sc = document.createElement(s);
    sc.type = 'text/javascript';
    sc.async = true;
    sc.src = f;
    var m = document.getElementsByTagName(s)[0];
    m.parentNode.insertBefore(sc, m);
  })(document, 'script', '//d2p078bqz5urf7.cloudfront.net/jsapi/ehform.js');
  </script>

</body>

</html>
<?php
  $title = "Tradeshows and Events - Applied BioPhysics";
  $metaDesc = "Tradeshows and events schedule. Applied BioPhysics will have demonstrations and literature at the
  following tradeshows and events for the current year.";
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

  <section id="tradeshowsHeading" class="text-center text-md-left">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="mb-0">Tradeshows and Events</h1>
          <hr class="mt-0">
        </div>
      </div>
    </div>
  </section><!-- /tradeshowsHeading -->

  <section id="tradeshowsContent" class="py-4 mb-5">
    <div class="container text-center text-md-left">

      <div class="tradeshow-text">
        <p class="tradeshowIntro mb-1">
          What better way to learn more about the power of ECIS than joining us at scientific events around the world!
        </p>

        <p>Below are a list of upcoming shows that Applied BioPhysics will attend in 2022:</p>
      </div>

      <h5 class="mt-3 no-shows">No tradeshows currently scheduled. Please check back soon.</h5>

      <!-- <div class="tradeshow mb-5">
        <h4 class="date">February 3-7, 2024</h4>
        <div class="row">
          <div class="col-lg-4">
            <img class="img-fluid mb-3 mb-lg-0" src="public/img/slasMeeting2024.png" alt="SLAS Banner">
          </div>
          <div class="col-lg-8">
            <a href="https://www.slas.org/events-calendar/slas2024-international-conference-and-exhibition" class="tradeshow-link" target="_blank">SLAS 2024 International Conference and Exhibition - Boston, MA</a>
            <p class="mb-0 mt-2">Join the global life sciences and technology community for scientific sessions in nine tracks delivered by a diverse group of scientists, academic researchers and industry professionals from around the world. </p>
          </div>
        </div>
      </div> -->

      <!-- <div class="tradeshow mb-5">
        <h4 class="date">April 14-19, 2023</h4>
        <div class="row">
          <div class="col-lg-4">
            <img class="img-fluid mb-3 mb-lg-0" src="public/img/aacrMeeting2023.png" alt="AACR Banner">
          </div>
          <div class="col-lg-8">
            <a href="https://www.aacr.org/meeting/aacr-annual-meeting-2023/" class="tradeshow-link" target="_blank">AACR Annual Meeting 2023 - Orlando, FL</a>
            <p class="mb-0 mt-2">The AACR Annual Meeting program covers the latest discoveries across the spectrum of cancer research—from population science and prevention; to cancer biology, translational, and clinical studies; to survivorship and advocacy—and highlights the work of the best minds in research and medicine from institutions all over the world.</p>
          </div>
        </div>
      </div> -->

      <!-- <div class="tradeshow mb-5">
        <h4 class="date">October 14-16, 2022</h4>
        <div class="row">
          <div class="col-lg-4">
            <img class="img-fluid mb-3 mb-lg-0" src="public/img/ivbm2022.png" alt="IVBM Banner">
          </div>
          <div class="col-lg-8">
            <a href="https://www.ivbm2022.org" class="tradeshow-link" target="_blank">22nd International Vascular Biology Meeting (IVBM) - Oakland, CA</a>
            <p class="mb-0 mt-2">IVBM 2022 will feature an exciting scientific program with renowned speakers in the field, and will provide various opportunities for participants to build collaborative networks. The meeting will be composed of plenary and concurrent sessions reflecting diverse research topics in vascular biology from basic to translational level.</p>
          </div>
        </div>
      </div> -->

      <!-- <div class="tradeshow mb-5">
        <h4 class="date">October 25-29, 2021</h4>
        <div class="row">
          <div class="col-lg-4">
            <img class="img-fluid mb-3 mb-lg-0" src="public/img/navboMeeting2021.png" alt="NAVBO Banner">
          </div>
          <div class="col-lg-8">
            <a href="https://www.navbo.org/events/vb2021" class="tradeshow-link" target="_blank">Vascular Biology 2021 - Virtual Event</a>
            <p class="mb-0 mt-2">The mission of NAVBO is to promote the study of vascular biology. The purpose of the
              society is to provide a forum whereby members disseminate and share knowledge related to the scientific
              field of vascular biology, to ensure the translation of knowledge from basic science to clinical practice.
            </p>
          </div>
        </div>
      </div> -->

      <!-- <div class="tradeshow mb-5">
        <h4 class="date">March, 2021</h4>
        <div class="row">
          <div class="col-lg-4">
            <img class="img-fluid mb-3 mb-lg-0" src="public/img/SOT2021.png" alt="SOT Banner">
          </div>
          <div class="col-lg-8">
            <a href="https://www.toxicology.org/events/am/AM2021/index.asp" class="tradeshow-link" target="_blank">2021 SOT Annual Meeting and ToxExpo - Virtual Event</a>
            <p class="mb-0 mt-2">Nearly 60 Scientific Sessions will be presented as part of the Virtual 2021 SOT Annual Meeting, alongside 14 Continuing Education courses. Occurring every year as part of the SOT Annual Meeting, the ToxExpo features companies and organizations that support toxicologists and the toxicology community. Exhibitors include research organizations, government agencies, laboratory suppliers, drug developers, consulting firms, and academic institutions.</p>
          </div>
        </div>
      </div>

      <hr class="my-5">

      <div class="tradeshow mb-5">
        <h4 class="date">April 27-30, 2021</h4>
        <div class="row">
          <div class="col-lg-4">
            <img class="img-fluid mb-3 mb-lg-0" src="public/img/EBMeeting2021.png" alt="Experimental Biology Banner">
          </div>
          <div class="col-lg-8">
            <a href="https://experimentalbiology.org/2021/Home.aspx" class="tradeshow-link" target="_blank">Experimental Biology - Virtual Event</a>
            <p class="mb-0 mt-2">Experimental Biology 2021 will deliver an experience unlike others! Your virtual experience will be filled with lectures, workshops, symposia, posters presentations, exhibits and the opportunity to make connections with global scientists. Just think, with one click you’ll be able to build new relationships with experts from academic institutions, government agencies, nonprofit organizations and industry.</p>
          </div>
        </div>
      </div>

      <hr class="my-5">

      <div class="tradeshow mb-5">
        <h4 class="date">September 8-11, 2019</h4>
        <div class="row">
          <div class="col-lg-4">
            <img class="img-fluid mb-3 mb-lg-0" src="public/img/eurotoxMeeting.png" alt="Eurotox Banner">
          </div>
          <div class="col-lg-8">
            <a href="http://eurotox-congress.com/2019" class="tradeshow-link" target="_blank">EUROTOX 2019 - Helsinki,
              Finland</a>
            <p class="mb-0 mt-2">EUROTOX is a Federation of more than 40 European societies of toxicology representing
              7,500 European toxicologists. The annual congresses rotate from one European country to another
              providing diversity to the venues and contents of the congress. The number of participants is
              approximately 1,500.</p>
          </div>
        </div>
      </div> 

      <div class="tradeshow mb-5">
        <h4 class="date">April 24-29, 2020</h4>
        <div class="row">
          <div class="col-lg-4">
            <img class="img-fluid mb-3 mb-lg-0" src="public/img/aacrMeeting2020.png" alt="AACR Banner">
          </div>
          <div class="col-lg-8">
            <a href="https://aacr-2020.com/?msclkid=4db7c906f10c1b22c59895e2c45124f7" class="tradeshow-link" target="_blank">AACR Annual Meeting 2020 - San Diego, CA</a>
            <p class="mb-0 mt-2">The AACR Annual Meeting program covers the latest discoveries across the spectrum of
              cancer research—from population science and prevention; to cancer biology, translational, and clinical
              studies; to survivorship and advocacy—and highlights the work of the best minds in research and medicine
              from institutions all over the world.</p>
          </div>
        </div>
      </div>

      <hr class="my-5">

      <div class="tradeshow mb-5">
        <h4 class="date">December 2-16, 2020</h4>
        <div class="row">
          <div class="col-lg-4">
            <img class="img-fluid mb-3 mb-lg-0" src="public/img/ascb-emboMeeting2020.png" alt="ASCB Banner">
          </div>
          <div class="col-lg-8">
            <a href="https://www.ascb.org/cellbio2020" class="tradeshow-link" target="_blank">Cell Bio Virtual 2020</a>
            <p class="mb-0 mt-2">Cell Bio 2020 Virtual-an Online ASCB|EMBO Meeting offers every attendee the opportunity to create their own content and topics to present at the meeting. Our community encompasses researchers from diverse backgrounds, including age, gender, race, ethnicity, geographic location, institutions, career levels, and research interests. As such, we want the meeting to represent our diverse community within our sessions, speakers, and poster presenters.</p>
          </div>
        </div>
      </div>-->

    </div>
  </section><!-- /tradeshowsContent -->

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
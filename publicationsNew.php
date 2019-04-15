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

    <section id="publicationsHeading" class="text-center text-md-left">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="mb-0">Publications</h1>
            <hr class="mt-0">
          </div>
        </div>
      </div>
    </section><!-- /publicationsHeading -->

    <section id="publicationsContent" class="py-4 mb-5">
      <div class="container text-center text-md-left">

        <div class="row">

          <div class="col-md-3">
            <div class="list-group mb-5" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#apoptosis" role="tab" data-scroll-ignore>Apoptosis</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#attachment" role="tab" data-scroll-ignore>Attachment</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#barrierFunction" role="tab" data-scroll-ignore>Barrier Function</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#biofilms" role="tab" data-scroll-ignore>Biofilms</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#bloodBrainBarrier" role="tab" data-scroll-ignore>Blood Brain Barrier</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#calciumSignaling" role="tab" data-scroll-ignore>Calcium Signaling</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#chemotaxis" role="tab" data-scroll-ignore>Chemotaxis</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#cytotoxicity" role="tab" data-scroll-ignore>Cytotoxicity</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#differentiation" role="tab" data-scroll-ignore>Differentiation</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#electroporation" role="tab" data-scroll-ignore>Electroporation</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#flow" role="tab" data-scroll-ignore>Flow</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#growth" role="tab" data-scroll-ignore>Growth</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#inflammation" role="tab" data-scroll-ignore>Inflammation</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#invasion" role="tab" data-scroll-ignore>Invasion</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#micromotion" role="tab" data-scroll-ignore>Micromotion</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#migration" role="tab" data-scroll-ignore>Migration</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#modeling" role="tab" data-scroll-ignore>Modeling</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#review" role="tab" data-scroll-ignore>Review</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#signalTransduction" role="tab" data-scroll-ignore>Signal Transduction</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#teer" role="tab" data-scroll-ignore>TEER</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#theory" role="tab" data-scroll-ignore>Theory</a>
              <a class="list-group-item list-group-item-action" data-toggle="list" href="#woundHealing" role="tab" data-scroll-ignore>Wound Healing</a>
              <a class="list-group-item list-group-item-action submitPubBtn" href="#" role="tab" data-scroll-ignore>Submit A Publication</a>
            </div>
          </div>

          <div class="col-md-9">
            <div class="tab-content" id="nav-tabContent">

              <div class="tab-pane active" role="tabpanel">
                <h2>Recent Publications</h2>
                <hr>

                <div class="pub">
                  <p>Ameri, Hossein,Liu, Hua,Liu, Rong,Ha, Yonju,Paulucci-Holthauzen, Adriana A,Hu, Shuqun,Motamedi, Massoud,Godley, Bernard F,Tilton, Ronald G,Zhang, Wenbo (2014). "TWEAK/Fn14 pathway is a novel mediator of retinal neovascularization.." Investigative ophthalmology & visual science 55 (2) : 801-813. doi:10.1167/iovs.13-12812 - <a href="#" class="link text-dark" target="_blank">[Abstract]</a></p>
                </div>

                <hr>

                <div class="pub">
                  <p>MacKenzie, Tiffany N,Mujumdar, Nameeta,Banerjee, Sulagna,Sangwan, Veena,Sarver, Aaron,Vickers, Selwyn,Subramanian, Subbaya,Saluja, Ashok K (2013). "Triptolide induces the expression of miR-142-3p: a negative regulator of heat shock protein 70 and pancreatic cancer cell proliferation.." Molecular cancer therapeutics 12 (7) : 1266-1275. doi:10.1158/1535-7163.MCT-12-1231 - <a href="#" class="link text-dark" target="_blank">[Abstract]</a></p>
                </div>

                <hr>

                <div class="pub">
                  <p>Bosanquet, David C,Ye, Lin,Harding, Keith G,Jiang, Wen G (2012). "Role of HuR in keratinocyte migration and wound healing.." Molecular medicine reports 5 (2) : 529-534. doi:10.3892/mmr.2011.675 - <a href="#" class="link text-dark" target="_blank">[Abstract]</a></p>
                </div>

              </div><!-- /tab-pane -->

              <div class="tab-pane" id="apoptosis" role="tabpanel">
                <h2>Recent Publications in Apoptosis.</h2>
                <hr>

                <div class="pub">
                  <p>Ameri, Hossein,Liu, Hua,Liu, Rong,Ha, Yonju,Paulucci-Holthauzen, Adriana A,Hu, Shuqun,Motamedi, Massoud,Godley, Bernard F,Tilton, Ronald G,Zhang, Wenbo (2014). "TWEAK/Fn14 pathway is a novel mediator of retinal neovascularization.." Investigative ophthalmology & visual science 55 (2) : 801-813. doi:10.1167/iovs.13-12812 - <a href="#" class="link text-dark" target="_blank">[Abstract]</a></p>
                </div>

                <hr>

                <div class="pub">
                  <p>MacKenzie, Tiffany N,Mujumdar, Nameeta,Banerjee, Sulagna,Sangwan, Veena,Sarver, Aaron,Vickers, Selwyn,Subramanian, Subbaya,Saluja, Ashok K (2013). "Triptolide induces the expression of miR-142-3p: a negative regulator of heat shock protein 70 and pancreatic cancer cell proliferation.." Molecular cancer therapeutics 12 (7) : 1266-1275. doi:10.1158/1535-7163.MCT-12-1231 - <a href="#" class="link text-dark" target="_blank">[Abstract]</a></p>
                </div>

                <hr>

                <div class="pub">
                  <p>Bosanquet, David C,Ye, Lin,Harding, Keith G,Jiang, Wen G (2012). "Role of HuR in keratinocyte migration and wound healing.." Molecular medicine reports 5 (2) : 529-534. doi:10.3892/mmr.2011.675 - <a href="#" class="link text-dark" target="_blank">[Abstract]</a></p>
                </div>

              </div><!-- /tab-pane -->
              
              <div class="tab-pane" id="attachment" role="tabpanel">
                <h2>Recent Publications in Attachment.</h2>
                <hr>

                <div class="pub">
                  <p>Baumer, Yvonne,McCurdy, Sara,Weatherby, Tina M.,Mehta, Nehal N.,Halbherr, Stefan,Halbherr, Pascal,Yamazaki, Noboru,Boisvert, William A. (2017). "Hyperlipidemia-induced cholesterol crystal production by endothelial cells promotes atherogenesis." Nature Communications 8 (1) : 1129. doi:10.1038/s41467-017-01186-z - <a href="#" class="link text-dark" target="_blank">[Abstract]</a></p>
                </div>

              </div><!-- /tab-pane -->

            </div><!-- /tab-content -->
          </div><!-- /col-md-9 -->

        </div><!-- /row -->

      </div><!-- /container -->
    </section><!-- /publicationsContent -->

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
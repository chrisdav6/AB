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

    <!-- map section -->
    <section id="distributorsMap"></section>
    <!-- /map section -->

    <section id="contactHeading" class="text-center text-md-left">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="mb-0">International Distributors</h1>
            <hr class="mt-0">
          </div>
      </div>
    </section><!-- /contactHeading -->

    <section id="distributorsContent" class="py-4">
      <div class="container text-center text-md-left">

        <div class="distributorsList">
            <div class="row">

              <div class="col-md-6 my-4">
                <h3>Austrailia</h3>
                <hr class="mb-4">
                <h5><a class="text-dark link" href="http://www.sdr.com.au" target="_blank">SDR Clinical Technology</a></h5>
                <address>
                  206 / 354 Eastern Valley Way<br>
                  CHATSWOOD NSW 2067<br>
                  Tel: 61-2-9882-2882<br>
                  Fax: 61-2-9882-6468<br>
                  Attn: Dr. Peter Kenny
                </address>
              </div>

              <div class="col-md-6 my-4">
                <h3>Brazil</h3>
                <hr class="mb-4">
                <h5><a class="text-dark link" href="http://bioprophecy.com" target="_blank">BIOProphecy</a></h5>
                <address>
                  Avenida Senador César Vergueiro . 505 . Sala 16<br>
                  Jardim São Luiz . Ribeirão Preto . São Paulo . 14020-500 Brasil<br>
                  Tel: +55 16 98206-8282<br>
                  Attn: Dr. Cleverson Fernandes<br>
                  <a class="text-dark link" href="mailto:cleverson@bioprophecy.com?subject=Inquiry from Applied Biophysics Website"><i class="far fa-envelope"></i> cleverson@bioprophecy.com</a>
                </address>
              </div>

              <div class="col-md-6 my-4">
                <h3>China</h3>
                <hr class="mb-4">
                <h5><a class="text-dark link" href="http://www.dakewe.net" target="_blank">Dakewe Biotech Co</a></h5>
                <address>
                  Unit B, 3/F,The 5th Building<br>
                  Tian'an Industrial Village<br>
                  Nanyou, Dengliang Rd., Nanshan Dist.,<br>
                  Shenzhen 518054 China<br>
                  Tel: 0086 755 2686 946<br>
                  Fax: 0086 755 2686 9149<br>
                  Attn: Dr. Qing Jun
                </address>
              </div>

              <div class="col-md-6 my-4">
                <h3>Czech Republic</h3>
                <hr class="mb-4">
                <h5><a class="text-dark link" href="http://www.ita-intertact.com" target="_blank">I.T.A-Intertact s.r.o</a></h5>
                <address>
                  Černokostelecká 616/143, 108 00<br>
                  Praha 10<br>
                  Czech Republic<br>
                  Tel: +420 234 760 838<br>
                  GSM: +420 601 321 094<br>
                  Attn: Lenka Kasalova
                </address>
              </div>

              <div class="col-md-6 my-4">
                <h3>Germany</h3>
                <hr class="mb-4">
                <h5><a class="text-dark link" href="http://www.ibidi.de" target="_blank">ibidi GmbH</a></h5>
                <address>
                  Am Klopferspitz 19<br>
                  D-82152 Martinsreid (Munchen)<br>
                  Tel: 49 89 5204 617391<br>
                  Fax: 49 89 5204 61759<br>
                  Attn: Dr. Ulf Radler<br>
                  <a class="text-dark link" href="mailto:uraedler@ibidi.de?subject=Inquiry from Applied Biophysics Website"><i class="far fa-envelope"></i> uraedler@ibidi.de</a>
                </address>
              </div>

              <div class="col-md-6 my-4">
                <h3>India</h3>
                <hr class="mb-4">
                <h5><a class="text-dark link" href="http://www.labmateasia.com" target="_blank">Labmate</a></h5>
                <address>
                  Biad Mehta Complex<br>
                  183 Mount Road<br>
                  Chennai, India 600 015<br>
                  Tel: 44 2220 0066<br>
                  Fax: 44 2220 0056<br>
                  Attn: S. Viswanathan<br>
                  <a class="text-dark link" href="mailto:labmate@vsnl.com?subject=Inquiry from Applied Biophysics Website"><i class="far fa-envelope"></i>
                    labmate@vsnl.com</a>
                </address>
              </div>

            </div>
        </div><!-- /distributorsList-->

      </div>
    </section><!-- /distributorsContent -->

    

    <?php include_once "includes/footer.php";?>

    <!-- Scroll to top -->
    <button class="btn btn-outline-dark" id="scrollBtn"><i class="fas fa-angle-up fa-2x"></i></button>

    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <script src="public/js/util.js"></script>
    <script src="public/js/smooth-scroll.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyByPLn0duvJmhlyjlZeB3nBVVTTL78u4ps&callback=initMap" async defer></script>
    <script src="public/js/distributorsMap.js"></script>
    <script src="public/js/scripts.js"></script>
  </body>

</html>
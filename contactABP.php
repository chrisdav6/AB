<?php
  $title = "Contact Applied Biophysics";
  $metaDesc = "Applied Biophysics, Inc. 185 Jordan Road Troy, NY 12180, 1-866-301-ECIS (3247), 518-880-6860";
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
  <section id="map">
    <!-- Using google maps embed option rather than javascript to be able to point to APB location -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1264004.5057464375!2d-74.43971885698693!3d42.61940243211835!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7df4a4401a7f6a8!2sApplied+Biophysics+Inc!5e0!3m2!1sen!2sus!4v1545401747145" style="border:0; width: 100%; height: 100%;" allowfullscreen></iframe>
  </section>
  <!-- /map section -->

  <section id="contactHeading" class="text-center text-md-left">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="mb-0">Contact Applied Biophysics</h1>
          <hr class="mt-0">
        </div>
      </div>
    </div>
  </section><!-- /contactHeading -->

  <!-- contact Section -->
  <section id="contact" class="py-4 mb-5">
    <div class="container">

      <div class="row mb-4 text-center text-md-left">
        <div class="col-md-6">
          <div class="contact-info">
            <address>
              <strong>Applied Biophysics, Inc.</strong><br>
              185 Jordan Road<br>
              Troy, NY 12180<br>
            </address>
          </div>
        </div>
        <div class="col-md-6">
          <p><a class="link text-dark" href="tel:18663013247"><i class="fas fa-phone-square" data-fa-transform="flip-h"></i> 1-866-301-ECIS (3247)</a></p>
          <p><a class="link text-dark" href="tel:5188806860"><i class="fas fa-phone-square" data-fa-transform="flip-h"></i> 518-880-6860</a></p>
          <p><i class="fas fa-fax"></i> 518-880-6865</p>
        </div>
      </div>

      <form action="contactABPProcess.php" method="post" id="corporateAPBForm">

        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="name" class="text-left">Name</label>
              <input type="text" class="form-control form-control-lg" name="name" id="name" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="institution" class="text-left">Institution</label>
              <input type="text" class="form-control form-control-lg" name="institution" id="institution" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="address" class="text-left">Address</label>
              <input type="text" class="form-control form-control-lg" name="address" id="address">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="city" class="text-left">City</label>
              <input type="text" class="form-control form-control-lg" name="city" id="city">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="state" class="text-left">State</label>
              <input type="text" class="form-control form-control-lg" name="state" id="state">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="zip" class="text-left">Zipcode</label>
              <input type="text" class="form-control form-control-lg" name="zip" id="zip">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="email" class="text-left">Email</label>
              <input type="email" class="form-control form-control-lg" name="email" id="email" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="phone" class="text-left">Phone</label>
              <input type="text" class="form-control form-control-lg" name="phone" id="phone" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="reach">How did you hear about us?</label>
              <select id="reach" name="reach" class="form-control form-control-lg">
                <option selected value="None">None</option>
                <option value="Scientific Journal">Scientific Journal</option>
                <option value="Trade Show">Trade Show</option>
                <option value="Colleague">Colleague</option>
                <option value="Scientific Publication">Scientific Publication</option>
                <option value="Print Ad">Print Ad</option>
                <option value="Own ECIS Instrument">Own ECIS Instrument</option>
              </select>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-md-6">
            <label>I would like pricing information</label>
            <div class="form-group">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pricingInfo" class="pricingInfo" value="Yes" checked>
                <label class="form-check-label">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pricingInfo" class="pricingInfo" value="No">
                <label class="form-check-label">No</label>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <label>I would like to schedule a product Demo</label>
            <div class="form-group">
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="productDemo" class="productDemo" value="Yes" checked>
                <label class="form-check-label">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="productDemo" class="productDemo" value="No">
                <label class="form-check-label">No</label>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col d-flex flex-column">
            <div class="form-group">
              <label for="techQuestions" class="text-left">I have technical questions on...</label>
              <input type="text" class="form-control form-control-lg" name="techQuestions" id="techQuestions">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control form-control-lg" name="message" id="message" rows="5"></textarea>
            </div>
            <div class="form-group d-none">
              <!--HoneyPot-->
              <input type="text" class="form-control form-control-lg" name="fax" id="fax">
            </div>

            <button id="corpContactBtn" class="btn ecisBtn btn-lg submit-btn mt-3 ml-auto">Submit</button>
            <i class="fas fa-spinner fa-2x fa-spin mt-4 ml-auto"></i>
            <!--Initially hidden in the css-->
            <span class="submitMessage text-center mt-4 mb-3 ml-auto">Thank you, your message has been sent</span>
            <!--Initially hidden in the css-->
          </div>
        </div>

      </form>

    </div>
  </section>
  <!-- /contact Section -->


  <?php include_once "includes/footer.php";?>

  <!-- Scroll to top -->
  <button class="btn btn-outline-dark" id="scrollBtn"><i class="fas fa-angle-up fa-2x"></i></button>

  <script src="public/js/jquery.min.js"></script>
  <script src="public/js/bootstrap.bundle.min.js"></script>
  <script src="public/js/util.js"></script>
  <script src="public/js/smooth-scroll.min.js"></script>
  <script src="public/js/formsHandling.js"></script>
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
</body>

</html>
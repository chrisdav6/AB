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

    <section id="ecisReferralHeading" class="text-center text-md-left">
      <div class="container">
        <div class="row">
          <div class="col">
            <h1 class="mb-0">ECIS Referral Program</h1>
            <hr class="mt-0">
          </div>
        </div>
      </div>
    </section><!-- /ecisReferralHeading -->

    <section id="ecisReferralContent" class="py-4 mb-5">
      <div class="container text-center text-md-left">

        <p class="referralIntro mb-4">
          Do you know someone among your circle of colleagues who could benefit from the ECIS<sup>®</sup> technology?
        </p>

        <p>
          Our experience is that you, the ECIS user, are the most qualified researcher to judge if a colleague could
          benefit from our ECIS technology. Should you refer a colleague who ends up purchasing an ECIS instrument, we
          will reward both you and your colleague each with $1000 credit for the purchase of ECIS arrays.
        </p>

        <p>
          We hope that you are pleased with your ECIS measurement system, and we would like to reward you for any
          referrals that
          result in new instrument sales. We simply ask that you provide us with a scientist who you believe can
          benefit from the
          ECIS technology.
        </p>

        <h4 class="mt-5 mb-4 secondary-title">Program Details</h4>

        <ul class="list-unstyled programDetails">
          <li class="indent mb-3 pl-0 pl-sm-4"><span>1. </span>You must be a current ECIS<sup>®</sup> customer</li>
          <li class="indent mb-3 pl-0 pl-sm-4"><span>2. </span>The credit will be earned upon the successful purchase
            of an instrument by the referral</li>
          <li class="indent mb-3 pl-0 pl-sm-4"><span>3. </span>You must submit the form below to be eligible or send an
            email to Catherine Toniatti, US Sales Mgr,
            <a class="link text-dark" href="mailto:ctoniatti@biophysics.com?subject=Applied Biophysics Referral Program">ctoniatti@biophysics.com</a></li>
          <li class="indent mb-3 pl-0 pl-sm-4"><span>4. </span>The credit must be used within 18 months from the date
            of the sale</li>
          <li class="indent mb-3 pl-0 pl-sm-4"><span>5. </span>Applied BioPhysics has the option to make the final
            determination of eligibility</li>
          <li class="indent mb-3 pl-0 pl-sm-4"><span>6. </span>This program is only valid in North America</li>
          <li class="indent mb-3 pl-0 pl-sm-4"><span>7. </span>The referral should be notified of the program before
            submitting their name to Applied BioPhysics</li>
          <li class="indent mb-3 pl-0 pl-sm-4"><span>8. </span>The referral should be notified that someone from
            Applied Biophysics will contact them (Catherine Toniatti, US sales
            Mgr, <a class="link text-dark" href="mailto:ctoniatti@biophysics.com?subject=Applied Biophysics Referral Program">ctoniatti@biophysics.com</a>)</li>
        </ul>

        <h4 class="mt-5 mb-4 secondary-title">Sample Letter</h4>

        <p>Dear Colleague,</p>

        <p>
          I currently use an impedance analyzer from Applied Biophyiscs to measure (application ECIS is used for). I
          would like to recommend that you also consider this technology for your research. If you decide to ultimately
          purchase an instrument, Applied Biophysics will support our lab with some additional ECIS arrays through
          their referral program (link to program). Should you purchase, you would also receive a credit for ECIS
          arrays. Would it be acceptable to provide your information to Applied Biophysics? If so, they will contact
          you to provide more information.
        </p>

        <p>Sincerely,<br>
          ECIS User
        </p>

        <h4 class="mt-5 mb-4 secondary-title">FAQ's</h4>

        <ul class="list-unstyled programFAQs">
          <li class="indent mb-3 pl-0 pl-sm-4">What if the referral leaves the institution but they still purchase?<span class="text-success">The credit will still be applied</span></li>
          <li class="indent mb-3 pl-0 pl-sm-4">What if you move to another institution?<span class="text-success">The credit will be applied to your new institution</span></li>
          <li class="indent mb-3 pl-0 pl-sm-4">Is there a limit to the number of referrals?<span class="text-success">No</span></li>
          <li class="indent mb-3 pl-0 pl-sm-4">Is there a time limit on a referral?<span class="text-success">No</span></li>
          <li class="indent mb-3 pl-0 pl-sm-4">Is there a time limit to using the $1000 array credit?<span class="text-success">18 months</span></li>
        </ul>

        <h4 class="mt-5 mb-4 secondary-title">Referral Form</h4>

        <form action="referralProcess.php" method="post" id="referralForm">

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
                <label for="email" class="text-left">Email</label>
                <input type="email" class="form-control form-control-lg" name="email" id="email" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="model" class="text-left">Instrument Model / Serial Number</label>
                <input type="text" class="form-control form-control-lg" name="model" id="model" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="refName" class="text-left">Referral Name</label>
                <input type="text" class="form-control form-control-lg" name="refName" id="refName" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="refInst" class="text-left">Referral Institution</label>
                <input type="text" class="form-control form-control-lg" name="refInst" id="refInst" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="refemail" class="text-left">Referral Email</label>
                <input type="email" class="form-control form-control-lg" name="refemail" id="refemail" required>
              </div>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col">
              <label>Has a message been sent from you to the referral indicating we will contact them with further
                information?</label>
              <div class="form-group">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="contactRef" class="contactRef" value="Yes" checked>
                  <label class="form-check-label">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="contactRef" class="contactRef" value="No">
                  <label class="form-check-label">No</label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col d-flex flex-column">
              <div class="form-group d-none">
                <!--HoneyPot-->
                <input type="text" class="form-control form-control-lg" name="fax" id="fax">
              </div>

              <button id="refContactBtn" class="btn ecisBtn btn-lg submit-btn mt-3 ml-auto">Submit</button>
              <i class="fas fa-spinner fa-2x fa-spin mt-4 ml-auto"></i>
              <!--Initially hidden in the css-->
              <span class="submitMessage text-center mt-4 mb-3 ml-auto">Thank you, your referral has been sent</span>
              <!--Initially hidden in the css-->
            </div>
          </div>

        </form>



      </div>
    </section>

    <?php include_once "includes/footer.php";?>

    <!-- Scroll to top -->
    <button class="btn btn-outline-dark" id="scrollBtn"><i class="fas fa-angle-up fa-2x"></i></button>

    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <script src="public/js/util.js"></script>
    <script src="public/js/smooth-scroll.min.js"></script>
    <script src="public/js/formsHandling.js"></script>
    <script src="public/js/scripts.js"></script>
  </body>

</html>
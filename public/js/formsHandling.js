//Corporate Contact Form Submit
$('#corporateAPBForm').on('submit', function (event) {
  event.preventDefault();

  let $name = $('#name');
  let $institution = $('#institution');
  let $address = $('#address');
  let $city = $('#city');
  let $state = $('#state');
  let $zip = $('#zip');
  let $email = $('#email');
  let $phone = $('#phone');
  let $reach = $('#reach');
  let $pricingInfo = $('.pricingInfo:checked').val();
  let $productDemo = $('.productDemo:checked').val();
  let $techQuestions = $('#techQuestions');
  let $message = $('#message');
  let $fax = $('#fax'); //Honeypot field
  let $corpContactBtn = $('#corpContactBtn');

  if ($fax.val() !== '') {
    alert('Nice try bot!');
    return false;
  }

  //Hide the submit button
  $corpContactBtn.hide();
  //Show the spinner gif
  $('.fa-spinner').show();

  //Wait 2 seconds
  setTimeout(function () {
    //Hide the spinner gif
    $('.fa-spinner').hide();
    //Flash the success message
    $('.submitMessage')
      .fadeIn('slow')
      .delay(2000)
      .fadeOut('fast', function () {
        //Show the submit button
        $corpContactBtn.show();
        //Clear form fields
        $name.val('');
        $institution.val('');
        $address.val('');
        $city.val('');
        $state.val('');
        $zip.val('');
        $email.val('');
        $phone.val('');
        $techQuestions.val('');
        $message.val('');
      });
  }, 2000);

  //Send data to php file
  $.ajax({
    type: 'POST',
    url: 'contactABPProcess.php',
    data: $('form').serialize(),
    success: setTimeout(function () {
      window.location.href = 'contactABP.php';
    }, 4000),
  });
});

//Referral Form Submit
$('#referralForm').on('submit', function (event) {
  event.preventDefault();

  let $name = $('#name');
  let $institution = $('#institution');
  let $email = $('#email');
  let $model = $('#model');
  let $refName = $('#refName');
  let $refInst = $('#refInst');
  let $refemail = $('#refemail');
  let $contactRef = $('.contactRef:checked').val();
  let $fax = $('#fax'); //Honeypot field
  let $refContactBtn = $('#refContactBtn');

  if ($fax.val() !== '') {
    alert('Nice try bot!');
    return false;
  }

  //Hide the submit button
  $refContactBtn.hide();
  //Show the spinner gif
  $('.fa-spinner').show();

  //Wait 2 seconds
  setTimeout(function () {
    //Hide the spinner gif
    $('.fa-spinner').hide();
    //Flash the success message
    $('.submitMessage')
      .fadeIn('slow')
      .delay(2000)
      .fadeOut('fast', function () {
        //Show the submit button
        $refContactBtn.show();
        //Clear form fields
        $name.val('');
        $institution.val('');
        $email.val('');
        $model.val('');
        $refName.val('');
        $refInst.val('');
        $refemail.val('');
      });
  }, 2000);

  //Send data to php file
  $.ajax({
    type: 'POST',
    url: 'referralProcess.php',
    data: $('form').serialize(),
    success: setTimeout(function () {
      window.location.href = 'ecisReferralProgram.php';
    }, 4000),
  });
});

//Request Demo Form Submit
$('#demoForm').on('submit', function (event) {
  event.preventDefault();

  let $name = $('#name');
  let $phone = $('#phone');
  let $email = $('#email');
  let $message = $('#message');
  let $fax = $('#fax'); //Honeypot field
  let $reqDemoBtn = $('#reqDemoBtn');

  if ($fax.val() !== '') {
    alert('Nice try bot!');
    return false;
  }

  //Hide the submit button
  $reqDemoBtn.hide();
  //Show the spinner gif
  $('.fa-spinner').show();

  //Wait 2 seconds
  setTimeout(function () {
    //Hide the spinner gif
    $('.fa-spinner').hide();
    //Flash the success message
    $('.submitMessage')
      .fadeIn('slow')
      .delay(2000)
      .fadeOut('fast', function () {
        //Show the submit button
        $reqDemoBtn.show();
        //Clear form fields
        $name.val('');
        $phone.val('');
        $email.val('');
        $message.val('');
      });
  }, 2000);

  //Send data to php file
  $.ajax({
    type: 'POST',
    url: 'demoProcess.php',
    data: $('form').serialize(),
    success: setTimeout(function () {
      window.location.href = 'requestDemo.php';
    }, 4000),
  });
});

//Order Info Form Submit
$('#orderInfoForm').on('submit', function (event) {
  event.preventDefault();

  let $name = $('#name');
  let $institution = $('#institution');
  let $phone = $('#phone');
  let $email = $('#email');
  let $system = $('#system');
  let $fax = $('#fax'); //Honeypot field
  let $demoOrPurchase = $('.demoOrPurchase:checked').val();
  let $comments = $('#comments');

  let $orderInfoBtn = $('#orderInfoBtn');

  if ($fax.val() !== '') {
    alert('Nice try bot!');
    return false;
  }

  //Hide the submit button
  $orderInfoBtn.hide();
  //Show the spinner gif
  $('.fa-spinner').show();

  //Wait 2 seconds
  setTimeout(function () {
    //Hide the spinner gif
    $('.fa-spinner').hide();
    //Flash the success message
    $('.submitMessage')
      .fadeIn('slow')
      .delay(2000)
      .fadeOut('fast', function () {
        //Show the submit button
        $orderInfoBtn.show();
        //Clear form fields
        $name.val('');
        $institution.val('');
        $phone.val('');
        $email.val('');
        $system.val('');
        $comments.val('');
      });
    //Hide Modal
    setTimeout(function () {
      $('#orderInfo').modal('hide');
    }, 2100);
  }, 2000);

  //Send data to php file
  $.ajax({
    type: 'POST',
    url: 'orderInfoProcess.php',
    data: $('form').serialize(),
  });
});

//Corporate Contact Form Submit
$("#corporateAPBForm").on("submit", function (event) {

  event.preventDefault();

  let $name = $("#name");
  let $institution = $("#institution");
  let $address = $("#address");
  let $city = $("#city");
  let $state = $("#state");
  let $zip = $("#zip");
  let $email = $("#email");
  let $phone = $("#phone");
  let $reach = $("#reach");
  let $pricingInfo = $(".pricingInfo:checked").val();
  let $productDemo = $(".productDemo:checked").val();
  let $techQuestions = $("#techQuestions");
  let $message = $("#message");
  let $fax = $("#fax"); //Honeypot field
  let $corpContactBtn = $("#corpContactBtn");

  if ($fax.val() !== "") {
    alert("Nice try bot!");
    return false;
  }

  //Send data to php file
  $.ajax({
    type: 'POST',
    url: '../../contactABPProcess.php',
    data: $('form').serialize()
  });

  //Hide the submit button
  $corpContactBtn.hide();
  //Show the spinner gif
  $(".fa-spinner").show();

  //Wait 2 seconds
  setTimeout(function () {
    //Hide the spinner gif
    $(".fa-spinner").hide();
    //Flash the success message
    $(".submitMessage").fadeIn("slow").delay(2000).fadeOut("fast", function () {
      //Show the submit button
      $corpContactBtn.show();
      //Clear form fields
      $name.val("");
      $institution.val("");
      $address.val("");
      $city.val("");
      $state.val("");
      $zip.val("");
      $email.val("");
      $phone.val("");
      $techQuestions.val("");
      $message.val("");
    });
  }, 2000);

  

});
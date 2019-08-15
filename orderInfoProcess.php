<?php

  $to = "cdavis@transtechsys.com";
  $subject = "Applied Biophysics Order Information Form";

  $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
  $institution = trim(filter_input(INPUT_POST, "institution", FILTER_SANITIZE_STRING));
  $phone = trim(filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING));
  $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
  $system = trim(filter_input(INPUT_POST, "system", FILTER_SANITIZE_STRING));
  $fax = $_POST['fax']; //HoneyPot
  $demoOrPurchase = $_POST['demoOrPurchase'];
  $comments = trim(filter_input(INPUT_POST, "comments", FILTER_SANITIZE_STRING));
  $headers = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= "From: $email";

  $body = "<html><body>";
  $body .= "<h1>Applied Biophysics Product Information Form</h1>";
  $body .= "<p>From: " . $name . "<br/>";
  $body .= "Institution: " . $institution . "<br />";
  $body .= "Phone: " . $phone . "<br/>";
  $body .= "Email: " . $email . "<br/>";
  $body .= "System Interested In: " . $system . "<br />";
  $body .= "Demo or Purchase: " . $demoOrPurchase . "<br /></p>";
  $body .= "<p>Comments:<br/>" . $comments . "</p>";
  $body .= "</body></html>";

  if ($fax != "") {
      echo "Invalid";
      exit;
  } else {
      mail($to, $subject, $body, $headers);
      echo "Success";
  }

?>
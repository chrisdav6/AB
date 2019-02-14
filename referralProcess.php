<?php

  $to = "cdavis@transtechsys.com";
  $subject = "Applied Biophysics Referral Form";

  $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
  $institution = trim(filter_input(INPUT_POST, "institution", FILTER_SANITIZE_STRING));
  $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
  $model = trim(filter_input(INPUT_POST, "model", FILTER_SANITIZE_STRING));
  $refName = trim(filter_input(INPUT_POST, "refName", FILTER_SANITIZE_STRING));
  $refInst = trim(filter_input(INPUT_POST, "refInst", FILTER_SANITIZE_STRING));
  $refemail = trim(filter_input(INPUT_POST, "refemail", FILTER_SANITIZE_EMAIL));
  $contactRef = $_POST['contactRef'];
  $fax = $_POST['fax']; //HoneyPot
  $headers = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= "From: $email";

  $body = "<html><body>";
  $body .= "<h1>Applied Biophysics Referral Form</h1>";
  $body .= "<p>From: " . $name . "<br/>";
  $body .= "Institution: " . $institution . "<br/>";
  $body .= "Email: " . $email . "<br/>";
  $body .= "Model / Serial Number: " . $model . "<br/>";
  $body .= "Referral Name: " . $refName . "<br/>";
  $body .= "Referral Institution: " . $refInst . "<br/>";
  $body .= "Referral Email: " . $refemail . "<br/>";
  $body .= "A message been sent from the referral indicating we will contact them: " . $contactRef . "<br/>";
  $body .= "</body></html>";

  if ($fax != "") {
      echo "Invalid";
      exit;
  } else {
      mail($to, $subject, $body, $headers);
      echo "Success";
  }

?>

<?php

  $to = "info@biophysics.com, ctonatti@biophyscs.com, mdetweiler@biophysics.com,ladouceur@biophysics.com";
  $subject = "Applied Biophysics Demo Request Form";

  $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
  $phone = trim(filter_input(INPUT_POST, "phone", FILTER_SANITIZE_STRING));
  $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
  $message = trim(filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING));
  $fax = $_POST['fax']; //HoneyPot
  $headers = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= "From: $email";

  $body = "<html><body>";
  $body .= "<h1>Applied Biophysics Demo Request Form</h1>";
  $body .= "<p>From: " . $name . "<br/>";
  $body .= "Phone: " . $phone . "<br/>";
  $body .= "Email: " . $email . "<br/></p>";
  $body .= "<p>Message:<br/>" . $message . "</p>";
  $body .= "</body></html>";

  if ($fax != "") {
      echo "Invalid";
      exit;
  } else {
      mail($to, $subject, $body, $headers);
      echo "Success";
  }

?>
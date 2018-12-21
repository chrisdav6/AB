<?php

    $to = "cdavis@transtechsys.com";
    $subject = "Applied Biophysics Contact Form";
    
    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
    $institution = trim(filter_input(INPUT_POST, "institution", FILTER_SANITIZE_STRING));
    $address = trim(filter_input(INPUT_POST, "address", FILTER_SANITIZE_STRING));
    $city = trim(filter_input(INPUT_POST, "city", FILTER_SANITIZE_STRING));
    $state = trim(filter_input(INPUT_POST, "state", FILTER_SANITIZE_STRING));
    $zip = trim(filter_input(INPUT_POST, "zip", FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
    $phone = trim(filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT));
    $reach = $_POST['reach'];
    $pricingInfo = $_POST['pricingInfo'];
    $productDemo = $_POST['productDemo'];
    $techQuestions = trim(filter_input(INPUT_POST, "techQuestions", FILTER_SANITIZE_STRING));
    $message = trim(filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING));
    $fax = $_POST['fax']; //HoneyPot
    $headers = "From: $email";

    $body = "";
    $body .= "From: $name\n";
    $body .= "Institution: $institution\n";
    $body .= "Address: $address\n";
    $body .= "City: $city\n";
    $body .= "State: $state\n";
    $body .= "Zip Code: $zip\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "How did you hear about us?: $reach\n";
    $body .= "Would you like pricing info?: $pricingInfo\n";
    $body .= "Would you like a product demo?: $productDemo\n";
    $body .= "Customer has technical questions on: $techQuestions\n";
    $body .= "\nMessage:\n $message";

    if ($fax != "") {
      echo "Invalid";
      exit;
    } else {
      mail($to, $subject, $body, $headers);
      echo "Success";
    }

?>

    

   

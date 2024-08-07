<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'localhost';
    $mail->SMTPAuth = false;
    $mail->Port = 25;

    // $to = "info@biophysics.com, ctonatti@biophyscs.com, mdetweiler@biophysics.com, ladouceur@biophysics.com";
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

    $body = "<html><body>";
    $body .= "<h1>Applied Biophysics Contact Form</h1>";
    $body .= "<p>From: " . $name . "<br/>";
    $body .= "Institution: " . $institution . "<br/>";
    $body .= "Address: " . $address . "<br/>";
    $body .= "City: " . $city . "<br/>";
    $body .= "State: " . $state . "<br/>";
    $body .= "Zip Code: " . $zip . "<br/>";
    $body .= "Email: " . $email . "<br/>";
    $body .= "Phone: " . $phone . "<br/>";
    $body .= "How did you hear about us? " . $reach . "<br/>";
    $body .= "Would you like pricing info? " . $pricingInfo . "<br/>";
    $body .= "Would you like a product demo? " . $productDemo . "<br/>";
    $body .= "Customer has technical questions on: " . $techQuestions . "<br/></p>";
    $body .= "<p>Message:<br/>" . $message . "</p>";
    $body .= "</body></html>";

    $mail->addAddress($to); 
    $mail->setFrom($email);
    $mail->addReplyTo($email);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;   

    if ($fax != "") {
      echo "Invalid";
      exit;
    } else {
      $mail->send();
      echo "Success";
    }

?>
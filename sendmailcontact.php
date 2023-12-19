<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// PHPMailer configuration
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'lumiqwealth@gmail.com';
$mail->Password = 'xekrljqkesfifgle';
$mail->SMTPSecure = 'tls'; // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;

// Form data
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$city = $_POST['city'];
$query = $_POST['query'];					
// Email content
$body = "Full Name: $full_name\nEmail: $email\nMobile: $mobile\nCity: $city\nQuery: $query";

try {
    //Recipients
    $mail->setFrom('lumiqwealth@gmail.com', 'Enquiry');
    $mail->addAddress('hello@lumiq.in');

    // Attach uploaded file
     //$mail->addAttachment($targetFile);

    // Content
    $mail->isHTML(false);
    $mail->Subject = 'Portfolio Optimizer Enquiry';
    $mail->Body = $body;

    // Send email
    $mail->send();

    // Redirect to portfolio-optimizer-thanks.php
    header('Location: contact-thanks.php');
    exit;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

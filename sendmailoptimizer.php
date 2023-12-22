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
$invest_for = $_POST['invest_for'];
$capital_amount = $_POST['capital_amount'];
$inv_type = $_POST['inv_type'];$fullname = $_POST['name'];$email_id = $_POST['email_id'];$mobile_no = $_POST['mobile_no'];
$targetDir = 'uploads/'; // Directory where uploaded files will be stored
$targetFile = $targetDir . basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'], $targetFile);
					
// Email content
$body = "How long have you been investing for?: $invest_for\nYour current capital amount?: $capital_amount\nInvesment Type?: $inv_type\nFull Name: $fullname\nEmail: $email_id\nMobile: $mobile_no";
$body .= "\n\nPlease find the document attached.";

try {
    //Recipients
    $mail->setFrom('lumiqwealth@gmail.com', 'Enquiry');
    $mail->addAddress('hello@lumiq.in');

    // Attach uploaded file
     $mail->addAttachment($targetFile);

    // Content
    $mail->isHTML(false);
    $mail->Subject = 'Portfolio Optimizer Enquiry';
    $mail->Body = $body;

    // Send email
    $mail->send();

    // Redirect to portfolio-optimizer-thanks.php
    header('Location: portfolio-optimizer-thanks.php');
    exit;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

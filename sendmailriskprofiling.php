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
$age = $_POST['age'];
$financially =  implode(',', $_POST['financially']);
$currently_own = $_POST['currently_own'];
$portfolio = $_POST['portfolio'];
$investment_horizon = $_POST['investment_horizon'];
$overall_investments = $_POST['overall_investments'];
$Investment_Approach = $_POST['Investment_Approach'];
$fullname = $_POST['name'];
$panno = $_POST['pan'];	
$annual_income = $_POST['evperience_investing'];
$evperience_investing = $_POST['evperience_investing'];		
$tolerate_portfolio = $_POST['tolerate_portfolio'];	
$what_you_do = $_POST['what_you_do'];
// Email content
$body = "Age?: $age\nWho depends on you financially??: $financially\nWhat kind of financial investments do you currently own?: $currently_own\nHow much experience do you have with investing?: $evperience_investing\n
What is your primary goal for this investment portfolio?: $portfolio\nWhat is your investment horizon?: $investment_horizon\n
What % is this investment out of your overall investments?: $overall_investments\nChoose Your Investment Approach: $Investment_Approach\nHow much of a temporary decline in portfolio value can you tolerate?: $tolerate_portfolio\nIf you experience a 10% loss on your invested value one month after investment, what would you do?: $what_you_do\n
Full Name: $fullname\nPAN Number: $panno\nAnnual Income (after tax): $annual_income";

try {
    //Recipients
    $mail->setFrom('lumiqwealth@gmail.com', 'Enquiry');
    $mail->addAddress('hello@lumiq.in');

    // Attach uploaded file
    // $mail->addAttachment($targetFile);

    // Content
    $mail->isHTML(false);
    $mail->Subject = 'Risk Profiling Enquiry';
    $mail->Body = $body;

    // Send email
    $mail->send();

    // Redirect to portfolio-optimizer-thanks.php
    header('Location: risk-profiling-thanks.php');
    exit;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust the path as necessary

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                   // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                 // Enable SMTP authentication
    $mail->Username   = 'aadikhatri45@gmail.com';             // SMTP username
    $mail->Password   = 'hjqe oqsb jbbf drwp';                // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;      // Enable TLS encryption
    $mail->Port       = 587;                                  // TCP port to connect to

    // Recipients
    $mail->setFrom('aadikhatri45@gmail.com', 'Mailer');
    $mail->addAddress('riturainakhatri@gmail.com', 'Joe User');   // Add a recipient

    // Content
    $mail->isHTML(true);                                      // Set email format to HTML
    $mail->Subject = 'Motion Detected!';
    $mail->Body    = 'Motion has been detected by your camera.';
    $mail->AltBody = 'Motion has been detected by your camera.';

    $mail->send();
    echo 'Email has been sent';
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
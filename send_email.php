<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Adjust the path as necessary

$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.domain.com';                   // Replace it with the Gmail.
    $mail->SMTPAuth   = true;                                
    $mail->Username   = 'your_email@domain.com';             // Replace it with your Gmail account.
    $mail->Password   = 'your_password';                // Replace it your Gmail account app password not your main account password (It is shown in ReadME how to create an app password.)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;      
    $mail->Port       = 587;                                  

    // Recipients
    $mail->setFrom('your_email@domain.com', 'Mailer');       //Add your Gmail account.
    $mail->addAddress('recipient@domain.com', 'Joe User');   // Add a recipient's Gmail account

    // Content
    $mail->isHTML(true);                                 
    $mail->Subject = 'Motion Detected!';
    $mail->Body    = 'Motion has been detected by your camera.';
    $mail->AltBody = 'Motion has been detected by your camera.';

    $mail->send();
    echo 'Email has been sent';
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

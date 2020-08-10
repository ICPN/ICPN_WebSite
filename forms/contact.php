<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../assets/vendor/phpMailer/Exception.php';
require '../assets/vendor/phpMailer/PHPMailer.php';
require '../assets/vendor/phpMailer/SMTP.php';

$mail = new PHPMailer(true);

try {
  //Server settings
  $mail->isSMTP();                                            // Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
  $mail->Username   = 'icpnform@gmail.com';                     // SMTP username
  $mail->Password   = 'z123789456';                               // SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
  $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

  //Recipients
  $mail->setFrom('icpnform@gmail.com', 'Web Site');
  $mail->addAddress('wkw.angelo@gmail.com', 'ICPN');     // Add a recipient
  //$mail->addAddress('ellen@example.com');               // Name is optional
  //$mail->addReplyTo('info@example.com', 'Information');
  //$mail->addCC('cc@example.com');
  //$mail->addBCC('bcc@example.com');

  // Attachments
 // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

  // Content
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = $_POST['subject'];
  $mail->Body    = "Name: ".$_POST['name']."<br/>Email: ".$_POST['email']."<br/>Testo:".$_POST['message'];
  $mail->AltBody = "Name: ".$_POST['name']."<br/>Email: ".$_POST['email']."<br/>Testo:".$_POST['message'];

  $mail->send();
  echo 'Message has been sent';
} catch (Exception $e) {
  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>

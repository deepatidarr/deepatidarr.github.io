<?php
// Replace YOUR_EMAIL_ADDRESS and YOUR_EMAIL_PASSWORD with your Gmail credentials
$to = 'oe.deep.4@gmail.com';
$subject = 'New message from website';
$message = 'Name: ' . $_POST['Name'] . "\r\n" .
           'Email: ' . $_POST['Email'] . "\r\n" .
           'Phone: ' . $_POST['Phone'] . "\r\n" .
           'Message: ' . $_POST['Message'] . "\r\n";

$headers = 'From: oe.deep.1@gmail.com' . "\r\n" .
           'Reply-To: oe.deep.4@gmail.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

// Replace smtp.gmail.com with your email provider's SMTP server
$smtp_server = 'smtp.gmail.com';
$smtp_port = 587;
$username = 'oe.deep.1@gmail.com';
$password = 'deepoe27';

// Create a new PHPMailer instance
require_once 'C:\xampp\htdocs\PHPMailer';
$mail = new PHPMailer;

// Set up the SMTP connection
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Host = $smtp_server;
$mail->Port = $smtp_port;
$mail->Username = $username;
$mail->Password = $password;

// Set up the email message
$mail->setFrom($username);
$mail->addAddress($to);
$mail->Subject = $subject;
$mail->Body = $message;

// Send the email
if (!$mail->send()) {
    echo 'There was a problem sending your message. Please try again later.';
} else {
    echo 'Your message has been sent successfully.';
}

?>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../mailer/PHPMailer.php';
require '../mailer/SMTP.php';
require '../mailer/Exception.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $eventName = $_POST['eventName'];
    $selectedEvent = $_POST['selectedEvent'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate and sanitize data
    $eventName = htmlspecialchars($eventName);
    $selectedEvent = htmlspecialchars($selectedEvent);
    $name = htmlspecialchars($name);
    $mobile = htmlspecialchars($mobile);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($message);

    // PHPMailer instance create karein
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP(); // SMTP use karein
        $mail->Host = 'smtp.gmail.com'; // SMTP server (e.g., Gmail: smtp.gmail.com)
        $mail->SMTPAuth = true; // SMTP authentication enable karein
        $mail->Username = 'patrasagarika654@gmail.com'; // Your Gmail address
        $mail->Password = 'ncwz ssyu rdwg avwb'; // Your Gmail password or app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS encryption
        $mail->Port = 587; // SMTP port (Gmail: 587)

        // Recipients
        $mail->setFrom('patrasagarika654@gmail.com', 'Your Name'); // Sender
        $mail->addAddress('patrasagarika654@gmail.com', 'Recipient Name'); // Recipient

        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = "New Event Registration: $selectedEvent"; // Email subject
        $mail->Body = "
            <h1>New Event Registration</h1>
            <p><strong>Event:</strong> $selectedEvent</p>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Mobile:</strong> $mobile</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Message:</strong> $message</p>
        "; // Email body

        // Send email
        $mail->send();
        echo json_encode(["status" => "success", "message" => "Thank you! Your registration has been submitted."]);
    } catch (Exception $e) {
        echo json_encode(["status" => "error", "message" => "Oops! Something went wrong. Error: {$mail->ErrorInfo}"]);
    }
}
?>
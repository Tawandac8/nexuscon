<?php
// Replace with your email address
$to = "sales@nexuscontech.co.zw";
$subject = "New Quote Request from NexusCon Website";

// Collect form data (use POST in production)
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$mobile = $_POST['mobile'] ?? '';
$service = $_POST['service'] ?? '';
$note = $_POST['note'] ?? '';

$message = "Name: $name\n";
$message .= "Email: $email\n";
$message .= "Mobile: $mobile\n";
$message .= "Service: $service\n";
$message .= "Note: $note\n";

$headers = "From: $email\r\n" .
           "Reply-To: $email\r\n" .
           "X-Mailer: PHP/" . phpversion();

if(mail($to, $subject, $message, $headers)){
    echo "Message sent successfully!";
} else {
    echo "Failed to send message.";
}
?>
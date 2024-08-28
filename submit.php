<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$area = $_POST['area'];
$telephone = $_POST['telephone'];
$email = $_POST['email'];
$project = $_POST['project'];
$message = $_POST['message'];

// Compose the email message
$to = "hello@camissapainting.co.za";
$subject = "New Quote Request";
$message = "Name: " . $name . "\n" .
           "Surname: " . $surname . "\n" .
           "Area: " . $area . "\n" .
           "Telephone: " . $telephone . "\n" .
           "Email: " . $email . "\n" .
           "Project: " . $project . "\n" .
           "Message: " . $message;

// Send the email
if (mail($to, $subject, $message)) {
    // Redirect to a thank-you page
    header("Location: thank-you.html");
    exit();
} else {
    // Handle errors
    echo "Error sending email.";
}

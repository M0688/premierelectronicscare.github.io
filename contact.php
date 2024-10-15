<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Email settings
    $to = 'premeleccare@gmail.com'; // Replace with your email address
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email"; // Use a valid from email
    
    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo 'Email sent successfully!';
    } else {
        echo 'Email sending failed.';
    }
}
?>

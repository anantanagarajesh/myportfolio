<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Configure your email settings
    $to = "rajeshmalisetty58@gmail.com"; // Your email address
    $subject = "New contact form submission from $name";
    $headers = "From: $email";
    
    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n\n";
    $email_message .= "Message:\n$message";
    
    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "success"; // You can customize this response
    } else {
        echo "error"; // You can customize this response
    }
} else {
    // Handle non-POST requests
    echo "error"; // You can customize this response
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "your-email@example.com";
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
    
    $message = "Form has been submitted successfully.";
    echo '<script>alert("' . $message . '");</script>';

    header("Location: index.html");
} else {
    $message = "Form has not been submitted.";
    echo '<script>alert("' . $message . '");</script>';
}
?>

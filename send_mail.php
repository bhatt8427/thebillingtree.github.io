<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "pr@thebilling-tree.com";  
    $name = trim($_POST["contact_name"]);
    $email = trim($_POST["contact_email"]);
    $message = trim($_POST["contact_message"]);

    $subject = "New Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>

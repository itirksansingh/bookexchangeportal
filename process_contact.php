<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "your-email@example.com"; // Change this to your actual email
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo "<script>alert('Message Sent Successfully!'); window.location.href='contact.php';</script>";
    } else {
        echo "<script>alert('Failed to send message. Try again later.'); window.location.href='contact.php';</script>";
    }
}
?>

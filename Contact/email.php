<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["full-name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $messageContent = $_POST["message"];


    // Gmail SMTP configuration
    $smtpHost = "smtp.gmail.com";
    $smtpPort = 587;
    $smtpUsername = "ahperanga@gmail.com";
    $smtpPassword = "Pasindu@2050#";

    // Send email using Gmail SMTP
    $to = "hello@pasindualuthwalahewa.me";
    $subjectEmail = "New Message from $name";
    $messageEmail = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $messageContent";
    $headers = "From: $email";

    // Attempt to send the email
    if (mail($to, $subjectEmail, $messageEmail, $headers, "-f $smtpUsername")) {
        header('location:index.html');
    }
}
                    
?>
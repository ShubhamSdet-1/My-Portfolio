<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set the recipient email address.
    $to = "Shubham2612.rajput@gmail.com";

    // Set the email subject.
    $subject = "New Contact Form Submission";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers.
    $headers = "From: $name <$email>";

    // Send the email.
    if (mail($to, $subject, $email_content, $headers)) {
        // Redirect to a 'Thank You' page if the email was sent successfully.
        header("Location: thank_you.html");
    } else {
        // Redirect to an error page if the email was not sent.
        header("Location: error.html");
    }
}
?>

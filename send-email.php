<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    $to = "karthik@karthikbatta.me"; // Replace this with your email
    $subject = "New message from your website";
    $headers = "From: $name <$email>";

    $email_body = "You have received a new message from your website contact form.\n\n" .
                  "Name: $name\n" .
                  "Email: $email\n" .
                  "Message: $message\n";

    // Use mail() function to send the email
    mail($to, $subject, $email_body, $headers);

}
?>

<?php

if(isset($_POST['submit'])) {
    // Process form data here

    // Set email address where the message will be sent
    $to = "micheloinspark@gmail.com";

    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Construct email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";

    // Construct email message
    $email_message = "
        <html>
        <head>
        <title>$name</title>
        </head>
        <body>
        <p>$message</p>
        </body>
        </html>
    ";

    // Send email
    if(mail($to, $email_message, $headers)) {
        // Email sent successfully
        echo "Message sent successfully.";
    } else {
        // Email not sent
        echo "There was a problem sending the message. Please try again later.";
    }
}

?>
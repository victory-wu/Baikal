<?php

$to = "447874253@qq.com";
$subject = "Test Email";
$message = "This is a test email sent from PHP using SMTP.";
$headers = "From: 447874253@qq.com";

if(mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Failed to send email.";
}
?>

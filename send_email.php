<?php
// Enable error reporting for debugging purposes
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the answer from POST data
    $answer = $_POST['answer'];

    // Set the recipient email address. Replace with your actual email.
    $to = "crestonharper19@gmail.com";
    $subject = "Valentine's Response from Kye";
    $message = "Kye chose: " . $answer;

    // The 'From' header should be a valid email for your domain.
    $headers = "From: noreply@willyou425.net" . "\r\n";
    $headers .= "Reply-To: noreply@willyou425.net" . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

    // Attempt to send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Response sent successfully!";
    } else {
        echo "Error sending response.";
    }
} else {
    echo "Invalid request method.";
}
?>

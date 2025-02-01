<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $answer = $_POST['answer'];
    $to = "creston.t.harper@gmail.com"; 
    $subject = "Valentine's Response from Kye";
    $message = "Kye chose: " . $answer;
    $headers = "From: noreply@yourwebsite.com"; 

    if (mail($to, $subject, $message, $headers)) {
        echo "Response sent successfully!";
    } else {
        echo "Error sending response.";
    }
}
?>

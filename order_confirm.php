<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the order details from the POST request
    $orderDetails = json_decode(file_get_contents("php://input"), true);

    // Assuming you have configured a mail server, you can send the email here
    $to = "admin@gofint.com";
    $subject = "New Order Confirmation";
    $message = "New order details:\n\n" . print_r($orderDetails, true);

    // Additional headers
    $headers = "From: webmaster@example.com" . "\r\n" .
               "Reply-To: webmaster@example.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    mail($to, $subject, $message, $headers);
}
?>

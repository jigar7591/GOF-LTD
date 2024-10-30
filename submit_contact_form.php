<!-- submit_contact_form.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Send an email (example, you may need to configure your mail server)
    mail("admin@example.com", $subject, $message, "From: $email");

    echo "Message sent successfully!";
} else {
    echo "Invalid request.";
}
?>

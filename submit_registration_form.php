<!-- submit_registration_form.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password for security

    // Save the user data to a database or perform necessary actions
    // You should use prepared statements to prevent SQL injection
    // Example: $stmt = $pdo->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    // $stmt->execute([$username, $email, $password]);

    echo "Registration successful!";
} else {
    echo "Invalid request.";
}
?>

<!-- process_product.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Your existing process_product.php logic

    // Calculate NET and Gross amounts (this is a simplified example)
    $vatRate = 0.20; // 20% VAT rate (adjust as needed)
    $netAmount = $_POST["productPrice"] / (1 + $vatRate);
    $vatAmount = $_POST["productPrice"] - $netAmount;
    $grossAmount = $_POST["productPrice"];

    // Respond with NET and Gross amounts
    echo json_encode([
        'netAmount' => number_format($netAmount, 2),
        'vatAmount' => number_format($vatAmount, 2),
        'grossAmount' => number_format($grossAmount, 2),
    ]);
}
?>

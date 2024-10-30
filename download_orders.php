<?php
// download_orders.php

// Replace with your database connection details
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch orders from the database
$sql = "SELECT * FROM orders";
$result = $conn->query($sql);

// Generate CSV file content
$csvContent = "Order ID,Customer Name,Product Name,Quantity,Price,Order Date\n";

while ($row = $result->fetch_assoc()) {
    $csvContent .= "{$row['id']},{$row['customer_name']},{$row['product_name']},{$row['quantity']},{$row['price']},{$row['order_date']}\n";
}

// Close the database connection
$conn->close();

// Set headers for CSV download
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="order_history.csv"');

// Output CSV content
echo $csvContent;
?>

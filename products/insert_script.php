<?php
require_once('config.php');

// Getting the values of the product fields from a form or another source
$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$description = $_POST['description'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$warranty = $_POST['warranty'];



// Preparing the SQL statement to insert the data into the products table
$sql = "INSERT INTO `products` (`product_id`, `product_name`, `description`, `price`, `quantity`, `warranty`)
        VALUES ('$product_id', '$product_name', '$description', '$price', '$quantity', '$warranty')";

// Executing the SQL statement and check if it was successful
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Closing the database connection
$conn->close();
?>

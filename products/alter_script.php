<?php

require_once('config.php');

// Getting the values of the product fields from a form or another source
$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$description = $_POST['description'];
$price = $_POST['price'];
$warranty = $_POST['warranty'];

// Preparing the SQL statement to update the data in the products table
$sql = "UPDATE `products`
        SET
        `product_name` = '$product_name',
        `description` = '$description',
        `price` = '$price',
        `warranty` = '$warranty'
        WHERE `product_id` = '$product_id'";

// Executing the SQL statement and check if it was successful
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Closing the database connection
$conn->close();
?>

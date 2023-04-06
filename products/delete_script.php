<?php

// Replacing the values below with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";

// Getting the values of the product fields from a form or another source
$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$description = $_POST['description'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$warranty = $_POST['warranty'];

// Step 1: Establish a connection with the database
$conn = mysqli_connect("localhost", "username", "password", "database_name");

// Step 2: Retrieve the value of $product_id
$product_id = $_POST["product_id"];

// Step 3: Sanitize the input value
$product_id = mysqli_real_escape_string($conn, $product_id);

// Step 4: Write the SQL query
$sql = "DELETE FROM `products` WHERE `product_id` = '".$product_id."'";

// Step 5: Execute the SQL query
$result = mysqli_query($conn, $sql);

// Step 6: Check if the query was successful
if (mysqli_affected_rows($conn) > 0) {
  // Step 7: Display a success message
  echo "Record deleted successfully";
} else {
  // Step 8: Display an error message
  echo "Error deleting record: " . mysqli_error($conn);
}

// Step 9: Close the database connection
mysqli_close($conn);
?>

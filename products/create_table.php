<?php
require_once('config.php');

$sql = "CREATE TABLE `kibanda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(20) DEFAULT NULL,
  `description` varchar(20) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int(6) NOT NULL,
  `warranty` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;";

if ($conn->query($sql) === TRUE) {
    echo "Table products created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

<?php
include("config.php");
// sql to create HouseForRent
$sql = "CREATE TABLE house  (
Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Name VARCHAR(30) NOT NULL,
City VARCHAR(30) NOT NULL,
District VARCHAR(30) NOT NULL,
Thana VARCHAR(30) NOT NULL,
Area VARCHAR(30) NOT NULL,
Rent VARCHAR(30) NOT NULL,
PhoneNumber VARCHAR(30) NOT NULL,
Email VARCHAR(50),
FacebookId VARCHAR(30) NOT NULL,
Date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo " created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
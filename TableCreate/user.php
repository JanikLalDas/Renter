<?php
include("config.php");
// sql to create Users
$sql = "CREATE TABLE Users (
Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Username VARCHAR(30) NOT NULL,
Password VARCHAR(30) NOT NULL,
Email VARCHAR(50),
Date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo " created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>
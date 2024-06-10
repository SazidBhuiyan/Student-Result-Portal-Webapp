<?php
include 'connection.php';


// sql to create table
$sql = "CREATE TABLE department (
    Department_ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Department_Name VARCHAR(30) NOT NULL
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
    
    
    $conn->close();
    ?>


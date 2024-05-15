<?php
// Database connection parameters
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Alter table to add a column for age
$sqlAlterTable = "ALTER TABLE users ADD COLUMN age INT";
if ($conn->query($sqlAlterTable) === TRUE) {
    echo "Table altered successfully to add column 'age'.<br>";
} else {
    echo "Error altering table: " . $conn->error;
}

// Execute query to retrieve users above a certain age
$minimumAge = 18; // Specify the minimum age
$sqlRetrieveUsers = "SELECT * FROM users WHERE age > $minimumAge";
$result = $conn->query($sqlRetrieveUsers);

if ($result->num_rows > 0) {
    // Output data of each row
    echo "Users above the age of $minimumAge:<br>";
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Age: " . $row["age"] . "<br>";
    }
} else {
    echo "No users found above the age of $minimumAge.";
}

// Close connection
$conn->close();
?>

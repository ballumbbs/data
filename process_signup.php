<?php
// Replace with your database connection details
$host = "localhost";
$username = "root";
$password = "";
$dbname = "data";

// Connect to the database
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST["name"];
$age = $_POST["age"];
$sex = $_POST["sex"];
$city = $_POST["city"];

// Prepare and execute the SQL query to insert data into the 'users' table
$sql = "INSERT INTO users (name, age, sex, city) VALUES ('$name', $age, '$sex', '$city')";

if ($conn->query($sql) === TRUE) {
    echo "Signup successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
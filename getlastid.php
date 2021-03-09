<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aiclDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO AiclTable (firstname, lastname, email,contact)
VALUES ('kia', 'Doe', 'john@example.com',1234515200)";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
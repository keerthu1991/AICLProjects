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
VALUES ('John', 'Doe', 'john@example.com',1234567890);";
$sql .= "INSERT INTO AiclTable (firstname, lastname, email,contact)
VALUES ('Mary', 'Moe', 'mary@example.com',1456789230);";
$sql .= "INSERT INTO AiclTable (firstname, lastname, email,contact)
VALUES ('keerthi', 'Dooley', 'julie@example.com',4561237890)";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
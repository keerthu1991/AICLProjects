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
//insering data into table created
$sql = "INSERT INTO AiclTable (firstname, lastname, email,contact)
VALUES ('John', 'Doe', 'john@example.com',9564123000)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
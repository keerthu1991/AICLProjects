<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
// get the post records
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$eMail = $_POST['eMail'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//inserting data into table created from the form
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('$firstName','$lastName','$eMail')";

if ($conn->query($sql) === TRUE) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
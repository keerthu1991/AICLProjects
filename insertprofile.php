<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ProfileDB";
// get the post records
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$emailId = $_POST['emailId'];
$contact=$_POST['Contact'];
$messagetxt=$_POST['Message'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//inserting data into table created from the form
$sql = "INSERT INTO UsersProfile (firstname, lastname, email, contact, messagetext)
VALUES ('$firstName','$lastName','$emailId','$contact','$messagetxt')";

if ($conn->query($sql) === TRUE) {
  echo "New record inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
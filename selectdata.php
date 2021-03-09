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

$sql = "SELECT firstname FROM AiclTable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["id"]. " - Firstname: " . $row["firstname"]. " - Lastname:  " . $row["lastname"]. " - Contact:  ".$row["contact"]."<br>";
    echo "Firstname:".$row["firstname"]."<br>";
    //echo "<table><th>"
  }
} else {
  echo "0 results";
}
$conn->close();
?>
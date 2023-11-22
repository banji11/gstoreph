<?php
    $connection = new mysqli("localhost", "root", "", "growsery");

/// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/// sql to delete a record
$sql = "DELETE FROM list of users WHERE ";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
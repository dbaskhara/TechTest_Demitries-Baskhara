<?php
include 'connection.php'
$sql = "INSERT INTO tabel1
VALUES ('', '', '', '')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

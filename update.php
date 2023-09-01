<?php
include 'connection.php'
$sql = "UPDATE tabel SET aksi='' , instansi='' , deskripsi='' WHERE id=";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
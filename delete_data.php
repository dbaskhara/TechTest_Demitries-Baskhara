<php
include 'connection.php'
$sql = "DELETE FROM tabel1 WHERE id=";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
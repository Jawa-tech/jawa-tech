<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'db.php';
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
if ($conn->query($sql) === TRUE) {
  header("Location: login.html");
} else {
  echo "Error: " . $conn->error;
}
$conn->close();
?>
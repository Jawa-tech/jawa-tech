<?php
$host = "localhost";
$user = "jan";
$pass = "1234";
$dbname = "jawa_tech";
$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>
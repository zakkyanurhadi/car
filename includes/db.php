<?php
$host = 'localhost';
$username = 'root';
$password = ''; // ganti sesuai kebutuhan
$database = 'bandi_car';

$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
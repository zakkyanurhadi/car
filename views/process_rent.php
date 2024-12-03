<?php
include '../includes/db.php';

$vehicle_id = $_POST['vehicle_id'];
$user_id = 1; // Ganti dengan logika untuk mendapatkan user yang sedang login
$rental_date = date('Y-m-d H:i:s');

$conn->query("INSERT INTO rentals (user_id, vehicle_id, rental_date) VALUES ('$user_id', '$vehicle_id', '$rental_date')");
$conn->query("UPDATE vehicles SET available = 0 WHERE id = '$vehicle_id'");

header('Location: index.php');

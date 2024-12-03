<?php
include '../includes/db.php';

$rental_id = $_POST['rental_id'];
$return_date = date('Y-m-d H:i:s');

// Update status pengembalian
$conn->query("UPDATE rentals SET return_date = '$return_date' WHERE id = '$rental_id'");
$conn->query("UPDATE vehicles SET available = 1 WHERE id = (SELECT vehicle_id FROM rentals WHERE id = '$rental_id')");

header('Location: index.php');

<?php
include '../includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Laporan Penyewaan</title>
</head>

<body>
    <div class="container">
        <h1>Laporan Penyewaan</h1>
        <table>
            <tr>
                <th>ID Penyewaan</th>
                <th>Nama Mobil</th>
                <th>Tanggal Penyewaan</th>
                <th>Tanggal Kembali</th>
            </tr>
            <?php
            $result = $conn->query("SELECT rentals.id, vehicles.name, rentals.rental_date, rentals.return_date FROM rentals JOIN vehicles ON rentals.vehicle_id = vehicles.id");
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['rental_date']}</td>
                        <td>{$row['return_date']}</td>
                    </tr>";
            }
            ?>
        </table>
        <a href="index.php" class="button">Kembali</a>
    </div>
</body>

</html>
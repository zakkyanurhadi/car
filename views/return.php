<?php
include '../includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Kembali Mobil</title>
</head>

<body>
    <div class="container">
        <h1>Kembali Mobil</h1>
        <form action="process_return.php" method="post">
            <label for="rental_id">Pilih Penyewaan:</label>
            <select name="rental_id" id="rental_id">
                <?php
                $result = $conn->query("SELECT rentals.id, vehicles.name FROM rentals JOIN vehicles ON rentals.vehicle_id = vehicles.id WHERE rentals.return_date IS NULL");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='{$row['id']}'>{$row['name']}</option>";
                }
                ?>
            </select>
            <input type="submit" value="Kembalikan">
        </form>
        <a href="index.php" class="button">Kembali</a>
    </div>
</body>

</html>
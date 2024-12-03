<?php
include '../includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Sewa Mobil</title>
</head>

<body>
    <div class="container">
        <h1>Sewa Mobil</h1>
        <form action="process_rent.php" method="post">
            <label for="vehicle">Pilih Mobil:</label>
            <select name="vehicle_id" id="vehicle">
                <?php
                $result = $conn->query("SELECT * FROM vehicles WHERE available = 1");
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='{$row['id']}'>{$row['name']} - Rp {$row['rental_price']}</option>";
                }
                ?>
            </select>
            <input type="submit" value="Sewa">
        </form>
        <a href="index.php" class="button">Kembali</a>
    </div>
</body>

</html>
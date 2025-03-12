<?php
$hardware = ["Monitor", "CPU", "GPU", "RAM", "Motherboard", "SSD"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas4b</title>
</head>
<body>
    <h3>Macam-macam perangkat keras komputer</h3>
    <ol>
    <?php
    foreach ($hardware as $hw_item){
        echo "<li>$hw_item</li>";
    }
    ?>
    </ol>

    <h3>Macam-macam perangkat keras komputer baru</h3>
    <ol>
    <?php
    $hardware[] = "Cooler <== Baru!";
    $hardware[] = "PSU <== Baru!";

    sort($hardware);
    foreach ($hardware as $hw_item) {
        echo "<li>$hw_item</li>";
    }
    ?>
    </ol>
</body>
</html>
<?php
// Array Bersarang / Nested Array
$mahasiswa = [
  ['Kevin', '243040059', 'kevin@gmail.com', 'Teknik Informatika'],
  ['zaidan', '243040050', 'zaidan@gmail.com', 'Teknik Mesin'],
  ['mail', '243050023', 'mail@gmail.com', 'Teknik Indrustri']
];
// echo $mahasiswa[1][2];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array Bersarang</title>
</head>

<body>
  <h2>Daftar Mahasiswa</h2>
  <?php foreach ($mahasiswa as $m) : ?>
    <ul>
      <li>Nama: <?= $m[0]; ?></li>
      <li>NIM: <?= $m[1]; ?></li>
      <li>Email: <?= $m[2]; ?></li>
      <li>Jurusan: <?= $m[3]; ?></li>
    </ul>
  <?php endforeach; ?>
</body>

</html>
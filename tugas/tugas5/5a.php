<?php
$mahasiswa = [
    [
        "nama" => "Axel Pratama",
        "nrp" => "2018371",
        "email" => "axel.pratama@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "man.png"
    ],
    [
        "nama" => "Damien Kurniawan",
        "nrp" => "20115632",
        "email" => "damien.kurniawan@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "man.png"
    ],
    [
        "nama" => "Elio Mahardika",
        "nrp" => "22115373",
        "email" => "elio.mahardika@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "man.png"
    ],
    [
        "nama" => "Hendrix Alvaro",
        "nrp" => "21110494",
        "email" => "hendrix.alvaro@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "man.png"
    ],
    [
        "nama" => "Jason Firmansyah",
        "nrp" => "23117485",
        "email" => "jason.firmansyah@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "man.png"
    ],
    [
        "nama" => "Cassandra Aurelia",
        "nrp" => "23116476",
        "email" => "cassandra.aurelia@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "woman.png"
    ],
    [
        "nama" => "Gisella Amel",
        "nrp" => "221119287",
        "email" => "gisella.amel@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "woman.png"
    ],
    [
        "nama" => "Isla Meilani",
        "nrp" => "20117208",
        "email" => "isla.meilani@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "woman.png"
    ],
    [
        "nama" => "Kiara Marshalova",
        "nrp" => "21114159",
        "email" => "kiara.marshalova@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "woman.png"
    ],
    [
        "nama" => "Selena Evine",
        "nrp" => "22117410",
        "email" => "aelana.evine@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "woman.png"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <hr>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
        </hr>
    <?php endforeach; ?>
</body>

</html>
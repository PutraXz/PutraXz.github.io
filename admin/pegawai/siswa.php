<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>sql</title>
</head>
<body>
    <h1>Daftar mahasiswa</h1>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br><br>

    <form action="" method="post">

        <input type="text" name="keyword" size="35" autofocus placeholder="masukan keyword" autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
<br>
    <table border="1" cellpadding="10" cellspasing="0">

    <tr>
        <th>No.</th>
        <th>aksi</th>
        <th>nama</th>
        <th>nrp</th>
        <th>email</th>
        <th>jurusan</th>
        <th>gambar</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"] ?>">ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>">hapus</a>
            </td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td> 
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>
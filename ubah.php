<?php

require 'functions.php';

// ambil data di url
$id = @$_GET["id"];


// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];


// cek tombol apakah sudah ditekan
if( isset($_POST["submit"]) ) {
    
         // cek data berhasil diubah atau tidak
        if( ubah($_POST) > 0 ) {
            echo "<script>
            alert('data berhasil diubah!');
            document.location.href = 'siswa.php';
        </script>";
        }else {
            echo "<script>
            alert('data berhasil diubah!');
            document.location.href = 'siswa.php';
        </script>";
        }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ubah data mahasiswa</title>
</head>
<body>
    <h1>ubah data mahasiswa</h1>


    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"] ?>">
        <ul>
            <li>
                <label for="nama">nama : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"] ?>">
            </li>
            <li>
                <label for="nrp">nrp : </label>
                <input type="text" name="nrp" id="nrp" value="<?= $mhs["nrp"] ?>">
            </li>
            <li>
                <label for="email">email : </label>
                <input type="text" name="email" id="email"value="<?= $mhs["email"] ?>">
            </li>
            <li>
                <label for="jurusan">jurusan : </label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"] ?>">
            </li>
            <li>
                <label for="gambar">gambar : </label> <br>
                <img src="img/<?= $mhs['gambar']; ?>" width="40"> <br>
                <input type="file" name="gambar" id="gambar" id="gambar">
            </li>
            <button type="submit" name="submit">ubah data</button>
        </ul>


    </form>

</body>
</html>